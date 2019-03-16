@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">Add Lora</h5>
        <div class="card-body">
        <form action="{{route('rola.add')}}" method="post">
                @csrf
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Alias Name</th>
                            <td><input name="name" class="form-control" placeholder="Alias Name"/ required></td> 
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td><input name="description" class="form-control" placeholder="Description" required/></td> 
                        </tr>
                        <tr>
                            <th scope="row">Switch</th>
                            <td>
                                <input  type="checkbox" checked data-toggle="toggle">
                            </td> 
                        </tr>
                        <tr>
                            <th scope="row">Dimming</th>
                            <td><input name="dim" class="form-control" value="100" type="number" min="0" max="100"/></td> 
                        </tr>
                        <tr>
                            <th scope="row">Indicator Switch</th>
                            <td><input name="indicator_switch" type="checkbox" checked data-toggle="toggle"></td> 
                        </tr>
                        <tr>
                            <th>Indicator Color:</th>
                        </tr>
                        <tr>
                            <th scope="row">R</th>
                            <td>
                                <input name="indicator_r" class="form-control" value="0" type="number" min="0" max="255"/>
                            </td> 
                        </tr>
                        <tr>
                            <th scope="row">G</th>
                            <td>
                                <input name="indicator_g" class="form-control" value="255" type="number" min="0" max="255"/>
                            </td> 
                        </tr>
                        <tr>
                            <th scope="row">B</th>
                            <td>
                                <input name="indicator_b" class="form-control" value="0" type="number" min="0" max="255"/>
                            </td> 
                        </tr>
                        
                        
                    </tbody>
                </table>
                <input class="btn btn-primary float-right" type="submit" value="Add"/>
            </form>
        </div>
    </div>
@endsection