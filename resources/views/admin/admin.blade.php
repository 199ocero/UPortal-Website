@extends('layouts.master')

@section('title')
    Admin | UPortal
@endsection

@section('content')

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="" class="needs-validation">

        <div class="modal-body">

          <div class="form-group">
            <label>Facebook ID</label>
            <input type="text" name="facebookid" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Enter Facebook ID" maxlength="16" required>
          </div>

          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
          </div>

          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
          </div>

          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
          <button type="submit" name="registerbtn" class="btn btn-warning"><i class="fas fa-save"></i> Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Registered Admin</h4>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#add">Add Admin Profile</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Facebook ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Middle Name</th>
                            <th>Email</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $data)
                            @if($data->usertype == 'admin')
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->fname}}</td>
                                <td>{{$data->lname}}</td>
                                <td>{{$data->mname}}</td>
                                <td>{{$data->email}}</td>
                                <td>
                                    <a href="/admin-edit/{{$data->id}}" class="btn btn-success">EDIT</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger">DELETE</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection