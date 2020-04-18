@extends('layouts.basic-layout')

@section('title', 'Single job')

@section('content')
<div class="job-page">
    {{-- hero section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row center-lg">
                <div class="col-xs-12 col-lg-10">
                    <div class="hero-section-content">
                        <h1 class="heading small white">Job title lorem ipsum</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Job header section --}}
    <section class="job-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-9">
                    <div class="job-header-main">
                        <div class="job-header-main-img">
                            {{-- company img here --}}
                        </div>
                        <div class="job-header-main-content">
                            <h3>Tera planer</h3>
                            <p>Sacramento, california</p>
                            <ul>
                                <li>Aplications 1</li>
                                <li>Post Date: 26.02.2020</li>
                                <li>Views 5683</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="job-header-btns">
                        <button class="btn">Apply for job</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Job main section --}}
    <section class="job-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <div class="job-main-content">
                        <div class="job-textblock">
                            <h3>Job description</h3>
                            <p>
                                Company is a 2016 Iowa City-born start-up that develops consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
                            </p>
                        </div>
                        <div class="job-textblock">
                            <h3>Required Knowledge, Skills, and Abilities</h3>
                            <ul>
                                <li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
                                <li>Proficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)</li>
                                <li>Cross-browser and platform testing as standard practice</li>
                                <li>Experience using Invision a plus</li>
                                <li> Experience in video production a plus or, at a minimum, a willingness to learn</li>
                            </ul>
                        </div>
                        <div class="job-textblock">
                            <h3>Education + Experience</h3>
                            <ul>
                                <li>Advanced degree or equivalent experience in graphic and web design</li>
                                <li>3 or more years of professional design experience</li>
                                <li>Direct response email experience</li>
                                <li>Ecommerce website design experience</li>
                                <li>Familiarity with mobile and web apps preferred</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="job-main-overview">
                        <h3>Job overview</h3>
                        <ul>
                            <li>
                                <h4>Offered salary</h4>
                                <p>15.000 - 20.000</p>
                            </li>
                            <li>
                                <h4>Location</h4>
                                <p>London</p>
                            </li>
                            <li>
                                <h4>Experience</h4>
                                <p>2 years</p>
                            </li>
                            <li>
                                <h4>Position</h4>
                                <p>Miner</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection