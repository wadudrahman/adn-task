<div class="col-sm-12">
    @if(session('success_message'))
        <div class="alert alert-success outline alert-dismissible fade show" role="alert">
            <p>{{ session('success_message') }}</p>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title="">
                <span aria-hidden="true">×</span></button>
        </div>
    @endif

    @if(session('warning_message'))
        <div class="alert alert-warning outline alert-dismissible fade show" role="alert">
            <p>{{ session('warning_message') }}</p>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title="">
                <span aria-hidden="true">×</span></button>
        </div>
    @endif

    @if(session('danger_message'))
        <div class="alert alert-danger outline alert-dismissible fade show" role="alert">
            <p>{{ session('danger_message') }}</p>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title="">
                <span aria-hidden="true">×</span></button>
        </div>
    @endif
</div>
