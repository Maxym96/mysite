<?php

namespace App\Services\MyErrorHandler;

class MyErrorHandler
{
    public function myErrorHandler(string $errorNotify, string $errorString, string $errorFile, string $errorLine)
    {
        set_error_handler("myErrorHandler");

        echo "<b>Custom error:</b> [$errorNotify] $errorString<br>";
        echo " Error on line $errorLine in $errorFile<br>";
    }
}
