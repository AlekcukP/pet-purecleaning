<div class="step_item_row">

    @if($question)
    <div class="step_item_header">
        <h5>{{ $question }}</h5>
    </div>
    @endif

    @if($description)
    <div class="step_item_text">
        <p>{{ $description }}</p>
    </div>
    @endif

    <fieldset class="step_item_forms {{ $fieldsetClass }}">
        {{ $slot }}
    </fieldset>

</div>
