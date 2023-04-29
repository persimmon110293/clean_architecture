<?php

namespace App\Util;

use Illuminate\Support\Facades\Log;

trait Logger
{
    private function logDebug(string $file, string $line, string $function, string $message)
    {
        Log::debug($file . '::' . $line . '::' . $function . '::' . $message);
    }
}
