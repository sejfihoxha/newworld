@extends('layouts.admin')

@section('content')
<h1>Create Users</h1>
    {!!Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>'true']) !!}
    <div class="form-group">
    	{!!Form::label('name','Name')!!}
    	{!!Form::text('name',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
    	{!!Form::label('email','Email',['class' => 'control-label'])!!}
    	{!!Form::email('email',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    	{!!Form::label('role_id','Role',['class' => 'control-label'])!!}
    	{!!Form::select('role_id',[''=>'Choose a role',]+$roles,null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
    	{!!Form::label('is_active','Status',['class' => 'control-label'])!!}
        {!!Form::select('is_active',['1' => 'Active', '0' => 'Not Active'],0,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    	{!!Form::label('file','Photo',['class' => 'control-label'])!!}
    	{!!Form::file('file',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
    	{!!Form::label('password','Password')!!}
    	{!!Form::password('password',['class' => 'form-control'])!!}
    </div>
    <div class="form-group">
    	{!!Form::submit('Create User',['class'=>'btn btn-primary'])!!}
    </div>
    {!! Form::close() !!}
  @include('includes.form_errors') 
@endsection