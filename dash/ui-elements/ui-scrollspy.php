<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/ui-scrollspy.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:18:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>::eBazar:: Ui Scrollspy </title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- Plugin css  -->
    <link rel="stylesheet" href="../assets/plugin/prism/prism.css">

    <!-- project css file  -->
    <link rel="stylesheet" href="../assets/css/ebazar.style.min.css">
</head>
<body>
    <div id="ebazar-layout" class="theme-blue">
        
        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.html" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">eBazar</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="../index.html"><i class="icofont-ui-home"></i><span>Home</span></a>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Authentication" href="#"><i
                                class="icofont-ui-lock"></i> <span>Authentication</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Authentication">
                            <li><a class="ms-link" href="auth-signin.html"><span>Sign in</span></a></li>
                            <li><a class="ms-link" href="auth-signup.html"><span>Sign up</span></a></li>
                            <li><a class="ms-link" href="auth-password-reset.html"><span>Password reset</span></a></li>
                            <li><a class="ms-link" href="auth-two-step.html"><span>2-Step Authentication</span></a></li>
                            <li><a class="ms-link" href="auth-404.html"><span>404</span></a></li>
                        </ul>
                    </li>
                    <li><a class="m-link" href="index.html"><i class="icofont-code"></i> <span>Stater page</span></a></li>
                    <li class="collapsed">
                        <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#menu-Components" href="#"><i
                                class="icofont-paint"></i> <span>UI Components</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse show" id="menu-Components">
                            <li><a class="ms-link" href="ui-alerts.html"><span>Alerts</span> </a></li>
                            <li><a class="ms-link" href="ui-badge.html"><span>Badge</span></a></li>
                            <li><a class="ms-link" href="ui-breadcrumb.html"><span>Breadcrumb</span></a></li>
                            <li><a class="ms-link" href="ui-buttons.html"><span>Buttons</span></a></li>
                            <li><a class="ms-link" href="ui-card.html"><span>Card</span></a></li>
                            <li><a class="ms-link" href="ui-carousel.html"><span>Carousel</span></a></li>
                            <li><a class="ms-link" href="ui-collapse.html"><span>Collapse</span></a></li>
                            <li><a class="ms-link" href="ui-dropdowns.html"><span>Dropdowns</span></a></li>
                            <li><a class="ms-link" href="ui-listgroup.html"><span>List group</span></a></li>
                            <li><a class="ms-link" href="ui-modal.html"><span>Modal</span></a></li>
                            <li><a class="ms-link" href="ui-navs.html"><span>Navs</span></a></li>
                            <li><a class="ms-link" href="ui-navbar.html"><span>Navbar</span></a></li>
                            <li><a class="ms-link" href="ui-pagination.html"><span>Pagination</span></a></li>
                            <li><a class="ms-link" href="ui-popovers.html"><span>Popovers</span></a></li>
                            <li><a class="ms-link" href="ui-progress.html"><span>Progress</span></a></li>
                            <li><a class="ms-link active" href="ui-scrollspy.html"><span>Scrollspy</span></a></li>
                            <li><a class="ms-link" href="ui-spinners.html"><span>Spinners</span></a></li>
                            <li><a class="ms-link" href="ui-toasts.html"><span>Toasts</span></a></li>
                            <li><a class="ms-link" href="ui-tooltips.html"><span>Tooltips</span></a></li>
                        </ul>
                    </li>
                    <li><a class="m-link" href="documentation.html"><i class="icofont-law-document"></i>
                            <span>Documentation</span></a></li>
                    <li><a class="m-link" href="changelog.html"><i class="icofont-edit"></i> <span>Changelog</span> <span
                            class="ms-auto small-14 fw-bold">v1.0.0</span></a></li>
                </ul>

            
                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container">
        
                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="d-flex">
                                <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                    <i class="icofont-info-square fs-5"></i>
                                </a>
                            </div>
                            <div class="dropdown zindex-popover">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <img src="../assets/images/flag/GB.png" alt="">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0">
                                        <ul class="list-unstyled py-2 px-3">
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/GB.png" alt=""> English</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/DE.png" alt=""> German</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/FR.png" alt=""> French</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/IT.png" alt=""> Italian</a>
                                            </li>
                                            <li>
                                                <a href="#" class=""><img src="../assets/images/flag/RU.png" alt=""> Russian</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="dropdown notifications">
                                <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icofont-alarm fs-5"></i>
                                    <span class="pulse-ring"></span>
                                </a>
                                <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3">
                                    <div class="card border-0 w380">
                                        <div class="card-header border-0 p-3">
                                            <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                                <span>Notifications</span>
                                                <span class="badge text-white">06</span>
                                            </h5>
                                        </div>
                                        <div class="tab-content card-body">
                                            <div class="tab-pane fade show active">
                                                <ul class="list-unstyled list mb-0">
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar1.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                                <span class="">Added New Product 2021-07-15 <span class="badge bg-success">Add</span></span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Hill</span> <small>13MIN</small></p>
                                                                <span class="">Invoice generator </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar3.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                                <span class="">Orader  Return RT-00004</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar5.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                                <span class="">Product Order to Toyseller</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2 mb-1 border-bottom">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar6.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                                <span class="">Leave Apply</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="py-2">
                                                        <a href="javascript:void(0);" class="d-flex">
                                                            <img class="avatar rounded-circle" src="../assets/images/xs/avatar7.svg" alt="">
                                                            <div class="flex-fill ms-2">
                                                                <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                                <span class="">Product Stoke Entry Updated</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John Quinn</span></p>
                                    <small>Admin Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="../assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="../assets/images/profile_av.svg" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">John	Quinn</span></p>
                                                    <small class="">Johnquinn@gmail.com</small>
                                                </div>
                                            </div>
                                            
                                            <div><hr class="dropdown-divider border-dark"></div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="../admin-profile.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>
                                            <a href="../order-invoices.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-file-text fs-5 me-3"></i>Order Invoices</a>
                                            <a href="auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="setting ms-2">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i class="icofont-gear-alt fs-5"></i></a>
                            </div>
                        </div>
        
                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>
        
                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                                
                            </div>
                        </div>
        
                    </div>
                </nav>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-lg-3 py-md-2">
                <div class="container">
                    <div class="col-12">
                        <div class="bd-content ps-lg-4">

                            <h2 id="how-it-works">How it works</h2>
                            <p>Scrollspy has a few requirements to function properly:</p>
                            <div class="alert alert-danger" role="alert">
                                <strong>Scrollspy</strong> for more bootstrao components <a href="https://v5.getbootstrap.com/docs/5.0/components/scrollspy/" target="_blank">Bootstrap Scrollspy documentation <i class="fa fa-external-link"></i></a>
                            </div>
                            <ul class="ps-3">
                                <li>It must be used on a Bootstrap <a href="https://v5.getbootstrap.com/docs/5.0/components/navs/">nav component</a> or <a href="https://v5.getbootstrap.com/docs/5.0/components/list-group/">list group</a>.</li>
                                <li>Scrollspy requires <code>position: relative;</code> on the element you’re spying on, usually the <code>&lt;body&gt;</code>.</li>
                                <li>Anchors (<code>&lt;a&gt;</code>) are required and must point to an element with that <code>id</code>.</li>
                            </ul>
                            <p>When successfully implemented, your nav or list group will update accordingly, moving the <code>.active</code> class from one item to the next based on their associated targets.</p>
                            <div class="card card-callout p-3">
                                <h3 id="scrollable-containers-and-keyboard-access">Scrollable containers and keyboard access</h3>
                                <p class="mb-0">If you’re making a scrollable container (other than the <code>&lt;body&gt;</code>), be sure to have a <code>height</code> set and <code>overflow-y: scroll;</code> applied to it—alongside a <code>tabindex="0"</code> to ensure keyboard access.</p>
                            </div>

                            <div class="border-top mt-5 pt-3">
                                <h5 id="example-in-navbar">Example in navbar</h5>
                                <p>Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.</p>

                                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview1" role="tab">Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML1" role="tab">HTML</a></li>
                                </ul>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-Preview1" role="tabpanel">
                                                <nav id="navbar-example1" class="navbar navbar-light bg-light px-3">
                                                    <a class="navbar-brand" href="#">Navbar</a>
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item"><a class="nav-link" href="#fat">@fat</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#mdo">@mdo</a></li>
                                                        <li class="nav-item dropdown">
                                                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                                            <ul class="dropdown-menu dropdown-menu-right border-0 shadow">
                                                                <li><a class="dropdown-item" href="#one">one</a></li>
                                                                <li><a class="dropdown-item" href="#two">two</a></li>
                                                                <li><hr class="dropdown-divider"></li>
                                                                <li><a class="dropdown-item" href="#three">three</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <div class="mt-2" data-bs-spy="scroll" data-bs-target="#navbar-example1" data-bs-offset="0" tabindex="0" style="height: 200px; overflow-y: auto; position: relative;">
                                                    <h5 id="fat">@fat</h5>
                                                    <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                                                    <h5 id="mdo">@mdo</h5>
                                                    <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.</p>
                                                    <h5 id="one">one</h5>
                                                    <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.</p>
                                                    <h5 id="two">two</h5>
                                                    <p>In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
                                                    <h5 id="three">three</h5>
                                                    <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.</p>
                                                    <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-HTML1" role="tabpanel">
    <pre class="language-html m-0" data-lang="html">
    <code>&lt;nav id=&quot;navbar-example1&quot; class=&quot;navbar navbar-light bg-light px-3&quot;&gt;
        &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
        &lt;ul class=&quot;nav nav-pills&quot;&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#fat&quot;&gt;@fat&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#mdo&quot;&gt;@mdo&lt;/a&gt;&lt;/li&gt;
            &lt;li class=&quot;nav-item dropdown&quot;&gt;
                &lt;a class=&quot;nav-link dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu dropdown-menu-right&quot;&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#one&quot;&gt;one&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#two&quot;&gt;two&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#three&quot;&gt;three&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/nav&gt;
    &lt;div class=&quot;border p-3&quot; data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example1&quot; data-bs-offset=&quot;0&quot; tabindex=&quot;0&quot;&gt;
        &lt;h5 id=&quot;fat&quot;&gt;@fat&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;h5 id=&quot;mdo&quot;&gt;@mdo&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;h5 id=&quot;one&quot;&gt;one&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;h5 id=&quot;two&quot;&gt;two&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;h5 id=&quot;three&quot;&gt;three&lt;/h5&gt;
        &lt;p&gt;...&lt;/p&gt;
        &lt;p&gt;...&lt;/p&gt;
    &lt;/div&gt;</code>
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top mt-5 pt-3">
                                <h5 id="example-in-navbar">Example in navbar</h5>
                                <p>Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.</p>

                                <ul class="nav nav-tabs tab-card px-3 border-bottom-0" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#nav-Preview2" role="tab">Preview</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#nav-HTML2" role="tab">HTML</a></li>
                                </ul>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-Preview2" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <nav id="navbar-example2" class="navbar navbar-light bg-light flex-column">
                                                            <a class="navbar-brand" href="#">Navbar</a>
                                                            <nav class="nav nav-pills flex-column">
                                                                <a class="nav-link" href="#item-1">Item 1</a>
                                                                <nav class="nav nav-pills flex-column">
                                                                    <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                                                    <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                                                </nav>
                                                                <a class="nav-link" href="#item-2">Item 2</a>
                                                                <a class="nav-link" href="#item-3">Item 3</a>
                                                                <nav class="nav nav-pills flex-column">
                                                                    <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                                                    <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                                                </nav>
                                                            </nav>
                                                        </nav>
                                                    </div>
                                                    <div class="col-8">
                                                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0" style="height: 345px; overflow-y: auto; position: relative;">
                                                            <h4 id="item-1">Item 1</h4>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                                                            <h5 id="item-1-1">Item 1-1</h5>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                                                            <h5 id="item-1-2">Item 1-2</h5>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                                                            <h4 id="item-2">Item 2</h4>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                                                            <h4 id="item-3">Item 3</h4>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                                                            <h5 id="item-3-1">Item 3-1</h5>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                                                            <h5 id="item-3-2">Item 3-2</h5>
                                                            <p>Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-HTML2" role="tabpanel">
    <pre class="language-html m-0" data-lang="html">
    <code>&lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-4&quot;&gt;
            &lt;nav id=&quot;navbar-example2&quot; class=&quot;navbar navbar-light bg-light flex-column&quot;&gt;
                &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
                &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                    &lt;a class=&quot;nav-link&quot; href=&quot;#item-1&quot;&gt;Item 1&lt;/a&gt;
                    &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                        &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-1-1&quot;&gt;Item 1-1&lt;/a&gt;
                        &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-1-2&quot;&gt;Item 1-2&lt;/a&gt;
                    &lt;/nav&gt;
                    &lt;a class=&quot;nav-link&quot; href=&quot;#item-2&quot;&gt;Item 2&lt;/a&gt;
                    &lt;a class=&quot;nav-link&quot; href=&quot;#item-3&quot;&gt;Item 3&lt;/a&gt;
                    &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                        &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-3-1&quot;&gt;Item 3-1&lt;/a&gt;
                        &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-3-2&quot;&gt;Item 3-2&lt;/a&gt;
                    &lt;/nav&gt;
                &lt;/nav&gt;
            &lt;/nav&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-8&quot;&gt;
            &lt;div data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example2&quot; data-bs-offset=&quot;0&quot; tabindex=&quot;0&quot; style=&quot;height: 345px; overflow-y: auto; position: relative;&quot;&gt;
                &lt;h4 id=&quot;item-1&quot;&gt;Item 1&lt;/h4&gt;
                &lt;p&gt;...&lt;/p&gt;
                &lt;h5 id=&quot;item-1-1&quot;&gt;Item 1-1&lt;/h5&gt;
                &lt;p&gt;...&lt;/p&gt;
                &lt;h5 id=&quot;item-1-2&quot;&gt;Item 1-2&lt;/h5&gt;
                &lt;p&gt;...&lt;/p&gt;
                &lt;h4 id=&quot;item-2&quot;&gt;Item 2&lt;/h4&gt;
                &lt;p&gt;...&lt;/p&gt;
                &lt;h4 id=&quot;item-3&quot;&gt;Item 3&lt;/h4&gt;
                &lt;p&gt;...&lt;/p&gt;
                &lt;h5 id=&quot;item-3-1&quot;&gt;Item 3-1&lt;/h5&gt;
                &lt;p&gt;....&lt;/p&gt;
                &lt;h5 id=&quot;item-3-2&quot;&gt;Item 3-2&lt;/h5&gt;
                &lt;p&gt;....&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code>
    </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Custom Settings-->
            <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                <div class="modal-dialog  modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Settings</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body custom_setting">
                            <!-- Settings: Color -->
                            <div class="setting-theme pb-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                                <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                    <li data-theme="indigo"><div class="indigo"></div></li>
                                    <li data-theme="tradewind"><div class="tradewind"></div></li>
                                    <li data-theme="monalisa"><div class="monalisa"></div></li>
                                    <li data-theme="blue" class="active"><div class="blue"></div></li>
                                    <li data-theme="cyan"><div class="cyan"></div></li>
                                    <li data-theme="green"><div class="green"></div></li>
                                    <li data-theme="orange"><div class="orange"></div></li>
                                    <li data-theme="blush"><div class="blush"></div></li>
                                    <li data-theme="red"><div class="red"></div></li>
                                </ul>
                            </div>
                            <div class="sidebar-gradient py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                                <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" id="CheckGradient">
                                    <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                                </div>
                            </div>
                            <!-- Settings: Template dynamics -->
                            <div class="dynamic-block py-3">
                                <ul class="list-unstyled choose-skin mb-2 mt-1">
                                    <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                                </ul>
                                <div class="dt-setting">
                                    <ul class="list-group list-unstyled mt-1">
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Primary Color</label>
                                            <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label>Secondary Color</label>
                                            <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 1</label>
                                            <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 2</label>
                                            <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 3</label>
                                            <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 4</label>
                                            <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                            <label class="text-muted">Chart Color 5</label>
                                            <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Settings: Font -->
                            <div class="setting-font py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                <ul class="list-group font_setting mt-1">
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                            <label class="form-check-label" for="font-poppins">
                                                Poppins Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                            <label class="form-check-label" for="font-opensans">
                                                Open Sans Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                            <label class="form-check-label" for="font-montserrat">
                                                Montserrat Google Font
                                            </label>
                                        </div>
                                    </li>
                                    <li class="list-group-item py-1 px-2">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                            <label class="form-check-label" for="font-mukta">
                                                Mukta Google Font
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Settings: Light/dark -->
                            <div class="setting-mode py-3">
                                <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                <ul class="list-group list-unstyled mb-0 mt-1">
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-switch mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-switch">
                                            <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-high-contrast mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                            <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center py-1 px-2">
                                        <div class="form-check form-switch theme-rtl mb-0">
                                            <input class="form-check-input" type="checkbox" id="theme-rtl">
                                            <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary lift">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script>

    <!-- Prism js file please do not add in your project -->
    <script src="../assets/plugin/prism/prism.js"></script>

    <!-- Jquery Page Js -->
    <script src="../../js/template.js"></script>
    <script>
        var dataSpyList = [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'))
        dataSpyList.forEach(function (dataSpyEl) {
        bootstrap.ScrollSpy.getInstance(dataSpyEl)
            .refresh()
        })
    </script>
</body>

<!-- Mirrored from pixelwibes.com/template/ebazar/html/dist/ui-elements/ui-scrollspy.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 18:18:55 GMT -->
</html>