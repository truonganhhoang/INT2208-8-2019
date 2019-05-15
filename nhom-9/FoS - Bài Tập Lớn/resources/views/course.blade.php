@extends('layouts.home')

@section('main')

    <h2>{{ $course->title }}</h2>

    @if ($purchased_course)
        Rating: {{ $course->rating }} / 5
        <br />
        <b>Rate the course:</b>
        <br />
        <form action="{{ route('courses.rating', [$course->id]) }}" method="post">
            {{ csrf_field() }}
            <select name="rating">
                <option value="1">1 - Awful</option>
                <option value="2">2 - Not too good</option>
                <option value="3">3 - Average</option>
                <option value="4" selected>4 - Quite good</option>
                <option value="5">5 - Awesome!</option>
            </select>
            <input type="submit" value="Rate" />
        </form>
        <hr />
    @endif

    <p>{{ $course->description }}</p>




    @foreach ($course->publishedLessons as $lesson)
        <a style="font-size: 15px" href="{{ route('lessons.show', [$lesson->course_id, $lesson->slug]) }}">{{ $lesson->title }}</a>
        <p>{{ $lesson->short_text }}</p>
        <hr />
    @endforeach

@endsection