@extends('layout.base')

@section('pageTitle', 'Home')

@section('content')

<div id="main">

    <div class="stripe">

        <div class="containerComic" id="load">
            <img class="imgComic" src="{{$superman['thumb']}}" :alt="{{$superman['title']}}">
        </div>

    </div>

    <div class="infoBox">
        <div class="leftInfo">
            <h2>{{$superman['title']}}</h2>
            <p>{{$superman['description']}}</p>
        </div>

        <div class="rightImg">

        </div>
    </div>


</div>

@endsection

