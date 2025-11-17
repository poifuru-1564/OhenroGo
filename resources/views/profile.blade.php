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
        <img src="{{ asset('img/local_icon.png') }}" alt="icon" class="prof-icon prof-elements">
      @endif

      @if ($user->role->name == 'Hotel and Inn Owners')
        <img src="{{ asset('img/hotel_icon.png') }}" alt="icon" class="prof-icon prof-elements">  
      @endif

      {{-- need logged in user, user->name, user->role->name, set icon that represents pilgrim, hotel, locals --}}
      {{-- limit the number of posts displayed to be the recent 10 posts, then move to the next page --}}
        <h2 class="prof-elements">{{ $user->name}}</h2>
        <p class="prof-elements">{{ $user->posts()->count()}} Posts</p>

        @if ($user->role->name == 'Pilgrims')
          <div class="prof-dist prof-elements">
            @if ($user->distance == null)
              <p >Total Distance: <br><span>No Record</span></p>
            @else
              <p >Total Distance: <span>{{ $user->distance }}</span></p>
            @endif

            <form action="{{ route('distance') }}" method="POST" class="prof-elements">
              @csrf
              <label for="distance">Update Total Distance: <br>+</label>
              <input type="number" step="0.01" name="distance" id="distance" class="dist-form"> km
              <button class="btn" type="submit">Add</button>
            </form>
          </div>
        @endif
        <button class="btn">Edit Profile</button>
    </div>
  </div>


  {{-- logged in users posts --}}
    <div class="blog-listing-content">

      @if ($user->posts()->count() == 0)
        <div class="blog-card no-post-card">
          <div class="blog-body no-post-body">
            <h4><a href="">Create</a> Your First Post !</h4>
          </div>
        </div>
        
      @endif

      @foreach ($posts as $post)
        <div class="posts">
            <div class="prof-post-card">
                {{-- Edit button / send post_id to the function that moves to the edit page so the url looks like /profile/edit-{post_id}
                <form method='POST' action="">
                        @csrf
                        <a :href="route('')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        Edit</a>
                    </form>--}}
              <div class="blog-card-header">
                <div style="margin-left: 2.5rem">{{ $post->created_at }}</div>
                <div style="margin-right: 1.5rem">
                  <button class="btn">Edit</button>
                  <button class="btn">Delete</button>
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
        </div>
      @endforeach


    </div>

</div>
@endsection