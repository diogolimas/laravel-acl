@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
        @can('update-post', $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Autor: {{$post->user()->first()->name}}</b>
            <a href="{{url('/post/'.$post->id.'/update')}}">Editar</a>
            <br>
        @endcan
    @empty
        <p>Nenhum post cadastrado!</p>
    @endforelse
</div>

@endsection

