@extends('admin.layouts.default')

@section('admin.breadcrumb')
<li class='breadcrumb-item active'>New User</li>
@endsection

@section('admin.content')
<div class="clearfix">
    <div class="card">
        <div class="card-header">
            <strong>Create new User</strong> 
            <a class="btn btn-primary" style="background-color: #55acee; float: right;" href="{{ route('admin.users.index') }}" role="button"
            ><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>
        </div>
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card-body">
            <form action="{{ route('admin.users.store') }}" method="POST" class="form-horizontal offset-sm-2">
                {!! csrf_field() !!}
                <div class="form-group row">
                    <label class="col-md-3 col-form-label" for="hf-name">Role</label>
                    <div class="col-sm-6">
                        <select name="role" id="role"
                        class="custom-select form-control{{ $errors->has('role') ? ' is-invalid' : '' }}">

                        @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>

                    @if($errors->has('role'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('role') }}</strong>
                    </div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">First name</label>
                <div class="col-md-6">
                    <input type="text" id="first_name" name="first_name" class="form-control"
                    placeholder="Enter first name" required
                    value="{{ old('first_name') }}">

                    @if ($errors->has('firts_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">Last Name</label>
                <div class="col-md-6">
                    <input type="text" id="last_name" name="last_name" class="form-control"
                    placeholder="Enter Last name .." required
                    value="{{ old('name') }}">

                    @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">Company name</label>
                <div class="col-md-6">
                    <input type="text" id="company" name="company" class="form-control"
                    placeholder="Enter Company name" 
                    value="{{ old('company') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">User name</label>
                <div class="col-md-6">
                    <input type="text" id="username" name="username" class="form-control"
                    placeholder="Enter user name" required
                    value="{{ old('user') }}">

                    @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">Email</label>
                <div class="col-md-6">
                    <input type="text" id="email" name="email" class="form-control"
                    placeholder="Enter email" required
                    value="{{ old('email') }}">

                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">Phone</label>
                <div class="col-md-6">
                    <input type="text" id="phone" name="phone" class="form-control"
                    placeholder="Enter phone"
                    value="{{ old('phone') }}">

                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">Password</label>
                <div class="col-md-6">
                    <input type="password" id="password" name="password" class="form-control"
                    placeholder="Enter a default password"
                    value="{{ old('password') }}">

                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="password_confirmation">Confirm Password</label>
                <div class="col-md-6">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required placeholder="Confirm Password">
                    @if($errors->has('password_confirmation'))
                    <span class="text-danger">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="hf-name">Status</label>
                <div class="col-md-6">
                    <label class="switch switch-text switch-pill switch-primary">
                        <input type="checkbox" name="status" id="checkbox" class="switch-input">
                        <span class="switch-label" data-on="On" data-off="Off"></span>
                        <span class="switch-handle"></span>
                    </label>
                </div>
            </div>

            <center><button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Create new user</button></center>
        </form>
    </div>
        {{-- <div class="card-footer">
            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i> Reset</button>
        </div> --}}
    </div>
</div>
@endsection