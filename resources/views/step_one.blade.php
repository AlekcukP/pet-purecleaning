@extends('layouts.base_step')

@section('step_header', 'Lets start with some basic information')
@section('step_description', 'At the end of the quote you will get a price for cleaning')

@section('step_content')

<x-base-block block-name="Cleaning frequency">
    <x-block-item question="How often would you like us to come?" description="You can always change frequencies, reschedule, or save cleanings for later!">
        <x-radio-button id="frequency_once" type="radio" name="frequency" value="once">Once</x-radio-button>
        <x-radio-button id="frequency_weekly" type="radio" name="frequency" value="weekly">Weekly</x-radio-button>
        <x-radio-button id="frequency_biweekly" type="radio" name="frequency" value="biweekly">Bi-weekly</x-radio-button>
        <x-radio-button id="frequency_monthly" type="radio" name="frequency" value="monthly">Monthly</x-radio-button>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning type">
    <x-block-item question="What type of cleaning" >
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
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning date">
    <x-block-item question="When will you need us?">
        <div class="radio">
            <label for="date_available">Next available</label>
            <input type="radio" name="available" id="date_available">
        </div>
        <div class="radio">
            <label for="date_this-week">This week</label>
            <input type="radio" name="this_week" id="date_this-week">
        </div>
        <div class="radio">
            <label for="date_next-week">Next week</label>
            <input type="radio" name="next_week" id="date_next-week">
        </div>
        <div class="radio">
            <label for="date_month">This month</label>
            <input type="radio" name="this_month" id="date_month">
        </div>
        <div class="radio">
            <label for="date_flexible">I am flexible</label>
            <input type="radio" name="flexible" id="date_flexible">
        </div>
        <div class="radio">
            <label for="date_quote">I just need a quote</label>
            <input type="radio" name="quote" id="date_quote">
        </div>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Personal info">
    <x-block-item>
        <div class="steps_item_content_row">
            <div>
                <label for="personal_name">First name</label>
                <input type="text" name="personal_name" id="personal_name">
            </div>
            <div>
                <label for="personal_surname">Last name</label>
                <input type="text" name="personal_surname" id="personal_surname">
            </div>
        </div>
        <div class="steps_item_content_row">
            <div>
                <label for="personal_address">Street address</label>
                <input type="text" name="personal_address" id="personal_address">
            </div>
            <div>
                <label for="personal_apt">Apt# (optional)</label>
                <input type="number" name="personal_apt" id="personal_apt">
            </div>
        </div>
        <div class="steps_item_content_row">
            <div>
                <label for="personal_city">City</label>
                <input type="text" name="personal_city" id="personal_city">
            </div>
            <div>
                <label for="personal_footage">Home Square Footage</label>
                <input type="number" name="personal_footage" id="personal_footage">
            </div>
        </div>
        <div class="steps_item_content_row">
            <div>
                <label for="personal_phone">Mobile phone</label>
                <input type="tel" name="personal_phone" id="personal_phone">
            </div>
            <div>
                <label for="referral_type">How did you hear about us?</label>
                <select name="referralType" id="referral_type">
                        <option value="">Choose a Referral</option>
                        <option value="Returning Client">Returning Client</option>
                        <option value="Current Client New Home">Current Client New Home</option>
                        <option value="Client Referral">Personal Recommendation</option>
                        <option value="UW Employee">UW Employee</option>
                        <option value="Realtor">Realtor</option>
                        <option value="Google">Google</option>
                        <option value="Yelp">Yelp</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Bing/Yahoo">Bing/Yahoo</option>
                        <option value="Other">Other</option>
                    </select>
            </div>
        </div>
    </x-block-item>
</x-base-block>
@endsection
