@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.update',$post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Post</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Название поста"
                       value="{{ $post->title }}">
            </div>
            <div class="mb-0">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="post_content" class="form-label">Content</label>
                <textarea type="text" name="post_content" class="form-control" id="post_content"
                          placeholder="Введите содержимое поста"> {{ $post->post_content}} </textarea>
            </div>
            <div class="mb-0">
                @error('post_content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Фото"
                       value="{{ $post->image }}">
            </div>
            <div class="mb-3">
                <label for="categories" class="form-label">categories</label>
                <select name="category_id" class="form-select" aria-label="categories">
                    @foreach( $categories as $category)
                        @if( $category->id===$post->category_id)
                            <option selected value="{{ $category->id }}"> {{ $category->title }}</option>
                        @else
                            <option value="{{ $category->id }}"> {{ $category->title }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">tags</label>
                <select name="tags[]" class="form-select" multiple>
                    @foreach( $tags as $tag)
                        <option value=" {{ $tag->id }}"
                        @foreach( $post->tags as $postTag)
                            {{ $postTag->id === $tag->id ? 'selected':'' }}
                            @endforeach>
                            {{ $tag->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <div class="mb-3"></div>
        <div>
            <form action="{{ route('post.delete',$post->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary">Delete post</button>
            </form>
        </div>
    </div>
@endsection
