<?php

namespace PhpSample;

use PhpSample\Logger\StderrLoggerTrait;

class Main
{
    use StderrLoggerTrait;

    public function __construct()
    {
        $this->initLogger();
    }

    public function run() : void
    {
        $this->logger->info('Ran');
    }
}
