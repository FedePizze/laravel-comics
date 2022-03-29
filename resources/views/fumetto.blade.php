@extends('layout.base')

@section('pageTitle', $fumetto['title'])

@section('content')

<div id="main">

    <div class="stripe">

        <div class="containerComic" id="load">
            <div class="label1">{{$fumetto['type']}}</div>
            <div class="label2">VIEW GALLER</div>
            <img class="imgComic" src="{{$fumetto['thumb']}}" :alt="{{$fumetto['title']}}">
        </div>

    </div>

    <div class="infoBox">
        <div class="leftInfo">
            <h2>{{$fumetto['title']}}</h2>
            <div class="greenBox">
                <div class="leftGreen">
                    <h4>U.S. Price:&nbsp<p>{{$fumetto['price']}}</p></h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div class="middleGreen"></div>
                <div class="rightGreen">
                    <h4>Check Availability</h4>
                </div>
            </div>
            <p class="description">{{$fumetto['description']}}</p>
        </div>

        <div class="rightInfo">
            <h4>ADVERTISMENT</h4>
            <img src="{{asset('img/aaddvv.jpg')}}" alt="">
        </div>
    </div>


</div>

@endsection

