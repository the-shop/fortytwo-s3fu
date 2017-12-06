<?php

namespace Framework\S3FU;

use Framework\Base\Module\BaseModule;

/**
 * Class Module
 * @package Framework\S3FU
 */
class Module extends BaseModule
{
    /**
     *
     */
    public function bootstrap()
    {
        // Let's read all files from module config folder and set to Configuration
        $configDirPath = realpath(dirname(__DIR__)) . '/config/';
        $this->setModuleConfiguration($configDirPath);
    }
}
