<?php
namespace App\Services;

use App\Models\Order;
use App\Models\User;
use App\Models\Price;
use Illuminate\Support\Facades\Session;

class StepService extends Service
{
    private function setOrderId($orderId)
    {
        Session::put('orderId', $orderId);
    }

    private function getOrderId()
    {
        return Session::get('orderId');
    }

    private function setUserId($userId)
    {
        Session::put('userId', $userId);
    }

    private function getUserId()
    {
        return Session::get('userId');
    }

    public function init($data)
    {
        $userId = $this->createUser($data);
        $orderId = $this->createOrder($data, $userId);

        $this->setOrderId($orderId);
        $this->setUserId($userId);
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

        return $order->id;
    }

    public function savePersonal($data)
    {
        Order::where('id', $this->getOrderId())->update([
            'address' => $data['address'],
            'city' => $data['city'],
            'footage' => $data['footage'],
            'cleaning_frequency' => $data['cleaning_frequency'],
            'cleaning_type' => $data['cleaning_type'],
            'cleaning_date' => $data['cleaning_date'],
            'apt' => $data['apt'] ?? NULL
        ]);

        User::where('id', $this->getUserId())->update([
            'phone' => $data['phone'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'referral' => $data['referral'],
        ]);
    }

    public function saveHome($data)
    {
        Order::where('id', $this->getOrderId())->update([
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
        Order::where('id', $this->getOrderId())->update([
            'flooring_types' => $data['flooring_types'],
            'countertops_types' => $data['countertops_types'],
            'stainless_appliances' => $data['stainless_appliances'],
            'stove_type' => $data['stove_type'],
            'shower_glass' => $data['shower_glass'],
            'special_attention' => $data['special_attention'] ?? NULL,
            'else_info' => $data['else_info'] ?? NULL,
        ]);
    }

    public function countPrice()
    {
        $order = Order::find($this->getOrderId());
        $priceList = Price::find(1);

        $coef = 1;

        switch ($order->cleaning_type) {
            case 'Move In': $coef = $priceList->movein_type_coef;
            break;
            case 'Move Out': $coef = $priceList->moveout_type_coef;
            break;
            case 'Deep': $coef = $priceList->deep_type_coef;
            break;
            case 'Post Remodeling': $coef = $priceList->remodeling_type_coef;
            break;
        }

        $price = $order->footage * $priceList->price_per_footage * $coef;

        $order->extra_fridge ? $price + $priceList->extra_fridge : '';
        $order->extra_oven ? $price + $priceList->extra_oven : '';
        $order->extra_garage ? $price + $priceList->extra_garage : '';
        $order->extra_laundary ? $price + $priceList->extra_laundary : '';
        $order->extra_blinds ? $price + $priceList->extra_blinds : '';

        return $price;
    }

    public function getOrderDetails()
    {
        $order = Order::find($this->getOrderId());

        return [
            'bathrooms' => $order->bathrooms,
            'bedrooms' => $order->bedrooms,
            'footage' => $order->footage,
            'cleaning_frequency' => $order->cleaning_frequency,
            'cleaning_date' => $order->cleaning_date,
            'cleaning_type' => $order->cleaning_type
        ];
    }
}
