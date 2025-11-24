@extends('layout.app')
@section('content')

{{-- Edit Post --}}

<div class="content">
    <div class="editPost-container">
        <!-- Categories-->
        <h1 class="createNew-header">Edit</h1>
            <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="blog-card">
                    <div class="select-container">
                        <h5 class="select-container-header">Select All</h5>

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

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="errorMessage" style="margin: 0.5rem;">{{ $error }}</p> 
                            @endforeach      
                        @endif

                    </div>

                    {{-- Blog body --}}
                    <div class="blog-body">

                        {{-- Title --}}
                        <div class="blog-title">
                            <h2 class="textbox-3-label">Title</h2>
                            <input type="text" class="textbox-title-3"
                                   name="title"
                                   value="{{ old('title', $post->title) }}">
                            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                        </div>
                        {{-- Body --}}
                        <div class="blog-text newPost-body">
                            <h2 class="textbox-3-label">Body</h2>
                            <textarea name="body" class="textbox-3" rows="10">{{ old('body', $post->body) }}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
                        </div>
                        {{-- Image --}}
                        <div class="image">
                            <h2 class="textbox-3-label">Image</h2>

                            {{-- show if there's a uploaded img--}}
                            @if ($post->photo_path)
                                <img id="oldImage" class="card-img-top" src="{{ asset($post->photo_path) }}"alt="Image"/>
                            @endif

                            {{-- upload new img --}}
                            <input type="file" id="imageInput" name="image">
                            <img id="preview" style="max-width: 250px; margin-top: 10px;">
                        </div>


                    </div>

                    <input type="submit" value="Update" class="btn" style="margin-top: 20px;"/>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
document.getElementById('imageInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('preview');
    const oldImage = document.getElementById('oldImage');
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview').src = e.target.result;
            if (oldImage) oldImage.style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
});
</script>
@endsection
