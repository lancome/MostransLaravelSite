@if (Session::has('flash_message'))
    <div class="alert alert-success">
        {{session('flash_message')}}
    </div>
@endif
@if (Session::has('flash_error'))
    <div class="alert alert-danger">
        {{session('flash_error')}}
    </div>
@endif