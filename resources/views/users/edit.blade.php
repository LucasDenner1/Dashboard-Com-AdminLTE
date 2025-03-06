@extends('layouts.default')

@section('page-title', 'Editar Usuário')

@section('content')

@session('status')
        <div class="alert alert-success" role="alert" >
            {{ $value }}
        </div>
@endsession

@include('users.parts.base-details')
<br>
@include('users.parts.profile')
@endsection
