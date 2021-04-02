<?php

namespace App\Http\Controllers;

use App\Http\Requests\StepRequest;
use App\Models\Order;
use App\Models\User;

class Step extends Controller
{


    public function __construct()
    {

    }

    function basic()
    {
        return view('basic');
    }

    function materials()
    {
        return view('materials');
    }

    function home()
    {
        return view('home');
    }

    function extras()
    {
        return view('extras');
    }

    function personal()
    {
        return view('personal');
    }

    function save(StepRequest $request)
    {
        $data = $request->all();
    }
}
