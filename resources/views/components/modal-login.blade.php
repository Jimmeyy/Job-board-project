<div class="modal-wrapper modal-wrapper-auth modal-js modal-login-js">
    <div class="modal-main">
        <a href="{{ route('home') }}">
            <div class="modal-close modal-close-js"></div>
        </a>
        <h2 class="heading small">User login</h2>
        <p>Click to login with demo user</p>
        <form class="modal-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input name="email" type="text" class="input border-grey icon-user" placeholder="Enter email">
                        @error('email')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input name="password" type="password" class="input border-grey icon-password" placeholder="Enter password">
                        @error('password')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="modal-additional-bar">
                        <div class="input-wrapper">
                            <input type="checkbox" class="checkbox">
                            <label for="">Remember me</label>
                        </div>
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn auth">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>