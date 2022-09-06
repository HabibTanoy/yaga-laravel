@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h4>Client Feedback</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Client Name</th>
                        <th>Designation</th>
                        <th>Comments</th>
                        <th>Is Active</th>
                        <th>Action</th>
                    </tr>
                    @foreach($client_feedback as $feedback)
                        <tr>
                            <td>
                               <p>{{$feedback->client_name}}</p>
                            </td>
                            <td>{{$feedback->designation}}</td>
                            <td>{{$feedback->comments}}</td>
                            <td>
                                <div class="badge @if ($feedback->is_active == 0) badge-danger @else badge-success @endif">
                                    @if ($feedback->is_active == 0) Inactive
                                    @else Active
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-4">
                                        @if ($feedback->is_active == 0)
                                            <a class="btn btn-primary" href="{{route('client-feedback.show', $feedback->id)}}">Active</a>
                                        @else
                                            <a class="btn btn-danger" href="{{route('client-feedback.show', $feedback->id)}}">Inactive</a>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <a class="btn btn-primary" href="{{route('client-feedback.edit', $feedback->id)}}">Update</a>
                                    </div>
                                    <div class="col-md-4">
                                        <form class="" action="{{route('client-feedback.destroy', $feedback->id)}}" method='post'>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
