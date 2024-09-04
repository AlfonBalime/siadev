@extends('layouts.app')

@section('title', 'Roles and Permissions')

@section('content')
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Roles and Permissions</h3>
        <ul>
            <li><a href="/home">Home</a></li>
            <li>Roles and Permissions</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <!-- Roles and Permissions Form Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Manage Roles and Permissions</h3>
                </div>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">...</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>

            <form action="{{ route('assign.roles') }}" method="POST">
                @csrf
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Module</th>
                                @foreach ($roles as $role)
                                    <th class="text-center">{{ $role->name }}</th>
                                @endforeach
                                <th>Expiry Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($modules as $module)
                                <tr>
                                    <td>{{ $module }}</td>
                                    @foreach ($roles as $role)
                                        <td class="text-center">
                                            <input class="" type="checkbox" name="roles[{{ $module }}][]"
                                                value="{{ $role->id_roles }}">
                                        </td>
                                    @endforeach
                                    <td>
                                        <input type="date" name="expires_at[{{ $module }}]" class="form-control">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Assign Roles</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Roles and Permissions Form Area End Here -->
@endsection
