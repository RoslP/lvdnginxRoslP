@extends('layouts.main')
@section('content')
    <div>
        <div>
            {{ $post->title }}<br>
            {{ $post->post_content }}
        </div>
    </div>
    <div class="row">
        <div class="col-1"> <a href="{{ route('post.index') }}" class=""> Go back </a></div>
        <div class="col-1"> <a href="{{ route('post.edit',$post->id) }}" > Изменить </a></div>
    </div>
@endsection

