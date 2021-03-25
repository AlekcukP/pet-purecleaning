@extends('layouts.step_item_type')

@section('item_header', 'Cleaning frequency')
@section('step_item_header', 'How often would you like us to come?')
@section('step_item_text_value', 'You can always change frequencies, reschedule, or save cleanings for later!')

@section('step_item_forms')
    <div class="radio">
        <label for="frequency_once">Once</label>
        <input type="radio" name="once" id="frequency_once">
    </div>
    <div class="radio">
        <label for="frequency_weekly">Weekly</label>
        <input type="radio" name="weekly" id="frequency_weekly">
    </div>
    <div class="radio">
        <label for="frequency_biweekly">Bi-weekly</label>
        <input type="radio" name="biweekly" id="frequency_biweekly">
    </div>
    <div class="radio">
        <label for="frequency_monthly">Monthly</label>
        <input type="radio" name="monthly" id="frequency_monthly">
    </div>
@endsection
