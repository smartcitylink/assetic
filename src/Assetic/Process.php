<?php

namespace Assetic;

/**
 * @private
 */
class Process extends \Symfony\Component\Process\Process
{
    public static function fromShellCommandline(string $command, string $cwd = null, array $env = null, $input = null, ?float $timeout = 60)
    {
        if (method_exists(parent::class, 'fromShellCommandline')) {
            $process = parent::fromShellCommandline($command, $cwd, $env, $input, $timeout);
        } else {
            $process = new Self($command, $cwd, $env, $input, $timeout);
        }

        return $process;
    }
}
