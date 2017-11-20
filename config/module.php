<?php

return [
    'env' => [
        'S3_KEY' => getenv('S3_KEY'),
        'S3_SECRET' => getenv('S3_SECRET'),
        'S3_BUCKET' => getenv('S3_BUCKET'),
        'S3_REGION' => getenv('S3_REGION'),
    ],
];
