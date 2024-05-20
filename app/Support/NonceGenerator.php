<?php

namespace App\Support;

use Illuminate\Support\Facades\Vite;
use Spatie\Csp\Nonce\NonceGenerator as NonceNonceGenerator;

class NonceGenerator implements NonceNonceGenerator
{
    public function generate(): string
    {
        return Vite::useCspNonce();
    }
}
