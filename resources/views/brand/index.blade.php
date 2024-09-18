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
                        <form method="POST" action="{{route('brand.store')}}">
                         @csrf   
                            <div class="mb-3">
                                <label>Brand Name</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Brand">
                            </div>
                            <div class="d-flex justify-content-end"  style="gap:20px;">
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
                                <th scope="col">Brand Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ( $brands as $key => $brand )
                                    <tr>
                                        <td scope="col">{{ ++$key }}</td>
                                        <td scope="col">{{ $brand->name }}</td>


                                        <td scope="col">
                                        <a href="{{  route('brand.edit', $brand->id) }}">
                                        <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                        </button>
                                        </a>
                                        
                                        <form action="{{ route('brand.destroy', $brand->id) }}" method="POST" style ="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
