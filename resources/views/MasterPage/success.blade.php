@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show text-center bdr-20 m-t-30" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif