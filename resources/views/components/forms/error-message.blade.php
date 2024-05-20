@props(['name'])

@error($name)
    <div class="label mt-1 p-0">
        <span class="label-text-alt text-error">*{{ $message }}</span>
    </div>
@enderror
