@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">System Management</h5>
        <div class="card-body">
                <h1>All Lora endpoints</h1>
                <hr/>
                <span>
                <a class="btn btn-primary float-right" style="width:50px;" href="{{route('rola.add')}}" role="button">+ Add</a>
                </span>
                <div class="row mt-5">
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
    
@endsection