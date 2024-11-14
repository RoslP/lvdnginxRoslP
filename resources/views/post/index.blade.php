@extends('layouts.main')
@section('content')
    <div>
        <div>
            @foreach($posts as $post)
              <a href="{{ route('post.show',$post->id)  }}"> {{ $post->id }}. {{ $post->post_content }} </a><br>
            @endforeach
        </div>
    </div>
@endsection

