
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="qUWKZKhuW7RANGR0xHkIv5yCJzammcxTXFW7AiqP">
        <title>Gull - Laravel 6 + Bootstrap 4 admin template</title>
        <link href="https://.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
                
        <link id="gull-theme" rel="stylesheet" href="{{ asset('admin/assets/styles/css/themes/lite-purple.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/perfect-scrollbar.css') }}">
        
            </head>


    <body class="text-left">
        
        <!-- Pre Loader Strat  -->
        <div class='loadscreen' id="preloader">

            <div class="loader spinner-bubble spinner-bubble-primary">


            </div>
        </div>
        <!-- Pre Loader end  -->







        <!-- ============ Compact Layout start ============= -->
                <!-- ============Deafult  Large SIdebar Layout start ============= -->

        
        <div class="app-admin-wrap layout-sidebar-large clearfix">
            <div class="main-header">
            <div class="logo">
                <img src="{{ asset('admin/assets/images/logo.png') }}" alt="">
            </div>

            <div class="menu-toggle">
                <div></div>
                        <div></div>
                <div></div>
            </div>

            <div class="d-flex align-items-center">
                <!-- Mega menu -->
                <div class="dropdown mega-menu d-none d-md-block">
                    <a href="index.html#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
                    <div class="dropdown-menu text-left" aria-labelledby="dropdownMenuButton">
                        <div class="row m-0">
                            <div class="col-md-4 p-4 bg-img">
                                <h2 class="title">Mega Menu <br> Sidebar</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                                </p>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                                <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                            </div>
                            <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                                <div class="menu-icon-grid w-auto p-0">
                                    <a href="index.html#"><i class="i-Shop-4"></i> Home</a>
                                    <a href="index.html#"><i class="i-Library"></i> UI Kits</a>
                                    <a href="index.html#"><i class="i-Drop"></i> Apps</a>
                                    <a href="index.html#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                    <a href="index.html#"><i class="i-Checked-User"></i> Sessions</a>
                                    <a href="index.html#"><i class="i-Ambulance"></i> Support</a>
                                </div>
                            </div>
                                 <div class="col-md-4 p-4">
                                <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                                <ul class="links">
                                    <li><a href="http://gull-html-laravel.ui-lib.com/accordion.html">Accordion</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/alerts.html">Alerts</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/buttons.html">Buttons</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/badges.html">Badges</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/carousel.html">Carousels</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/lists.html">Lists</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/popover.html">Popover</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/tables.html">Tables</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/datatables.html">Datatables</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/modals.html">Modals</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/nouislider.html">Sliders</a></li>
                                    <li><a href="http://gull-html-laravel.ui-lib.com/tabs.html">Tabs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Mega menu -->
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>

            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->
                <div class="dropdown widget_dropdown">
                    <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="menu-icon-grid">
                            <a href="index.html#"><i class="i-Shop-4"></i> Home</a>
                            <a href="index.html#"><i class="i-Library"></i> UI Kits</a>
                            <a href="index.html#"><i class="i-Drop"></i> Apps</a>
                            <a href="index.html#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                            <a href="index.html#"><i class="i-Checked-User"></i> Sessions</a>
                            <a href="index.html#"><i class="i-Ambulance"></i> Support</a>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton -->
                <div class="dropdown">
                    <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New message</span>
                                    <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 sec ago</span>
                                </p>
                                <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Receipt-3 text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New order received</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">2 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Empty-Box text-danger mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Product out of stock</span>
                                    <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->

                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div  class="user col align-self-end">
                        <img src="{{ asset('admin/assets/images/faces/1.jpg') }}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div>
                            <a class="dropdown-item">Account settings</a>
                            <a class="dropdown-item">Billing history</a>
                            <a class="dropdown-item" href="sessions/signIn.html">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- header top menu end -->
            



            <div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item " data-item="dashboard">
                <a class="nav-item-hold" href="index.html#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="uikits">
                <a class="nav-item-hold" href="index.html#">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">UI kits</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="extrakits">
                <a class="nav-item-hold" href="index.html#">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">Extra kits</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="apps">
                <a class="nav-item-hold" href="index.html#">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="forms">
                <a class="nav-item-hold" href="index.html#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item " data-item="widgets">
                <a class="nav-item-hold" href="index.html#">
                    <i class="nav-icon i-Windows-2"></i>
                    <span class="nav-text">widgets</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item " data-item="charts">
                <a class="nav-item-hold" href="index.html#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item ">
                <a class="nav-item-hold" href="datatables/basic-tables.html">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="nav-text">Datatables</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="sessions">
                <a class="nav-item-hold" href="http://gull-html-laravel.ui-lib.com/test.html">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Sessions</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item " data-item="others">
                <a class="nav-item-hold" href="index.html">
                    <i class="nav-icon i-Double-Tap"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Doc</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item ">
                <a class=""
                    href="dashboard/dashboard1.html">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Version 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="dashboard/dashboard2.html"
                    class="">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Version 2</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="dashboard/dashboard3.html">
                    <i class="nav-icon i-Over-Time"></i>
                    <span class="item-name">Version 3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="dashboard/dashboard4.html">
                    <i class="nav-icon i-Clock"></i>
                    <span class="item-name">Version 4</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="forms">

            <li class="nav-item">
                <a class="" href="forms/forms-basic.html">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">Basic Elements</span>
                </a>
            </li>

            <li class="nav-item">
                <a class=""
                    href="forms/basic-action-bar.html">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">Basic action bar </span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="forms/form-layouts.html">
                    <i class="nav-icon i-Split-Vertical"></i>
                    <span class="item-name">Form Layouts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class=""
                    href="forms/multi-column-forms.html">
                    <i class="nav-icon i-Split-Vertical"></i>
                    <span class="item-name">Multi column forms</span>
                </a>
            </li>

            <li class="nav-item">
                <a class=""
                    href="forms/form-input-group.html">
                    <i class="nav-icon i-Receipt-4"></i>
                    <span class="item-name">Input Groups</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="forms/form-validation.html">
                    <i class="nav-icon i-Close-Window"></i>
                    <span class="item-name">Form Validation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/smartWizard.html">
                    <i class="nav-icon i-Width-Window"></i>
                    <span class="item-name">Smart Wizard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/tagInput.html">
                    <i class="nav-icon i-Tag-2"></i>
                    <span class="item-name">Tag Input</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="forms/form-editor.html">
                    <i class="nav-icon i-Pen-2"></i>
                    <span class="item-name">Rich Editor</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="widgets">
            <li class="nav-item">
                <a class="" href="widgets/card.html">
                    <i class="nav-icon i-Receipt-4"></i>
                    <span class="item-name">widget card</span>
                </a>
            </li>
            <li class="nav-item">


                <a class=""
                    href="widgets/statistics.html">
                    <i class="nav-icon i-Receipt-4"></i>
                    <span class="item-name">widget statistics</span>
                </a>
            </li>

            <li class="nav-item">


                <a class="" href="widgets/list.html">
                    <i class="nav-icon i-Receipt-4"></i>
                    <span class="item-name">Widget List <span class="ml-2 badge badge-pill badge-danger">
                            New</span></span>
                </a>
            </li>

            <li class="nav-item">


                <a class="" href="widgets/app.html">
                    <i class="nav-icon i-Receipt-4"></i>
                    <span class="item-name">Widget App <span class="ml-2 badge badge-pill badge-danger"> New</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">


                <a class=""
                    href="widgets/weather-app.html">
                    <i class="nav-icon i-Receipt-4"></i>
                    <span class="item-name"> Weather App <span class="ml-2 badge badge-pill badge-danger"> New</span>
                    </span>
                </a>
            </li>

        </ul>

        <ul class="childNav" data-parent="charts">
            <li class="nav-item">
                <a class="" href="charts/echarts.html">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">echarts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="charts/chartjs.html">
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">ChartJs</span>
                </a>
            </li>
            <li class="nav-item dropdown-sidemenu">
                <a>
                    <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                    <span class="item-name">Apex Charts</span>
                    <i class="dd-arrow i-Arrow-Down"></i>
                </a>
                <ul class="submenu">
                    <li><a class=""
                            href="charts/apexAreaCharts.html">Area Charts</a></li>
                    <li><a class=""
                            href="charts/apexBarCharts.html">Bar Charts</a></li>
                    <li><a class=""
                            href="charts/apexBubbleCharts.html">Bubble Charts</a></li>
                    <li><a class=""
                            href="charts/apexColumnCharts.html">Column Charts</a></li>
                    <li><a class=""
                            href="charts/apexCandleStickCharts.html">CandleStick Charts</a></li>
                    <li><a class=""
                            href="charts/apexLineCharts.html">Line Charts</a></li>
                    <li><a class=""
                            href="charts/apexMixCharts.html">Mix Charts</a></li>
                    <li><a class=""
                            href="charts/apexPieDonutCharts.html">PieDonut Charts</a></li>
                    <li><a class=""
                            href="charts/apexRadarCharts.html">Radar Charts</a></li>
                    <li><a class=""
                            href="charts/apexRadialBarCharts.html">RadialBar Charts</a></li>
                    <li><a class=""
                            href="charts/apexScatterCharts.html">Scatter Charts</a></li>
                    <li><a class=""
                            href="charts/apexSparklineCharts.html">Sparkline Charts</a></li>

                </ul>
            </li>





        </ul>

        <ul class="childNav" data-parent="apps">
            <li class="nav-item">
                <a class="" href="apps/invoice.html">
                    <i class="nav-icon i-Add-File"></i>
                    <span class="item-name">Invoice</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="apps/inbox.html">
                    <i class="nav-icon i-Email"></i>
                    <span class="item-name">Inbox</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="apps/chat.html">
                    <i class="nav-icon i-Speach-Bubble-3"></i>
                    <span class="item-name">Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="apps/calendar.html">
                    <i class="nav-icon i-Calendar-4"></i>
                    <span class="item-name">Calendar</span>
                </a>
            </li>
            <li class="nav-item dropdown-sidemenu">
                <a>
                    <i class="nav-icon i-Receipt"></i>
                    <span class="item-name">Task Manager <span
                            class=" ml-2 badge badge-pill badge-danger">New</span></span>
                    <i class="dd-arrow i-Arrow-Down"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a class=""
                            href="apps/task-manager.html">
                            <i class="nav-icon i-Receipt"></i>
                            <span class="item-name">Task manager</span>
                        </a>
                    </li>
                    <li>
                        <a class=""
                            href="apps/task-manager-list.html">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">Task manager list</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="apps/toDo.html">
                            <i class="nav-icon i-Receipt-4"></i>
                            <span class="item-name">Minimal ToDo</span>
                        </a>
                    </li>
                    <li></li>
                </ul>
            </li>

            <li class="nav-item dropdown-sidemenu">
                <a>
                    <i class="nav-icon i-Cash-Register"></i>
                    <span class="item-name">Ecommerce <span
                            class=" ml-2 badge badge-pill badge-danger">New</span></span>
                    <i class="dd-arrow i-Arrow-Down"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a class=""
                            href="apps/ecommerce/products.html">
                            <i class="nav-icon i-Shop-2"></i>
                            <span class="item-name">Products</span>
                        </a>
                    </li>


                    <li>
                        <a class=""
                            href="apps/ecommerce/product-details.html">
                            <i class="nav-icon i-Tag-2"></i>
                            <span class="item-name">Product Details</span>
                        </a>
                    </li>
                    <li>
                        <a class=""
                            href="apps/ecommerce/cart.html">
                            <i class="nav-icon i-Add-Cart"></i>
                            <span class="item-name">Cart</span>
                        </a>
                    </li>

                    <li>
                        <a class=""
                            href="apps/ecommerce/checkout.html">
                            <i class="nav-icon i-Cash-register-2"></i>
                            <span class="item-name">Checkout</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown-sidemenu">
                <a>
                    <i class="nav-icon i-Business-ManWoman"></i>
                    <span class="item-name">Contacts<span class=" ml-2 badge badge-pill badge-danger">New</span></span>
                    <i class="dd-arrow i-Arrow-Down"></i>
                </a>
                <ul class="submenu">

                    <li>
                        <a class=""
                            href="http://gull-html-laravel.ui-lib.com/apps/contacts/contact-list-table">
                            <i class="nav-icon i-Business-Mens"></i>
                            <span class="item-name">Contact Table
                                
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class=""
                            href="apps/contacts/lists.html">
                            <i class="nav-icon i-Business-Mens"></i>
                            <span class="item-name">Contact Lists</span>
                        </a>
                    </li>
                    <li>
                        <a class=""
                            href="apps/contacts/grid.html">
                            <i class="nav-icon i-Conference"></i>
                            <span class="item-name">Contact Grid</span>
                        </a>
                    </li>
                    <li>
                        <a class=""
                            href="http://gull-html-laravel.ui-lib.com/apps/contacts/contact-details">
                            <i class="nav-icon i-Find-User"></i>
                            <span class="item-name">Contact Details</span>
                        </a>
                    </li>



                </ul>
            </li>


        </ul>
        <ul class="childNav" data-parent="extrakits">

            <li class="nav-item">
                <a class="" href="extrakits/dropDown.html">
                    <i class="nav-icon i-Arrow-Down-in-Circle"></i>
                    <span class="item-name">Dropdown</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="" href="extrakits/imageCroper.html">
                    <i class="nav-icon i-Crop-2"></i>
                    <span class="item-name">Image Cropper</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/loader.html">
                    <i class="nav-icon i-Loading-3"></i>
                    <span class="item-name">Loaders</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/laddaButton.html">
                    <i class="nav-icon i-Loading-2"></i>
                    <span class="item-name">Ladda Buttons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/toastr.html">
                    <i class="nav-icon i-Bell"></i>
                    <span class="item-name">Toastr</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/sweetAlert.html">
                    <i class="nav-icon i-Approved-Window"></i>
                    <span class="item-name">Sweet Alerts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/tour.html">
                    <i class="nav-icon i-Plane"></i>
                    <span class="item-name">User Tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="extrakits/upload.html">
                    <i class="nav-icon i-Data-Upload"></i>
                    <span class="item-name">Upload</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="uikits">
            <li class="nav-item">
                <a class="" href="uikits/alerts.html">
                    <i class="nav-icon i-Bell1"></i>
                    <span class="item-name">Alerts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/accordion.html">
                    <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                    <span class="item-name">Accordion</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/badges.html">
                    <i class="nav-icon i-Medal-2"></i>
                    <span class="item-name">Badges</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/buttons.html">
                    <i class="nav-icon i-Cursor-Click"></i>
                    <span class="item-name">Buttons</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="uikits/bootstrap-tab.html">
                    <i class="nav-icon i-Cursor-Click"></i>
                    <span class="item-name">Bootstrap tab</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/cards.html">
                    <i class="nav-icon i-Line-Chart-2"></i>
                    <span class="item-name">Cards</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="uikits/cards-metrics.html">
                    <i class="nav-icon i-ID-Card"></i>
                    <span class="item-name">Card Metrics</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/carousel.html">
                    <i class="nav-icon i-Video-Photographer"></i>
                    <span class="item-name">Carousels</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="" href="uikits/collapsible.html">
                    <i class="nav-icon i-Video-Photographer"></i>
                    <span class="item-name">Collapsibles</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/lists.html">
                    <i class="nav-icon i-Belt-3"></i>
                    <span class="item-name">Lists</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/pagination.html">
                    <i class="nav-icon i-Arrow-Next"></i>
                    <span class="item-name">Paginations</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/popover.html">
                    <i class="nav-icon i-Speach-Bubble-2"></i>
                    <span class="item-name">Popover</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/progressbar.html">
                    <i class="nav-icon i-Loading"></i>
                    <span class="item-name">Progressbar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/tables.html">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="item-name">Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/tabs.html">
                    <i class="nav-icon i-New-Tab"></i>
                    <span class="item-name">Tabs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/tooltip.html">
                    <i class="nav-icon i-Speach-Bubble-8"></i>
                    <span class="item-name">Tooltip</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/typography.html">
                    <i class="nav-icon i-Letter-Open"></i>
                    <span class="item-name">Typography</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="" href="uikits/modals.html">
                    <i class="nav-icon i-Duplicate-Window"></i>
                    <span class="item-name">Modals</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="uikits/NoUislider.html">
                    <i class="nav-icon i-Width-Window"></i>
                    <span class="item-name">Sliders</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="sessions">
            <li class="nav-item">
                <a href="sessions/signIn.html">
                    <i class="nav-icon i-Checked-User"></i>
                    <span class="item-name">Sign in</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="sessions/signUp.html">
                    <i class="nav-icon i-Add-User"></i>
                    <span class="item-name">Sign up</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="sessions/forgot.html">
                    <i class="nav-icon i-Find-User"></i>
                    <span class="item-name">Forgot</span>
                </a>
            </li>
        </ul>
        <ul class="childNav" data-parent="others">
            <li class="nav-item">
                <a href="others/notFound.html">
                    <i class="nav-icon i-Error-404-Window"></i>
                    <span class="item-name">Not Found</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="others/pricing-table.html">
                    <i class="nav-icon i-Billing"></i>
                    <span class="item-name">Pricing Table <span
                            class="ml-2 badge badge-pill badge-danger">New</span></span>
                </a>
            </li>

            <li class="nav-item">
                <a class=""
                    href="others/search-result.html">
                    <i class="nav-icon i-File-Search"></i>
                    <span class="item-name">Search Result <span class="badge badge-pill badge-danger">New</span></span>
                </a>
            </li>
            <li class="nav-item">
                <a class=""
                    href="others/user-profile.html">
                    <i class="nav-icon i-Male"></i>
                    <span class="item-name">User Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="others/faq.html" class="open">
                    <i class="nav-icon i-File-Horizontal"></i>
                    <span class="item-name">faq</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="others/starter.html"
                    class="open">
                    <i class="nav-icon i-File-Horizontal"></i>
                    <span class="item-name">Blank Page</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->            

            <!-- ============ Body content start ============= -->
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                               <div class="breadcrumb">
                <h1>Version 1</h1>
                <ul>
                    <li><a href="index.html">Dashboard</a></li>
                    <li>Version 1</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <!-- ICON BG -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Add-User"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">New Leads</p>
                                <p class="text-primary text-24 line-height-1 mb-2">205</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Financial"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Sales</p>
                                <p class="text-primary text-24 line-height-1 mb-2">$4021</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Checkout-Basket"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Orders</p>
                                <p class="text-primary text-24 line-height-1 mb-2">80</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                        <div class="card-body text-center">
                            <i class="i-Money-2"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-0">Expense</p>
                                <p class="text-primary text-24 line-height-1 mb-2">$1200</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">This Year Sales</div>
                            <div id="echartBar" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Sales by Countries</div>
                            <div id="echartPie" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12">

                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card card-chart-bottom o-hidden mb-4">
                                <div class="card-body">
                                    <div class="text-muted">Last Month Sales</div>
                                    <p class="mb-4 text-primary text-24">$40250</p>
                                </div>
                                <div id="echart1" style="height: 260px;"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="card card-chart-bottom o-hidden mb-4">
                                <div class="card-body">
                                    <div class="text-muted">Last Week Sales</div>
                                    <p class="mb-4 text-warning text-24">$10250</p>
                                </div>
                                <div id="echart2" style="height: 260px;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card o-hidden mb-4">
                                <div class="card-header d-flex align-items-center border-0">
                                    <h3 class="w-50 float-left card-title m-0">New Users</h3>
                                    <div class="dropdown dropleft text-right w-50 float-right">
                                        <button class="btn bg-gray-100" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="nav-icon i-Gear-2"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="index.html#">Add new user</a>
                                            <a class="dropdown-item" href="index.html#">View All users</a>
                                            <a class="dropdown-item" href="index.html#">Something else here</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="table-responsive">
                                        <table id="user_table" class="table  text-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Avatar</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Smith Doe</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="">

                                                    </td>

                                                    <td>Smith@gmail.com</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <a href="index.html#" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="index.html#" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jhon Doe</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="">

                                                    </td>

                                                    <td>Jhon@gmail.com</td>
                                                    <td><span class="badge badge-info">Pending</span></td>
                                                    <td>
                                                        <a href="index.html#" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="index.html#" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Alex</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="">

                                                    </td>

                                                    <td>Otto@gmail.com</td>
                                                    <td><span class="badge badge-warning">Not Active</span></td>
                                                    <td>
                                                        <a href="index.html#" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="index.html#" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Mathew Doe</td>
                                                    <td>

                                                        <img class="rounded-circle m-0 avatar-sm-table " src="{{ asset('admin/assets/images/faces/1.jpg') }}" alt="">

                                                    </td>

                                                    <td>Mathew@gmail.com</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td>
                                                        <a href="index.html#" class="text-success mr-2">
                                                            <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                        </a>
                                                        <a href="index.html#" class="text-danger mr-2">
                                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>


                <div class="col-lg-6 col-md-12">

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title">Top Selling Products</div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{ asset('admin/assets/images/products/headphone-4.jpg') }}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="index.html">Wireless Headphone E23</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$450 <del class="text-muted">$500</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-rounded btn-sm">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{ asset('admin/assets/images/products/headphone-2.jpg') }}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="index.html">Wireless Headphone Y902</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$550 <del class="text-muted">$600</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-sm btn-rounded m-3 m-sm-0">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{ asset('admin/assets/images/products/headphone-3.jpg') }}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="index.html">Wireless Headphone E09</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$250 <del class="text-muted">$300</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-sm btn-rounded m-3 m-sm-0">View details</button>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row align-items-center mb-3">
                                <img class="avatar-lg mb-3 mb-sm-0 rounded mr-sm-3" src="{{ asset('admin/assets/images/products/headphone-4.jpg') }}" alt="">
                                <div class="flex-grow-1">
                                    <h5 class=""><a href="index.html">Wireless Headphone X89</a></h5>
                                    <p class="m-0 text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <p class="text-small text-danger m-0">$450 <del class="text-muted">$500</del></p>
                                </div>
                                <div>
                                    <button class="btn btn-outline-primary btn-sm btn-rounded m-3 m-sm-0">View details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <div class="card-title border-bottom d-flex align-items-center m-0 p-3">
                                <span>User activity</span>
                                <span class="flex-grow-1"></span>
                                <span class="badge badge-pill badge-warning">Updated daily</span>
                            </div>
                            <div class="d-flex border-bottom justify-content-between p-3">
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Pages / Visit</span>
                                    <h5 class="m-0">2065</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">New user</span>
                                    <h5 class="m-0">465</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Last week</span>
                                    <h5 class="m-0">23456</h5>
                                </div>
                            </div>
                            <div class="d-flex border-bottom justify-content-between p-3">
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Pages / Visit</span>
                                    <h5 class="m-0">1829</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">New user</span>
                                    <h5 class="m-0">735</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Last week</span>
                                    <h5 class="m-0">92565</h5>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Pages / Visit</span>
                                    <h5 class="m-0">3165</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">New user</span>
                                    <h5 class="m-0">165</h5>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="text-small text-muted">Last week</span>
                                    <h5 class="m-0">32165</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body p-0">
                            <h5 class="card-title m-0 p-3">Last 20 Day Leads</h5>
                            <div id="echart3" style="height: 360px;"></div>
                        </div>
                    </div>
                </div>

            </div>


                </div>

                <!-- Footer Start -->
<div class="flex-grow-1"></div>
<div class="app-footer">
    <div class="row">
        <div class="col-md-9">
            <p><strong>Gull - Laravel 6 + Bootstrap 4 admin Dashboard template</strong></p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis
                voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi
                sequi dolor quibusdam
                sunt.
            </p>
        </div>
    </div>
    <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
        <a class="btn btn-primary text-white btn-rounded" target="_blank"
            href="https://themeforest.net/item/gull-bootstrap-laravel-admin-dashboard-template/23101970?ref=ui-lib"
            target="_blank">Buy
            Gull HTML</a>
        <span class="flex-grow-1"></span>
        <div class="d-flex align-items-center">
            <img class="logo" src="{{ asset('admin/assets/images/logo.png') }}" alt="">
            <div>
                <p class="m-0">&copy; 2019 UI-Lib</p>
                <p class="m-0">All rights reserved</p>
            </div>
        </div>
    </div>
</div>
<!-- fotter end -->            </div>
            <!-- ============ Body content End ============= -->
        </div>
        <!--=============== End app-admin-wrap ================-->

        <!-- ============ Search UI Start ============= -->
        <!-- ============ Search UI Start ============= -->
  <div class="search-ui">
        <div class="search-header">
            <img src="{{ asset('admin/assets/images/logo.png') }}" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{ asset('admin/assets/images/products/headphone-1.jpg') }}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="index.html" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{ asset('admin/assets/images/products/headphone-2.jpg') }}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="index.html" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{ asset('admin/assets/images/products/headphone-3.jpg') }}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="index.html" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="{{ asset('admin/assets/images/products/headphone-4.jpg') }}" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="index.html" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="index.html#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="index.html#">1</a></li>
                    <li class="page-item"><a class="page-link" href="index.html#">2</a></li>
                    <li class="page-item"><a class="page-link" href="index.html#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="index.html#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
        <!-- ============ Search UI End ============= -->

        <!-- ============ Customizer ============= -->
<div class="customizer">
    <div class="handle" (click)="isOpen = !isOpen">
        <i class="i-Gear spin"></i>
    </div>
    <div class="customizer-body" data-perfect-scrollbar data-suppress-scroll-x="true">
        <div class="accordion" id="accordionCustomizer">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <p class="mb-0">
                        Sidebar Layout
                    </p>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingThree"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">

                        <div class="">
                            <a title="Compact Sidebar" href="large-compact-sidebar/dashboard/dashboard1.html" class="btn btn-primary"> Compact
                                Sidebar </a>
                            <a title="Horizontal Layout" href="horizontal-bar/dashboard/dashboard1.html" class="btn btn-primary">
                                Horizontal Layout </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0">
                        RTL
                    </p>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" id="rtl-checkbox">
                            <span>Enable RTL</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>

            
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <p class="mb-0">
                        Dark Version
                    </p>
                </div>

                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionCustomizer">
                    <div class="card-body">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" id="dark-checkbox">
                            <span>Enable Dark Mode</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>
<!-- ============ End Customizer ============= -->

        <!-- ============ Large Sidebar Layout End ============= -->



        




        
        <script src="{{ asset('admin/assets/js/common-bundle-script.js') }}"></script>
        
             <script src="{{ asset('admin/assets/js/vendor/echarts.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/es5/echart.options.min.js') }}"></script>
     <script src="{{ asset('admin/assets/js/es5/dashboard.v1.script.js') }}"></script>


        
        
        <script src="{{ asset('admin/assets/js/script.js') }}"></script>


                <script src="{{ asset('admin/assets/js/sidebar.large.script.js') }}"></script>

        


        <script src="{{ asset('admin/assets/js/customizer.script.js') }}"></script>

        
        

            </body>

</html>