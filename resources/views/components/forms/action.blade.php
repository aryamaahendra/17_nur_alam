@props(['backUrl' => null])

<div class="!mt-4 flex justify-end gap-1">
    @if ($backUrl)
        <a href="{{ $backUrl }}" class="btn btn-ghost uppercase">
            <x-icons.arrow-narrow-left class="stroke-current" />
            <span>batal</span>
        </a>
    @endif

    <button type="submit" class="btn btn-primary uppercase">
        <x-icons.floppy-disk class="stroke-current" />
        <span>simpan</span>
    </button>
</div>
