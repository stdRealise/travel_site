<div>
    <label for={{ $name }}>{{ $label }}</label>
</div>
<div>
    <input
        id={{ $name }}
        name={{ $name }}
        value="{{ old($name) ?: $value }}"
        required
        {{ (isset($disabled) && $disabled) ? 'disabled' : '' }}
    >
</div>
