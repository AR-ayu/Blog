@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5" style="font-size:50px;" >{{ config('app.name') }}</h1>
                <p style="color:#01338a; font-size:20px;">This awesome blog has many articles, click the button below to see them</p>
                <br>
                <a href="/blog" button class="button" style="vertical-align:middle"><span>Show Blog</span></button></a>
            </div>
        </div>
    </div>
@endsection