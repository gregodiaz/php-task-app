@extends('template')

@section('content')

@foreach($tasks as $task)

<div class="bg-neutral-400 text-neutral-900 m-4 p-3">
    <a href="{{ route('detail', ["task" => $task->slug]) }}">

        <div class="text-3xl">
            <h1> {{ $task->title }} </h1>
        </div>

        <div class="flex justify-between">
            <p class="text-neutral-800 text-m"> {{ $task->user->name }} </p>
            <p class="text-neutral-700 text-s"> {{ $task->created_at->format('d/m/y') }} </p>
        </div>

    </a>
</div>

@endforeach

<div class="bg-neutral-400 text-neutral-900 mb-2 mx-4 px-3">

    {{$tasks->links();}}

</div>

@endsection
