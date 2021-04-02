<div class="input_label">
    <label for="{{ $id }}">{{ $slot }}</label>
    <input {{ $attributes }} name="{{ $name }}" type="text" id="{{ $id }}" value="{{ old($name) }}">

    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>
