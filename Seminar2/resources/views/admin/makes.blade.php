@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Makes</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>Make</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="make in data.makes">
                                <td>@{{ make.id }}</td>
                                <td>@{{ make.make }}</td>
                                <td>
                                    <button ng-click="editMake(make.id);" class="btn">Edit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="make">Enter new make:*</label>
                            <input ng-model="vars.addMake.make" type="text" id="make-input" name="make-input" class="form-control"  placeholder="Enter new make">
                        </div>
                        <div ng-show="flashMessages.makeRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>
                        <button ng-click="addMake();" id="add-make" class="btn btn-primary">Add Make</button>



                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Models</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>Make</th>
                                <th>Model</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="model in data.models | orderBy:model.make">
                                <td>@{{ model.make }}</td>
                                <td>@{{ model.model }}</td>
                                <td>
                                    <button ng-click="editModel(model.id);" class="btn">Edit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        
                        <div class="form-group">
                            <label for="make">Select Makes:*</label>
                            <select  ng-change="" ng-model="vars.addModel.make" ng-options="item.make as item.make for item in data.makes" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Model Name:*</label>
                            <input ng-model="vars.addModel.model" type="text" class="form-control">
                        </div>
                        <div ng-show="flashMessages.modelRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>
                        <button ng-click="addModel();" class="btn btn-primary">Add Model</button>



                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection