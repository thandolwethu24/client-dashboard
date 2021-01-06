@extends('layouts.layout')
@section('content')
    <div id="featured">
        <div class="title">
            <h2>My Services </h2>
            <span class="byline">Services that I have purchased & currently active</span>
        </div>
        <ul class="style1">
            <li class="first">
                <p class="date"><a href="#">ADSL<b>05</b></a></p>
                <h3>Amet sed volutpat mauris</h3>
                <p>
                    @foreach($user->services as $service)
                    <a href="#">
                        {{ $service->name }}
                    </a>
                    @endforeach

                </p>
            </li>
            <li>
                <p class="date"><a href="#">FIBRE<b>03</b></a></p>
                <h3>Sagittis diam dolor amet</h3>
                <p><a href="#">Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum.</a></p>
            </li>
            <li>
                <p class="date"><a href="#">HOSTING<b>01</b></a></p>
                <h3>Amet sed volutpat mauris</h3>
                <p><a href="#">Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Etiam non felis. Donec ut ante.</a></p>
            </li>
            <li>
                <p class="date"><a href="#">Dec<b>31</b></a></p>
                <h3>Sagittis diam dolor amet</h3>
                <p><a href="#">Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Mauris quam enim, molestie. Donec leo, vivamus fermentum nibh in augue praesent congue rutrum.</a></p>
            </li>
        </ul>
    </div>
@endsection
