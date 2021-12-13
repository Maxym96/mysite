<?php

namespace App\Controller;

use App\Services\ISession;

class SessionController implements ISession
{
    public function start()
    {
        session_start();
        if (!isset($_SESSION['time'])) {
            $_SESSION['time'] = date('Y-m-d H:i:s');
        }
    }

    public function get()
    {
        if (isset($_SESSION['login'])) {
            $username = $_SESSION['username'];
            echo $username;
        } else {
            $_SESSION['login'] = $_POST['login'];
        }
    }

    public function set()
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    }

    public function unset()
    {
        if (isset($_SESSION['activity']) && (time() - $_SESSION['activity'] > 300)) {
            session_unset();
        }
    }

    public function destroy()
    {
        if (isset($_SESSION['activity']) && (time() - $_SESSION['activity'] > 600)) {
            session_destroy();
        }
    }

    public function protect()
    {
        {
            $session_cookie = session_get_cookie_params();

            if ($_SESSION['ip'] !== $_SERVER['REMOTE_ADDR'] || $_SESSION['browser'] !== $_SERVER['HTTP_USER_AGENT']) {
                setcookie(
                    session_name(),
                    '',
                    time() - 1500,
                    $session_cookie['path'],
                    $session_cookie['domain'],
                    $session_cookie['secure'],
                    $session_cookie['httponly']
                );

                $this->destroy();
                header("https://" . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR);
            }
        }
    }
}
