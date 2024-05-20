<?php

namespace App\Http\Requests;

interface Fulfillable
{
    public function fulfillable(): mixed;
}
