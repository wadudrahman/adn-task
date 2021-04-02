<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="nav-right col-12 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="language-nav">
                    <div class="translate_wrapper">
                        @if(env('APP_ENV') === 'local')
                            <button class="btn btn-xs btn-danger" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span> DEV </span>
                            </button>
                        @elseif(env('APP_ENV') === 'stg')
                            <button class="btn btn-xs btn-primary" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                <span> STG </span>
                            </button>
                        @endif
                    </div>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg><span class="badge rounded-pill badge-secondary">4                                </span></div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg>
                            <h6 class="f-18 mb-0">Notitications</h6>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span class="pull-right">10 min.</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span class="pull-right">1 hr</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span class="pull-right">3 hr</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span class="pull-right">6 hr</span></p>
                        </li>
                        <li><a class="btn btn-primary" href="#" data-bs-original-title="" title="">Check all notification</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
