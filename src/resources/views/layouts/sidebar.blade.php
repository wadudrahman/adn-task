<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
    <div class="logo-wrapper">
        <a href="{{ url('/dashboard') }}" data-original-title="" title="">
            <img class="img-fluid for-light" src="{{ asset('images/logo/logo.png') }}" alt=""
                 data-original-title="" title="">
            <img class="img-fluid for-dark" src="{{ asset('images/logo/logo_dark.png') }}" alt=""
                 data-original-title="" title=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar" checked="checked">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-grid status_toggle middle sidebar-toggle">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
        </div>
    </div>
    <div class="logo-icon-wrapper">
        <a href="{{ url('/dashboard') }}" data-original-title="" title="">
            <img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}" alt=""
                 data-original-title="" title="">
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow disabled" id="left-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-arrow-left">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
        </div>
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar" style="display: block;">
                <li class="back-btn">
                    <a href="index.html" class="active" data-original-title="" title="">
                        <img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}" alt=""
                             data-original-title="" title="">
                    </a>
                    <div class="mobile-back text-right">
                        <span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                    </div>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/dashboard') }}"
                       data-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/earn') }}"
                       data-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-plus-square">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span>Create Campaign</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('logout') }}"
                       data-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="right-arrow" id="right-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-arrow-right">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
        </div>
    </nav>
</div>
<!-- Page Sidebar Ends-->

@push('after_scripts')
    <script>
        $(document).ready(function () {
            $('.sidebar-active').trigger('click');
            $('.children-route').addClass('active');
        });
    </script>
@endpush
