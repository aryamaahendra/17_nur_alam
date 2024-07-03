@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full bg-base-100 rounded shadow border">
        <div class="card-body p-0" datatable="history-prediction">
            <div class="flex items-center justify-between px-4 pt-4 mb-2">
                <div class="flex items-center gap-1">
                    <x-forms.perpage />
                    <x-forms.search />
                </div>

                <div class="flex items-center gap-1">
                </div>
            </div>

            <table id="history-prediction" class="stripe w-full border">
                <thead>
                    <x-tables.th-shortable text="Nama" />
                    <x-tables.th-shortable text="Jenis Kelamin" />
                    <x-tables.th-shortable text="TTL" />
                    <x-tables.th-shortable text="Lama Pidana" />
                    <x-tables.th-shortable text="Prediction" />
                    <x-tables.th-shortable text="Dibuat" />
                    <th class="w-1 border"></th>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
