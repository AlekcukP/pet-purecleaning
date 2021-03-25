@extends('layouts.step_item_type')

@section('item_header', 'Cleaning type')
@section('step_item_header', 'What type of cleaning?')
@section('step_item_text')
@endsection


@section('step_item_forms')
    <div class="radio">
        <label for="type_deep">Deep or Spring</label>
        <input type="radio" name="deep" id="type_deep">
    </div>
    <div class="radio">
        <label for="type_movein">Move In</label>
        <input type="radio" name="movein" id="type_movein">
    </div>
    <div class="radio">
        <label for="type_moveout">Move Out</label>
        <input type="radio" name="moveout" id="type_moveout">
    </div>
    <div class="radio">
        <label for="type_remodeling">Post Remodeling</label>
        <input type="radio" name="remodeling" id="type_remodeling">
    </div>
@endsection