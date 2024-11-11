@extends('layouts.main')
@section('content')
    <div>
        this is posts page
        <div>
            @foreach($posts as $post)
                {{ $post->title }} <br>
            @endforeach
        </div>

    </div>
@endsection
