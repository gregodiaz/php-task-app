@extends('template')

@section('content')
    
    Welcome! go to

    <a href="{{ route('tasks.index') }}">
       Tasks
    </a>

@endsection
