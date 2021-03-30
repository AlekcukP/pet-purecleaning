@extends('layouts.base')

@section('content')

    <section class="estimate">
        <div class="estimate_header">
            <h1>Get an estimate for home cleaning</h1>
        </div>
        <form class="estimate_forms" action="">
            <div class="estimate_select">
                <div class="estimate_select_bedroom estimate_select_item">
                    <select name="bedroom" id="select_bedroom">
                        <option value="">Bedrooms's amount</option>
                        <option value="1">1 Bedroom</option>
                        <option value="2">2 Bedroom</option>
                        <option value="3">3 Bedroom</option>
                        <option value="4">4 Bedroom</option>
                        <option value="5">5+ Bedroom</option>
                    </select>
                </div>
                <div class="estimate_select_bathroom estimate_select_item">
                    <select name="bathroom" id="select_bathroom">
                        <option value="">Bathrooms's amount</option>
                        <option value=".5">0.5 Bathroom</option>
                        <option value="1">1 Bathroom</option>
                        <option value="1.5">1.5 Bathroom</option>
                        <option value="2">2 Bathroom</option>
                        <option value="2.5">2.5 Bathroom</option>
                        <option value="3">3 Bathroom</option>
                        <option value="3.5">3.5 Bathroom</option>
                        <option value="4">4 Bathroom</option>
                        <option value="4.5">4.5 Bathroom</option>
                        <option value="5">5+ Bathroom</option>
                    </select>
                </div>
            </div>
            <div class="estimate_input">
                <x-input-label id="user_zip" type="number" name="user_zip">ZIP Code</x-input-label>
                <x-input-label id="user_email" type="email" name="user_email">Email</x-input-label>
            </div>
            <div class="estimate_button">
                <input type="submit" value="Continue">
            </div>
        </form>
    </section>

        <!-- <section class="achivments">
            <div class="achivments_benefits">
                <ul class="achivments_benefits_list">
                    <li>Experienced and vetted professionals</li>
                    <li>Flexible cleaning schedule</li>
                    <li>Cleaning supplies included</li>
                </ul>
            </div>
            <div class="achivments_rated">
                <h3 class="achivments_rated_header">Our services are being rated</h3>
                <ul class="achivments_rated_list">
                    <li><span>Grade</span>on <img src="#" alt="Angies list"></li>
                    <li><span>Stars</span>on <img src="#" alt="Yelp"></li>
                </ul>
            </div>
        </section> -->
@endsection
