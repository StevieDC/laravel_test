<?php

namespace App\Http\Controllers;
use View;


class about extends Controller
{

    public function show()
    {
       return View::make('pages.about');
    }

}
