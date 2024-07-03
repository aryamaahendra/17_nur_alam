<?php

namespace App\Datatables\People;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use App\Datatables\Datatable;
use App\Models\People;
use App\Models\User;

class DTPeople extends Datatable
{
    protected $resource = DTResource::class;

    protected function query(): EloquentBuilder|QueryBuilder
    {
        $heads = ['name', 'sex', 'birth_date', 'sentence', 'created_at'];

        $search = request()->query('search')['value'];
        $order = request()->query('order')[0]['column'];
        $dir = request()->query('order')[0]['dir'];

        return People::query()->select(['id', 'name', 'sex', 'birth_place', 'birth_date', 'sentence', 'created_at'])
            ->when($search, fn ($query) => $query->mesearch(
                ['name', 'sex', 'birth_place', 'birth_date', 'sentence'],
                $search
            ))
            ->orderBy($heads[$order], $dir);
    }

    protected function recordsTotal(): int
    {
        return People::count();
    }
}
