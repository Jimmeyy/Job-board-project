@extends('layouts.basic-layout')

@section('title', 'Home')

@section('content')
    {{-- Home page content here --}}

    <div class="home-page">
        {{-- hero section- --}}
        <section class="hero-section">
            <div class="container">
                <div class="row center-lg">
                    <div class="col-xs-12 col-lg-10"> 
                        <div class="hero-section-content">
                            <h1 class="heading white">The easiest way to get your new job </h1>
                            <h4 class="subheading purple">Find jobs, Employment & Career Opportunities</h4>
                            <div class="hero-section-form">
                                <div class="input-wrapper">
                                    <input type="text" class="input icon-keyboard" placeholder="Job title, keywords or company name">
                                </div>
                                <div class="input-wrapper">
                                    <input type="text" class="input icon-marker" placeholder="City, province or region">
                                </div>
                                <button type="submit" class="btn only-icon bg-purple"></button>
                            </div>
                            <div class="hero-section-bottom">
                                <p class="white">Or browse job offers by <button class="btn badge">category</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-section-arrow"></div>
        </section>

        {{-- categories secton --}}
        <section class="categories-section">
            <div class="container">
                <h2 class="heading small">Popular categories</h2>
                <h4 class="subheading grey">37 jobs live - 0 added today</h4>
                <div class="categories-section-content">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="category-box">
                                <div class="category-box-icon">
                                    <img src="images/icons/categories/design.svg" alt="category-icon">
                                </div>
                                <h3 class="box-heading">Design, Art & Multimedia</h3>
                                <h5 class="box-subheading">(22 open positions)</h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="category-box">
                                <div class="category-box-icon">
                                    <img src="images/icons/categories/education.svg" alt="category-icon">
                                </div>
                                <h3 class="box-heading">Education training</h3>
                                <h5 class="box-subheading">(22 open positions)</h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="category-box">
                                <div class="category-box-icon">
                                    <img src="images/icons/categories/finance.svg" alt="category-icon">
                                </div>
                                <h3 class="box-heading">Accounting / Finance</h3>
                                <h5 class="box-subheading">(22 open positions)</h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3">
                            <div class="category-box">
                                <div class="category-box-icon">
                                    <img src="images/icons/categories/hr.svg" alt="category-icon">
                                </div>
                                <h3 class="box-heading">Human resource</h3>
                                <h5 class="box-subheading">(22 open positions)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row center-xs">
                        <button class="btn white-bg">Browse all categories</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- Featured jobs section --}}
        <section class="featured-jobs">
            <div class="container">
                <div class="tabs-wrapper">
                    <ul class="tabs">
                        <li>Featured jobs</li>
                        <li class="is-active">Recent jobs</li>
                    </ul>
                </div>
                <div class="featured-jobs-content">
                    <div class="featured-jobs-box">
                        <h3 class="box-heading">Web designer / Developer</h3>
                        <h5 class="box-subheading blue">Massimo Artemisis</h5>
                        <div class="row no-margin between-xs middle-xs">
                            <h5 class="box-subheading dark-grey icon-left map-marker">Sacramento, California</h5>
                            <div class="row no-margin">
                                <div class="icon-box favorite margin-right"></div>
                                <div class="badge purple">Full time</div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-jobs-box">
                        <h3 class="box-heading">Marketing director</h3>
                        <h5 class="box-subheading blue">Tix dog</h5>
                        <div class="row no-margin between-xs middle-xs">
                            <h5 class="box-subheading dark-grey icon-left map-marker">Sacramento, California</h5>
                            <div class="row no-margin">
                                <div class="icon-box favorite margin-right"></div>
                                <div class="badge green-light">Full time</div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-jobs-box">
                        <h3 class="box-heading">C Developer (Senior) C .Net</h3>
                        <h5 class="box-subheading blue">StarHealith</h5>
                        <div class="row no-margin between-xs middle-xs">
                            <h5 class="box-subheading dark-grey icon-left map-marker">Sacramento, California</h5>
                            <div class="row no-margin">
                                <div class="icon-box favorite margin-right"></div>
                                <div class="badge pink">Full time</div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-jobs-box">
                        <h3 class="box-heading">Application Developer For Android</h3>
                        <h5 class="box-subheading blue">Altes Bank</h5>
                        <div class="row no-margin between-xs middle-xs">
                            <h5 class="box-subheading dark-grey icon-left map-marker">Sacramento, California</h5>
                            <div class="row no-margin">
                                <div class="icon-box favorite margin-right"></div>
                                <div class="badge purple">Full time</div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-jobs-box">
                        <h3 class="box-heading">Regional Sales Manager South east Asia</h3>
                        <h5 class="box-subheading blue">Media lab</h5>
                        <div class="row no-margin between-xs middle-xs">
                            <h5 class="box-subheading dark-grey icon-left map-marker">Sacramento, California</h5>
                            <div class="row no-margin">
                                <div class="icon-box favorite margin-right"></div>
                                <div class="badge purple">Full time</div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-jobs-box">
                        <h3 class="box-heading">Social Media and Public Relation Executive </h3>
                        <h5 class="box-subheading blue">Massimo Artemisis</h5>
                        <div class="row no-margin between-xs middle-xs">
                            <h5 class="box-subheading dark-grey icon-left map-marker">Sacramento, California</h5>
                            <div class="row no-margin">
                                <div class="icon-box favorite margin-right"></div>
                                <div class="badge green-dark">Full time</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row center-xs">
                    <button class="btn white-bg border-grey">Load more listings</button>
                </div>
            </div>
        </section>

        {{-- Download/enjoy section --}}
        <section class="enjoy-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-6">
                        <h2 class="heading small white align-left">Download & Enjoy</h2>
                        <p class="white">
                            Search, find and apply for jobs directly on your mobile device or desktop
                            Manage all of the jobs you have applied to from a convenience secure dashboard.
                        </p>
                        <div class="row enjoy-section-btns">
                            <div class="col-xs-12 col-sm-6">
                                <div class="download-btn apple">
                                    <p>App store</p>
                                    <p>Available now on the</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="download-btn android">
                                    <p>Google Play</p>
                                    <p>Get in on</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Companies we helped section --}}
        <section class="companies-section">
            <div class="container">
                <h2 class="heading small">Companies We've helped</h2>
                <p>Some of the companies we've helped recruit excellent applicants over the years.</p>
                <ul class="companies-section-content">
                    <li>
                        <img src="/images/icons/company-1.png" alt="company-logo">
                    </li>
                    <li>
                        <img src="/images/icons/company-2.png" alt="company-logo">
                    </li>
                    <li>
                        <img src="/images/icons/company-3.png" alt="company-logo">
                    </li>
                    <li>
                        <img src="/images/icons/company-4.png" alt="company-logo">
                    </li>
                    <li>
                        <img src="/images/icons/company-5.png" alt="company-logo">
                    </li>
                </ul>
            </div> 
        </section>

        {{-- How it work section --}}
        <section class="how-it-works">
            <div class="container">
                <h2 class="heading small">How it works</h2>
                <p>Each month, more than 7 million Jobhunt turn to website in their search for work, making over
                    160,000 applications every day.</p>
                <div class="row around-md">
                    <div class="col-xs-12 col-md-3">
                        <div class="how-it-works-box">
                            <div class="how-it-works-box-icon user-icon"></div>
                            <h3 class="box-heading"><strong>Add resume</strong></h3>
                            <p>Post a job to tell us about your project. We'll quickly 
                                match you with the right freelancers.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="how-it-works-box">
                            <div class="how-it-works-box-icon search-icon"></div>
                            <h3 class="box-heading"><strong>Search for jobs</strong></h3>
                            <p>Browse profiles, reviews, and proposals then 
                                interview top candidates. </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="how-it-works-box">
                            <div class="how-it-works-box-icon edit-icon"></div>
                            <h3 class="box-heading"><strong>Find crew</strong></h3>
                            <p>Use the Upwork platform to chat, share files, and
                                collaborate from your desktop or on the go.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection