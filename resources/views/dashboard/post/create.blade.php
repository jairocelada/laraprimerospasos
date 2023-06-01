@extends('dashboard.layout')

@section('content')
    <h1>Crear Post</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @include('dashboard.fragment._form')
    </form>
@endsection