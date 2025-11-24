@extends('layout.app')
@section('content')
<
<div class="content">
    <div class="filter-container">
        <!-- Categories-->
        <div class="filter-categories">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                <div class="blog-card">
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
                    
                    <div class="blog-body">
                        <div class="blog-title">
                            <h2>Title</h2>
                            <input type="text" name="title" placeholder="title(dd/mm/yyyy)" value="{{ old('title') }}">
                            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                        </div>
                        <div class="image">
                            <h2>Image</h2>
                            <input type="file" id="imageInput" name="image">
                            <img id="preview" style="max-width: 250px; margin-top: 10px;">

                        </div>
                        <div class="blog-text">
                            <h2>Body</h2>
                            <textarea name="body" placeholder="please write your blog here">{{ old('body') }}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
                        </div>
                    </div>
                    <input type="submit" value="store"/>
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