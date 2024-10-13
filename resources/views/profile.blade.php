<x-app-layout>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">


<p class="h5">User Information</p>
<hr>

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" value="{{ Auth::user()->name }}" class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25'>
        </div>

        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input name="full_name" type="text" value="{{ Auth::user()->full_name }}" disabled class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25'>
        </div>

        <div class="mb-3">
            <label for="matric_no" class="form-label">Matric Number</label>
            <input name="matric_no" type="text" value="{{ Auth::user()->matric_no }}" disabled class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25'>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="text" value="{{ Auth::user()->email }}" class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25'>
        </div>

        <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input name="department" type="text" value="{{ Auth::user()->department }}" disabled class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25'>
        </div>

        <div class="d-flex justify-content-end mt-5 mb-5">
            <button class="btn btn-primary">
                Save changes
            </button>
        </div>
    </form>

    <p class="mt-5 h5">Password Management</p>
    <hr>

    <!-- Password -->
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="update_password_current_password" class="form-label">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25' autocomplete="current-password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="update_password_password" class="form-label">New Password</label>
            <input id="update_password_password" name="password" type="password" class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25' autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class='form-control border border-secondary rounded shadow-sm focus:border-primary focus:ring-0 w-25' autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="d-flex justify-content-end mt-5">
            <button class="btn btn-primary">
                Save changes
            </button>
        </div>
    </form>

</x-app-layout>