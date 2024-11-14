@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update',$post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Post</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Название поста" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="post_content" class="form-label">Content</label>
                <textarea type="text" name="post_content" class="form-control" id="post_content" placeholder="Введите содержимое поста"> {{ $post->post_content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Фото" value="{{ $post->image }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <div class="mb-3"></div>
       <div> <form action="{{ route('post.delete',$post->id) }}" method="post">
               @csrf
               @method('delete')
               <button type="submit" class="btn btn-primary">Delete post</button>
           </form>
       </div>
    </div>
@endsection

