@extends('layouts.base')

@section('content')

    <section class="estimate">
        <div class="estimate_header">
            <h1>Get an estimate for home cleaning</h1>
        </div>
        <form class="estimate_forms" action="/" method="POST">
            @csrf

            <div class="estimate_select">
                <div class="estimate_select_bedroom estimate_select_item">
                    <select name="bedrooms" id="select_bedroom">
                        <option value="">Bedrooms's amount</option>
                        <option value="1">1 Bedroom</option>
                        <option value="2">2 Bedroom</option>
                        <option value="3">3 Bedroom</option>
                        <option value="4">4 Bedroom</option>
                        <option value="5">5+ Bedroom</option>
                    </select>
                    @error('bedroom')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="estimate_select_bathroom estimate_select_item">
                    <select name="bathrooms" id="select_bathroom">
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
                    @error('bathroom')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="estimate_input">
                <x-input-label id="zip"  name="zip" type="number">ZIP Code</x-input-label>
                <x-input-label id="email"  name="email" type="email">Email</x-input-label>
            </div>
            <div class="estimate_button">
                <input type="submit" value="Continue">
            </div>
        </form>
    </section>
@endsection
