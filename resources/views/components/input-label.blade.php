<div class="input_label">
    <label for="{{ $id }}">{{ $slot }}</label>
    <input {{ $attributes }} name="{{ $name }}" type="text" id="{{ $id }}">

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>
