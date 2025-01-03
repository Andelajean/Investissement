@extends('admin.layouts')

@section('content')
    <h1>Mes Conversations</h1>
    <ul>
        @foreach($conversations as $conversation)
            <li><a href="{{ route('conversations.show', $conversation) }}">{{ $conversation->id }}</a></li>
        @endforeach
    </ul>
@endsection
