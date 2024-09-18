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
                    <form method="POST" action="{{ route('brand.update', $brand->id) }}">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <div class="mb-3">
                                <label>Brand Name</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Brand" value="{{ $brand->name}}">
                            </div>
                            <div class="d-flex justify-end">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="submit" class="btn btn-warning">Reset</button>
                             </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
