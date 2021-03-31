<div class="input_icon {{ $customClass }}">
    <label class="input_icon_el" for="{{ $id }}"></label>
    <span class="input_icon_sign">{{ $slot }}</span>
    <input {{ $attributes }} type="checkbox" id="{{ $id }}">
</div>
