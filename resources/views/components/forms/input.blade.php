@props(['type' => 'text', 'placeholder' => '', 'name', 'label', 'value' => ''])

<label class="form-control w-full">
    <div class="label">
        <span class="label-text">{{ $label }}</span>
    </div>

    <input type="{{ $type }}" placeholder="{{ $placeholder }}" name="{{ $name }}"
        class="input input-bordered w-full" value="{{ $value }}" {{ $attributes }}
        autocomplete="off" />

    <x-forms.error-message :name="$name" />
</label>
