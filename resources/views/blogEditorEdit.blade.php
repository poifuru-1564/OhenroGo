@extends('layout.app')
@section('content')

<div class="content">
    <div class="filter-container">
        <!-- Categories-->
        <div class="filter-categories">
            <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="blog-card">

                    {{-- Prefecture --}}
                    <select name="prefecture_id" class="filter-select">
                        <option value="">---1. Select Prefecture---</option>
                        @foreach ($prefectures as $prefecture)
                            <option value="{{ $prefecture->id }}"
                                @selected(old('prefecture_id', $post->prefecture_id) == $prefecture->id)>
                                {{ $prefecture->name }}
                            </option>
                        @endforeach
                    </select>

                    {{-- Temple --}}
                    <select name="temple_id" class="filter-select">
                        <option value="">---2. Select Temple---</option>
                        @foreach ($temples as $temple)
                            <option value="{{ $temple->id }}"
                                @selected(old('temple_id', $post->temple_id) == $temple->id)>
                                {{ $temple->name }}
                            </option>
                        @endforeach
                    </select>

                    {{-- Status --}}
                    <select name="status_id" class="filter-select">
                        <option value="">---3. Select Status---</option>
                        @foreach ($status as $sts)
                            <option value="{{ $sts->id }}"
                                @selected(old('status_id', $post->status_id) == $sts->id)>
                                {{ $sts->name }}
                            </option>
                        @endforeach
                    </select>

                    {{-- Topic --}}
                    <select name="topic_id" class="filter-select">
                        <option value="">---4. Select Topic---</option>
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}"
                                @selected(old('topic_id', $post->topic_id) == $topic->id)>
                                {{ $topic->name }}
                            </option>
                        @endforeach
                    </select>
                    
                    <select class="filter-select" disabled>
                        <option value="">current status: {{ auth()->user()->role->name }}</option>
                    </select>

                    {{-- Blog body --}}
                    <div class="blog-body">

                        {{-- Title --}}
                        <div class="blog-title">
                            <h2>Title</h2>
                            <input type="text"
                                   name="title"
                                   value="{{ old('title', $post->title) }}">
                            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                        </div>

                        {{-- Image --}}
                        <div class="image">
                            <h2>Image</h2>

                            {{-- 画像がある場合は表示 --}}
                            @if ($post->photo_path)
                                <img src="{{ asset('storage/img/posts/' . $post->photo_path) }}"
                                     style="max-width: 250px; margin-bottom: 10px;">
                            @endif

                            {{-- 新しい画像をアップロードしたい場合 --}}
                            <input type="file" name="image">
                        </div>

                        {{-- Body --}}
                        <div class="blog-text">
                            <h2>Body</h2>
                            <textarea name="body">{{ old('body', $post->body) }}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
                        </div>
                    </div>

                    <input type="submit" value="Update"/>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
