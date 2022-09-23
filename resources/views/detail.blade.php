@extends('template')

@section('content')

<div class="bg-gray-300 text-gray-900 m-4 p-3">
    <div class="text-3xl">
        <h1> {{ $task->title }} </h1>
    </div>



    <div class="flex justify-between">
        <p class="text-gray-600 text-m"> {{ $task->user->name }} </p>
        <p class="text-gray-700 text-s"> {{ $task->created_at->format('d/m/y') }} </p>
    </div>

    </a>
</div>
</div>


@foreach($comments as $comment)

@if($comment->type->description === 'Action'){{ $bg = 'red' }}
@elseif($comment->type->description === 'Comment'){{ $bg = 'orange' }}
@else {{ $bg = 'cyan' }}
@endif

<div class="bg-{{$bg}}-500/50 text-gray-900 m-4 p-3">
    <div class="text-3xl pb-2">
        <h1 class="pb-2"> {{ $comment->description }} </h1>
        <p class="text-gray-200 text-m"> {{ $comment->user->name }} </p>
    </div>

    <div class="flex justify-between">
        <p class="text-gray-300 text-m"> {{ $comment->type->description }} </p>
        <p class="text-gray-200 text-s"> {{ $comment->created_at->format('d/m/y - h:i') }} </p>
    </div>
</div>

@endforeach


@endsection
