<div class="step_item">
    <div class="step_item_container">
        @section('step_type')
        @show
        <div class="step_item_content">
            <div class="steps_item_content_row">
                <div class="step_item_header">
                    <h5>
                        @section('step_item_header')
                        @show
                    </h5>
                </div>
                @section('step_item_text')
                <div class="step_item_text">
                    <p>
                        @section('step_item_text_value')
                        @show
                    </p>
                </div>
                @show
                <fieldset class="step_item_forms">
                    @section('step_item_forms')
                    @show
                </fieldset>
            </div>
        </div>
    </div>
</div>