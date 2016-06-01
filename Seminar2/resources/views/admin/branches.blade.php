@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Cities</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>City</th>
                                <th>Postcode</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="city in data.cities">
                                <td>@{{ city.id }}</td>
                                <td>@{{ city.city }}</td>
                                <td>@{{ city.postcode }}</td>
                                <td>
                                    <button ng-click="editCity(city.id);" class="btn">Edit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="make">Enter City Name:*</label>
                            <input ng-model="vars.addCity.city" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Postcode:*</label>
                            <input ng-model="vars.addCity.postcode" type="text"  class="form-control">
                        </div>

                        <div ng-show="flashMessages.cityRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>

                        <button ng-click="addCity();" class="btn btn-primary">Add City</button>



                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Branches</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="branch in data.branches">
                                <td>@{{ branch.id }}</td>
                                <td>@{{ branch.name }}</td>
                                <td>@{{ branch.email }}</td>
                                <td>@{{ branch.phone }}</td>
                                <td>@{{ branch.address }}</td>
                                <td>@{{ branch.city }}</td>
                                <td>
                                    <button ng-click="editBranch(branch.id);" class="btn">Edit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="make">Enter Branch Name:*</label>
                            <input ng-model="vars.addBranch.name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Branch Email:*</label>
                            <input ng-model="vars.addBranch.email" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Branch Phone:*</label>
                            <input ng-model="vars.addBranch.phone" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Branch Address:*</label>
                            <input ng-model="vars.addBranch.address" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Branch City:*</label>
                            <select  ng-change="" ng-model="vars.addBranch.city" ng-options="item.city as item.city for item in data.cities" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>

                        <div ng-show="flashMessages.branchRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>

                        <button ng-click="addBranch();" class="btn btn-primary">Add Branch</button>



                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection