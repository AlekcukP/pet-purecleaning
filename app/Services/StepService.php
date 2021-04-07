<?php
namespace App\Services;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class StepService extends Service
{

    public function create($data)
    {
        $userId = $this->createUser($data);
        $this->createOrder($data, $userId);

        $this->initUser($userId);
    }

    private function createUser($data)
    {
        $user = new User();
        $user->email = $data['email'];
        $user->zip = $data['zip'];
        $user->save();

        return $user->id;
    }
    private function createOrder($data, $userId)
    {
        $order = new Order();
        $order->bathrooms = $data['bathrooms'];
        $order->bedrooms = $data['bedrooms'];
        $order->user_id = $userId;

        $order->save();
    }

    private function initUser($id)
    {
        Session::put('id', $id);

        Session::put('personal', 'current');
        Session::put('home', 'blocked');
        Session::put('materials', 'blocked');
        Session::put('extras', 'blocked');
    }

    public function savePersonal($data)
    {
        Order::where('user_id', Session::get('id'))->update([
            'address' => $data['address'],
            'city' => $data['city'],
            'footage' => $data['footage'],
            'cleaning_frequency' => $data['cleaning_frequency'],
            'cleaning_type' => $data['cleaning_type'],
            'cleaning_date' => $data['cleaning_date'],
            'apt' => $data['apt'] ?? NULL
        ]);

        User::where('id', Session::get('id'))->update([
            'phone' => $data['phone'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'referral' => $data['referral'],
        ]);
    }

    public function saveHome($data)
    {
        Order::where('user_id', Session::get('id'))->update([
            'pets' => $data['pets'],
            'pets_total' => $data['pets_total'],
            'adults' => $data['adults'],
            'child' => $data['child'],
            'cleanliness' => $data['cleanliness'],
            'previous_clean' => $data['previous_clean'],
            'previous_different' => $data['previous_different'] ?? NULL,
        ]);
    }

    public function saveMaterials($data)
    {
        Order::where('user_id', Session::get('id'))->update([
            'flooring_types' => $data['flooring_types'],
            'countertops_types' => $data['countertops_types'],
            'stainless_appliances' => $data['stainless_appliances'],
            'stove_type' => $data['stove_type'],
            'shower_glass' => $data['shower_glass'],
            'special_attention' => $data['special_attention'] ?? NULL,
            'else_info' => $data['else_info'] ?? NULL,
        ]);
    }
}
