@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full max-w-xl mx-auto bg-base-100 rounded shadow border">
        <form action="{{ route('dshb.user.store') }}" method="POST" class="card-body" datatable="users">
            @csrf
            @method('POST')

            <x-forms.input label="Name" name="name" placeholder="Nama Aku" value="{{ old('name') }}" />

            <x-forms.input label="Username" name="username" placeholder="usernameku" value="{{ old('username') }}" />

            <x-forms.input type="email" label="Email" name="email" placeholder="aku@mail.com"
                value="{{ old('email') }}" />

            <div class="grid grid-cols-2 gap-2">
                <x-forms.input type="password" label="Password" name="password" placeholder="****"
                    value="{{ old('password') }}" />

                <x-forms.input type="password" label="Confirm Password" name="password_confirmation" placeholder="****"
                    value="{{ old('password_confirmation') }}" />
            </div>

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('dshb.user.index') }}" class="btn btn-ghost">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
