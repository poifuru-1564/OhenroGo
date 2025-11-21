@extends('layout.app')
@section('content')


<div class="content">
    <div class="edit-container">
        <form method="POST" action="{{ route('edit') }}" class="edit-form">
            @csrf
            <h3 class="edit-form-header">Edit Profile</h3>

            <div class="edit-form-elements">
                <label for="name">Username</label><br>
                <input type="text" name="name" id="name" placeholder="{{ $user->name }}" value="{{ $user->name }}"><br>
            </div>

            <div class="edit-form-elements">
                <label for="bio">Bio</label> <br>
                <textarea name="bio" id="bio" cols="50" rows="5" placeholder="{{ $user->bio }}"></textarea><br>
            </div>

            @if ($user->role->name == 'Pilgrims')
                <div class="edit-form-elements">
                    <label>Starting Date / Completed Date</label><br>
                    <input type="date" name="startDate" placeholder="{{ $user->startDate }}" value="{{ $user->startDate }}"><span> ~ </span>
                    <input type="date" name="completedDate" placeholder="{{ $user->completedDate }}" value="{{ $user->completedDate }}" >
                </div>
                <div class="edit-form-elements">
                    <label for="location">Home Country</label><br>
                    <input type="text" name="location" id="location" placeholder="{{ $user->location }}"><br>
                    <sub><small> * This will be visible to other users.</small></sub>
                </div>
                <div class="edit-form-elements">
                    <label for="distance">Modify Total Distance Traveled</label><br>
                    <input type="number" step="0.01" name="distance" placeholder="current: {{ $user->distance }}">
                </div>

            @elseif ($user->role->name == 'Locals')
                <div class="edit-form-elements">
                    <label for="location">Your Area (Prefecture / City) </label><br>
                    <input type="text" name="location" id="location" placeholder="optional" value="{{ $user->location }}"><br>
                    <sub><small> * This will be visible to other users.</small></sub>
                </div>
                
            @else 
                <div class="edit-form-elements">
                    <label for="location">Where do you work? </label><br>
                    <input type="text" name="location" id="location" placeholder="hotel name" value="{{ $user->location }}"> <br>
                    <sub><small> * This will be visible other users.</small></sub>
                </div>
            @endif

            <button type="submit" class="btn edit-form-elements">Save</button>

            <br><br>
             @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="errorMessage">{{ $error }}</p> 
                @endforeach      
            @endif

        </form>
    </div>
</div>
@endsection