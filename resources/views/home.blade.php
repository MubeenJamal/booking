@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-12">
            <div class="card">
                <div class="card-header">Booking Details</div>

                <div class="card-body table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Date</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Service</th>
                        <th scope="col">Service Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Seats</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($bookings))
                        @foreach($bookings as $k=>$v)
                            <tr>
                            <th scope="row">{{$v['id']}}</th>
                            <td>{{$v['start_date']}}</td>
                            <td>{{$v['start_time']}}</td>
                            <td>{{$v['end_date']}}</td>
                            <td>{{$v['end_time']}}</td>
                            <td>{{$v['car_type']}}</td>
                            <td>{{$v['service']}}</td>
                            <td>{{$v['service_type']}}</td>
                            <td>{{$v['price']}}</td>
                            <td>{{$v['name']}}</td>
                            <td>{{$v['email']}}</td>
                            <td>{{$v['phone']}}</td>
                            <td>{{$v['no_of_seat']}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan=7>No Record Found</td>
                        </tr>
                    @endif
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
