@extends('layouts.base_step')

@section('step_header', 'Now we need information about your home')
@section('step_description', 'This information will be used to prepare for a cleaning')

@section('step_content')
<x-base-block block-name="Home residents">

    <x-block-item question="Have any dogs or cats?">
        <div class="radio">
            <label for="pets_none">None</label>
            <input type="radio" name="pets_none" id="pets_none">
        </div>
        <div class="radio">
            <label for="pets_dog">Dog</label>
            <input type="radio" name="pets_dog" id="pets_dog">
        </div>
        <div class="radio">
            <label for="pets_cat">Cat</label>
            <input type="radio" name="pets_cat" id="pets_cat">
        </div>
        <div class="radio">
            <label for="pets_both">Both</label>
            <input type="radio" name="pets_both" id="pets_both">
        </div>
    </x-block-item>

    <x-block-item question="How many pets total?">
        <div class="radio">
            <label for="pets_one">1</label>
            <input type="radio" name="pets_one" id="pets_one">
        </div>
        <div class="radio">
            <label for="pets_two">2</label>
            <input type="radio" name="pets_two" id="pets_two">
        </div>
        <div class="radio">
            <label for="pets_more">3+</label>
            <input type="radio" name="pets_more" id="pets_more">
        </div>
    </x-block-item>

    <x-block-item question="How many adults reside at your location?">
        <div class="radio">
            <label for="adults_none">None</label>
            <input type="radio" name="adults_none" id="adults_none">
        </div>
        <div class="radio">
            <label for="adults_few">1-2</label>
            <input type="radio" name="adults_few" id="adults_few">
        </div>
        <div class="radio">
            <label for="adults_group">3-4</label>
            <input type="radio" name="adults_group" id="adults_group">
        </div>
        <div class="radio">
            <label for="adults_five">5 and more</label>
            <input type="radio" name="adults_five" id="adults_five">
        </div>
    </x-block-item>

    <x-block-item question="How many children?">
        <div class="radio">
            <label for="children_none">None</label>
            <input type="radio" name="children_none" id="children_none">
        </div>
        <div class="radio">
            <label for="children_one">1</label>
            <input type="radio" name="children_one" id="children_one">
        </div>
        <div class="radio">
            <label for="children_two">2</label>
            <input type="radio" name="children_two" id="children_two">
        </div>
        <div class="radio">
            <label for="children_three">3 and more</label>
            <input type="radio" name="children_three" id="children_three">
        </div>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Home Cleanliness">
    <x-block-item question="How would your current home cleanliness?">
        <div class="clean_sign">
            <p>Very dirty</p>
            <p>Sparkling clean</p>
        </div>
        <div class="clean_level">
            <div class="clean_level_item">
                <label for="level_1"></label>
                <input type="radio" name="level_1" id="level_1">
            </div>
            <div class="clean_level_item">
                <label for="level_2"></label>
                <input type="radio" name="level_2" id="level_2">
            </div>
            <div class="clean_level_item">
                <label for="level_3"></label>
                <input type="radio" name="level_3" id="level_3">
            </div>
            <div class="clean_level_item">
                <label for="level_4"></label>
                <input type="radio" name="level_4" id="level_4">
            </div>
            <div class="clean_level_item">
                <label for="level_5"></label>
                <input type="radio" name="level_5" id="level_5">
            </div>
            <div class="clean_level_item">
                <label for="level_6"></label>
                <input type="radio" name="level_6" id="level_6">
            </div>
            <div class="clean_level_item">
                <label for="level_7"></label>
                <input type="radio" name="level_7" id="level_7">
            </div>
            <div class="clean_level_item">
                <label for="level_8"></label>
                <input type="radio" name="level_8" id="level_8">
            </div>
            <div class="clean_level_item">
                <label for="level_9"></label>
                <input type="radio" name="level_9" id="level_9">
            </div>
            <div class="clean_level_item">
                <label for="level_10"></label>
                <input type="radio" name="level_10" id="level_10">
            </div>
        </div>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning before">
    <x-block-item question="Did you had a professioanl cleaning in past 2 monthes?">
        <x-radio-round id="clean_before_yes" name="clean_before" value="true">Yes</x-radio-round>
        <x-radio-round id="clean_before_no" name="clean_before" value="false">No</x-radio-round>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Home photos">
    <x-block-item question="Do you have any photos of your home? (optional)" description="You can upload more then one photo at a time. Up to 58 photos in total.">
        <div class="file_input">
            <label for="file_input"></label>
            <input type="file" name="photo" id="file_input">
        </div>
        <div class="photo_wrapper"></div>
    </x-block-item>
</x-base-block>
@endsection
