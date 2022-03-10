@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h4>Services</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>Title</th>
                        <th>Card Body</th>
                        <th>Action</th>
                    </tr>
                    @foreach($services as $service)
                        <tr>
                            <td>
                               <p>{{$service->card_title}}</p>
                            </td>
                            <td>{{$service->card_body_details}}</td>
                            <td>
{{--                                <div class="row">--}}
{{--                                    <a class="btn btn-primary" href="{{route('service.edit', $service->id)}}">Allow</a>--}}
                                    <form class="" action="{{route('service.destroy', $service->id)}}" method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
{{--                                </div>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
