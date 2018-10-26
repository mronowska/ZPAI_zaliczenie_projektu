@extends('layouts.app')

@section('content')
  <h1>Messages</h1>
  @if(count($messages)>0)
    @foreach($messages as $message)
      <ul class="list-group">
        <li class="list-group-item">Login: {{$message->login}}</li>
        <li class="list-group-item">E-Mail: {{$message->email}}</li>
        <li class="list-group-item">Wiadomość: {{$message->message}}</li>
      </ul>
    @endforeach
  @endif
@endsection



@section('sidebar')
  @parent
  <p>This is appended to the sidebar</p>
@endsection
