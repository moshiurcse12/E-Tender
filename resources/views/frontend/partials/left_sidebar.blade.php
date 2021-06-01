<div class="left-sidebar mt-2">
  <div class="list-group">

    <a href="#collapseExample" data-toggle="collapse" class="list-group-item">
      <span class="float-left item">  Category </span>
      <span class="float-right"><i class="fa fa-chevron-down"></i></span>
    </a>

    <div class="collapse show" id="collapseExample">
      <div class="card card-body pointer">
        <ul class="list-group">
          @foreach(\App\Models\Category::orderBy('id', 'ASC')->get() as $category)
            <li class="list-group-item"><a href="{{ route('categoryTender', $category->slug) }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>

    <a href="#collapseExample2" data-toggle="collapse" class="list-group-item">
      <span class="float-left item"> Location</span>
      <span class="float-right"><i class="fa fa-chevron-down"></i></span>
    </a>

    <div class="collapse" id="collapseExample2">
      <div class="card card-body pointer">
        <ul class="list-group">
          @foreach(\App\Models\User::districts() as $district)
            <li class="list-group-item"><a href="{{ route('placeTender', $district->city) }}">{{ $district->city }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>

    {{--  <a href="#collapseExample2" data-toggle="collapse" class="list-group-item">
      <span class="float-left item">Deadline</span>
      <span class="float-right"><i class="fa fa-chevron-down"></i></span>
    </a>

    <div class="collapse" id="collapseExample2">
      <div class="card card-body pointer">
        <ul class="list-group">
          @foreach(\App\Models\User::districts() as $district)
            <li class="list-group-item"><a href="{{ route('placeTender', $district->city) }}">{{ $district->city }}</a></li>
          @endforeach
        </ul>
      </div>
    </div> --}}

    <a href="#collapseExample3" data-toggle="collapse" class="list-group-item">
      <span class="float-left item">  Organization</span>
      <span class="float-right"><i class="fa fa-chevron-down"></i></span>
    </a>

    <div class="collapse" id="collapseExample3">
      <div class="card card-body pointer">
        <ul class="list-group">
          @foreach(\App\Models\User::organizations() as $organization)
            <li class="list-group-item"><a href="{{ route('organizationTender', $organization->organization) }}">{{ $organization->organization }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>


  </div>



</div>

@if(Auth::guard('web')->check())
<div class="card card-body mt-5 left-sidebar" style="background-color:#21242a;">
    <img style="margin-bottom: 5px;" src="{{ asset('public/images/users/'.Auth::guard('web')->user()->image) }}" class="rounded-circle mx-auto d-block" alt="" width="150" height="100">
    <h5 class="ml-2" style="text-align: center;">{{ Auth::guard('web')->user()->name }}</h5>
    <h5 class="ml-2" style="text-align: center;">{{ Auth::guard('web')->user()->account_role }}</h5>
    <a href="{{ route('user.profile') }}" class="list-group-item" style="text-align: center;color:ffffff;">
      <span class="float-left item" >View Profile</span> 
    </a>
</div>
@endif
