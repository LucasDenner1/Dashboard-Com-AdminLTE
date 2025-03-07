@extends('layouts.default')

@section('page-title', 'Editar Usuário')

@section('content')

@session('status')
        <div class="alert alert-success" role="alert" >
            {{ $value }}
        </div>
@endsession
@can('updateRoles', \App\Models\User::class)
@include('users.parts.roles')
<br>
@endcan
@include('users.parts.base-details')
<br>
@include('users.parts.profile')
<br>
@include('users.parts.interests')

@endsection
