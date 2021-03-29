<div class="radio_round">
    <label class="radio_round_el" for="{{ $id }}"></label>
    <span class="radio_round_sign">{{ $slot }}</span>
    <input {{ $attributes }} type="radio" id="{{ $id }}">
</div>