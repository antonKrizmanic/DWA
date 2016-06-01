@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>My Reservations</b></div>

                    <div class="panel-body" ng-init="getUserReservations();">
                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>Car</th>
                                <th>Pickup Location</th>
                                <th>Pickup Time</th>
                                <th>Return Location</th>
                                <th>Return Time</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="r in data.userReservations">
                                <td>@{{ r.make + " " + r.model }}</td>
                                <td>@{{ r.pickupLocation }}</td>
                                <td>@{{ r.pickupDate }}</td>
                                <td>@{{ r.returnLocation }}</td>
                                <td>@{{ r.returnDate }}</td>
                                <td>@{{ r.price }}</td>
                                <td>
                                    <span ng-show="r.isPaid == undefined && r.isPending == undefined && r.isCompleted == undefined">Pending</span>
                                    <span ng-show="r.isPaid == undefined && r.isPending == 1 && r.isCompleted == undefined">Your order shall be delivered</span>
                                    <span ng-show="r.isPaid == 1 && r.isPending == 1 && r.isCompleted == undefined">Order delivered</span>
                                    <span ng-show="r.isPaid == 1 && r.isPending == 1 && r.isCompleted == 1">Car returned. Order completed.</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection