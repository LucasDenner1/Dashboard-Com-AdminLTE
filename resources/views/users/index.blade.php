@extends('layouts.default')

@section('page-title', 'Usuários')

@section('page-actions')
    <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar</a>
@endsection

@section('content')

@session('status')
        <div class="alert alert-success" role="alert" >
            {{ $value }}
        </div>
@endsession

<form action="{{ route('users.index') }}" method="GET" class="mb-3" style="width: 300px">
    <div class="input-group">
        <input type="text" name="keyword" class="form-control" placeholder="Pesquise por seu nome ou email" value="{{ request()?->keyword }}">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
          <th scope="col">{{ $user->id }}</th>
          <th scope="col">{{ $user->name }}</th>
          <th scope="col">{{ $user->email }}</th>
          <td>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" >Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}
@endsection
