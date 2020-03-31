<header class="header">
    <div class="container">
        <div class="row middle-xs">
            <div class="col-xs-6 col-lg-2">
                <div class="header-logo">
                    <img src="images/logo.png" alt="logo">
                </div>
            </div>
            <div class="col-xs-6 col-lg-10">
                <div class="header-menu">
                    <div class="header-menu-mobile-close"></div>
                    <ul class="header-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Employers</a></li>
                        <li><a href="#">Candidates</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Pages</a></li>
                    </ul>
                    <ul class="header-auth">
                        @guest
                            <li>
                                <button class="header-auth-register modal-register-btn-js">Sign up</button>
                            </li>
                            <li>
                                <button class="header-auth-login modal-login-btn-js">Login</button>
                            </li>
                        @endguest
                        @auth
                            <li>
                                <button>User: {{ Auth::user()->login }}</button>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="header-auth-login">Logout</button>
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
                <div class="header-menu-mobile-btn">
                    <img src="images/icons/mobile-menu-white.svg" alt="mobile-menu-icon">
                </div>
            </div>
        </div>
    </div>
</header>