@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Extras</b></div>

                    <div class="panel-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="extra in data.extras">
                                <td>@{{ extra.id }}</td>
                                <td>@{{ extra.title }}</td>
                                <td>@{{ extra.description }}</td>
                                <td>@{{ extra.price }}</td>
                                <td>
                                    <button ng-click="editExtra(extra.id);" class="btn">Edit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <div class="form-group">
                            <label for="make">Enter Title:*</label>
                            <input ng-model="vars.addExtra.title" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Description:*</label>
                            <input ng-model="vars.addExtra.description" type="text"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="make">Enter Price:*</label>
                            <input ng-model="vars.addExtra.price" type="text" class="form-control">
                        </div>

                        <div ng-show="flashMessages.extraRequired">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-danger">Polja oznacena zvjezdicom (*) su obavezna!</p>
                                </div>
                            </div>
                        </div>
                        <button ng-click="addExtra();" id="add-extra" class="btn btn-primary">Add Extra</button>



                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection