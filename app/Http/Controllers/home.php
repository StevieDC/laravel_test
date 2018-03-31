<?php

namespace App\Http\Controllers;
use View;

class home extends Controller
{
    //

    public function show()
    {
        return View::make('pages.home');
    }
}
