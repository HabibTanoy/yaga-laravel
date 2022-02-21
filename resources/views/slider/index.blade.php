@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="card">
            <div class="card-header">
                <h4>Sliders</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Image</th>
                            <th>Is Active</th>
                            <th>Action</th>
                        </tr>
                        @foreach($sliders as $slider)
                        <tr>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $sliders->links() }}
            </div>
        </div>
    </div>
@endsection
