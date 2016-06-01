@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Cars</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>Make & Model</th>
                                <th>Fuel</th>
                                <th>isAutomatic</th>
                                <th>Branch</th>
                                <th>Registration</th>
                                <th>pricePerDay</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="car in data.cars">
                                <td>@{{ car.make + " " + car.model }}</td>
                                <td>@{{ car.fuel }}</td>
                                <td>@{{ car.isAutomatic }}</td>
                                <td>@{{ car.name }}</td>
                                <td>@{{ car.registration }}</td>
                                <td>@{{ car.pricePerDay }}</td>
                                <td>
                                    <button ng-click="editCar(car.id);" class="btn">Edit</button>
                                    <button ng-click="copyCar(car.id);" class="btn">Copy</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="make">Select A Make*</label>
                            <select ng-required="required" ng-model="vars.addCar.make"  ng-options="item.make as item.make for item in data.makes" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="make">Select A Model*</label>
                            <select ng-required="required" ng-model="vars.addCar.model"  ng-options="item.model as item.model for item in data.models | filter:{'make':  vars.addCar.make}" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="make">Select A Fuel*</label>
                            <select ng-required="required" ng-model="vars.addCar.fuel"  ng-options="item.fuel as item.fuel for item in data.fuels" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="make">Select A Color</label>
                            <select ng-model="vars.addCar.color"  ng-options="item.color as item.color for item in data.colors" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>
                        -->

                        <div class="form-group">
                            <label for="make">Select A Class*</label>
                            <select required ng-model="vars.addCar.class"  ng-options="item.class as item.class for item in data.classes" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="make">Select A Branch*</label>
                            <select required ng-model="vars.addCar.branch"  ng-options="item.name as item.name for item in data.branches" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="make">Enter Registration*</label>
                            <input ng-model="vars.addCar.registration" type="text" class="form-control">
                        </div>

                        <!--
                        <div class="form-group">
                            <label for="make">Enter Year</label>
                            <input ng-model="vars.addCar.year" type="text" class="form-control">
                        </div>
                        -->

                        <div class="form-group">
                            <label for="make">Enter Capacity*</label>
                            <input ng-required="required" ng-model="vars.addCar.capacity" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="make">Gearbox*</label>
                            <select ng-required="required" ng-model="vars.addCar.isAutomatic" ng-init="vars.addCar.isAutomatic = undefined" class="form-control">
                                <option value="">-</option>
                                <option value="true">Yes</option>
                                <option value="false" >No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="make">Enter Min Age*</label>
                            <input ng-required="required" ng-model="vars.addCar.minAge" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="make">Enter Price Per Day*</label>
                            <input ng-required="required" ng-model="vars.addCar.pricePerDay" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="make">Upload Image*</label>
                            <div class="button" ngf-select ng-model="vars.file" name="file" ngf-pattern="'image/*'"
                                 ngf-accept="'image/*'" ngf-max-size="20MB" ngf-min-height="100"
                            >Select</div>
                        </div>

                        <div ng-show="flashMessages.carRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>

                        <button ng-click="addCar();" class="btn btn-primary">Add Car</button>




                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection