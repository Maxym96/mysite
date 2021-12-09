<?php

    function myErrorHandler(int $errorNotify, string $errorString, string $errorFile, int $errorLine): bool
    {
        $errorTime = time();
        $errorNowTime = date('Y-m-d H:i:s', $errorTime);
        $errstr = htmlspecialchars($errorString);
        $fileName = '../../logs/error_handler_log.txt';
        $errorNotifyInFile =
            [
                'Time error'=>$errorNowTime.' ',
                'errorNotify'=>$errorNotify.' ',
                'errorString'=>$errorString.' ',
                'errorLine'=>$errorLine.' ',
                'errorFile'=>$errorFile.' ',
            ];
        file_put_contents($fileName, $errorNotifyInFile, FILE_APPEND);

        return true;
    }

$old_error_handler = set_error_handler("myErrorHandler");


trigger_error("E_USER_WARNING", E_USER_WARNING);
trigger_error("E_USER_NOTICE", E_USER_NOTICE);
trigger_error("E_USER_ERROR", E_USER_ERROR);
