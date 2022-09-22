@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <form action="{{route('choose_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Why Choose Us</h4>
                        </div>
                        <div class="card-body">
                            <div class="section-title">File Browser</div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image_upload" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-left col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-12">
                                    <input type="text" name="title" class="form-control" value="{{$choose_data[0]['title']}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tag One Title</label>
                                    <input type="text" name="tag_one" class="form-control" id="inputEmail4" value="{{$choose_data[0]['tags_one']}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tag One Body</label>
                                    <input type="text" name="body_one" class="form-control" id="inputPassword4" value="{{$choose_data[0]['tag_body_one']}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tag Two Title</label>
                                    <input type="text" name="tag_two" class="form-control" id="inputEmail4" value="{{$choose_data[0]['tags_two']}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tag Two Body</label>
                                    <input type="text" name="body_two" class="form-control" id="inputPassword4" value="{{$choose_data[0]['tag_body_two']}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tag Three Title</label>
                                    <input type="text" name="tag_three" class="form-control" id="inputEmail4" value="{{$choose_data[0]['tags_three']}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tag Three Body</label>
                                    <input type="text" name="body_three" class="form-control" id="inputPassword4" value="{{$choose_data[0]['tag_body_three']}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tag Four Title</label>
                                    <input type="text" name="tag_four" class="form-control" id="inputEmail4" value="{{$choose_data[0]['tags_four']}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tag Four Body</label>
                                    <input type="text" name="body_four" class="form-control" id="inputPassword4" value="{{$choose_data[0]['tag_body_four']}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer float-right">
                            <button name="submit" type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
