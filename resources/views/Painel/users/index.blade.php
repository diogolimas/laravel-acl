@extends('Painel.templates.template')
@section('content')
<!--Filters and actions-->
<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
    </div>
</div>
<!--Actions-->

<div class="clear"></div>

<div class="container">
    <h1 class="title">
        Listagem dos usuários
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>E-mail</th>
            <th width="200px">Actions</th>

        </tr>
        @forelse($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

            <td>
                <a href="{{url('/painel/user/$user->id/edit')}}" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="{{url('/painel/user/$user->id/delete')}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <td>
        <td colspan="90">
            <p>Don't exits users</p>
        </td>
        </td>
        @endforelse

    </table>

</div>
@endsection