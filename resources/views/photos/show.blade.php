@extends('layouts.appa')

@section('content')
  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a class="button secondary" href="/albums/{{$photo->album_id}}">Natrag na galeriju</a>
  <hr>
  <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <br><br>
  {!!Form::open(['action' => ['PhotoController@destroy', $photo->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Obrisi fotografiju', ['class' => 'button alert'])}}
  {!!Form::close()!!}
  <hr>
  <small>Size: {{$photo->size}}</small>
@endsection
