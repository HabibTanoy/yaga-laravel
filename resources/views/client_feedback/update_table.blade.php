@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <form action="{{route('client-feedback.update', $update_data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Client Feedbacks</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Client Name</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="name" class="form-control" value="{{$update_data->client_name}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Designation</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="designation" class="form-control" value="{{$update_data->designation}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Comments</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="comments" class="summernote-simple">{{$update_data->comments}}</textarea>
                                </div>
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
