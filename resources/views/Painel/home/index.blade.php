@extends('Painel.templates.template')

@section('content')

<div class="relatorios">
    <div class="container">
        <ul class="relatorios">
            <li class="col-md-6 text-center">
                <a href="">
                    <img src="{{url('assets/painel/imgs/noticias-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalPosts}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="">
                    <img src="{{url('assets/painel/imgs/funcao-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalRoles}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="">
                    <img src="{{url('assets/painel/imgs/permissao-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalPermissions}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center">
                <a href="">
                    <img src="{{url('assets/painel/imgs/perfil-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalUsers}}</h1>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--Relatorios-->

@endsection