@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full max-w-xl mx-auto bg-base-100 rounded shadow border">
        <form action="{{ route('dshb.people.store') }}" method="POST" class="card-body" datatable="users">
            @csrf
            @method('POST')

            <x-forms.input label="Name" name="name" placeholder="Nama Aku" value="{{ old('name') }}" />

            <x-forms.select label="Jenis Kelamin" name="sex">
                <option @selected(old('sex') == '') value="" selected disabled>Pilih JK</option>
                <option @selected(old('sex') == 'male') value="male">Laki-Laki</option>
                <option @selected(old('sex') == 'female') value="female">True</option>
            </x-forms.select>

            <div class="grid grid-cols-2 gap-2">
                <x-forms.input label="Tempat Lahir" name="birth_place" placeholder="Kota Palu"
                    value="{{ old('birth_place') }}" />
                <x-forms.input type="date" label="Tanggal Lahir" name="birth_date" value="{{ old('birth_date') }}" />
            </div>

            <x-forms.input label="Tindak Pidana" name="criminal_act" placeholder="Narkotika"
                value="{{ old('criminal_act') }}" />

            <x-forms.input label="Lama Pidana (Bulan)" name="sentence" placeholder="20" value="{{ old('sentence') }}" />

            <x-forms.input label="Sisa Pidana (Bulan)" name="residivisme" placeholder="20"
                value="{{ old('residivisme') }}" />

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('dshb.people.index') }}" class="btn btn-ghost">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
