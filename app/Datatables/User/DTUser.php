<?php

namespace App\Datatables\User;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use App\Datatables\Datatable;
use App\Models\User;

class DTUser extends Datatable
{
    protected $resource = DTResource::class;

    protected function query(): EloquentBuilder|QueryBuilder
    {
        $heads = ['name', 'username', 'email', 'created_at'];

        $search = request()->query('search')['value'];
        $order = request()->query('order')[0]['column'];
        $dir = request()->query('order')[0]['dir'];

        return User::query()->select(['id', 'username', 'name', 'email', 'created_at'])
            ->when($search, fn ($query) => $query->mesearch(['name', 'username', 'email'], $search))
            ->orderBy($heads[$order], $dir);
    }

    protected function recordsTotal(): int
    {
        return User::count();
    }
}
