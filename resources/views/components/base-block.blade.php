<div class="step_item">
    <div class="step_item_container">

        @if($blockName)
        <div class="step_item_type">
            <h3> {{ $blockName }} </h3>
        </div>
        @endif

        <div class="step_item_content">
            {{ $slot }}
        </div>

    </div>
</div>