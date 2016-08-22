@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center welcome-header">
        <h1>Owensboro Parks &amp; Recreation</h1>
        <h3>Kentucky's &num;1 Sports Town!</h3>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-push-2">
            <div class="text-center">
                <h2>Upcoming Events</h2>
            </div>
        </div>
        <div class="col-md-2 col-md-pull-10 information">
            <h3>Information</h3>
            <ul class="info-list">
                <li><a href="http://www.owensboro.org/community-calendar/8/2016?embed=0">Calendar</a></li>
                <li><a href="#">Day Camps</a></li>
                <li><a href="#">Green Belt</a></li>
                <li><a href="golf">Golf Courses</a></li>
                <li><a href="#">Job Openings</a></li>
                <li><a href="#">Adult Leagues</a></li>
                <li><a href="#">Youth Leagues</a></li>
                <li><a href="#">Lessons</a></li>
                <li><a href="/amenities">Park Amenities</a></li>
            </ul>
        </div>   
    </div>
</div>

@stop