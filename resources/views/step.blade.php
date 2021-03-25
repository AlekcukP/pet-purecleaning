@extends('layouts.base_step')

@section('step_header', 'Lets start with some basic information')
@section('step_text', 'At the end of the quote you will get a price for cleaning')

@section('step_content')

        @include('layouts.frequency')
        @include('layouts.type')

        <div class="step_item">
            <div class="step_item_container">
                <div class="step_item_type">
                    <h3>Cleaning date</h3>
                </div>
                <div class="step_item_content">
                    <div class="steps_item_content_row">
                        <div class="step_item_header">
                            <h5>When will you need us?</h5>
                        </div>
                        <fieldset class="step_item_btns">
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
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <div class="step_item">
            <div class="step_item_container">
                <div class="step_item_type">
                    <h3>Personal info</h3>
                </div>
                <div class="step_item_content">
                    <fieldset>
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
                    </fieldset>
                </div>
            </div>
        </div>
    </section>
@endsection
