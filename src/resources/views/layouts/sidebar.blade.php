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
                    <a class="sidebar-link sidebar-title" href="javascript:void(0)" data-bs-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-slack">
                            <path
                                d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z"></path>
                            <path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"></path>
                            <path
                                d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z"></path>
                            <path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z"></path>
                            <path
                                d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z"></path>
                            <path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z"></path>
                            <path
                                d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z"></path>
                            <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z"></path>
                        </svg>
                        <span>Management</span>
                        <div class="according-menu"><i class="fa fa-angle-right"></i></div>
                    </a>
                    <ul class="sidebar-submenu" style="display: none;">
                        <li><a href="{{ url('/jobs/categories') }}" data-bs-original-title="" title="">Category Management</a></li>
                        <li><a href="{{ url('/jobs') }}" data-bs-original-title="" title="">Add Job</a></li>
                        <li><a href="{{ url('/jobManagement') }}" data-bs-original-title="" title="">Job Management</a></li>
                        <li><a href="payment-details.html" data-bs-original-title="" title="">User Management</a></li>
                        <li><a href="order-history.html" data-bs-original-title="" title="">Payment Management</a></li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/earn') }}"
                       data-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-dollar-sign">
                            <line x1="12" y1="1" x2="12" y2="23"></line>
                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span>Earn</span>
                    </a>
                </li>
                {{--                <li class="sidebar-list">--}}
                {{--                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/analytics') }}"--}}
                {{--                       data-original-title="" title="">--}}
                {{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
                {{--                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
                {{--                             class="feather feather-bar-chart-2">--}}
                {{--                            <line x1="18" y1="20" x2="18" y2="10"></line>--}}
                {{--                            <line x1="12" y1="20" x2="12" y2="4"></line>--}}
                {{--                            <line x1="6" y1="20" x2="6" y2="14"></line>--}}
                {{--                        </svg>--}}
                {{--                        <span>Analytics</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/billings') }}"
                       data-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span>Billings</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/referral') }}"
                       data-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-share-2">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                        <span>Referral Program</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/settings') }}"
                       data-original-title="" title="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-sliders">
                            <line x1="4" y1="21" x2="4" y2="14"></line>
                            <line x1="4" y1="10" x2="4" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12" y2="3"></line>
                            <line x1="20" y1="21" x2="20" y2="16"></line>
                            <line x1="20" y1="12" x2="20" y2="3"></line>
                            <line x1="1" y1="14" x2="7" y2="14"></line>
                            <line x1="9" y1="8" x2="15" y2="8"></line>
                            <line x1="17" y1="16" x2="23" y2="16"></line>
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('/login') }}"
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
