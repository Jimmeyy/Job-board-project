<div class="modal-wrapper modal-js modal-register-js">
    <div class="modal-main">
        <div class="modal-close modal-close-js"></div>
        <h2 class="heading small">Sign up</h2>
        {{-- <p>Click to login with demo user</p> --}}
        <div class="modal-category">
            <button class="btn border-purple">Candidate</button>
            <button class="btn border-pink">Employer</button>
        </div>
        <form class="modal-form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input name="login" type="text" class="input border-grey icon-user" placeholder="Enter username">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input name="password" type="password" class="input border-grey icon-password" placeholder="Enter password">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input name="password_confirmation" type="password" class="input border-grey icon-password" placeholder="Repeat password">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input name="email" type="text" class="input border-grey icon-email" placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <div class="input dropdown border-grey icon-dropdown dropdown-js">
                            <input type="hidden" value="">
                            <span>Specialism</span>
                            <ul>
                                <li data-value="Doctor">Doctor</li>
                                <li data-value="It">IT</li>
                                <li data-value="Design">Design</li>
                                <li data-value="Freelance">Freelance</li>
                                <li data-value="Ziomo">Ziomo</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input type="text" class="input border-grey icon-phone" placeholder="Phone number">
                    </div>
                </div>
                <div class="col-xs-12">
                    <button type="submit" class="btn auth">Sign up</button>
                </div>
            </div>
        </form>
    </div>
</div>