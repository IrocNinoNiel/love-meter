@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-shadow p-5 mt-3">
                <div class="card-body">
                    <div class="container">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-center"><h2>Find Love % Between</h2></li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col text-center"><b>Your Name</b></div>
                                    <div class="col text-center"><b>Partner's Name</b></div>
                                    <div class="w-100"></div>
                                    <form class="user text-center col mb-2 mt-2" action="{{ route('result.getResult')}}" method="POST">
                                        @csrf
                                        <div class="form-group row ">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input class="form-control form-control-user rounded-pill form-control-lg @error('firstname') border-danger @enderror" type="text" id="firstname" placeholder="Enter Your Name" name="firstname">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control form-control-user rounded-pill form-control-lg @error('secondname') border-danger @enderror" type="text" id="secondname" placeholder="Enter Partner's Name" name="secondname">
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <hr/>
                                            <button class="btn btn-primary rounded-pill">Calculate Love %</button>
                                        </div>
                                    </form>
                                  </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
