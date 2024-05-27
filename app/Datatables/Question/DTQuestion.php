<?php

namespace App\Datatables\Question;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use App\Datatables\Datatable;
use App\Models\Question;

class DTQuestion extends Datatable
{
    protected $resource = DTResource::class;

    protected function query(): EloquentBuilder|QueryBuilder
    {
        $heads = ['question', 'created_at'];

        $search = request()->query('search')['value'];
        $order = request()->query('order')[0]['column'];
        $dir = request()->query('order')[0]['dir'];

        return Question::query()->select(['id', 'question', 'created_at'])
            ->when($search, fn ($query) => $query->mesearch(['question'], $search))
            ->orderBy($heads[$order], $dir);
    }

    protected function recordsTotal(): int
    {
        return Question::count();
    }
}
