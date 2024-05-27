<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function flashMessage(bool $err, string $msg): array
    {
        return ['flas-message' => ['error' => $err ? 'error' : 'success', 'message' => $msg]];
    }
}
