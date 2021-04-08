@extends('layouts.base_step')

@section('step_header', 'Now choose some extras to finish up')
@section('step_description', 'Almost there, hang on were at the end')
@section('form_id', 'form_step_four')
@section('steps_left', 'Reserve a Cleaning')
@section('form_action', '/extras')

@section('step_content')
<x-base-block>
    <x-block-item question="Select extras">
        <x-input-icon custom-class="icon_fridge" id="extra_fridge" name="extra_fridge" value="1">Inside fridge</x-input-icon>
        <x-input-icon custom-class="icon_oven" id="extra_oven" name="extra_oven" value="1">Inside oven</x-input-icon>
        <x-input-icon custom-class="icon_garage" id="extra_garage" name="extra_garage" value="1">Garage swapt</x-input-icon>
        <x-input-icon custom-class="icon_laundary" id="extra_laundary" name="extra_laundary" value="1">Laundary Wash & Dry</x-input-icon>
        <x-input-icon custom-class="icon_blinds" id="extra_blinds" name="extra_blinds" value="1">Blinds Cleaning</x-input-icon>
    </x-block-item>
</x-base-block>

<div class="price">
        <div class="price_header price_block">
            <span>Cleaning price</span>
        </div>
        <div class="price_detail price_block">
            <div>
                <span>{{ $details['cleaning_frequency'] }} </span><span>Cleaning</span>
            </div>
            <div>
                <span>{{ $details['cleaning_date'] }}</span>
            </div>
            <div>
                <span>{{ $details['bedrooms'] }}</span> bed, 
                <span>{{ $details['bathrooms'] }}</span> bath - 
                <span>{{ $details['footage'] }}</span> sq ft.
            </div>
        </div>
        <div class="price_check price_block">
            <div>
                <span>{{ $details['cleaning_frequency'] }} </span><span>Cleaning</span>
            </div>
            <div>
                <span>$</span><span>{{ $price }}</span>
            </div>
        </div>
        <div class="price_total price_block">
            <div>
                <span>Total</span>
            </div>
            <div class="price_cost">
                <span class="price_dollar">$</span><span>{{ $price }}</span>
            </div>
        </div>
</div>

@endsection
