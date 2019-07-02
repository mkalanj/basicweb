@extends('layouts.appa')

@section('content')
  <h3>Kreiraj album</h3>
  {!!Form::open(['action' => 'AlbumsController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
    {{Form::text('name','',['placeholder' => 'Ime albuma'])}}
    {{Form::textarea('description','',['placeholder' => 'Opis albuma'])}}
    {{Form::file('cover_image')}}
    {{Form::submit('Potvrdi')}}
  {!! Form::close() !!}
@endsection
