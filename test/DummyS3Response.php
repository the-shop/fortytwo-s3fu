<?php

namespace Framework\S3FU\Test;

/**
 * Class DummyS3Response
 * @package Framework\S3FU\Test
 */
class DummyS3Response
{
    public function get(string $key)
    {
        return $key . '.testing.url';
    }
}
