@extends('auth.layouts')

@section('content')
<div class="container-profile">
    <div class="row">
        <div class="col-md-3">
            <!-- Sidebar with user profile picture and edit profile link -->
            <div class="card card-profile" style="    text-align: center;">
                
            <img src="{{ Auth::user()->profile_photo_url ? Auth::user()->profile_photo_url : URL::to('/assets/img/profile.png') }}" class="card-img-top" alt="Profile Picture">

                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                    <p class="card-text">Some user information or bio</p>
                    <a href="{{ route('edit-profile') }}" class="btn btn-grad">Edit Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Main content area for user posts, feed, etc. -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Feed</h5>
                    <!-- Add user feed content here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
