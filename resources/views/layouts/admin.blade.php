<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{__('Car Rental Portal | Admin Panel')}}</title>
    @if(LaravelLocalization::getCurrentLocale() == 'en' )
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    
    <link href="{{asset('adminpanel.ltr/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('adminpanel.ltr/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('adminpanel.ltr/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminpanel.ltr/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('adminpanel.ltr/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminpanel.ltr/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" class="dashboard-sales" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @elseif(LaravelLocalization::getCurrentLocale() == 'ar' )
    <link href="{{asset('sum.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="{{asset('adminpanel.rtl/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('adminpanel.rtl/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('adminpanel.rtl/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminpanel.rtl/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('adminpanel.rtl/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('adminpanel.rtl/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" class="dashboard-sales" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    @endif

    <!-- CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
<link href="{{asset('general.css')}}" rel="stylesheet" type="text/css" class="dashboard-sales">
    @yield('style')
    <!-- Datatables CSS CDN -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> -->
</head>
<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item flex-row">
                <li class="nav-item align-self-center page-heading">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>{{__('Car Rental Portal | Admin Panel')}}</h3>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></a>
            
            <ul class="navbar-item flex-row search-ul" style="font-size: 15px; font-weight: bold">
                   
            </ul>

            <ul class="navbar-item flex-row navbar-dropdown">
                      
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('adminpanel.ltr/assets/img/ca.png')}}" class="flag-width" alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="fr" data-value="Arabic" href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}"><img src="{{asset('adminpanel.ltr/assets/img/fr.png')}}" class="flag-width" alt="flag"> Arabic</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="English" href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"><img src="{{asset('adminpanel.ltr/assets/img/ca.png')}}" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1" @if(LaravelLocalization::getCurrentLocale() == 'en') style="margin-right: 50px" @else style="margin-left: 50px" @endif>
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>{{Auth::user()->name}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{route('admin.profile')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>{{__('My Profile')}}</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{route('admin.passsword.update')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>{{__('Update Password')}}</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="{{route('logout')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>{{__('Log Out')}}</span>
                            </a>
                        </div>
                    </div>
                </li>
                
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="compactSidebar">

                <div class="theme-logo">
                    <a href="{{route('index')}}">
                        <img src="{{asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}" class="navbar-logo" alt="logo">
                    </a>
                </div>

                <ul class="menu-categories">
                    <li class="omar active">
                        <a onclick="document.location='{{route('admin.login')}}'" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </a>
                        
                    </li>

                    <li class="menu ">
                        <a href="#app" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Brands')}}</span></div>
                    </li>

                    <li class="menu">
                        <a href="#car" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Vehicles')}}</span></div>
                    </li>
                    
                    <li class="omar" >
                        <a  onclick="document.location='{{route('admin.books')}}'" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Books')}}</span></div>
                    </li>

                    <li class="omar">
                        <a  onclick="document.location='{{route('admin.testimonials')}}'" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Testimonials')}}</span></div>
                    </li>

                    <li class="omar">
                        <a  onclick="document.location='{{route('admin.contact')}}'" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Contact-us')}}</span></div>
                    </li>

                    <li class="omar">
                        <a  onclick="document.location='{{route('admin.users')}}'" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Users')}}</span></div>
                    </li>

                   

                    <li class="omar">
                        <a  onclick="document.location='{{route('admin.websiteInfo')}}'" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Website Contact')}}</span></div>
                    </li>

                    <li class="omar">
                        <a  onclick="document.location='{{route('admin.subscribers')}}'" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Subscribers')}}</span></div>
                    </li>

                    <li class="omar">
                        <a  onclick="document.location='{{route('admin.websiteData')}}'" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>{{__('Manage Pages')}}</span></div>
                    </li>
                </ul>

              
            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">

                <div class="theme-brand-name">
                    <a href="{{route('index')}}">Car Rental</a>
                </div>

                <div class="submenu" id="dashboard">
                    <div class="category-info">
                        <h5>{{__('Dashboard')}}</h5>
                       
                    </div>

                    <ul class="submenu-list" data-parent-element="#dashboard"> 
                        <li class="active">
                            <a href="{{route('admin.login')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg> {{__('Analytics')}} </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="app">
                    <div class="category-info">
                        <h5>{{__('Brands')}}</h5>

                    </div>
                    <ul class="submenu-list" data-parent-element="#app"> 
                        <li>
                            <a href="{{route('admin.brand.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> {{__('Create Brand')}} </a>
                        </li>
                        <li>
                            <a href="{{route('admin.brand.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> {{__('Manage Brands')}} </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="car">
                    <div class="category-info">
                        <h5>{{__('Vehicles')}}</h5>

                    </div>
                    <ul class="submenu-list" data-parent-element="#app"> 
                        <li>
                            <a href="{{route('admin.Vehicles.create')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> {{__('Post a Vehicles')}} </a>
                        </li>
                        <li>
                            <a href="{{route('admin.Vehicles.show')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> {{__('Manage Vehicles')}} </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content"> 
                @yield('content')
            </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <!-- <aside id="colorPallet" class="color-pallet">
        <div class="pallet-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div>
        <div class="p-colors">
            
            <div id="default" class="color-scheme-default"></div>
            <div id="lite" class="color-scheme-lite"></div>

        </div>

    </aside> -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('adminpanel.ltr/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('adminpanel.ltr/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('adminpanel.ltr/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminpanel.ltr/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('adminpanel.ltr/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });

        $(".omar").click(function(){
            $(this).removeClass("show");
          });
    </script>
    <script src="{{asset('adminpanel.ltr/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('adminpanel.ltr/plugins/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('adminpanel.ltr/assets/js/dashboard/dash_2.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{asset('adminpanel.ltr/plugins/table/datatable/datatables.js')}}"></script>
<script>
    @yield('script')
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<script>
	$(document).ready(function() {
		toastr.options.timeOut = 10000;
		@if (Session::has('failed'))
			toastr.error('{{ Session::get('failed') }}');
		@elseif(Session::has('success'))
			toastr.success('{{ Session::get('success') }}');
		@endif
	});

</script>
<!-- jQuery CDN -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<!-- Datatables JS CDN -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> -->
</body>
</html>