<?php

namespace App\Controllers;

use sources\Model;

class AppController extends Controller
{
    public function home()
    {
        return (new Response('Homepage route'))->jsonSerialize();
    }
}
