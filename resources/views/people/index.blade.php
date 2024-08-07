@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full bg-base-100 rounded shadow border">
        <div class="card-body p-0" datatable="peoples">
            <div class="flex items-center justify-between px-4 pt-4 mb-2">
                <div class="flex items-center gap-1">
                    <x-forms.perpage />
                    <x-forms.search />
                </div>

                <div class="flex items-center gap-1">
                    <a href="{{ route('dshb.people.create') }}" class="btn btn-primary rounded">
                        <span>TAMBAH</span>
                        <x-icons.plus class="w-5 h-5 stroke-current" />
                    </a>
                </div>
            </div>

            <table id="peoples" class="stripe w-full border">
                <thead>
                    <x-tables.th-shortable text="Nama" />
                    <x-tables.th-shortable text="Jenis Kelamin" />
                    <x-tables.th-shortable text="TTL" />
                    <x-tables.th-shortable text="Lama Pidana" />
                    <x-tables.th-shortable text="Dibuat" />
                    <th class="w-1 border"></th>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
