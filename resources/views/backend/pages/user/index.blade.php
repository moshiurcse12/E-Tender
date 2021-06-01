@extends('backend.layouts.master')

@section('content')

  <div class="row">
    <div class="col-xl-12">
      <div class="breadcrumb-holder">
        <h1 class="main-title float-left">User</h1>
        <ol class="breadcrumb float-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">User</li>
        </ol>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>


  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card mb-3" style="">
      <div class="card-header">
        <i class="fa fa-table"></i> <span class="ml-2">Users</span>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="admin-data-table" class="table table-bordered table-hover display">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Organization</th>
                <th>Phone</th>
                <th>Manage</th>
              </tr>
            </thead>
            <tbody>
              @if(count($users) > 0)
                @foreach($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->organization }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                      @if($user->verify_token == 1)
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#block{{ $user->id }}" title="Block this user"><i class="fa fa-fw fa-trash"></i>Block</button>
                      @elseif($user->verify_token == 2)
                      <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#block{{ $user->id }}" title="Unblock this user"><i class="fa fa-fw fa-user"></i>Unblock</button>
                      @endif
                      <!-- Delete Modal-->
                      <div class="modal fade" id="block{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete this category ?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">Please confirm if you want to perform this task</div>
                            <div class="modal-footer">
                              <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                              @if($user->verify_token == 1)

                              <form class="" action="{{ route('admin.user.block', $user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Block</button>
                              </form>

                              @elseif($user->verify_token == 2)

                              <form class="" action="{{ route('admin.user.unblock', $user->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-user"></i> Unblock</button>
                              </form>

                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div><!-- end card-->
    </div>
  </div>

  @endsection
