@extends('layouts.base_step')

@section('step_header', 'Lets start with some basic information')
@section('step_description', 'At the end of the quote you will get a price for cleaning')
@section('form_id', 'form_step_one')
@section('steps_left', '3 steps left')
@section('form_action', '/personal')

@section('step_content')

<x-base-block block-name="Cleaning frequency">
    <x-block-item question="How often would you like us to come?" description="You can always change frequencies, reschedule, or save cleanings for later!">
        <x-radio-button id="frequency_once" name="cleaning_frequency" type="radio" value="Once-Time">Once</x-radio-button>
        <x-radio-button id="frequency_weekly" name="cleaning_frequency" type="radio" value="Weekly">Weekly</x-radio-button>
        <x-radio-button id="frequency_biweekly" name="cleaning_frequency" type="radio" value="Bi-weekly">Bi-weekly</x-radio-button>
        <x-radio-button id="frequency_monthly" name="cleaning_frequency" type="radio" value="Monthly">Monthly</x-radio-button>

        @error('cleaning_frequency')
            <span class="error">{{ $message }}</span>
        @enderror
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning type">
    <x-block-item question="What type ofcleaning">
        <x-radio-button id="type_deep" name="cleaning_type" value="Deep">Deep or Spring</x-radio-button>
        <x-radio-button id="type_movein" name="cleaning_type" value="Move In">Move In</x-radio-button>
        <x-radio-button id="type_moveout" name="cleaning_type" value="Move Out">Move Out</x-radio-button>
        <x-radio-button id="type_remodeling" name="cleaning_type" value="Post Remodeling">Post Remodeling</x-radio-button>

        @error('cleaning_type')
            <span class="error">{{ $message }}</span>
        @enderror
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning date">
    <x-block-item question="When will you need us?">
        <x-radio-button id="date_next_available" name="cleaning_date" value="Next available">Next available</x-radio-button>
        <x-radio-button id="date_this_week" name="cleaning_date" value="This week">This week</x-radio-button>
        <x-radio-button id="date_next_week" name="cleaning_date" value="Next week">Next week</x-radio-button>
        <x-radio-button id="date_this_month" name="cleaning_date" value="This month">This month</x-radio-button>
        <x-radio-button id="date_flexible" name="cleaning_date" value="Flexible">I am flexible</x-radio-button>
        <x-radio-button id="date_qoute" name="cleaning_date" value="Quote">I just need a quote</x-radio-button>

        @error('cleaning_date')
            <span class="error">{{ $message }}</span>
        @enderror
    </x-block-item>
</x-base-block>

<x-base-block block-name="Personal info">
    <x-block-item fieldset-class="personal_forms">
        <div class="step_item_forms_row">
                <x-input-label id="user_name" name="name" type="text">First name</x-input-label>
                <x-input-label id="user_surname" name="surname" type="text">Last name</x-input-label>
        </div>
        <div class="step_item_forms_row">
            <x-input-label id="user_adress" name="address" type="text">Street address</x-input-label>
            <x-input-label id="user_apt" name="apt" type="number">Apt# (optional)</x-input-label>
        </div>
        <div class="step_item_forms_row">
            <x-input-label id="user_city" name="city" type="text">City</x-input-label>
            <x-input-label id="user_footage" name="footage" type="number">Home Square Footage</x-input-label>
        </div>
        <div class="step_item_forms_row">
            <x-input-label id="user_tel" name="phone" type="tel">Mobile phone</x-input-label>
            <div class="select_label">
                <label for="referral_type">How did you hear about us?</label>
                <select name="referral" id="referral_type">
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

                    @error('referral')
                        <span class="error">{{ $message }}</span>
                    @enderror
            </div>
        </div>
    </x-block-item>
</x-base-block>
@endsection
