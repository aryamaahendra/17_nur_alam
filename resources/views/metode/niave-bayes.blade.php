@extends('components.layouts.dashboard')

@section('content')
    @if (session()->has('new_class'))
        <div role="alert" @class([
            'alert w-full max-w-2xl mx-auto mb-4',
            'alert-error' => session('new_class') == 0,
            'alert-success' => session('new_class') == 1,
        ])>
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Error! napi tergolong dalam class {{ session('new_class') }}.</span>
        </div>
    @endif

    <div class="card w-full max-w-2xl mx-auto bg-base-100 rounded shadow border">
        <div class="card-body p-0">
            <div class="flex items-center justify-between p-4">
                <div class="flex items-center gap-1">
                    <form action="{{ route('dshb.metode.naivebayes.proses') }}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-warning rounded">
                            <span>TRAIN NAIVE BAYES</span>
                            <x-icons.view class="w-5 h-5 stroke-current" />
                        </button>
                    </form>
                </div>

                <div class="flex items-center gap-1">
                </div>
            </div>

            <form action="{{ route('dshb.metode.naivebayes.predict') }}" method="POST" class="px-4 mb-4">
                @csrf

                <div class="overflow-x-auto border rounded mb-4">
                    @include('dataset.partials.questions')
                </div>

                <x-forms.select label="Pilih Narapidana" name="people_id">
                    <option @selected(old('people_id') == '') value="" selected disabled>Pilih NAPI</option>
                    @forelse ($peoples as $people)
                        <option @selected(old('people_id') == $people->id) value="{{ $people->id }}">
                            {{ $people->name }}
                        </option>
                    @empty
                    @endforelse
                </x-forms.select>

                <div class="flex justify-between items-center mt-4">
                    <div class="">
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-primary rounded">
                            <span>PREDICT</span>
                            {{-- <x-icons.view class="w-5 h-5 stroke-current" /> --}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
