@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b>Reservations</b>
                        <button class="btn" ng-click="vars.showCompletedOrders = false" ng-show="vars.showCompletedOrders">Hide completed orders</button>
                        <button class="btn" ng-click="vars.showCompletedOrders = true" ng-show="!vars.showCompletedOrders">Show completed orders</button>
                    </div>

                    <div class="panel-body" ng-init="getReservations();">
                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>Car</th>
                                <th>Dates & Locations</th>
                                <th>Price</th>
                                <th>User Info</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr emit-last-repeater-element ng-repeat="r in data.reservations" ng-hide="!vars.showCompletedOrders && r.isCompleted == 1">
                                <td>@{{ r.make + " " + r.model }}</td>
                                <td>
                                    <button tabindex="0" class="btn" role="button" data-toggle="popover" data-trigger="focus" title="Date & Location Info" data-html="true"
                                            data-content="<table class='table table-bordered'>
                                       <tr>
                                        <td>Pickup Location:</td> <td>@{{ r.pickupLocation }}</td>
                                       </tr>
                                       <tr>
                                        <td>Pickup Time:</td> <td>@{{ r.pickupDate }}</td>
                                       </tr>
                                       <tr>
                                        <td>Return Location:</td> <td>@{{ r.returnLocation }}</td>
                                       </tr>
                                       <tr>
                                        <td>Return Time:</td> <td>@{{ r.returnDate }}</td>
                                       </tr>
                                       </table>" >Date & Location Info</button>
                                </td>
                                <td>@{{ r.price }}</td>
                                <td>
                                    <button tabindex="0" class="btn" role="button" data-toggle="popover" data-trigger="focus" title="User Info" data-html="true"
                                       data-content="<table class='table table-bordered'>
                                       <tr>
                                        <td>Name:</td> <td>@{{ r.username }}</td>
                                       </tr>
                                       <tr>
                                        <td>Email:</td> <td>@{{ r.email }}</td>
                                       </tr>
                                       <tr>
                                        <td>Phone:</td> <td>@{{ r.phone }}</td>
                                       </tr>
                                       <tr>
                                        <td>Address:</td> <td>@{{ r.address }}</td>
                                       </tr>
                                       </table>" >User Info</button>
                                </td>
                                <td>
                                    <span ng-show="r.isPaid == undefined && r.isPending == undefined && r.isCompleted == undefined">Not Confirmed</span>
                                    <span ng-show="r.isPaid == undefined && r.isPending == 1 && r.isCompleted == undefined">Confirmed</span>
                                    <span ng-show="r.isPaid == 1 && r.isPending == 1 && r.isCompleted == undefined">Car Delivered</span>
                                    <span ng-show="r.isPaid == 1 && r.isPending == 1 && r.isCompleted == 1">Car Returned</span>
                                </td>
                                <td>
                                    <button ng-click="confirmReservation(r.id);" ng-show="r.isPaid == undefined && r.isPending == undefined && r.isCompleted == undefined" class="btn">Confirm Reservation</button>
                                    <button ng-click="carDelivered(r.id);" ng-show="r.isPaid == undefined && r.isPending == 1 && r.isCompleted == undefined" class="btn">Car Delivered</button>
                                    <button ng-click="carReturned(r.id);" ng-show="r.isPaid == 1 && r.isPending == 1 && r.isCompleted == undefined" class="btn">Car Returned</button>
                                    <span ng-show="r.isPaid == 1 && r.isPending == 1 && r.isCompleted == 1">Completed</span>
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