@extends('layout.layout')
@section('content')


<div class="container">
    <div style="height: 20px;"></div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                          Brand
                    </div>
                     
                    <div class="card-body">    
                    <form method="POST" action="{{route('carmodel.store')}}">
                    @csrf  
                            <div class="mb-3">
                                <label>Model Name</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Brand">
                            </div>
                        <div class="mb-3">
                        <label>Choose Brand</label>
                            <select class="form-control" id="brand_id" name="brand_id">

                            @foreach ( $brands as $id => $name )
                                <option value="{{ $id }}">
                                    {{ $name }}
                                </option>
                            @endforeach        
                            </select>
                        </div>
                            
                            <div class="d-flex justify-content-end btn" style="gap:20px;">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <button type="submit" class="btn btn-warning">Reset</button>
                             </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <div style="height: 20px;">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                 <div class="card-shadow">
                   <div class="card-header">
                        <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Model Name</th>
                                <th scope="col">Brand</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ( $carmodel as $key => $cmodel )
                                    <tr>
                                        <td scope="col">{{ ++$key }}</td>
                                        <td scope="col">{{ $cmodel->name }}</td>
                                        <td scope="col">{{ $cmodel->brand->name }}</td>


                                        
                                    </tr>
                                @endforeach 
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
