@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full max-w-xl mx-auto bg-base-100 rounded shadow border">
        <form action="{{ route('dshb.question.update', ['m_question' => $question->id]) }}" method="POST" class="card-body">
            @csrf
            @method('PUT')

            <x-forms.textarea label="Pertanyaan" name="question" placeholder="pertanyaa?"
                value="{{ old('question') ?? $question->question }}" />

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('dshb.question.index') }}" class="btn btn-ghost">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
