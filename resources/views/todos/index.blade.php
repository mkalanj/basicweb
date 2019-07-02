@extends('layouts.appt')
@section('content')
  <h1>Todos</h1>
  @if(count($todos)>0)
  @foreach($todos as $todo)
  <div class="card bg-light p-3">
    <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a>
    <span class="table table-danger">{{$todo->due}}</span></h3>
  </div>
  @endforeach
  @endif
@endsection
