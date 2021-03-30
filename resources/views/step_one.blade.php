@extends('layouts.base_step')

@section('step_header', 'Lets start with some basic information')
@section('step_description', 'At the end of the quote you will get a price for cleaning')
@section('form_id', 'form_step_one')
@section('steps_left', '3 steps left')

@section('step_content')

<x-base-block block-name="Cleaning frequency">
    <x-block-item question="How often would you like us to come?" description="You can always change frequencies, reschedule, or save cleanings for later!">
        <x-radio-button id="frequency_once" name="cleaning_frequency" type="radio" value="once">Once</x-radio-button>
        <x-radio-button id="frequency_weekly" name="cleaning_frequency" type="radio" value="weekly">Weekly</x-radio-button>
        <x-radio-button id="frequency_biweekly" name="cleaning_frequency" type="radio" value="biweekly">Bi-weekly</x-radio-button>
        <x-radio-button id="frequency_monthly" name="cleaning_frequency" type="radio" value="monthly">Monthly</x-radio-button>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning type">
    <x-block-item question="What type ofcleaning">
        <x-radio-button id="type_deep" name="cleaning_type" value="deep">Deep or Spring</x-radio-button>
        <x-radio-button id="type_movein" name="cleaning_type" value="movein">Move In</x-radio-button>
        <x-radio-button id="type_moveout" name="cleaning_type" value="moveout">Move Out</x-radio-button>
        <x-radio-button id="type_remodeling" name="cleaning_type" value="remodeling">Post Remodeling</x-radio-button>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning date">
    <x-block-item question="When will you need us?">
        <x-radio-button id="date_next_available" name="cleaning_date" value="next_available">Next available</x-radio-button>
        <x-radio-button id="date_this_week" name="cleaning_date" value="this_week">This week</x-radio-button>
        <x-radio-button id="date_next_week" name="cleaning_date" value="next_week">Next week</x-radio-button>
        <x-radio-button id="date_this_month" name="cleaning_date" value="this_month">This month</x-radio-button>
        <x-radio-button id="date_flexible" name="cleaning_date" value="flexible">I am flexible</x-radio-button>
        <x-radio-button id="date_qoute" name="cleaning_date" value="qoute">I just need a quote</x-radio-button>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Personal info">
    <x-block-item fieldset-class="personal_forms">
        <div class="step_item_forms_row">
                <x-input-label id="user_name" name="user_name" type="text">First name</x-input-label>
                <x-input-label id="user_surname" name="user_surname" type="text">Last name</x-input-label>
        </div>
        <div class="step_item_forms_row">
            <x-input-label id="user_adress" name="user_address" type="text">Street address</x-input-label>
            <x-input-label id="user_apt" name="personal_apt" type="number">Apt# (optional)</x-input-label>
        </div>
        <div class="step_item_forms_row">
            <x-input-label id="user_city" name="personal_city" type="text">City</x-input-label>
            <x-input-label id="user_footage" name="user_footage" type="number">Home Square Footage</x-input-label>
        </div>
        <div class="step_item_forms_row">
            <x-input-label id="user_tel" name="user_tel" type="tel">Mobile phone</x-input-label>
            <div class="select_label">
                <label for="referral_type">How did you hear about us?</label>
                <select name="referral_type" id="referral_type">
                        <option value="">Choose a Referral</option>
                        <option value="Returning Client">Returning Client</option>
                        <option value="Current Client">Current Client New Home</option>
                        <option value="Referral Client">Personal Recommendation</option>
                        <option value="Employee">UW Employee</option>
                        <option value="Realtor">Realtor</option>
                        <option value="Google">Google</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Other">Other</option>
                    </select>
            </div>
        </div>
    </x-block-item>
</x-base-block>
@endsection
