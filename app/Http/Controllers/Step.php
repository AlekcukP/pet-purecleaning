<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class Step extends Controller
{
    public $user;
    public $order;

    public function __construct()
    {
        $this->user = new User();
        $this->order = new Order();
    }

    function show()
    {
        return view('estimate');
    }

    function basic(Request $request)
    {
        $data = $request->all();
        var_dump($data['bedroom']);
    }
}
