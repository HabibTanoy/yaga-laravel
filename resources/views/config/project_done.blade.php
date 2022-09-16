@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <form action="{{route('project_store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Projects Count</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Happy Clients</label>
                                <input type="text" name="client" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Projects Done</label>
                                <input type="text" name="project" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Win Awards</label>
                                <input type="text" name="award" class="form-control">
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
