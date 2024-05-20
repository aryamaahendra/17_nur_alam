@props(['text'])

<th class="border">
    <div class="flex items-center gap-2">
        <div>{{ $text }}</div>
        <div class="inline-flex items-center">
            <x-icons.arrow-narrow-up class="h-4 w-4 stroke-base-300 up" />
            <x-icons.arrow-narrow-down class="h-4 w-4 -ml-2 stroke-base-300 down" />
        </div>
    </div>
</th>
