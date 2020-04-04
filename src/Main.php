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
        foreach(range(10, 1, -1) as $v) {
            $this->logger->debug('Count',['value' => $v]);
            sleep(1);
        }

        echo 'Sooooooooooooooooooooooooooo loooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong text in a line';
    }
}
