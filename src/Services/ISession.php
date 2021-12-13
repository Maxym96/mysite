<?php

namespace App\Services;

interface ISession
{
    public function start();

    public function get();

    public function set();

    public function unset();

    public function destroy();

    public function protect();

}