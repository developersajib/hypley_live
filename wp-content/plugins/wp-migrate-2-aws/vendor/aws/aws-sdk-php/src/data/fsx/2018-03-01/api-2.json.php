<?php
// This file was auto-generated from sdk-root/src/data/fsx/2018-03-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-03-01', 'endpointPrefix' => 'fsx', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceFullName' => 'Amazon FSx', 'serviceId' => 'FSx', 'signatureVersion' => 'v4', 'signingName' => 'fsx', 'targetPrefix' => 'AWSSimbaAPIService_v20180301', 'uid' => 'fsx-2018-03-01', ], 'operations' => [ 'CancelDataRepositoryTask' => [ 'name' => 'CancelDataRepositoryTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CancelDataRepositoryTaskRequest', ], 'output' => [ 'shape' => 'CancelDataRepositoryTaskResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'UnsupportedOperation', ], [ 'shape' => 'DataRepositoryTaskNotFound', ], [ 'shape' => 'DataRepositoryTaskEnded', ], [ 'shape' => 'InternalServerError', ], ], 'idempotent' => true, ], 'CreateBackup' => [ 'name' => 'CreateBackup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateBackupRequest', ], 'output' => [ 'shape' => 'CreateBackupResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'UnsupportedOperation', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'BackupInProgress', ], [ 'shape' => 'IncompatibleParameterError', ], [ 'shape' => 'ServiceLimitExceeded', ], [ 'shape' => 'InternalServerError', ], ], 'idempotent' => true, ], 'CreateDataRepositoryTask' => [ 'name' => 'CreateDataRepositoryTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateDataRepositoryTaskRequest', ], 'output' => [ 'shape' => 'CreateDataRepositoryTaskResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'UnsupportedOperation', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'IncompatibleParameterError', ], [ 'shape' => 'ServiceLimitExceeded', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'DataRepositoryTaskExecuting', ], ], 'idempotent' => true, ], 'CreateFileSystem' => [ 'name' => 'CreateFileSystem', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateFileSystemRequest', ], 'output' => [ 'shape' => 'CreateFileSystemResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'ActiveDirectoryError', ], [ 'shape' => 'IncompatibleParameterError', ], [ 'shape' => 'InvalidImportPath', ], [ 'shape' => 'InvalidExportPath', ], [ 'shape' => 'InvalidNetworkSettings', ], [ 'shape' => 'InvalidPerUnitStorageThroughput', ], [ 'shape' => 'ServiceLimitExceeded', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'MissingFileSystemConfiguration', ], ], ], 'CreateFileSystemFromBackup' => [ 'name' => 'CreateFileSystemFromBackup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateFileSystemFromBackupRequest', ], 'output' => [ 'shape' => 'CreateFileSystemFromBackupResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'ActiveDirectoryError', ], [ 'shape' => 'IncompatibleParameterError', ], [ 'shape' => 'InvalidNetworkSettings', ], [ 'shape' => 'ServiceLimitExceeded', ], [ 'shape' => 'BackupNotFound', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'MissingFileSystemConfiguration', ], ], ], 'DeleteBackup' => [ 'name' => 'DeleteBackup', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteBackupRequest', ], 'output' => [ 'shape' => 'DeleteBackupResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'BackupInProgress', ], [ 'shape' => 'BackupNotFound', ], [ 'shape' => 'BackupRestoring', ], [ 'shape' => 'IncompatibleParameterError', ], [ 'shape' => 'InternalServerError', ], ], 'idempotent' => true, ], 'DeleteFileSystem' => [ 'name' => 'DeleteFileSystem', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteFileSystemRequest', ], 'output' => [ 'shape' => 'DeleteFileSystemResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'IncompatibleParameterError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'ServiceLimitExceeded', ], [ 'shape' => 'InternalServerError', ], ], 'idempotent' => true, ], 'DescribeBackups' => [ 'name' => 'DescribeBackups', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeBackupsRequest', ], 'output' => [ 'shape' => 'DescribeBackupsResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'BackupNotFound', ], [ 'shape' => 'InternalServerError', ], ], ], 'DescribeDataRepositoryTasks' => [ 'name' => 'DescribeDataRepositoryTasks', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeDataRepositoryTasksRequest', ], 'output' => [ 'shape' => 'DescribeDataRepositoryTasksResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'DataRepositoryTaskNotFound', ], [ 'shape' => 'InternalServerError', ], ], ], 'DescribeFileSystems' => [ 'name' => 'DescribeFileSystems', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeFileSystemsRequest', ], 'output' => [ 'shape' => 'DescribeFileSystemsResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'InternalServerError', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ResourceNotFound', ], [ 'shape' => 'NotServiceResourceError', ], [ 'shape' => 'ResourceDoesNotSupportTagging', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ResourceNotFound', ], [ 'shape' => 'NotServiceResourceError', ], [ 'shape' => 'ResourceDoesNotSupportTagging', ], ], 'idempotent' => true, ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'ResourceNotFound', ], [ 'shape' => 'NotServiceResourceError', ], [ 'shape' => 'ResourceDoesNotSupportTagging', ], ], 'idempotent' => true, ], 'UpdateFileSystem' => [ 'name' => 'UpdateFileSystem', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateFileSystemRequest', ], 'output' => [ 'shape' => 'UpdateFileSystemResponse', ], 'errors' => [ [ 'shape' => 'BadRequest', ], [ 'shape' => 'UnsupportedOperation', ], [ 'shape' => 'IncompatibleParameterError', ], [ 'shape' => 'InternalServerError', ], [ 'shape' => 'FileSystemNotFound', ], [ 'shape' => 'MissingFileSystemConfiguration', ], ], ], ], 'shapes' => [ 'AWSAccountId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '^\\d{12}$', ], 'ActiveDirectoryBackupAttributes' => [ 'type' => 'structure', 'members' => [ 'DomainName' => [ 'shape' => 'ActiveDirectoryFullyQualifiedName', ], 'ActiveDirectoryId' => [ 'shape' => 'DirectoryId', ], ], ], 'ActiveDirectoryError' => [ 'type' => 'structure', 'required' => [ 'ActiveDirectoryId', ], 'members' => [ 'ActiveDirectoryId' => [ 'shape' => 'DirectoryId', ], 'Type' => [ 'shape' => 'ActiveDirectoryErrorType', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ActiveDirectoryErrorType' => [ 'type' => 'string', 'enum' => [ 'DOMAIN_NOT_FOUND', 'INCOMPATIBLE_DOMAIN_MODE', 'WRONG_VPC', 'INVALID_DOMAIN_STAGE', ], ], 'ActiveDirectoryFullyQualifiedName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^.{1,255}$', ], 'ArchivePath' => [ 'type' => 'string', 'max' => 900, 'min' => 3, 'pattern' => '^.{3,900}$', ], 'AutomaticBackupRetentionDays' => [ 'type' => 'integer', 'max' => 35, 'min' => 0, ], 'Backup' => [ 'type' => 'structure', 'required' => [ 'BackupId', 'Lifecycle', 'Type', 'CreationTime', 'FileSystem', ], 'members' => [ 'BackupId' => [ 'shape' => 'BackupId', ], 'Lifecycle' => [ 'shape' => 'BackupLifecycle', ], 'FailureDetails' => [ 'shape' => 'BackupFailureDetails', ], 'Type' => [ 'shape' => 'BackupType', ], 'ProgressPercent' => [ 'shape' => 'ProgressPercent', ], 'CreationTime' => [ 'shape' => 'CreationTime', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Tags' => [ 'shape' => 'Tags', ], 'FileSystem' => [ 'shape' => 'FileSystem', ], 'DirectoryInformation' => [ 'shape' => 'ActiveDirectoryBackupAttributes', ], ], ], 'BackupFailureDetails' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], ], 'BackupId' => [ 'type' => 'string', 'max' => 128, 'min' => 12, 'pattern' => '^(backup-[0-9a-f]{8,})$', ], 'BackupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'BackupId', ], 'max' => 50, ], 'BackupInProgress' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'BackupLifecycle' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'CREATING', 'DELETED', 'FAILED', ], ], 'BackupNotFound' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'BackupRestoring' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], ], 'exception' => true, ], 'BackupType' => [ 'type' => 'string', 'enum' => [ 'AUTOMATIC', 'USER_INITIATED', ], ], 'Backups' => [ 'type' => 'list', 'member' => [ 'shape' => 'Backup', ], 'max' => 50, ], 'BadRequest' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CancelDataRepositoryTaskRequest' => [ 'type' => 'structure', 'required' => [ 'TaskId', ], 'members' => [ 'TaskId' => [ 'shape' => 'TaskId', ], ], ], 'CancelDataRepositoryTaskResponse' => [ 'type' => 'structure', 'members' => [ 'Lifecycle' => [ 'shape' => 'DataRepositoryTaskLifecycle', ], 'TaskId' => [ 'shape' => 'TaskId', ], ], ], 'ClientRequestToken' => [ 'type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '[A-za-z0-9_.-]{0,63}$', ], 'CompletionReport' => [ 'type' => 'structure', 'required' => [ 'Enabled', ], 'members' => [ 'Enabled' => [ 'shape' => 'Flag', ], 'Path' => [ 'shape' => 'ArchivePath', ], 'Format' => [ 'shape' => 'ReportFormat', ], 'Scope' => [ 'shape' => 'ReportScope', ], ], ], 'CreateBackupRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'CreateBackupResponse' => [ 'type' => 'structure', 'members' => [ 'Backup' => [ 'shape' => 'Backup', ], ], ], 'CreateDataRepositoryTaskRequest' => [ 'type' => 'structure', 'required' => [ 'Type', 'FileSystemId', 'Report', ], 'members' => [ 'Type' => [ 'shape' => 'DataRepositoryTaskType', ], 'Paths' => [ 'shape' => 'DataRepositoryTaskPaths', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'Report' => [ 'shape' => 'CompletionReport', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'CreateDataRepositoryTaskResponse' => [ 'type' => 'structure', 'members' => [ 'DataRepositoryTask' => [ 'shape' => 'DataRepositoryTask', ], ], ], 'CreateFileSystemFromBackupRequest' => [ 'type' => 'structure', 'required' => [ 'BackupId', 'SubnetIds', ], 'members' => [ 'BackupId' => [ 'shape' => 'BackupId', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ], 'Tags' => [ 'shape' => 'Tags', ], 'WindowsConfiguration' => [ 'shape' => 'CreateFileSystemWindowsConfiguration', ], 'StorageType' => [ 'shape' => 'StorageType', ], ], ], 'CreateFileSystemFromBackupResponse' => [ 'type' => 'structure', 'members' => [ 'FileSystem' => [ 'shape' => 'FileSystem', ], ], ], 'CreateFileSystemLustreConfiguration' => [ 'type' => 'structure', 'members' => [ 'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ], 'ImportPath' => [ 'shape' => 'ArchivePath', ], 'ExportPath' => [ 'shape' => 'ArchivePath', ], 'ImportedFileChunkSize' => [ 'shape' => 'Megabytes', ], 'DeploymentType' => [ 'shape' => 'LustreDeploymentType', ], 'PerUnitStorageThroughput' => [ 'shape' => 'PerUnitStorageThroughput', ], ], ], 'CreateFileSystemRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemType', 'StorageCapacity', 'SubnetIds', ], 'members' => [ 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'FileSystemType' => [ 'shape' => 'FileSystemType', ], 'StorageCapacity' => [ 'shape' => 'StorageCapacity', ], 'StorageType' => [ 'shape' => 'StorageType', ], 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'SecurityGroupIds' => [ 'shape' => 'SecurityGroupIds', ], 'Tags' => [ 'shape' => 'Tags', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'WindowsConfiguration' => [ 'shape' => 'CreateFileSystemWindowsConfiguration', ], 'LustreConfiguration' => [ 'shape' => 'CreateFileSystemLustreConfiguration', ], ], ], 'CreateFileSystemResponse' => [ 'type' => 'structure', 'members' => [ 'FileSystem' => [ 'shape' => 'FileSystem', ], ], ], 'CreateFileSystemWindowsConfiguration' => [ 'type' => 'structure', 'required' => [ 'ThroughputCapacity', ], 'members' => [ 'ActiveDirectoryId' => [ 'shape' => 'DirectoryId', ], 'SelfManagedActiveDirectoryConfiguration' => [ 'shape' => 'SelfManagedActiveDirectoryConfiguration', ], 'DeploymentType' => [ 'shape' => 'WindowsDeploymentType', ], 'PreferredSubnetId' => [ 'shape' => 'SubnetId', ], 'ThroughputCapacity' => [ 'shape' => 'MegabytesPerSecond', ], 'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ], 'DailyAutomaticBackupStartTime' => [ 'shape' => 'DailyTime', ], 'AutomaticBackupRetentionDays' => [ 'shape' => 'AutomaticBackupRetentionDays', ], 'CopyTagsToBackups' => [ 'shape' => 'Flag', ], ], ], 'CreationTime' => [ 'type' => 'timestamp', ], 'DNSName' => [ 'type' => 'string', 'max' => 275, 'min' => 16, 'pattern' => '^(fsi?-[0-9a-f]{8,}\\..{4,253})$', ], 'DailyTime' => [ 'type' => 'string', 'max' => 5, 'min' => 5, 'pattern' => '^([01]\\d|2[0-3]):?([0-5]\\d)$', ], 'DataRepositoryConfiguration' => [ 'type' => 'structure', 'members' => [ 'ImportPath' => [ 'shape' => 'ArchivePath', ], 'ExportPath' => [ 'shape' => 'ArchivePath', ], 'ImportedFileChunkSize' => [ 'shape' => 'Megabytes', ], ], ], 'DataRepositoryTask' => [ 'type' => 'structure', 'required' => [ 'TaskId', 'Lifecycle', 'Type', 'CreationTime', 'FileSystemId', ], 'members' => [ 'TaskId' => [ 'shape' => 'TaskId', ], 'Lifecycle' => [ 'shape' => 'DataRepositoryTaskLifecycle', ], 'Type' => [ 'shape' => 'DataRepositoryTaskType', ], 'CreationTime' => [ 'shape' => 'CreationTime', ], 'StartTime' => [ 'shape' => 'StartTime', ], 'EndTime' => [ 'shape' => 'EndTime', ], 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Tags' => [ 'shape' => 'Tags', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'Paths' => [ 'shape' => 'DataRepositoryTaskPaths', ], 'FailureDetails' => [ 'shape' => 'DataRepositoryTaskFailureDetails', ], 'Status' => [ 'shape' => 'DataRepositoryTaskStatus', ], 'Report' => [ 'shape' => 'CompletionReport', ], ], ], 'DataRepositoryTaskEnded' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'DataRepositoryTaskExecuting' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'DataRepositoryTaskFailureDetails' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], ], 'DataRepositoryTaskFilter' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'DataRepositoryTaskFilterName', ], 'Values' => [ 'shape' => 'DataRepositoryTaskFilterValues', ], ], ], 'DataRepositoryTaskFilterName' => [ 'type' => 'string', 'enum' => [ 'file-system-id', 'task-lifecycle', ], ], 'DataRepositoryTaskFilterValue' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[0-9a-zA-Z\\*\\.\\\\/\\?\\-\\_]*$', ], 'DataRepositoryTaskFilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataRepositoryTaskFilterValue', ], 'max' => 20, ], 'DataRepositoryTaskFilters' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataRepositoryTaskFilter', ], 'max' => 3, ], 'DataRepositoryTaskLifecycle' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'EXECUTING', 'FAILED', 'SUCCEEDED', 'CANCELED', 'CANCELING', ], ], 'DataRepositoryTaskNotFound' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'DataRepositoryTaskPath' => [ 'type' => 'string', 'max' => 4096, 'min' => 0, 'pattern' => '^.{0,4096}$', ], 'DataRepositoryTaskPaths' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataRepositoryTaskPath', ], 'max' => 100, ], 'DataRepositoryTaskStatus' => [ 'type' => 'structure', 'members' => [ 'TotalCount' => [ 'shape' => 'TotalCount', ], 'SucceededCount' => [ 'shape' => 'SucceededCount', ], 'FailedCount' => [ 'shape' => 'FailedCount', ], 'LastUpdatedTime' => [ 'shape' => 'LastUpdatedTime', ], ], ], 'DataRepositoryTaskType' => [ 'type' => 'string', 'enum' => [ 'EXPORT_TO_REPOSITORY', ], ], 'DataRepositoryTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'DataRepositoryTask', ], 'max' => 50, ], 'DeleteBackupRequest' => [ 'type' => 'structure', 'required' => [ 'BackupId', ], 'members' => [ 'BackupId' => [ 'shape' => 'BackupId', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], ], ], 'DeleteBackupResponse' => [ 'type' => 'structure', 'members' => [ 'BackupId' => [ 'shape' => 'BackupId', ], 'Lifecycle' => [ 'shape' => 'BackupLifecycle', ], ], ], 'DeleteFileSystemRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'WindowsConfiguration' => [ 'shape' => 'DeleteFileSystemWindowsConfiguration', ], ], ], 'DeleteFileSystemResponse' => [ 'type' => 'structure', 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'Lifecycle' => [ 'shape' => 'FileSystemLifecycle', ], 'WindowsResponse' => [ 'shape' => 'DeleteFileSystemWindowsResponse', ], ], ], 'DeleteFileSystemWindowsConfiguration' => [ 'type' => 'structure', 'members' => [ 'SkipFinalBackup' => [ 'shape' => 'Flag', ], 'FinalBackupTags' => [ 'shape' => 'Tags', ], ], ], 'DeleteFileSystemWindowsResponse' => [ 'type' => 'structure', 'members' => [ 'FinalBackupId' => [ 'shape' => 'BackupId', ], 'FinalBackupTags' => [ 'shape' => 'Tags', ], ], ], 'DescribeBackupsRequest' => [ 'type' => 'structure', 'members' => [ 'BackupIds' => [ 'shape' => 'BackupIds', ], 'Filters' => [ 'shape' => 'Filters', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeBackupsResponse' => [ 'type' => 'structure', 'members' => [ 'Backups' => [ 'shape' => 'Backups', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeDataRepositoryTasksRequest' => [ 'type' => 'structure', 'members' => [ 'TaskIds' => [ 'shape' => 'TaskIds', ], 'Filters' => [ 'shape' => 'DataRepositoryTaskFilters', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeDataRepositoryTasksResponse' => [ 'type' => 'structure', 'members' => [ 'DataRepositoryTasks' => [ 'shape' => 'DataRepositoryTasks', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeFileSystemsRequest' => [ 'type' => 'structure', 'members' => [ 'FileSystemIds' => [ 'shape' => 'FileSystemIds', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DescribeFileSystemsResponse' => [ 'type' => 'structure', 'members' => [ 'FileSystems' => [ 'shape' => 'FileSystems', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'DirectoryId' => [ 'type' => 'string', 'max' => 12, 'min' => 12, 'pattern' => '^d-[0-9a-f]{10}$', ], 'DirectoryPassword' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^.{1,256}$', 'sensitive' => true, ], 'DirectoryUserName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^.{1,256}$', ], 'DnsIps' => [ 'type' => 'list', 'member' => [ 'shape' => 'IpAddress', ], 'max' => 2, 'min' => 1, ], 'EndTime' => [ 'type' => 'timestamp', ], 'ErrorMessage' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'FailedCount' => [ 'type' => 'long', ], 'FileSystem' => [ 'type' => 'structure', 'members' => [ 'OwnerId' => [ 'shape' => 'AWSAccountId', ], 'CreationTime' => [ 'shape' => 'CreationTime', ], 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'FileSystemType' => [ 'shape' => 'FileSystemType', ], 'Lifecycle' => [ 'shape' => 'FileSystemLifecycle', ], 'FailureDetails' => [ 'shape' => 'FileSystemFailureDetails', ], 'StorageCapacity' => [ 'shape' => 'StorageCapacity', ], 'StorageType' => [ 'shape' => 'StorageType', ], 'VpcId' => [ 'shape' => 'VpcId', ], 'SubnetIds' => [ 'shape' => 'SubnetIds', ], 'NetworkInterfaceIds' => [ 'shape' => 'NetworkInterfaceIds', ], 'DNSName' => [ 'shape' => 'DNSName', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Tags' => [ 'shape' => 'Tags', ], 'WindowsConfiguration' => [ 'shape' => 'WindowsFileSystemConfiguration', ], 'LustreConfiguration' => [ 'shape' => 'LustreFileSystemConfiguration', ], ], ], 'FileSystemAdministratorsGroupName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '^.{1,256}$', ], 'FileSystemFailureDetails' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], ], 'FileSystemId' => [ 'type' => 'string', 'max' => 21, 'min' => 11, 'pattern' => '^(fs-[0-9a-f]{8,})$', ], 'FileSystemIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystemId', ], 'max' => 50, ], 'FileSystemLifecycle' => [ 'type' => 'string', 'enum' => [ 'AVAILABLE', 'CREATING', 'FAILED', 'DELETING', 'MISCONFIGURED', 'UPDATING', ], ], 'FileSystemMaintenanceOperation' => [ 'type' => 'string', 'enum' => [ 'PATCHING', 'BACKING_UP', ], ], 'FileSystemMaintenanceOperations' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystemMaintenanceOperation', ], 'max' => 20, ], 'FileSystemNotFound' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'FileSystemType' => [ 'type' => 'string', 'enum' => [ 'WINDOWS', 'LUSTRE', ], ], 'FileSystems' => [ 'type' => 'list', 'member' => [ 'shape' => 'FileSystem', ], 'max' => 50, ], 'Filter' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'FilterName', ], 'Values' => [ 'shape' => 'FilterValues', ], ], ], 'FilterName' => [ 'type' => 'string', 'enum' => [ 'file-system-id', 'backup-type', ], ], 'FilterValue' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[0-9a-zA-Z\\*\\.\\\\/\\?\\-\\_]*$', ], 'FilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'FilterValue', ], 'max' => 20, ], 'Filters' => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], 'max' => 10, ], 'Flag' => [ 'type' => 'boolean', ], 'IncompatibleParameterError' => [ 'type' => 'structure', 'required' => [ 'Parameter', ], 'members' => [ 'Parameter' => [ 'shape' => 'Parameter', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InternalServerError' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'InvalidExportPath' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidImportPath' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidNetworkSettings' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], 'InvalidSubnetId' => [ 'shape' => 'SubnetId', ], 'InvalidSecurityGroupId' => [ 'shape' => 'SecurityGroupId', ], ], 'exception' => true, ], 'InvalidPerUnitStorageThroughput' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'IpAddress' => [ 'type' => 'string', 'max' => 15, 'min' => 7, 'pattern' => '^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$', ], 'KmsKeyId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^.{1,2048}$', ], 'LastUpdatedTime' => [ 'type' => 'timestamp', ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'Tags', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'LustreDeploymentType' => [ 'type' => 'string', 'enum' => [ 'SCRATCH_1', 'SCRATCH_2', 'PERSISTENT_1', ], ], 'LustreFileSystemConfiguration' => [ 'type' => 'structure', 'members' => [ 'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ], 'DataRepositoryConfiguration' => [ 'shape' => 'DataRepositoryConfiguration', ], 'DeploymentType' => [ 'shape' => 'LustreDeploymentType', ], 'PerUnitStorageThroughput' => [ 'shape' => 'PerUnitStorageThroughput', ], 'MountName' => [ 'shape' => 'LustreFileSystemMountName', ], ], ], 'LustreFileSystemMountName' => [ 'type' => 'string', 'max' => 8, 'min' => 1, 'pattern' => '^([A-Za-z0-9_-]{1,8})$', ], 'MaxResults' => [ 'type' => 'integer', 'min' => 1, ], 'Megabytes' => [ 'type' => 'integer', 'max' => 512000, 'min' => 1, ], 'MegabytesPerSecond' => [ 'type' => 'integer', 'max' => 2048, 'min' => 8, ], 'MissingFileSystemConfiguration' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'NetworkInterfaceId' => [ 'type' => 'string', 'max' => 21, 'min' => 12, 'pattern' => '^(eni-[0-9a-f]{8,})$', ], 'NetworkInterfaceIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterfaceId', ], 'max' => 50, ], 'NextToken' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^(?:[A-Za-z0-9+\\/]{4})*(?:[A-Za-z0-9+\\/]{2}==|[A-Za-z0-9+\\/]{3}=)?$', ], 'NotServiceResourceError' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'OrganizationalUnitDistinguishedName' => [ 'type' => 'string', 'max' => 2000, 'min' => 1, 'pattern' => '^.{1,2000}$', ], 'Parameter' => [ 'type' => 'string', 'min' => 1, ], 'PerUnitStorageThroughput' => [ 'type' => 'integer', 'max' => 200, 'min' => 50, ], 'ProgressPercent' => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ], 'ReportFormat' => [ 'type' => 'string', 'enum' => [ 'REPORT_CSV_20191124', ], ], 'ReportScope' => [ 'type' => 'string', 'enum' => [ 'FAILED_FILES_ONLY', ], ], 'ResourceARN' => [ 'type' => 'string', 'max' => 512, 'min' => 8, 'pattern' => '^arn:(?=[^:]+:fsx:[^:]+:\\d{12}:)((|(?=[a-z0-9-.]{1,63})(?!\\d{1,3}(\\.\\d{1,3}){3})(?![^:]*-{2})(?![^:]*-\\.)(?![^:]*\\.-)[a-z0-9].*(?<!-)):){4}(?!/).{0,1024}$', ], 'ResourceDoesNotSupportTagging' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceNotFound' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'SecurityGroupId' => [ 'type' => 'string', 'max' => 20, 'min' => 11, 'pattern' => '^(sg-[0-9a-f]{8,})$', ], 'SecurityGroupIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'SecurityGroupId', ], 'max' => 50, ], 'SelfManagedActiveDirectoryAttributes' => [ 'type' => 'structure', 'members' => [ 'DomainName' => [ 'shape' => 'ActiveDirectoryFullyQualifiedName', ], 'OrganizationalUnitDistinguishedName' => [ 'shape' => 'OrganizationalUnitDistinguishedName', ], 'FileSystemAdministratorsGroup' => [ 'shape' => 'FileSystemAdministratorsGroupName', ], 'UserName' => [ 'shape' => 'DirectoryUserName', ], 'DnsIps' => [ 'shape' => 'DnsIps', ], ], ], 'SelfManagedActiveDirectoryConfiguration' => [ 'type' => 'structure', 'required' => [ 'DomainName', 'UserName', 'Password', 'DnsIps', ], 'members' => [ 'DomainName' => [ 'shape' => 'ActiveDirectoryFullyQualifiedName', ], 'OrganizationalUnitDistinguishedName' => [ 'shape' => 'OrganizationalUnitDistinguishedName', ], 'FileSystemAdministratorsGroup' => [ 'shape' => 'FileSystemAdministratorsGroupName', ], 'UserName' => [ 'shape' => 'DirectoryUserName', ], 'Password' => [ 'shape' => 'DirectoryPassword', ], 'DnsIps' => [ 'shape' => 'DnsIps', ], ], ], 'SelfManagedActiveDirectoryConfigurationUpdates' => [ 'type' => 'structure', 'members' => [ 'UserName' => [ 'shape' => 'DirectoryUserName', ], 'Password' => [ 'shape' => 'DirectoryPassword', ], 'DnsIps' => [ 'shape' => 'DnsIps', ], ], ], 'ServiceLimit' => [ 'type' => 'string', 'enum' => [ 'FILE_SYSTEM_COUNT', 'TOTAL_THROUGHPUT_CAPACITY', 'TOTAL_STORAGE', 'TOTAL_USER_INITIATED_BACKUPS', ], ], 'ServiceLimitExceeded' => [ 'type' => 'structure', 'required' => [ 'Limit', ], 'members' => [ 'Limit' => [ 'shape' => 'ServiceLimit', ], 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'StartTime' => [ 'type' => 'timestamp', ], 'StorageCapacity' => [ 'type' => 'integer', 'min' => 0, ], 'StorageType' => [ 'type' => 'string', 'enum' => [ 'SSD', 'HDD', ], ], 'SubnetId' => [ 'type' => 'string', 'max' => 24, 'min' => 15, 'pattern' => '^(subnet-[0-9a-f]{8,})$', ], 'SubnetIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubnetId', ], 'max' => 50, ], 'SucceededCount' => [ 'type' => 'long', ], 'Tag' => [ 'type' => 'structure', 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TagKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'Tags', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'Tags' => [ 'shape' => 'Tags', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'Tags' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 50, 'min' => 1, ], 'TaskId' => [ 'type' => 'string', 'max' => 128, 'min' => 12, 'pattern' => '^(task-[0-9a-f]{17,})$', ], 'TaskIds' => [ 'type' => 'list', 'member' => [ 'shape' => 'TaskId', ], 'max' => 50, ], 'TotalCount' => [ 'type' => 'long', ], 'UnsupportedOperation' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'TagKeys', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'ResourceARN', ], 'TagKeys' => [ 'shape' => 'TagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateFileSystemLustreConfiguration' => [ 'type' => 'structure', 'members' => [ 'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ], ], ], 'UpdateFileSystemRequest' => [ 'type' => 'structure', 'required' => [ 'FileSystemId', ], 'members' => [ 'FileSystemId' => [ 'shape' => 'FileSystemId', ], 'ClientRequestToken' => [ 'shape' => 'ClientRequestToken', 'idempotencyToken' => true, ], 'WindowsConfiguration' => [ 'shape' => 'UpdateFileSystemWindowsConfiguration', ], 'LustreConfiguration' => [ 'shape' => 'UpdateFileSystemLustreConfiguration', ], ], ], 'UpdateFileSystemResponse' => [ 'type' => 'structure', 'members' => [ 'FileSystem' => [ 'shape' => 'FileSystem', ], ], ], 'UpdateFileSystemWindowsConfiguration' => [ 'type' => 'structure', 'members' => [ 'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ], 'DailyAutomaticBackupStartTime' => [ 'shape' => 'DailyTime', ], 'AutomaticBackupRetentionDays' => [ 'shape' => 'AutomaticBackupRetentionDays', ], 'SelfManagedActiveDirectoryConfiguration' => [ 'shape' => 'SelfManagedActiveDirectoryConfigurationUpdates', ], ], ], 'VpcId' => [ 'type' => 'string', 'max' => 21, 'min' => 12, 'pattern' => '^(vpc-[0-9a-f]{8,})$', ], 'WeeklyTime' => [ 'type' => 'string', 'max' => 7, 'min' => 7, 'pattern' => '^[1-7]:([01]\\d|2[0-3]):?([0-5]\\d)$', ], 'WindowsDeploymentType' => [ 'type' => 'string', 'enum' => [ 'MULTI_AZ_1', 'SINGLE_AZ_1', 'SINGLE_AZ_2', ], ], 'WindowsFileSystemConfiguration' => [ 'type' => 'structure', 'members' => [ 'ActiveDirectoryId' => [ 'shape' => 'DirectoryId', ], 'SelfManagedActiveDirectoryConfiguration' => [ 'shape' => 'SelfManagedActiveDirectoryAttributes', ], 'DeploymentType' => [ 'shape' => 'WindowsDeploymentType', ], 'RemoteAdministrationEndpoint' => [ 'shape' => 'DNSName', ], 'PreferredSubnetId' => [ 'shape' => 'SubnetId', ], 'PreferredFileServerIp' => [ 'shape' => 'IpAddress', ], 'ThroughputCapacity' => [ 'shape' => 'MegabytesPerSecond', ], 'MaintenanceOperationsInProgress' => [ 'shape' => 'FileSystemMaintenanceOperations', ], 'WeeklyMaintenanceStartTime' => [ 'shape' => 'WeeklyTime', ], 'DailyAutomaticBackupStartTime' => [ 'shape' => 'DailyTime', ], 'AutomaticBackupRetentionDays' => [ 'shape' => 'AutomaticBackupRetentionDays', ], 'CopyTagsToBackups' => [ 'shape' => 'Flag', ], ], ], ],];
