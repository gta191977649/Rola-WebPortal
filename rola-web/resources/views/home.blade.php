@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
        <!-- Side bars -->
        <div class="col-3">
            @include('nav')
        </div>
        <!-- main -->
        <div class="col-9">
            <div class="card">
                <h5 class="card-header">Rora Management</h5>
                <div class="card-body">
                    <h1>Search</h1>
                    <form class="mb-3">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" class="form-control" placeholder="Search Rola ID or custom rola name">
                            </div>
                            <div class="col-2">
                                <button type="button" style="width:100%;" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <h1>Rora endpoints</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="card bg-light mb-3">
                                    <div class="card-body" style="display: flex; justify-content:center;align-content:center">
                                        <h1 style="font-size: 45px;">R1</h1>
                                        <span>
                                            <small>Name:A</small>
                                            <small>DIM:40%</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-light mb-3">
                                    <div class="card-body" style="display: flex; justify-content:center;align-content:center">
                                        <h1 style="font-size: 45px;">R2</h1>
                                        <span>
                                            <small>Name:B</small>
                                            <small>DIM:35%</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-light mb-3">
                                    <div class="card-body" style="display: flex; justify-content:center;align-content:center">
                                        <h1 style="font-size: 45px;">R3</h1>
                                        <span>
                                            <small>Name:C</small>
                                            <small>DIM:63%</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-light mb-3">
                                    <div class="card-body" style="display: flex; justify-content:center;align-content:center">
                                        <h1 style="font-size: 45px;">R4</h1>
                                        <span>
                                            <small>Name:D</small>
                                            <small>DIM:43%</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
      </div>
</div>
@endsection
