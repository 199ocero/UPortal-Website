@extends('layouts.master')

@section('title')
    Admin | UPortal
@endsection

@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile</h6>
        </div>

        <div class="card-body">
            <form>
                
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="edit_fname" class="form-control" value="{{$users->fname}}" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="edit_lname" class="form-control" value="{{$users->lname}}" placeholder="Enter Last Name" required>
                </div>
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" name="edit_mname" class="form-control" value="{{$users->mname}}" placeholder="Enter Middle Name" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="edit_password" class="form-control" value="" placeholder="Enter Password" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please provide a password.
                    </div>
                </div>
                <div class="text-right">
                    <a href="admin" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection

@section('scripts')

@endsection