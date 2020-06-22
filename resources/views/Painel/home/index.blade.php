@extends('Painel.templates.template')

@section('content')

<div class="relatorios">
    <div class="container">
        <ul class="relatorios row">
            @can('view_post')
            <li class="col-md-6 text-center  ">
                <a class="rounded" href="/painel/posts" >
                    <img src="{{url('assets/painel/imgs/noticias-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalPosts}}</h1>
                </a>
            </li>
            @endcan
            @can('adm')
            <li class="col-md-6 text-center ">
                <a class="rounded" href="/painel/roles">
                    <img src="{{url('assets/painel/imgs/funcao-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalRoles}}</h1>
                </a>
            </li>
            <li class="col-md-6 text-center ">
                <a class="rounded" href="/painel/permissions">
                    <img src="{{url('assets/painel/imgs/permissao-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalPermissions}}</h1>
                </a>
            </li>
            @endcan
            @can('user')
            <li class="col-md-6 text-center ">
                <a class="rounded" href="/painel/users">
                    <img src="{{url('assets/painel/imgs/perfil-acl.png')}}" alt="acl" class="logo-login">
                    
                    <h1>{{$totalUsers}}</h1>
                </a>
            </li>
            @endcan
        </ul>
    </div>
</div>
<!--Relatorios-->

@endsection