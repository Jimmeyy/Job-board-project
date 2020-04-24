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
                        <h1 class="heading small white">Position: {{ $job->position }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        {{-- Job header section --}}
        <section class="job-header">
            <div class="row">
                <div class="col-xs-12 col-lg-9">
                    <div class="job-header-main">
                        <div class="job-header-main-img">
                            {{-- company img here --}}
                        </div>
                        <div class="job-header-main-content">
                            <h3>Tera planer</h3>
                            <p class="small with-icon icon-location-purple">{{ $job->location }}</p>
                            <ul>
                                <li class="small with-icon icon-aplications-purple">Aplications {{ $job->aplications_amount }}</li>
                                <li class="small with-icon icon-calendar-purple">Post Date: {{ $job->created_at }}</li>
                                {{-- <li class="small with-icon icon-views-purple">Views 5683</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-3">
                    <div class="job-header-btns">
                        <button class="btn job-apply">Apply for job</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- Job main section --}}
        <section class="job-main">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <div class="job-main-content">
                        <div class="job-textblock">
                            <h3>Job description</h3>
                            <p>
                                {{ $job->description }}
                            </p>
                        </div>
                        <div class="job-textblock">
                            <h3>Required Knowledge, Skills, and Abilities</h3>
                            <ul>
                                <li>{{ $job->required_skills }}</li>
                            </ul>
                        </div>
                        <div class="job-textblock">
                            <h3>Education + Experience</h3>
                            <ul>
                                <li>{{ $job->nice_to_have_skills }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="job-main-overview">
                        <h3>Job overview</h3>
                        <ul>
                            <li class="icon-position-purple">
                                <h4>Job category</h4>
                                <p class="small">{{ $job->category->name }}</p>
                            </li>
                            <li class="icon-money-purple">
                                <h4>Offered salary</h4>
                                <p class="small">{{ $job->salary_start }} - {{ $job->salary_end }} pln</p>
                            </li>
                            <li class="icon-location-purple">
                                <h4>Location</h4>
                                <p class="small">{{ $job->location }}</p>
                            </li>
                            <li class="icon-experience-purple">
                                <h4>Experience</h4>
                                <p class="small">{{ $job->min_experience }} years</p>
                            </li>
                            <li class="icon-position-purple">
                                <h4>Position</h4>
                                <p class="small">{{ $job->position }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>


</div>
@endsection