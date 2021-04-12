<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\MaterialsRequest;
use App\Http\Requests\PersonalRequest;
use App\Services\StepService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Step extends Controller
{
    public $service;

    public function __construct()
    {
        $this->service = new StepService();
    }

    public function basic()
    {
        return view('basic');
    }

    public function materials()
    {
        return view('materials');
    }

    public function home()
    {
        return view('home');
    }

    public function extras()
    {
        return view('extras', [
            'price' => $this->getPrice(),
            'details' => $this->service->getOrderDetails(),
            'intent' => $this->service->getIntent()
        ]);
    }

    public function personal()
    {
        return view('personal');
    }

    public function getPrice()
    {
        return $this->service->createPriceCheck();
    }

    public function saveBasic(BasicRequest $request)
    {
        $data = $request->input();
        $this->service->init($data);

        Session::put('personal', 'current');
        Session::put('home', 'blocked');
        Session::put('materials', 'blocked');
        Session::put('extras', 'blocked');

        return redirect()->route('personal');
    }

    public function savePersonal(PersonalRequest $request)
    {
        $data = $request->input();
        $this->service->savePersonal($data);

        Session::put('personal', 'done');
        Session::put('home', 'current');

        return redirect()->route('home');
    }

    public function saveHome(HomeRequest $request)
    {
        $data = $request->input();
        $this->service->saveHome($data);

        Session::put('home', 'done');
        Session::put('materials', 'current');

        return redirect()->route('materials');
    }

    public function saveMaterials(MaterialsRequest $request)
    {
        $data = $request->input();
        $this->service->saveMaterials($data);

        Session::put('materials', 'done');
        Session::put('extras', 'current');

        return redirect()->route('extras');
    }

    public function purchase()
    {

    }

    public function extrasAjax(Request $request)
    {
        $this->service->saveExtras($request->all());
    }

}
