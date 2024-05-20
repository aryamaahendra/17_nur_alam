<div class="">
    <div class="flex gap-4 justify-center !mt-4">
        <div class="flex overflow-hidden border rounded">
            <div class="inline-block">
                <input type="hidden" name="captcha_key" value="">
                <img id="captcha_img" class="h-full" src="" alt="">
            </div>

            <button type="button" class="btn btn-square !rounded-none reload-captcha"
                tabindex="-1">
                <span class="loading loading-spinner hidden"></span>
                <x-icons.refresh class="btn-icon" />
            </button>
        </div>

        <div class="">
            <input type="text" name="captcha" placeholder="captcha"
                class="input input-bordered w-full" />
        </div>
    </div>

    <x-forms.error-message name="captcha" />
</div>
