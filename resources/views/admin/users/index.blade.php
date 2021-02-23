@extends('admin.layouts.default')

@section('admin.breadcrumb')
    <li class='breadcrumb-item active'>Users</li>
@endsection

@section('admin.content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <strong>Users</strong>
                <a href="{{route('admin.users.create')}}" role="button" class="btn btn-primary" style="background-color: rgb(85, 172, 238); float: right;"><i aria-hidden="true" class="fa fa-plus"></i> Create User</a>
            </div>

            <div class="my-1">
                <p class="h5">Filters</p>

                <div class="row">
                    <div class="col-sm-12">
                        @include('admin.users.partials._filters')
                    </div>
                </div>
            </div>
        </div>

        @if($users->total())
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>@if($user->status == 1) Active @endif @if($user->status == 0) Inactive @endif</td>
                        <td>
                            @foreach($user->roles as $role)
                            {{$role->name}}
                            @endforeach
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="User Actions">
                                    <a href="{{ route('admin.users.edit', $user->id)}}" data-toggle="tooltip" data-placement="top" title="" class="btn btn-primary" data-original-title="Edit"><i class="fa fa-edit "></i></a>
                                    <form action="{{ route('admin.users.destroy', $user)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o "></i></b>
                                    </form>
                                </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card-body">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <div class="card-text">No users found.</div>
            </div>
        @endif
    </div>
@endsection