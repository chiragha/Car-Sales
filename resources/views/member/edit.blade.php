@extends('layout.layout')
@section('content')


<div class="container">
    <div style="height: 20px;"></div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                          Member
                    </div>
                     
                    <div class="card-body">    
                    <form method="POST" action="{{ route('member.update', $member->id) }}">
                            {!! csrf_field() !!}
                            @method("PATCH")

                            <div class="mb-3">
                                <label>Member Name</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Member Name" value="{{ $member->name}}">
                            </div>
                            <div class="mb-3">
                                <label>Mobile</label>
                                <input type="number" class="form-control" name="mobile" id="exampleFormControlInput1" placeholder="Phone Number" value="{{ $member->mobile}}">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email" value="{{ $member->email}}">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Password" value="{{ $member->password}}">
                            </div>
                            <div class="mb-3">
                        <label>Member State</label>
                            <select class="form-select" aria-label="Default select example" name="active" value="{{ $member->active}}">
                                <option selected>Select menu</option>
                                <option value="1">Active</option>
                                <option value="2">DeActive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label>Role</label>
                            <select class="form-select" aria-label="Default select example" name="role" value="{{ $member->role}}">
                                <option selected>Select menu</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="mb-3">
                                <label>Join-Date</label>
                                <input type="date" class="form-control" name="join_date" id="exampleFormControlInput1" placeholder="Date" value="{{ $member->join_date}}">
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

