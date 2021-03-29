<div class="input_level">

    <div class="input_level_sign">
        <p>{{ $lowest }}</p>
        <p>{{ $highest }}</p>
    </div>

    <div class="input_level_container">

        @for($i = 0; $i < $size; $i++)
            @php
                $index = $i;
                ++$index;
            @endphp
            <div class="input_level_item">
                <label class="input_level_el" for="level_{{ $name }}_{{ $index }}" data-level-index="{{ $index }}"></label>
                <input {{ $attributes }}  type="radio" name="{{ $name }}" id="level_{{ $name }}_{{ $index }}" value="{{ $index }}">
            </div>
        @endfor

    </div>
</div>