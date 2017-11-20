<?php

namespace Framework\S3FU;

use Aws\S3\Exception\S3Exception;
use Framework\Base\Uploader\FileUploader;

/**
 * Class S3FileUpload
 * @package Framework\S3FU
 */
class S3FileUpload extends FileUploader
{
    /**
     * @param string $filePath
     * @param string $fileName
     *
     * @return bool
     * @throws \Exception
     */
    public function upload(string $filePath, string $fileName)
    {
        $client = $this->getClient();

        $bucket = $this->getApplication()
            ->getConfiguration()
            ->getPathValue('env.S3_BUCKET');

        try {
            $response = $client->putObject([
                'Bucket' => $bucket,
                'Key' => $fileName,
                'SourceFile' => $filePath,
                'ACL' => 'public-read'
            ]);
        } catch (S3Exception $e) {
            throw new \Exception('There was an error uploading the file.', 400);
        }

        return $response->get('ObjectURL');
    }
}
