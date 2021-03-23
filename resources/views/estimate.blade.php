@extends('main')

@section('content')
    <section class="estimate">
        <div class="estimate_header">
            <h1>Get an estimate for home cleaning</h1>
        </div>
        <form action="">
            <div class="estimate_select">
                <div class="estimate_select_bedroom">
                    <select name="bedroom" id="select_bedroom">
                        <option value="1">1 Bedroom</option>
                        <option value="2">2 Bedroom</option>
                        <option value="3">3 Bedroom</option>
                        <option value="4">4 Bedroom</option>
                        <option value="5">5 Bedroom</option>
                        <option value="6">6 Bedroom</option>
                        <option value="7">7 Bedroom</option>
                        <option value="8">8 Bedroom</option>
                        <option value="9">9 Bedroom</option>
                        <option value="10">10 Bedroom</option>
                    </select>
                </div>
                <div class="estimate_select_bathroom">
                    <select name="bathroom" id="select_bathroom">
                        <option value=".5">0.5 Bathroom</option>
                        <option value="1">1 Bathroom</option>
                        <option value="1.5">1.5 Bathroom</option>
                        <option value="2">2 Bathroom</option>
                        <option value="2.5">2.5 Bathroom</option>
                        <option value="3">3 Bathroom</option>
                        <option value="3.5">3.5 Bathroom</option>
                        <option value="4">4 Bathroom</option>
                        <option value="4.5">4.5 Bathroom</option>
                        <option value="5">5 Bathroom</option>
                    </select>
                </div>
            </div>
            <div class="estimate_input">
                <div class="estimate_input_zip">
                    <label for="input_zip">ZIP Code</label>
                    <input type="number" name="zip" id="input_zip">
                </div>
                <div class="estimate_input_email">
                    <label for="input_email">Email</label>
                    <input type="email" name="email" id="input_email">
                </div>
            </div>
            <div class="estimate_button">
                <input type="button" value="Continue">
            </div>
        </form>
    </section>
@endsection

@section('footer')
    <footer>
        <div class="footer_benefits">
            <ul class="footer_benefits_list">
                <li>Experienced and vetted professionals</li>
                <li>Flexible cleaning schedule</li>
                <li>Cleaning supplies included</li>
            </ul>
        </div>
        <div class="footer_rated">
            <h3 class="footer_rated_header">Our services are being rated</h3>
            <ul class="footer_rated_list">
                <li><span>Grade</span>on <img src="#" alt="Angies list"></li>
                <li><span>Stars</span>on <img src="#" alt="Yelp"></li>
            </ul>
        </div>
    </footer>
@endsection