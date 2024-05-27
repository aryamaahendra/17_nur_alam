@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full max-w-2xl mx-auto bg-base-100 rounded shadow border">
        <form action="{{ route('dshb.dataset.update', ['m_dataset' => $dataset->id]) }}" method="POST" class="card-body">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-2 gap-4">
                <x-forms.input label="Nama Napi" name="name" placeholder="Jhon Doe"
                    value="{{ old('name') ?? $dataset->name }}" />

                <x-forms.select label="Class" name="class">
                    <option @selected(old('class') ?? $dataset->class == '') value="" selected disabled>Pilih Class</option>
                    <option @selected(old('class') ?? $dataset->class == '0') value="0">False</option>
                    <option @selected(old('class') ?? $dataset->class == '1') value="1">True</option>
                </x-forms.select>
            </div>

            <div class="overflow-x-auto border mt-6 rounded">
                @include('dataset.partials.questions', ['answers' => $answers])
            </div>

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('dshb.dataset.index') }}" class="btn btn-ghost">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
