@extends('auth.layouts')

@section('content')
<div class="container-edit">
    <div class="row">
        <div class="col-md-4">
            <!-- Sidebar with user profile picture and edit profile link -->
            <div class="card bg-dark text-white">
                <img src="{{ Auth::user()->profile_photo_url }}" class="card-img-top rounded-circle mt-3" alt="Profile Picture">
                <div class="card-body">
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                    <p class="card-text">{{ Auth::user()->email }}</p>
                    <a href="{{ route('edit-profile') }}" class="btn btn-danger">Edit Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Main content area for user posts, feed, etc. -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Feed</h5>
                    <p class="card-text">Your personalized user feed content goes here.</p>
                    <!-- Add user feed content here -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
