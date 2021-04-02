<?php

use App\Http\Services\Service;
use App\Models\Order;
use App\Models\User;

class StepService extends Service
{
    public $order;
    public $user;

    public function __construct()
    {
        $this->user = new User();
        $this->order = new Order();
    }

    public function create($data)
    {

    }
}
