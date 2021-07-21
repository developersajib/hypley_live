<?php

class WPM2AWS_ApiRemoteS3
{
    private $requestData;
    
    public function __construct()
    {       
        if (false === get_option('wpm2aws_licence_key') || '' === get_option('wpm2aws_licence_key')) {
            $this->abortWithErrorMessage("Error! No Licence Key Saved");
        }

        $bucketName = '';
        if (false === get_option('wpm2aws-aws-s3-bucket-name') || '' === get_option('wpm2aws-aws-s3-bucket-name')) {
            if (false === get_option('wpm2aws-aws-s3-default-bucket-name') || '' === get_option('wpm2aws-aws-s3-default-bucket-name')) {
                $this->abortWithErrorMessage("Error! No Bucket Name Saved");
            }
            $bucketName = get_option('wpm2aws-aws-s3-default-bucket-name');
        } else {
            $bucketName = get_option('wpm2aws-aws-s3-bucket-name');
        }

        $bucketRegion = '';
        if (false === get_option('wpm2aws-aws-s3-bucket-region') || '' === get_option('wpm2aws-aws-s3-bucket-region')) {
            if (false === get_option('wpm2aws-aws-region') || '' === get_option('wpm2aws-aws-region')) {
                $this->abortWithErrorMessage("Error! No Bucket Region Saved");
            }
            $bucketRegion = get_option('wpm2aws-aws-region');
        } else {
            $bucketRegion = get_option('wpm2aws-aws-s3-bucket-region');
        }

        if (false === get_option('wpm2aws-iamid')) {
            $this->abortWithErrorMessage("No Access Key ID Saved");
        }

        if (false === get_option('wpm2aws-iampw')) {
            $this->abortWithErrorMessage("No Secret Access Key Saved");
        }

        $iam_key = get_option('wpm2aws-iamid');
        $iam_secret = get_option('wpm2aws-iampw');

        $this->requestData = array(
            'wpm2aws-licence-key' => get_option('wpm2aws_licence_key'),
            'wpm2aws-licence-email' => get_option('wpm2aws_licence_email'),
            'wpm2aws-licence-url' => get_option('wpm2aws_licence_url'),
            'wpm2aws-licence-site' => (!empty(get_site_url()) ? get_site_url() : ''),
            'wpm2aws-licence-type' => strtoupper(get_option('wpm2aws_valid_licence_type')),
            'wpm2aws_iam_key' => $iam_key,
            'wpm2aws_iam_secret' => $iam_secret,
            'wpm2aws_user_name' => get_option('wpm2aws-iam-user'),
            'wpm2aws_user_type' => get_option('wpm2aws-customer-type'),
            'wpm2aws_bucket_name' => $bucketName,
            'wpm2aws_aws_region' => $bucketRegion,
        );
    }
    
    public function checkBucketExists()
    {
        $response = wp_remote_post(
            // 'http://localhost/wpm2aws-migration-api/public/api/migration/uploads/checkstore',
            'https://wponaws.migration.seahorse-data.com/api/migration/uploads/checkstore',
            array(
                'method' => 'POST',
                'timeout' => 45,
                'redirection' => 10,
                'httpversion' => '1.0',
                'blocking' => true,
                'headers' => array(
                    'Cache-Control' => 'no-cache',
                ),
                'body' => array('data' => $this->requestData),
                'cookies' => array(),
            )
        );

        $responseCode = wp_remote_retrieve_response_code($response);

        if ('200' !== $responseCode && 200 !== $responseCode) {
            $errorMessage = wp_remote_retrieve_response_message( $response );

            if ((int)$responseCode >= 400 && (int)$responseCode < 500) {
                throw new Exception('Error! This Action Can Not Be Completed. Unauthorised Access<br>' . $errorMessage);
            } elseif ((int)$responseCode >= 500 && (int)$responseCode < 600) {
                throw new Exception('Error! This Action Can Not Be Completed. Internal Server Error.<br>' . $errorMessage);
            } else {
                throw new Exception('Unauthorised Access<br>' . $errorMessage);
            }
        }
        
        return $response['body'];
    }

    public function abortWithErrorMessage($message)
    {
        set_transient(
            'wpm2aws_admin_error_notice_' . get_current_user_id(),
            __($message, 'migrate-2-aws')
        );
        exit(wp_redirect(admin_url('/admin.php?page=wpm2aws')));
    }
}
