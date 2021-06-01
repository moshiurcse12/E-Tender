@extends('frontend.layouts.master')

@section('content')

<div class="main-contents mt-2">
  <div class="latest-tenders profile_info">
    @include('frontend.partials.message')
    <img src="{{ asset('public/images/users/'.Auth::guard('web')->user()->image) }}" class="rounded" alt="" width="304" height="200" style="margin-bottom:20px;">
    <h4>{{ Auth::guard('web')->user()->name }}</h4>
    <div class="form-group">Email: {{ Auth::guard('web')->user()->email }}</div>
    <div class="form-group">Phone: {{ Auth::guard('web')->user()->phone }}</div>
    <div class="form-group">Account Role: {{ Auth::guard('web')->user()->account_role }}</div>
    <div class="form-group">Organization: {{ Auth::guard('web')->user()->organization }}</div>
    <div class="form-group">City: {{ Auth::guard('web')->user()->city }}</div>
    <div class="form-group">Address: {{ Auth::guard('web')->user()->address }}</div>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Edit My Profile</button>
  </div>
</div> <!-- end .main-content -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

          <form class="form-control" action="{{ route('editProfile') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h4 class="text-center mb-4">Edit Profile</h4>
            <div class="form-row">
              <div class="col-md-6 form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="eg. Moshiur Rahman" value="{{ Auth::guard('web')->user()->name }}" required>
              </div>

              <div class="col-md-6 form-group">
                <label for="account_role">Account Role <span class="text-danger">*</span></label>
                <select class="form-control" name="account_role" id="account_role" required>
                  <option value="contractor" {{ (Auth::guard('web')->user()->name == 'contructor') ? 'selected' : ''}}>Contructor</option>
                  <option value="tenderer" {{ (Auth::guard('web')->user()->name == 'tenderer') ? 'selected' : ''}}>Tenderer</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6 form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="eg. example@gmail.com" value="{{ Auth::guard('web')->user()->email }}" required>
              </div>

              <div class="col-md-6 form-group">
                <label for="phone">Phone <span class="text-danger">*</span></label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="eg. 01756553048" value="{{ Auth::guard('web')->user()->email }}" required>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6 form-group">
                <label for="designation">Designation <span class="text-danger">*</span></label>
                <input type="text" name="designation" id="designation" class="form-control" placeholder="eg. Account Officer" value="{{ Auth::guard('web')->user()->designation }}" required>
              </div>

              <div class="col-md-6 form-group">
                <label for="organization">Organization <span class="text-danger">*</span></label>
                <input type="text" name="organization" id="organization" class="form-control" placeholder="eg. BDREN" value="{{ Auth::guard('web')->user()->organization }}" required>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6 form-group">
                <label for="city">City <span class="text-danger">*</span></label>
                <input type="text" name="city" id="city" class="form-control" placeholder="eg. Dhaka" value="{{ Auth::guard('web')->user()->city }}" required>
              </div>

              <div class="col-md-6 form-group">
                <label for="address">Address <span class="text-danger">*</span></label>
                <input type="text" name="address" id="address" class="form-control" placeholder="eg. Mirpur" value="{{ Auth::guard('web')->user()->address }}" required>
              </div>
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" id="image" value="">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
    </div>
  </div>
</div>

@endsection