@extends('layouts.app')

@section('content')
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
                    @if($rolas->count() == 0) 
                    <p>No Lora has assign, please contact to your admin.</p>
                    @endif
                    @foreach ($rolas as $rola)
                        <div class="col-3">
                            <div class="card mb-3">
                                <div class="card-body">                                
                                    <div style="display:flex;justify-content: center;">
                                        <h1 style="font-size: 50px; margin:0px; padding 0px;">R{{$rola->id}}</h1>
                                
                                        <div class="attribute" style="margin-top:10px;">
                                            <p style="padding:0;margin:0; font-size:12px;">Name:{{$rola->name}}</p>
                                            <p style="padding:0;margin:0; font-size:12px;">DIM:{{$rola->dim * 100}}%</p>
                                        </div>
                                    </div>
                                    <span style="position:absolute; left:50px; bottom:15px; width:10px; height:10px; background-color:green; border-radius:100%;"></span>
                                
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
        
@endsection
