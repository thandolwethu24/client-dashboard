@extends('layouts.layout')
@section('content')
    <div id="banner">
        <img src="images/pic01.jpg" alt="" class="image-full" />
    </div>
    <div id="welcome">
        <div class="title">
            <h2>{{ $user->name }}</h2>
            <span class="byline">You have been our client, since 12 Jan 2020. We appreciate the support! </span>
            <p> Ensure that your information is always updated, have a look at the below and pass if everything is up to date</p>
        </div>
        <div class="row">
            <div class="column" >
                <h2>Basic Info</h2>
                <p>Name: {{ $user->name }}</p>
                <p>Cell No: </p>
                <p>Home Tell:</p>
                <p>Work Tell:</p>
                <p>Email: {{ $user->email }}</p>
                <p>Secondary Email:</p>
                <p>Company:</p>
                <p>VAT:</p>
            </div>
            <div class="column" >
                <h2>My Address</h2>
                <p>Street Name:</p>
                <p>Suburb:</p>
                <p>City:</p>
                <p>Province:</p>
                <p>Postal Code:</p>
            </div>
        </div>
    <button class="button">
                Update
    </button>
    </div>
@endsection
