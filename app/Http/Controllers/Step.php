<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;
use App\Http\Requests\PersonalRequest;

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

    function save(BasicRequest $request)
    {
        // redirect()->route('personal');
        $data = $request->all();
        dd($data);
    }
    function savePersonal(PersonalRequest $request)
    {
        // redirect()->route('personal');
        $data = $request->all();
        dd($data);
    }
}
