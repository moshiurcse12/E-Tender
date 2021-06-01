@extends('backend.layouts.master')

@section('content')

  <div class="row">
    <div class="col-xl-12">
      <div class="breadcrumb-holder">
        <h1 class="main-title float-left">Tender</h1>
        <ol class="breadcrumb float-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Tender</li>
        </ol>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>


  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> <span class="ml-2">Tenders</span>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table id="admin-data-table" class="table table-bordered table-hover display">
            <thead>
              <tr>
                <th>Title</th>
                <th>User</th>
                <th>Document Price</th>
                <th>Security Amount</th>
                <th>Publiscation Date</th>
                <th>Closed Date</th>
                <th>Image</th>
                <th>Manage</th>
              </tr>
            </thead>
            <tbody>
              @if(count($tenders) > 0)
                @foreach($tenders as $tender)
                  <tr>
                    <td>{{ $tender->title }}</td>
                    <td>{{ $tender->user->name }}</td>
                    <td>{{ $tender->document_price }}</td>
                    <td>{{ $tender->security_amount }}</td>
                    <td>{{ $tender->published_on }}</td>
                    <td>{{ $tender->closed_on }}</td>
                    <td>
                      <a href="{{ asset('public/images/tenders/'.$tender->image) }}" target="_blank"><img src="{{ asset('public/images/tenders/'.$tender->image) }}" alt="" style="width: 50px; height: 50px;"></a>
                    </td>
                    <td>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $tender->id }}" title="Delete Tender"><i class="fa fa-fw fa-trash"></i>Delete</button>

                      <div class="modal fade" id="deleteModal{{ $tender->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Are you sure want to delete this tender ?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">Please confirm if you want to delete</div>
                            <div class="modal-footer">
                              <button class="btn btn-outline-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                              <form class="" action="{{ route('admin.tender.delete', $tender->id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Confirm</button>
                              </form>
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
