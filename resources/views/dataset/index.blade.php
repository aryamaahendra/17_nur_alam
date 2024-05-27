@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full bg-base-100 rounded shadow border">
        <div class="card-body p-0" datatable="dataset">
            <div class="flex items-center justify-between px-4 pt-4 mb-2">
                <div class="flex items-center gap-1">
                    <x-forms.perpage />
                    <x-forms.search />
                </div>

                <div class="flex items-center gap-1">
                    <a href="{{ route('dshb.dataset.create') }}" class="btn btn-primary rounded">
                        <span>TAMBAH</span>
                        <x-icons.plus class="w-5 h-5 stroke-current" />
                    </a>
                </div>
            </div>

            <table id="dataset" class="stripe w-full border">
                <thead>
                    <x-tables.th-shortable text="Nama Napi" />
                    <x-tables.th-shortable text="Class" />
                    <x-tables.th-shortable text="Dibuat" />
                    <th class="w-1 border"></th>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
