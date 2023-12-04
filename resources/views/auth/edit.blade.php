<!-- resources/views/profile/edit.blade.php -->

@extends('auth.layouts')

@section('content')
    <div class="container-edit">
        <h1>Edit Profile</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
                <br>
                <small id="redirect-message">Redirecting to home page in <span id="redirect-timer">5</span> seconds...</small>
            </div>
            <script>
                // Automatically redirect after 5 seconds
                let countdown = 5; // Initial countdown time

                function updateRedirectTimer() {
                    document.getElementById('redirect-timer').innerText = countdown;
                }

                setInterval(function(){
                    countdown--;

                    if (countdown <= 0) {
                        window.location.href = "{{ route('home') }}";
                    } else {
                        updateRedirectTimer();
                    }
                }, 1000);
            </script>

            <button type="button" class="btn btn-primary" onclick="instantRedirect()">Instant Redirect</button>

            <script>
                function instantRedirect() {
                    window.location.href = "{{ route('home') }}";
                }
            </script>

            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
        @endif

        <form method="post" action="{{ route('update-profile') }}">
            @csrf
            @method('post')
            <div class="mb-3">
        <label for="profile_photo" class="form-label">Profile Photo [Image functionality is not working.]</label>
        <input type="file" class="form-control" id="profile_photo" name="profile_photo" disabled >
    </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
            </div>

            <!-- Add more form fields for other profile information -->

            <button type="submit" class="btn btn-grad">Save Changes</button> <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection
