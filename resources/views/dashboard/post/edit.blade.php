@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post: {{ $post->title }}</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method("PUT")
        @include('dashboard.fragment._form', ["task" => "edit"])
    </form>
@endsection