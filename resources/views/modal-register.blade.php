<div class="modal-wrapper">
    <div class="modal-main modal-login">
        <div class="modal-close"></div>
        <h2 class="heading small">Sign up</h2>
        {{-- <p>Click to login with demo user</p> --}}
        <div class="modal-category">
            <button class="btn border-purple">Candidate</button>
            <button class="btn border-pink">Employer</button>
        </div>
        <form class="modal-form">
            <div class="row">
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input type="text" class="input border-grey icon-user" placeholder="Enter username">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input type="password" class="input border-grey icon-password" placeholder="Enter password">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input type="password" class="input border-grey icon-password" placeholder="Repeat password">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        <input type="text" class="input border-grey icon-email" placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="input-wrapper margin-vertical">
                        {{-- here --}}
                        <div class="input dropdown border-grey icon-dropdown">
                            <input type="hidden" value="">
                            <span>Specialism</span>
                            <ul>
                                <li>Doctor</li>
                                <li>IT</li>
                                <li>Design</li>
                                <li>Freelance</li>
                                <li>Ziomo</li>
                            </ul>
                        </div>
                        {{-- here --}}
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