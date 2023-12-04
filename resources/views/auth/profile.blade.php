@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- Sidebar with user profile picture and edit profile link -->
            <div class="card">
                <img src="{{ Auth::user()->profile_photo_url }}" class="card-img-top" alt="Profile Picture">
                <div class="card-body">
                    <!-- <h5 class="card-title">{{ Auth::user()->name }}</h5> -->
                    <p class="card-text">Some user information or bio</p>
                    <a href="{{ route('edit-profile') }}" class="btn btn-primary">Edit Profile</a>
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
<!-- @endsection -->
