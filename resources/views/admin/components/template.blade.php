<!DOCTYPE html>
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>@yield('page-title')</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->

        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="" class="-intro-x hidden md:flex">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                    <span class="text-white text-lg ml-3"> Icewall </span> 
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="#">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                        <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
                    </div>
                    <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                    </div>
                                    <div class="ml-3">Robert De Niro</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">robertdeniro@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                    </div>
                                    <div class="ml-3">Johnny Depp</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                    </div>
                                    <div class="ml-3">Johnny Depp</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                    </div>
                                    <div class="ml-3">Keanu Reeves</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">keanureeves@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-1.jpg">
                                </div>
                                <div class="ml-3">Dell XPS 13</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-1.jpg">
                                </div>
                                <div class="ml-3">Nikon Z6</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-15.jpg">
                                </div>
                                <div class="ml-3">Apple MacBook Pro 13</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                                </div>
                                <div class="ml-3">Oppo Find X2 Pro</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-11.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Keanu Reeves</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-10.jpg">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="dist/images/profile-9.jpg">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium">Robert De Niro</div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Software Engineer</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav">
                    <ul>
                        <li>
                            <a href="javascript:;.html" class="side-menu side-menu--active">
                                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                                <div class="side-menu__title">
                                    Dashboard 
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                                <div class="side-menu__title">
                                    Category 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('addcategory') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Add Category </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('allcategory') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> All Category </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                                <div class="side-menu__title">
                                    Sub-Category 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="{{ route('addsubcategory') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">Add sub-Categories </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('allsubcategory') }}" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">All sub-Categories </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('allproduct') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                                <div class="side-menu__title"> product </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('Addproduct') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                                <div class="side-menu__title"> Add product </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('allorder') }}" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                                <div class="side-menu__title"> Order </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-point-of-sale.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                                <div class="side-menu__title"> Point of Sale </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-chat.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                                <div class="side-menu__title"> Chat </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-post.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                                <div class="side-menu__title"> Post </div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-dark-calendar.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                                <div class="side-menu__title"> Calendar </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                                <div class="side-menu__title">
                                    Crud 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-dark-crud-data-list.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Data List </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-crud-form.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Form </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                                <div class="side-menu__title">
                                    Users 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-dark-users-layout-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Layout 1 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-users-layout-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Layout 2 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-users-layout-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Layout 3 </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                                <div class="side-menu__title">
                                    Profile 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-dark-profile-overview-1.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Overview 1 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-profile-overview-2.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Overview 2 </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-profile-overview-3.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Overview 3 </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="layout"></i> </div>
                                <div class="side-menu__title">
                                    Pages 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Wizards 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-wizard-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-wizard-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-wizard-layout-3.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Blog 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-blog-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-blog-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-blog-layout-3.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Pricing 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-pricing-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-pricing-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Invoice 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-invoice-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-invoice-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            FAQ 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-faq-layout-1.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 1</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-faq-layout-2.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 2</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-faq-layout-3.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Layout 3</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="login-dark-login.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Login </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-dark-register.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Register </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="main-dark-error-page.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Error Page </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-update-profile.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Update profile </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-change-password.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Change Password </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav__devider my-6"></li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                                <div class="side-menu__title">
                                    Components 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Table 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-regular-table.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Regular Table</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-tabulator.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Tabulator</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Overlay 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-modal.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Modal</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-slide-over.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Slide Over</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-notification.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Notification</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="side-menu-dark-tab.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Tab </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-accordion.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Accordion </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-button.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Button </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-alert.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Alert </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-progress-bar.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Progress Bar </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-tooltip.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Tooltip </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-dropdown.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Dropdown </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-typography.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Typography </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-icon.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Icon </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-loading-icon.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Loading Icon </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="sidebar"></i> </div>
                                <div class="side-menu__title">
                                    Forms 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-dark-regular-form.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Regular Form </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-datepicker.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Datepicker </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-tom-select.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Tom Select </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-file-upload.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> File Upload </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title">
                                            Wysiwyg Editor 
                                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="side-menu-dark-wysiwyg-editor-classic.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Classic</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-wysiwyg-editor-inline.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Inline</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-wysiwyg-editor-balloon.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Balloon</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-wysiwyg-editor-balloon-block.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Balloon Block</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="side-menu-dark-wysiwyg-editor-document.html" class="side-menu">
                                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                                <div class="side-menu__title">Document</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="side-menu-dark-validation.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Validation </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                                <div class="side-menu__title">
                                    Widgets 
                                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                                </div>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="side-menu-dark-chart.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Chart </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-slider.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Slider </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="side-menu-dark-image-zoom.html" class="side-menu">
                                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                        <div class="side-menu__title"> Image Zoom </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- END: Side Menu -->
                <!-- BEGIN: Content -->
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- END: Content -->
            </div>

        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="side-menu-light-dashboard-overview-1.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="{{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>