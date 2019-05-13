@extends('layouts.home')

@section('main')

{{- Hiển thị khóa học các môn học của đề thi-}}
    <div class="panel panel-info">
      <div class="panel-heading"><h4><strong>Tất cả đề thi</strong></h4></div>
    </div>
    <div class="row">
    @foreach($courses as $course)
        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
            
            {{- Hiển thị hình ảnh khóa học các môn học của đề thi-}}
            
               <img src="{{ asset('uploads/'.$course->course_image) }}"></a>
                <div class="caption">
                    {{-- <h4 class="pull-right">${{ $course->price }}</h4> --}}
                    <h4><a href="{{ route('courses.show', [$course->slug]) }}">{{ $course->title }}</a>
                    </h4>
                    <p>{{ $course->description }}</p>
                </div>
                <div class="ratings">
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
