@extends('layout.app')
@section('content')

{{-- profile section --}}
<div class="profile-outer-container">
  <div class="user-profile">
    <div class="prof-container">

      @if ($user->role->name == 'Pilgrims')
        <img src="{{ asset('img/pilgrim_icon.png') }}" alt="icon" class="prof-icon prof-elements">
      @endif

      @if ($user->role->name == 'Locals')
        <img src="{{ asset('img/local_icon.png') }}" alt="icon" class="prof-icon prof-elements"><br>
        <small>Local</small>
      @endif

      @if ($user->role->name == 'Hotel and Inn Owners')
        <img src="{{ asset('img/hotel_icon.png') }}" alt="icon" class="prof-icon prof-elements">  
      @endif

        <h2 class="prof-elements">{{ $user->name}}</h2>
        <p class="prof-elements">{{ $user->posts()->count()}} Posts</p>

        @if ($user->role->name == 'Pilgrims')
          @if ($user->location != null)
              <p class="prof-elements"><small>From: </small>{{ $user->location}}</p>
          @endif

          <div class="prof-dist prof-elements">
              <p >Total Distance: <span>{{ $user->distance }}</span> km</p>

            <form action="{{ route('distance') }}" method="POST" class="prof-elements dist-update">
              @csrf
              <label for="distance">Update Distance: <br>+</label>
              <input type="number" step="0.01" name="distance" class="dist-input"> km <br>
              <button class="profbtn" type="submit">Update</button>
            </form>
          </div>

          @if ($user->startDate != null)
            <div class="prof-dist prof-elements">
              <p style="margin-bottom: 8px;">Ohenro Start Date: <br>{{ $user->startDate }}</p>
              @if ($user->completedDate != null)
                <p>Ohenro Finish Date: <br>{{ $user->completedDate}}</p>
              @endif
            </div>
          @endif

        @endif

        @if ($user->role->name == 'Locals' && $user->location != null)
          <div class="prof-elements">
            <p>📍 {{ $user->location}} </p>
          </div>
        @endif

        @if ($user->role->name == 'Hotel and Inn Owners' && $user->location != null)
          <div class="prof-elements">
          <p>📍 {{ $user->location}} </p>
        </div>
        @endif

        <form action="{{ route('showEdit')}}" method="GET">
                @csrf
                <button :href="route('showEdit')" class="profbtn"
                onclick="event.preventDefault(); this.closest('form').submit()">
                                                    Edit Profile</button>
        </form>
    </div>
  </div>


  {{-- logged in users posts --}}
    <div class="blog-listing-content">

      {{-- user with no posts --}}
      @if ($user->posts()->count() == 0)
        <div class="blog-card no-post-card">
          <div class="blog-body no-post-body">
            <h4><a href="{{ route('posts.create') }}">Create</a> Your First Post !</h4>
          </div>
        </div>
        
      @else
        @foreach ($posts as $post)
          <div class="posts">
              <div class="prof-post-card">
                
                <div class="blog-card-header">
                  <div style="margin-left: 2.5rem">{{ $post->created_at }}</div>
                  <div style="margin-right: 1.5rem">
                    <button class="btn">Edit</button>
                    {{-- <button class="btn">Delete</button> --}}
                  </div>
                </div>

                <div class="blog-body prof-blog-body">
                  <h2 class="blog-title">{{ $post->title }}</h2>
                  <ul class="post-category-container">
                    <li class="post-category">{{ $post->temple->name}}</li>
                    <il class="post-category">{{ $post->prefecture->name }}</il>
                    <li class="post-category">{{ $post->status->name }}</li>
                    <li class="post-category">{{ $post->topic->name }}</li>
                  </ul>
                  <p class="blog-text">{{ $post->body }} </p>

                  @if ($post->photo_path != null)
                      <img
                        class="card-img-top"
                        src="{{ asset($post->photo_path) }}"
                        alt="Image"
                      />
                  @endif
                </div>
              </div>
          </div>
        @endforeach
      @endif

    </div>

</div>
@endsection