@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full max-w-xl mx-auto bg-base-100 rounded shadow border">
        <form action="{{ route('dshb.people.update', ['m_people' => $people->id]) }}" method="POST" class="card-body">
            @csrf
            @method('PUT')

            <x-forms.input label="Name" name="name" placeholder="Nama Aku" value="{{ old('name') ?? $people->name }}" />

            @php
                $sexval = old('sex') ?? $people->sex;
            @endphp
            <x-forms.select label="Jenis Kelamin" name="sex">
                <option @selected($sexval == '') value="" selected disabled>Pilih JK</option>
                <option @selected($sexval == 'male') value="male">Laki-Laki</option>
                <option @selected($sexval == 'female') value="female">True</option>
            </x-forms.select>

            <div class="grid grid-cols-2 gap-2">
                <x-forms.input label="Tempat Lahir" name="birth_place" placeholder="Kota Palu"
                    value="{{ old('birth_place') ?? $people->birth_place }}" />

                <x-forms.input type="date" label="Tanggal Lahir" name="birth_date"
                    value="{{ old('birth_date') ?? $people->birth_date }}" />
            </div>

            <x-forms.input label="Tindak Pidana" name="criminal_act" placeholder="Narkotika"
                value="{{ old('criminal_act') ?? $people->criminal_act }}" />

            <x-forms.input label="Lama Pidana (Bulan)" name="sentence" placeholder="20"
                value="{{ old('sentence') ?? $people->sentence }}" />

            <x-forms.input label="Sisa Pidana (Bulan)" name="residivisme" placeholder="20"
                value="{{ old('residivisme') ?? $people->residivisme }}" />

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('dshb.people.index') }}" class="btn btn-ghost">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
