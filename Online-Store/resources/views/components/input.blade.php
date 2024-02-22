<div class="input-group mb-3">
    <span class="input-group-text">
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    </span>
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" class="form-control" name="{{ $name }}"
        aria-describedby={{ $name }} {{ $attributes }}>
</div>
