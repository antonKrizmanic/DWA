@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Classes</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>Class</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="class in data.classes">
                                <td>@{{ class.id }}</td>
                                <td>@{{ class.class }}</td>
                                <td>
                                    <button ng-click="editClass(class.id);" class="btn">Edit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="make">Enter Class:*</label>
                            <input ng-model="vars.addClass.class" type="text" class="form-control">
                        </div>


                        <div ng-show="flashMessages.classRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>

                        <button ng-click="addClass();" class="btn btn-primary">Add Class</button>



                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection