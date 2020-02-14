@extends('artuz.layouts.makets.admin.admin-maket')
    @section('left-navigation')
        

<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">

            <li class="nav-item">
                <a class="nav-item-hold" href="{{route('admin')}}">
                        <i class="nav-icon i-Bar-Chart"></i>
                        <span class="nav-text">Asosiy sahifa</span>
                    </a>
                    <div class="triangle"></div>
                </li>


         
            <li class="nav-item">
            <a class="nav-item-hold" href="{{route('articles')}}">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="nav-text">Yangiliklar</span>
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
       
        
    </div>
    <div class="sidebar-overlay"></div>
</div>
          
@endsection