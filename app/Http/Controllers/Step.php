<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\MaterialsRequest;
use App\Http\Requests\PersonalRequest;
use App\Services\StepService;
use Illuminate\Support\Facades\Session;

class Step extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new StepService();
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

    function saveBasic(BasicRequest $request)
    {
        $data = $request->input();
        $this->service->create($data);

        return redirect()->route('personal');
    }

    function savePersonal(PersonalRequest $request)
    {
        $data = $request->input();
        $this->service->savePersonal($data);

        Session::put('personal', 'done');
        Session::put('home', 'current');

        return redirect()->route('home');
    }

    function saveHome(HomeRequest $request)
    {
        $data = $request->input();
        $this->service->saveHome($data);

        Session::put('home', 'done');
        Session::put('materials', 'current');

        return redirect()->route('materials');
    }

    function saveMaterials(MaterialsRequest $request)
    {
        $data = $request->input();
        $this->service->saveMaterials($data);

        Session::put('materials', 'done');
        Session::put('extras', 'current');

        return redirect()->route('extras');
    }
}
