#!/usr/bin/php
<?php

use Symfony\Component\Process\Process;

require __DIR__ . "/vendor/autoload.php";

define('PHANTOM_CMD', 'docker run -v ' . __DIR__ . '/js:/mnt/test cmfatih/phantomjs /usr/bin/phantomjs /mnt/test/');
define('PROCESS_TIMEOUT', 2);

executeTest('Test execute non existent js', 'non-existent.js');
// cannot terminate process
//executeTest('Test syntax error js', 'syntax-error.js');
executeTest('Test successful js', 'success.js');


function executeTest($title, $jsFile)
{
    echo $title . PHP_EOL . str_repeat('-', 20) . PHP_EOL;

    $process = new Process(PHANTOM_CMD . $jsFile);
    $process->setTimeout(PROCESS_TIMEOUT);
    $process->run();

    echo 'Successful: ' . (int) $process->isSuccessful() . PHP_EOL;
    echo 'Process exit code: ' . $process->getExitCode() . PHP_EOL;
    echo 'Process stderr: ' . PHP_EOL . $process->getErrorOutput() . PHP_EOL;
    echo 'Process stdout: ' . PHP_EOL . $process->getOutput() . PHP_EOL;
}