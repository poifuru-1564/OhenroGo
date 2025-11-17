@extends('layout.blogListing')
@section('posts-content')

<div class="post-container">
    <div class="blog-listing-content">
      <!-- Blog entries-->
      <!-- Blog post cards-->

      @foreach ($posts as $post)
        
        <div class="blog-card">
          <div class="blog-card-header">
            <div class="userID">{{ $post->user->name }}</div>
            <div class="date">{{ $post->created_at }}</div>
          </div>

          <div class="blog-body">
            <h2 class="blog-title">{{ $post->title }}</h2>
            <ul class="post-category-container">
              <li class="post-category">{{ $post->temple->name}}</li>
              <il class="post-category">{{ $post->prefecture->name }}</il>
              <li class="post-category">{{ $post->status->name }}</li>
              <li class="post-category">{{ $post->topic->name }}</li>
              <li class="post-category">{{ $post->user->role->name }}</li>
            </ul>
            <p class="blog-text">{{$post->body}}</p>

            @if ($post->photo_path != null)
            <img
              class="card-img-top"
              src="{{ asset($post->photo_path) }}"
              alt="Image"
            />
            @endif
          {{-- <div class="likes">Liked by</div> --}}
          </div>
        </div>
      @endforeach
  </div>
</div>
@endsection