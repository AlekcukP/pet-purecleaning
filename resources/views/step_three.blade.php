@extends('layouts.base_step')

@section('step_header', 'Now we need information about your home')
@section('step_description', 'This information will be used to prepare for a cleaning')
@section('form_id', 'form_step_three')
@section('steps_left', '1 steps left')

@section('step_content')

<x-base-block block-name="Home surpaces">
    <x-block-item question="What types of flooring in your home?" description="Check all that apply" fieldset-class="checkbox_forms">
        <div class="step_item_forms_row">
            <x-checkbox name="flooring_types[]" id="type_hardwood" value="hardwood">Hardwood</x-checkbox>
            <x-checkbox name="flooring_types[]" id="type_cork" value="cork">Cork</x-checkbox>
            <x-checkbox name="flooring_types[]" id="type_vinyl" value="vinyl">Vinyl</x-checkbox>
            <x-checkbox name="flooring_types[]" id="type_concrete" value="concrete">Concrete</x-checkbox>
        </div>
        <div class="step_item_forms_row">
            <x-checkbox name="flooring_types[]" id="type_carpet" value="carpet">Carpet</x-checkbox>
            <x-checkbox name="flooring_types[]" id="type_stone" value="stone">Natural Stone</x-checkbox>
            <x-checkbox name="flooring_types[]" id="type_tile" value="tile">Tile</x-checkbox>
            <x-checkbox name="flooring_types[]" id="type_laminate" value="laminate">Laminate</x-checkbox>
        </div>
    </x-block-item>

    <x-block-item question="What types of countertops in your home?" description="Check all that apply" fieldset-class="checkbox_forms">
        <div class="step_item_forms_row">
            <x-checkbox name="countertops_types[]" id="type_concrete" value="concrete">Concrete</x-checkbox>
            <x-checkbox name="countertops_types[]" id="type_quartz" value="quartz">Quartz</x-checkbox>
            <x-checkbox name="countertops_types[]" id="type_formica" value="formica">Formica</x-checkbox>
            <x-checkbox name="countertops_types[]" id="type_granite" value="granite">Granite</x-checkbox>
        </div>
        <div class="step_item_forms_row">
            <x-checkbox name="countertops_types[]" id="type_marble" value="marble">Marble</x-checkbox>
            <x-checkbox name="countertops_types[]" id="type_tile" value="tile">Tile</x-checkbox>
            <x-checkbox name="countertops_types[]" id="type_stone" value="stone">Paper stone</x-checkbox>
            <x-checkbox name="countertops_types[]" id="type_block" value="block">Butcherblock</x-checkbox>
        </div>
    </x-block-item>

    <x-block-item question="Are there stainless steel appliances?">
        <x-radio-round id="appliences_yes" name="stainless_appliances" value="1">Yes</x-radio-round>
        <x-radio-round id="appliences_no" name="stainless_appliances" value="0">No</x-radio-round>
    </x-block-item>

    <x-block-item question="What type of stove you use?">
        <x-radio-round id="stove_gas" name="stove_type" value="gas">Gas</x-radio-round>
        <x-radio-round id="stove_electric" name="stove_type" value="electric">Electric</x-radio-round>
    </x-block-item>

    <x-block-item question="Are shower doors made of glass?">
        <x-radio-round id="shower_yes" name="shower_glass" value="1">Yes</x-radio-round>
        <x-radio-round id="shower_no" name="shower_glass" value="0">No</x-radio-round>
    </x-block-item>

    <x-block-item question="Any mold or mildew issues?">
        <x-radio-round id="issues_yes" name="issues" value="1">Yes</x-radio-round>
        <x-radio-round id="issues_no" name="issues" value="0">No</x-radio-round>
    </x-block-item>

</x-base-block>

<x-base-block block-name="Additional info">

    <x-block-item question="Are there areas needing special attention? (optional)">
        <x-textarea-label name="special_attention">
                E.g. stainbuildup on shower glass"
                doors, cobwebs in hard to reach
                areas, disinfect door knobs, main
                level baseboards need love...
        </x-textarea-label>
    </x-block-item>

    <x-block-item question="Anything else we should know? (optional)">
        <x-textarea-label name="else_info">
            E.g. allergic to certain scents, can't
            start earlier than 8AM, newborn
            baby, excepting guests soon...
        </x-textarea-label>
    </x-block-item>

</x-base-block>
@endsection
