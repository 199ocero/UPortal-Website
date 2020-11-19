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
                    <label class="col-md">First Name</label>
                    <div class="col-md">
                        <input type="text" name="edit_fname" class="form-control rounded-0" value="{{$users->fname}}" placeholder="Enter First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md">Last Name</label>
                    <div class="col-md">
                        <input type="text" name="edit_lname" class="form-control rounded-0" value="{{$users->lname}}" placeholder="Enter Last Name" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-md">Middle Name</label>
                    <div class="col-md">
                        <input type="text" name="edit_mname" class="form-control rounded-0" value="{{$users->mname}}" placeholder="Enter Middle Name" required>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-md">Email</label>
                    <div class="col-md">
                        <input type="text" name="edit_email" class="form-control rounded-0" value="{{$users->email}}" placeholder="Enter Middle Name" required>
                        <small id="emailHelp" class="form-text text-muted">We will use this email to send the reset password link.</small>
                    </div>
                    
                </div>
                <div class="text-right">
                    <a href="/admin" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                </div>
            </form>

        </div>

    </div>
</div>
@endsection

@section('scripts')

@endsection