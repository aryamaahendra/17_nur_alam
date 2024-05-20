@props(['placeholder' => '', 'name', 'label', 'value' => ''])

<label class="form-control w-full">
    <div class="label">
        <span class="label-text">{{ $label }}</span>
    </div>

    <textarea {{ $attributes }} class="textarea textarea-bordered h-24" name="{{ $name }}"
        placeholder="{{ $placeholder }}">{{ $value }}</textarea>

    <x-forms.error-message :name="$name" />

</label>
