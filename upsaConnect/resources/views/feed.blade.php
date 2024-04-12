@extends('layout')
@section('title', 'Feed')

@section('content')
    @auth
    {{auth()->user()}}
    @endauth
@endsection

