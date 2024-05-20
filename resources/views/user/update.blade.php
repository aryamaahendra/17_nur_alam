@extends('components.layouts.dashboard')

@section('content')
    <div class="card w-full max-w-xl mx-auto bg-base-100 rounded shadow border">
        <form action="{{ route('dshb.user.update', ['m_user' => $user->id]) }}" method="POST" class="card-body"
            datatable="users">
            @csrf
            @method('PUT')

            <x-forms.input label="Name" name="name" placeholder="Nama Aku" value="{{ $user->name ?? old('name') }}" />

            <x-forms.input label="Username" name="username" placeholder="usernameku"
                value="{{ $user->username ?? old('username') }}" />

            <x-forms.input type="email" label="Email" name="email" placeholder="aku@mail.com"
                value="{{ $user->email ?? old('email') }}" />

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('dshb.user.index') }}" class="btn btn-ghost">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
