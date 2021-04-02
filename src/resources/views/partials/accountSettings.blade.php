<div class="tab-pane fade show active" id="account" role="tabpanel"
     aria-labelledby="account">
    <h5>Change Email</h5>
    <form class="theme-form" method="post" action="{{ url('/change-email') }}">
        @csrf
        <div class="form-group">
            <label class="col-form-label">E-mail</label>
            <input class="form-control" type="email" name="email" id="email"
                   placeholder="example@domain.com"
                   value="{!! $userDetails->email !!}" required>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="col-form-label">Password</label>
            <input class="form-control" type="password" name="password" id="password"
                   placeholder="Enter your Password" required>
        </div>
        <div class="form-group mb-0 text-center">
            <button class="btn btn-primary" type="submit" id="changeEmailBtn">Save</button>
        </div>
    </form>
    <hr>
    <div class="login-main">
        <h5>Change Password</h5>
        <form class="theme-form" method="post" action="{{ url('/change-password') }}">
            @csrf
            <div class="form-group">
                <label for="currentPassword">Old Password</label>
                <input class="form-control" type="password" id="currentPassword"
                       name="currentPassword" placeholder="Current Password" required>
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input class="form-control" type="password" id="password"
                       name="password" placeholder="New Password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Repeat new Password</label>
                <input class="form-control" type="password" id="confirmPassword"
                       name="confirmPassword" placeholder="Confirm New Password" required>
            </div>
            <div class="form-group mb-0 text-center">
                <button class="btn btn-primary" type="submit" id="changePasswordBtn">Save</button>
            </div>
        </form>
    </div>
    <hr>
    <div>
        <h5>Account ID</h5>
        <p>It will help you with quick contact with our support staff.</p>
        <p>{!! $userDetails->account_id !!}</p>
    </div>
</div>
