@extends('layouts.default')

@section('page-title', 'Usuários')

@section('page-actions')
    @can('edit', \App\Models\User::class)
        <a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar</a>
    @endcan
@endsection

@section('content')

@session('status')
        <div class="alert alert-success" role="alert" >
            {{ $value }}
        </div>
@endsession

<div class="d-flex justify-content-center p-2">
    <form action="{{ route('users.index') }}" method="GET" class="mb-3 w-100 w-md-50 w-lg-25">
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Buscar por nome ou e-mail..." value="{{ request()?->keyword }}">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </div>
    </form>
</div>


<table class="table table-striped table-bordered align-middle">
    <thead class="text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="text-center">{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-center">
                <div class="d-flex justify-content-center gap-2">

                    @can('edit', \App\Models\User::class)
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    @endcan

                    @can('destroy', \App\Models\User::class)
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                    @endcan
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{ $users->links() }}
@endsection
