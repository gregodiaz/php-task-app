@extends('template')

@section('content')

@foreach($tasks as $task)

<a href="{{ route('detail', ["task" => $task->slug]) }}">
    <div class="bg-neutral-400 text-neutral-900 m-4 p-3">
        <div class="flex justify-between">
            <h1 class="text-3xl">{{ $task->title }}</h1>
            <p class="text-neutral-800 text-xl">{{ $task->client->business_name }}</p>
        </div>

        <div class="flex justify-between">
            <p class="text-neutral-600 text-m">{{ $task->user->name }}</p>
            <p class="text-neutral-700 text-s">{{ $task->created_at->format('d/m/y - h:i') }}</p>
        </div>

        </a>
    </div>
</a>

@endforeach

<div class="text-neutral-900 mb-2 mx-4 px-3">
    {{$tasks->links();}}
</div>

@endsection
