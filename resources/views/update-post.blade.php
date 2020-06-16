@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="">
            <div class="form-group">
                <input type="text" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <textarea name="" id="" cols="30" class="form-control" rows="10">{{$post->description}}</textarea>
            </div>
            
        </form>
        
        
        <b>Autor: {{$post->user()->first()->name}}</b>

    
    </div>
    
@endsection

