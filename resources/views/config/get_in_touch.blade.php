@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <form action="{{route('get_in_touch_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Get In Touch</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{$get_touch['address']}}">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="number" class="form-control" value="{{$get_touch['number']}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="{{$get_touch['email']}}">
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
