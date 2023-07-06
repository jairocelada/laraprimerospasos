@extends('web.layout')

@section('content')
    <h1>Listado</h1>

    <x-web.blog.post.show :post="$post"/>

@endsection