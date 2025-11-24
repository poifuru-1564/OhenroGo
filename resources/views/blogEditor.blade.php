@extends('layout.app')
@section('content')


{{-- Create new Post --}}

<div class="content">
    <div class="filter-container">
        <!-- Categories-->
        <div class="filter-categories">
            <h2 class="createNew-header">Create New Post</h2>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="newPostForm">
                <div class="blog-card">
                    <div class="select-container">
                        <h5 class="select-container-header">Select All</h5>
                        @csrf
                        <select name="prefecture_id" class="filter-select">
                        <option value="">---1. Select Prefecture---</option>
                        @foreach ($prefectures as $prefecture)
                            <option value="{{ $prefecture->id }}">{{ $prefecture->name}}</option>
                        @endforeach
                        </select>

                        <select name="temple_id" class="filter-select">
                            <option value="">---2. Select Temple---</option>
                            @foreach ($temples as $temple)
                                <option value="{{ $temple->id }}">{{ $temple->name}}</option>
                            @endforeach
                        </select>
                        <select name="status_id" class="filter-select">
                            <option value="">---3. Select Status---</option>
                            @foreach ($status as $status)
                                <option value="{{ $status->id }}">{{ $status->name}}</option>
                            @endforeach
                        </select>

                        <select name="topic_id" class="filter-select">
                        <option value="">---4. Select Topic---</option>
                        @foreach ($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->name}}</option>
                        @endforeach
                        </select>
                        <select class="filter-select">
                        <option value="">current status: {{ auth()->user()->role->name }}</option>
                            
                        </select>

                         @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="errorMessage" style="margin: 0.5rem;">{{ $error }}</p> 
                            @endforeach      
                        @endif
                    </div>
                    
                    <div class="blog-body">
                        <div class="blog-title">
                            <h2 class="textbox-3-label">Title</h2>
                            <input type="text" class="textbox-title-3"name="title" placeholder="Title (dd/mm/yyyy)" value="{{ old('title') }}">
                            <p class="errorMessage" style="color:red; margin-top: 0.5rem;">{{ $errors->first('title') }}</p>
                        </div>
                        <div class="blog-text newPost-body">
                            <h2 class="textbox-3-label">Body</h2>
                            <textarea name="body" class="textbox-3" placeholder="please write your blog here" rows="6">{{ old('body') }}</textarea>
                            <p class="errorMessage" style="color:red; margin-top: 0.5rem;">{{ $errors->first('body') }}</p>
                        </div>
                            <div class="image">
                            <h2 class="textbox-3-label">Image</h2>
                            <input type="file" id="imageInput" name="image">
                            <img id="preview" style="max-width: 250px; margin-top: 10px;">

                        </div>
                    </div>
                    <input type="submit" value="Share" class="btn" style="margin-top: 10px"/>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.getElementById('imageInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});
</script>
@endsection