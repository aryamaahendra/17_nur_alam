<?php

namespace App\Datatables\HistoryPrediction;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use App\Datatables\Datatable;
use App\Models\History;

class DTHistoryPrediction extends Datatable
{
    protected $resource = DTResource::class;

    protected function query(): EloquentBuilder|QueryBuilder
    {
        $heads = ['id', 'id', 'id', 'id', 'id', 'created_at'];

        $search = request()->query('search')['value'];
        $order = request()->query('order')[0]['column'];
        $dir = request()->query('order')[0]['dir'];

        return History::query()->with(['people'])->select(['id', 'class', 'people_id', 'created_at'])
            ->when($search, fn ($query) => $query->mesearch(['class', 'people.name'], $search))
            ->orderBy($heads[$order], $dir);
    }

    protected function recordsTotal(): int
    {
        return History::count();
    }
}
