@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">Rola ID</h5>
        <div class="card-body">
            <!-- 主要状态 -->
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body" style="display:flex;justify-content: center; align-items: center;">
                            <h3>Rola:</h3>
                            <h3>#01</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body" style="display:flex;justify-content: center; align-items: center;">
                            <h3>Status:</h3>
                            <h3>#01</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body" style="display:flex;justify-content: center; align-items: center;">
                            <h3>DIM:</h3>
                            <h3>#01</h3>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body" style="display:flex;justify-content: center; align-items: center;">
                            <h3>Indicator:</h3>
                            <h3>#01</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 详细控制 -->
            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="status-tab" data-toggle="tab" href="#status" role="tab" aria-controls="home" aria-selected="true">Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="controls-tab" data-toggle="tab" href="#controls" role="tab" aria-controls="profile" aria-selected="false">Controls</a>
                </li>
            </ul>
            <div class="card" style="border-radius:0;">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="status" role="tabpanel" aria-labelledby="status-tab">
                            <h2>Chart</h2>
                            <hr/>
                            <div class="alert alert-primary" role="alert">
                                Not implement yet.
                            </div>
                        </div>
                        <div class="tab-pane fade" id="controls" role="tabpanel" aria-labelledby="controls-tab">
                            <h2>Controls</h2>
                            <hr/>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">Alias Name</th>
                                        <td><input class="form-control" placeholder="Alias Name"/></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">Description</th>
                                        <td><input class="form-control" placeholder="Description"/></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">Switch</th>
                                        <td>
                                            <input type="checkbox" checked data-toggle="toggle">
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">Dimming</th>
                                        <td><input type="checkbox" checked data-toggle="toggle"></td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">Indicator Switch</th>
                                        <td><input type="checkbox" checked data-toggle="toggle"></td> 
                                    </tr>
                                    <tr>
                                        <th>Indicator Color:</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">R</th>
                                        <td>
                                            <input class="form-control" value="0" type="number" min="1" max="100"/>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">G</th>
                                        <td>
                                            <input class="form-control" value="255" type="number" min="1" max="100"/>
                                        </td> 
                                    </tr>
                                    <tr>
                                        <th scope="row">B</th>
                                        <td>
                                            <input class="form-control" value="0" type="number" min="1" max="100"/>
                                        </td> 
                                    </tr>
                                  
                                    
                                </tbody>
                            </table>
                            <h2>Automation Controls</h2>
                            <hr/>
                            <div class="alert alert-primary" role="alert">
                                Not implement yet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection