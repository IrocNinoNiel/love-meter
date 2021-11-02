@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-shadow p-5 mt-3">
                <div class="card-body">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col">
                                <p class="lead">Percentage of love between <span class="text-danger">{{$results->fname}}</span> and <span class="text-danger">{{$results->sname}}</span></p>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col">
                                <h1 class="display-1 text-danger">{{$results->percentage}}</h1>
                            </div>
                        </div>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <p class="font-italic">{{$results->result}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center mt-3">
                            <div class="col">
                                <p class="font-italic">{{$qoutes}}</p>
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col">
                                <div class="fb-share-button" data-href="http://localhost:8000/result" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fresult&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                            </div>
                            <div class="col">
                                <a href="/" class="btn btn-secondary">Go back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="ZmGijtOB"></script>
@endsection
