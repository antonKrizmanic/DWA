@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Fuels</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>Fuel</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="fuel in data.fuels">
                                <td>@{{ fuel.id }}</td>
                                <td>@{{ fuel.fuel }}</td>
                                <td>
                                    <button ng-click="editFuel(fuel.id);" class="btn">Edit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="make">Enter new fuel:*</label>
                            <input ng-model="vars.addFuel.fuel" type="text" id="fuel-input" name="fuel-input" class="form-control"  placeholder="Enter new make">
                        </div>
                        <div ng-show="flashMessages.fuelRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>
                        <button ng-click="addFuel();" id="add-fuel" class="btn btn-primary">Add Fuel</button>



                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection