<div class="checkbox">
    <label class="checkbox_el" for="{{ $id }}"></label>
    <span class="checkbox_sign">{{ $slot }}</span>
    <input {{ $attributes }} type="checkbox" id="{{ $id }}">
</div>