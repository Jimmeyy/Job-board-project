@extends('layouts.basic-layout')

@section('title', 'Jobs list')

@section('content')
<div class="jobs-list-page">
    {{-- hero section --}}
    <section class="hero-section">
        <div class="container">
            <div class="row center-lg">
                <div class="col-xs-12 col-lg-10">
                    <div class="hero-section-content">
                        <h1 class="heading white">Explore Thousand Of Jobs</h1>
                        <div class="search-form">
                            <div class="input-wrapper">
                                <input type="text" class="input icon-keyboard" placeholder="Job title, keywords or company name">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" class="input icon-marker" placeholder="City, province or region">
                            </div>
                            <button type="submit" class="btn only-icon bg-purple"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- jobs list section --}}
    <section class="jobs-list-section">
        <div class="container">
            <div class="jobs-list-wrapper">
                <div class="jobs-list-header">
                    <h3>98 Jobs & Vacancies</h3>
                    <div class="jobs-filter-panel">
                        <span>Sort by</span>
                        <div class="input-wrapper margin-horizontal">
                            <div class="input dropdown border-grey icon-dropdown dropdown-js">
                                <input type="hidden" value="">
                                <span>Most recent</span>
                                <ul>
                                    <li data-value="most recent">Most recent</li>
                                    <li data-value="most popular">Most popular</li>
                                    <li data-value="most viewed">Most viewed</li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-wrapper margin-horizontal">
                            <div class="input dropdown border-grey icon-dropdown dropdown-js">
                                <input type="hidden" value="">
                                <span>12</span>
                                <ul>
                                    <li data-value="12">12</li>
                                    <li data-value="24">24</li>
                                    <li data-value="36">36</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jobs-list">
                    <div class="row">
                        {{-- <div class="col-xs-12 col-lg-4">
                            <div class="job-box">
                                <div class="job-box-header">
                                    <div class="badge pink">Full time</div>
                                    <div class="icon-box favorite margin-right"></div>
                                </div>
                                <div class="job-box-content">
                                    <h3>Web designer/Developer</h3>
                                    <h4>Massimo Artemisis</h4>
                                    <div class="job-box-footer">
                                        <span>Sacramento, California</span>
                                        <a href="#" class="job-box-btn">Apply now</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @foreach($jobs as $job)
                            <div class="col-xs-12 col-lg-4">
                                <div class="job-box">
                                    <div class="job-box-header">
                                        <div class="badge pink">{{ $job->workload }}</div>
                                        <div class="icon-box favorite margin-right"></div>
                                    </div>
                                    <div class="job-box-content">
                                        <h3>{{ $job->position }}</h3>
                                        <h4>Massimo Artemisis</h4>
                                        <div class="job-box-footer">
                                            <span>{{ $job->location }}</span>
                                            <a href="{{ url('single-job/'.$job->id) }}" class="job-box-btn">Apply now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="pagination-wrapper">
                <div class="pagination">
                    <ul class="pagination-main">
                        <li>
                            <a href="#" class="btn-pagination prev">
                                <span>Prev</span>
                            </a>
                        </li>
                        <li class="is-active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">...</a>
                        </li>
                        <li>
                            <a href="#">23</a>
                        </li>
                        <li>
                            <a href="#" class="btn-pagination next">
                                <span>Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection