@extends('layouts.app')


@section('content')

    {{-- <script>alert('12345')</script> --}}

    @if (count($people))
        <ul>
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @endif

@stop

@section('footer')

    <h1>Hi!</h1>

@stop