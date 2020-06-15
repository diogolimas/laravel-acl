@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
       
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Autor: {{$post->user()->first()->name}}</b>
            @can('update-post', $post)
            <a href="{{url('/post/'.$post->id.'/update')}}">Editar</a>
            @endcan
            <br>
        
    @empty
        <p>Nenhum post cadastrado!</p>
    @endforelse
</div>

@endsection

