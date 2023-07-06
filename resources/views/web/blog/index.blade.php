@extends('web.layout')

@section('content')
    <h1>Listado</h1>

    <x-web.blog.post.index :posts="$posts">
        <h1>Listado Principal de Posts</h1>

        @slot('header')
            <h1>Listado Principal de Posts</h1> 
        @endslot

        @slot('footer')
            <footer>
                Pie de página
            </footer>
        @endslot

        @slot('extra', 'Extrañamente demente')

    </x-web.blog.post.index>
@endsection