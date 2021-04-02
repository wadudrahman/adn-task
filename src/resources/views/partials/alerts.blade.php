<div class="col-sm-12">
    @if(session('success_message'))
        <div class="alert alert-success outline alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-thumbs-up">
                <path
                    d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
            </svg>
            <p>{{ session('success_message') }}</p>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title="">
                <span aria-hidden="true">×</span></button>
        </div>
    @endif

    @if(session('warning_message'))
        <div class="alert alert-warning outline alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-bell">
                <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
            </svg>
            <p>{{ session('warning_message') }}</p>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title="">
                <span aria-hidden="true">×</span></button>
        </div>
    @endif

    @if(session('danger_message'))
        <div class="alert alert-danger outline alert-dismissible fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-thumbs-down">
                <path
                    d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path>
            </svg>
            <p>{{ session('danger_message') }}</p>
            <button class="close" type="button" data-dismiss="alert" aria-label="Close" data-original-title="" title="">
                <span aria-hidden="true">×</span></button>
        </div>
    @endif
</div>
