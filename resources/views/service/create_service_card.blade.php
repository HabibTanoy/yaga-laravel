@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h4>Upload Service Details</h4>
            </div>
            <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
{{--                            <div class="card-header">--}}
{{--                                <h4>Full Summernote</h4>--}}
{{--                            </div>--}}
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="card_title" class="form-control">
                                    </div>
                                </div>
{{--                                <div class="form-group row mb-4">--}}
{{--                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>--}}
{{--                                    <div class="col-sm-12 col-md-7">--}}
{{--                                        <select class="form-control selectric">--}}
{{--                                            <option>Tech</option>--}}
{{--                                            <option>News</option>--}}
{{--                                            <option>Political</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="card_body" class="summernote"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
