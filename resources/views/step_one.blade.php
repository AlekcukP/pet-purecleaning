<nav class="steps_nav">
    <ul class="steps_list">
        <li class="steps_item">
            <span>Personal info</span>
        </li>
        <li class="steps_item">
            <span>Your home</span>
        </li>
        <li class="steps_item">
            <span>Materials</span>
        </li>
        <li class="steps_item">
            <span>Extras</span>
        </li>
    </ul>
</nav>
<section class="step_one">
    <div class="step_inform">
        <div class="step_inform_header">
            <h4>Let's start with some basic information</h4>
        </div>
        <div class="step_inform_text">
            <p>At the end of the quote you will get a price for cleaning</p>
        </div>
    </div>
    <div class="step_item">
        <div class="step_item_container">
            <div class="step_item_type">
                <h3>Cleaning frequency</h3>
            </div>
            <div class="step_item_content">
                <div class="steps_item_content_row">
                    <div class="step_item_header">
                        <h5>How often would you like us to come?</h5>
                    </div>
                    <div class="step_item_text">
                        <p>You can always change frequencies, reschedule, or save cleanings for later!</p>
                    </div>
                    <fieldset class="step_item_btns">
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
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="step_item">
        <div class="step_item_container">
            <div class="step_item_type">
                <h3>Cleaning type</h3>
            </div>
            <div class="step_item_content">
                <div class="steps_item_content_row">
                    <div class="step_item_header">
                        <h5>What type of cleaning?</h5>
                    </div>
                    <fieldset class="step_item_btns">
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
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
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
                                    <option value="Angie\'s List">Angie's List</option>
                                    <option value="Nextdoor">Nextdoor</option>
                                    <option value="Fresh Chalk">Fresh Chalk</option>
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
