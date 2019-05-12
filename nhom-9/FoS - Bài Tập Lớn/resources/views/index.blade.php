@extends('layouts.home')

@section('main')

 {{--    @if (!is_null($purchased_courses))
    <div class="panel panel-info">
      <div class="panel-heading"><h4><strong>Khóa học</strong></h4></div>
    </div>
        <div class="row">

        @foreach($purchased_courses as $course)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <img src="{{ asset('uploads/'.$course->course_image) }}"></a>
                    <div class="caption">
                        <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                        </h4>
                        <p>{{ $course->description }}</p>
                    </div>
                    <div class="ratings">
                        <p>Progress: {{ Auth::user()->lessons()->where('course_id', $course->id)->count() }}
                            of {{ $course->lessons->count() }} lessons</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <hr />

    @endif --}}

    <div class="panel panel-info">
      <div class="panel-heading"><h4><strong>Tất cả đề thi</strong></h4></div>
    </div>
    <div class="row">
    @foreach($courses as $course)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
               <img src="{{ asset('uploads/'.$course->course_image) }}"></a>
                <div class="caption">
                    {{-- <h4 class="pull-right">${{ $course->price }}</h4> --}}
                    <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                    </h4>
                    <p>{{ $course->description }}</p>
                </div>
                <div class="ratings">
                    {{-- <p class="pull-right">Học viên: {{ $course->students()->count() }}</p> --}}
                    <p>
                        @for ($star = 1; $star <= 5; $star++)
                            @if ($course->rating >= $star)
                                <span class="glyphicon glyphicon-star"></span>
                            @else
                                <span class="glyphicon glyphicon-star-empty"></span>
                            @endif
                        @endfor
                    </p>
                </div>
            </div>
        </div>
    @endforeach
    </div>

@endsection