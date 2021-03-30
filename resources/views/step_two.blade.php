@extends('layouts.base_step')

@section('step_header', 'Now we need information about your home')
@section('step_description', 'This information will be used to prepare for a cleaning')
@section('form_id', 'form_step_two')
@section('steps_left', '2 steps left')

@section('step_content')
<x-base-block block-name="Home residents">

    <x-block-item question="Have any dogs or cats?">
        <x-radio-button id="pets_none" name="pets" value="none">None</x-radio-button>
        <x-radio-button id="pets_dog" name="pets" value="dog">Dog</x-radio-button>
        <x-radio-button id="pets_cat" name="pets" value="cat">Cat</x-radio-button>
        <x-radio-button id="pets_both" name="pets" value="both">Both</x-radio-button>
    </x-block-item>

    <x-block-item question="How many pets total?">
        <x-radio-button id="pets_one" name="pets_amount" value="1">1</x-radio-button>
        <x-radio-button id="pets_two" name="pets_amount" value="2">2</x-radio-button>
        <x-radio-button id="pets_three" name="pets_amount" value="3">3+</x-radio-button>
    </x-block-item>

    <x-block-item question="How many adults reside at your location?">
        <x-radio-button id="adults_none" name="adults_amount" value="0">None</x-radio-button>
        <x-radio-button id="adults_few" name="adults_amount" value="1">1-2</x-radio-button>
        <x-radio-button id="adults_group" name="adults_amount" value="3">3-4</x-radio-button>
        <x-radio-button id="adults_more" name="adults_amount" value="5">5 and more</x-radio-button>
    </x-block-item>

    <x-block-item question="How many children?">
        <x-radio-button id="child_none" name="child" value="0">None</x-radio-button>
        <x-radio-button id="child_one" name="child" value="1">1</x-radio-button>
        <x-radio-button id="child_two" name="child" value="2">2</x-radio-button>
        <x-radio-button id="child_three" name="child" value="3">3 and more</x-radio-button>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Home Cleanliness">
    <x-block-item question="How would your current home cleanliness?">
        <x-input-lavel size="10" highest="Very dirty" lowest="Sparkling clean" name="cleanliness"></x-input-lavel>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Cleaning before">
    <x-block-item question="Did you had a professioanl cleaning in past 2 monthes?">
        <x-radio-round id="clean_before_yes" name="clean_before" value="true">Yes</x-radio-round>
        <x-radio-round id="clean_before_no" name="clean_before" value="false">No</x-radio-round>
    </x-block-item>
    <x-block-item question="What would you like us to do differently?">
        <x-textarea-label name="differently_info">
            For example be quiet when kids are sleeping,
            be most gentle with certain , better communication
            with my cleaner, etc.
        </x-textarea-label>
    </x-block-item>
</x-base-block>

<x-base-block block-name="Home photos">
    <x-block-item question="Do you have any photos of your home? (optional)" description="You can upload more then one photo at a time. Up to 58 photos in total.">
        <x-input-label id="photos_input" name="photos" type="file" class="input_label_photos"></x-input-label>
        <div class="photo_wrapper"></div>
    </x-block-item>
</x-base-block>
@endsection
