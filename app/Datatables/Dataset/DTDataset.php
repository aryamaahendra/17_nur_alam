<?php

namespace App\Datatables\Dataset;

use Illuminate\Database\Eloquent\Builder as EBuilder;
use Illuminate\Database\Query\Builder as QBuilder;
use App\Datatables\Datatable;
use App\Models\Dataset;

class DTDataset extends Datatable
{
    protected $resource = DTResource::class;

    protected function query(): EBuilder|QBuilder
    {
        $heads = ['name', 'class', 'created_at'];

        $search = request()->query('search')['value'];
        $order = request()->query('order')[0]['column'];
        $dir = request()->query('order')[0]['dir'];

        return Dataset::query()->select(['id', 'name', 'class', 'created_at'])
            ->when($search, fn ($query) => $query->mesearch(['name', 'class'], $search))
            ->orderBy($heads[$order], $dir);
    }

    protected function recordsTotal(): int
    {
        return Dataset::count();
    }
}
