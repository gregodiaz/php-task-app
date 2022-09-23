@extends('template')

@section('content')

<div class="bg-neutral-400 text-neutral-900 m-4 p-3">
    <div class="text-3xl">
        <h1> {{ $task->title }} </h1>
    </div>

    <div class="flex justify-between">
        <p class="text-neutral-600 text-m"> {{ $task->user->name }} </p>
        <p class="text-neutral-700 text-s"> {{ $task->created_at->format('d/m/y') }} </p>
    </div>

    </a>
</div>
</div>

@foreach($comments as $comment)

<div class="bg-neutral-700 text-neutral-900 m-4 p-3">

    <div class="text-3xl pb-2">
        <h1 class="pb-2"> {{ $comment->description }} </h1>
        <p class="text-neutral-200 text-m"> {{ $comment->user->name }} </p>
    </div>

    <div class="
        flex justify-between p-2 
        bg-gradient-to-r 
        from-{{$colors[$comment->type->description]}}-500/30 
        via-neutral-700 
        to-neutral-700 
    ">
        <p class="text-neutral-300 text-m"> {{ $comment->type->description }} </p>
        <p class="text-neutral-200 text-s"> {{ $comment->created_at->format('d/m/y - h:i') }} </p>
    </div>

</div>

@endforeach

@endsection
