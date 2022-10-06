@if (\Session::has('success'))
<br>
<div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
    <i class="mdi mdi-check-all me-3 align-middle"></i><strong>{!! \Session::get('success') !!}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (\Session::has('error'))
<br>
<div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
    <i class="mdi mdi-check-all me-3 align-middle"></i><strong>{!! \Session::get('error') !!}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif