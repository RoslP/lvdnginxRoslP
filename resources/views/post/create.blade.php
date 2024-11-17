@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Post</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Название поста"
                       value="{{ old('title') }}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="post_content" class="form-label">Content</label>
                <textarea type="text" name="post_content" class="form-control" id="post_content"
                          placeholder="Введите содержимое поста"> {{ old('post_content') }}</textarea>
                @error('post_content')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Фото"
                       value="{{ old('image') }}">
            </div>
            <div class="mb-3">
                <label for="categories" class="form-label">categories</label>
                <select name="category_id" class="form-select" aria-label="categories">
                    @foreach( $categories as $category)
                        <option value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }} >
                            {{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select name="tags[]" class="form-select" multiple>
                    @foreach( $tags as $tag)
                        <option value="{{ $tag->id }}"> {{ $tag->title }} </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
