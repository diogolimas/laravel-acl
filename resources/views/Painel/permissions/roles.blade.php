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
        Role: <b>
            {{$permission->name}}
        </b>
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Label</th>
            <th width="200px">Actions</th>

        </tr>
        @forelse($roles as $role)
        <tr>
            <td>{{$role->name}}</td>
            <td>{{$role->label}}</td>

            <td>
               
                <a href="{{url('/painel/role/'.$role->id.'/delete')}}" class="btn btn-outline-success">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="{{url('/painel/role/'.$role->id.'/permission')}}" class="delete">
                    <i class="fa fa-lock"></i>
                </a>
            </td>
        </tr>
        @empty
        <td>
        <td colspan="90">
            <p>Don't exits roles</p>
        </td>
        </td>
        @endforelse

    </table>

</div>
@endsection