@extends('layout.base')

@section('pageTitle', $fumetto['title'])

@section('content')

<div id="main">

    <div class="stripe">

        <div class="containerComic" id="load">
            <div class="lable1">{{$fumetto['type']}}</div>
            <div class="lable2">VIEW GALLER</div>
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
                <div class="rightGreen"></div>
            </div>
            <p>{{$fumetto['description']}}</p>
        </div>

        <div class="rightInfo">

        </div>
    </div>


</div>

@endsection

