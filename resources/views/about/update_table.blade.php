@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <form action="{{route('about.update', $update_data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>About Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <div class="section-title">File Browser</div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_upload" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="title" class="form-control" value="{{$update_data->title}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mobile Number</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" name="number" class="form-control" value="{{$update_data->number}}">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Body</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name="body" class="summernote-simple">{{$update_data->body}}</textarea>
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
