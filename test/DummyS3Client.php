<?php

namespace Framework\S3FU\Test;

/**
 * Class DummyS3Client
 * @package Framework\S3FU\Test
 */
class DummyS3Client
{
    /**
     * @var array
     */
    private $arguments = [];

    /**
     * DummyS3Client constructor.
     * @param array $arguments
     */
    public function __construct(array $arguments = [])
    {
        $this->arguments = $arguments;
    }

    /**
     * @param array $args
     * @return DummyS3Response
     */
    public function putObject(array $args = [])
    {
        return new DummyS3Response();
    }
}
