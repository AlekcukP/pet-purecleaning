@extends('layouts.base_step')

@section('step_header', 'Now choose some extras to finish up')
@section('step_description', 'Almost there, hang on we're at the end')

@section('step_content')
<x-base-block>
    <x-block-item question="Select extra">
        <x-input-icon custom-class="icon_fridge" id="extra_fridge" name="extras" value="fridge">Inside fridge</x-input-icon>
        <x-input-icon custom-class="icon_oven" id="extra_oven" name="extras" value="oven">Inside oven</x-input-icon>
        <x-input-icon custom-class="icon_cabinets" id="extra_cabinets" name="extras" value="cabinets">Inside cabinets</x-input-icon>
        <x-input-icon custom-class="icon_laundary" id="extra_laundary" name="extras" value="laundary">Laundary Wash & Dry</x-input-icon>
        <x-input-icon custom-class="icon_blinds" id="extra_blinds" name="extras" value="blinds">Blinds Cleaning</x-input-icon>
    </x-block-item>
</x-base-block>
@endsection
