@props(['name', 'label'])

<label class="form-control w-full">
    <div class="label">
        <span class="label-text">{{ $label }}</span>
    </div>

    <select class="select select-bordered" name="{{ $name }}" {{ $attributes }}>
        {{ $slot }}
    </select>

    <x-forms.error-message :name="$name" />
</label>
