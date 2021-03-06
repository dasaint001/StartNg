@extends('layouts.tutor-dashboard')

@section('content')
<div class="content">
    <div class="card card-register">
        <div class="card-header">
            <h5 class="card-title">DETAILS</h5>
        </div>
        <div class="card-body">
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>TITLE: {{$course_content->title}}</h5>
                </div>

            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>details: {{$course_content->details}}</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>Assignment: {{$course_content->assignment}}</h5>
                </div>
            </div>
            <div class="row mt-2">
                <div>
                    <a class=" btn btn-info" href="{{route('course-content.edit', $course_content->id)}}" >Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection