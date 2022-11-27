@if(session()->get('flash_danger'))
    <div class="alert alert-warning" role="alert">
        <small>{!! session()->get('flash_warning') !!}</small>
    </div>
@endif

@if(session()->get('flash_success'))
    <div class="alert alert-success" role="alert">
        <small>{!! session()->get('flash_success') !!}</small>
    </div>
@endif
