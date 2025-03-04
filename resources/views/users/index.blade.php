@extends('layouts.default')

@section('page-title', 'Usuários')

@section('content')

<table class="table">
    <thead>
        @foreach ($users as $user)
        <tr>
          <th scope="col">{{ $user->id }}</th>
          <th scope="col">{{ $user->name }}</th>
          <th scope="col">{{ $user->email }}</th>
        </tr>
        @endforeach
    </thead>
</table>

@endsection
