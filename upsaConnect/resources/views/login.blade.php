@extends('layout')
@section('title', 'Login')

@section('content')

    <form action="{{ route('login.post') }}" method="POST" class="max-w-sm mx-auto flex flex-col pb-10" style="width: 500px">
        @csrf
        <div class="mb-3">
            <label class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
            <input type="email" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="password">
        </div>

        <button type="submit" class="text-upsaBlue font-bold bg-white hover:bg-blue-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-3xl text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
</div>


@endsection
