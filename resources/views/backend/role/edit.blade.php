@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <p class="font-weight-bold">Create Role</p>
                    </div>
                    <div class="card-body">
                        {!! Form::model($role, ['route' => ['backend.role.update', $role->id]]) !!}
                        @include('backend.role.shared.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
