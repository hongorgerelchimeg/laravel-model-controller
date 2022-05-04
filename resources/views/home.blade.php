@extends('template.layout')
@section('title', 'Movies')
@section('content')
    @foreach ($movies as $movie)
        <div class="card">
            <h3>
               title: {{$movie['title']}}
            </h3>
            <h3>
                original title: {{$movie['original_title']}}
             </h3>
             <p>
                 nationality: {{$movie['nationality']}}
             </p>
             <p>
                date:  {{$movie['date']}}
             </p>
             <p>
                vote:  {{$movie['vote']}}
             </p>
        </div>
    @endforeach
@endsection
