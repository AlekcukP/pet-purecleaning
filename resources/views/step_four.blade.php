@extends('layouts.base_step')

@section('step_header', 'Now choose some extras to finish up')
@section('step_description', 'Almost there, hang on were at the end')
@section('form_id', 'form_step_four')
@section('steps_left', 'Reserve a Cleaning')

@section('step_content')
<x-base-block>
    <x-block-item question="Select extras">
        <x-input-icon custom-class="icon_fridge" id="extra_fridge" name="extras" value="fridge">Inside fridge</x-input-icon>
        <x-input-icon custom-class="icon_oven" id="extra_oven" name="extras" value="oven">Inside oven</x-input-icon>
        <x-input-icon custom-class="icon_garage" id="extra_garage" name="extras" value="garage">Garage swapt</x-input-icon>
        <x-input-icon custom-class="icon_laundary" id="extra_laundary" name="extras" value="laundary">Laundary Wash & Dry</x-input-icon>
        <x-input-icon custom-class="icon_blinds" id="extra_blinds" name="extras" value="blinds">Blinds Cleaning</x-input-icon>
    </x-block-item>
</x-base-block>
<div class="price">
    <table class="price_table">
            <tr><td>Cleaning price</td></tr>
            <tr><td>Cleaning regularity</td></tr>
            <tr><td>Check</td></tr>
            <tr><td>Total</td></tr>

    </table>
</div>
@endsection
