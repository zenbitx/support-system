@php

    $menus = [

        /*
        |--------------------------------------------------------------------------
        | Admin Menu
        |--------------------------------------------------------------------------
        */

        [
            'type' => 'label',
            'label' => 'Admin Menu',
            'permission' => '',
        ],

        [
            'title' => 'Admin Report',
            'icon' => 'fa-solid fa-chart-column',
            'permission' => '',

            'children' => [

                [
                    'title' => 'Admin Dashboard',
                    'route' => 'admin.dashboard',
                    'icon' => 'fa fa-th',
                    'permission' => '',
                ],

            ],
        ],


        [
            'title' => 'Admin Setting',
            'icon' => 'ap ap-admin-settings',
            'permission' => '',

            'children' => [

                [
                    'title' => 'App Settings',
                    'route' => '',
                    'icon' => 'fa fa-gears',
                    'permission' => '',
                ],

                [
                    'title' => 'Ticket Assign Rule',
                    'route' => '',
                    'icon' => 'ap ap-users-check',
                    'permission' => '',
                ],

                [
                    'title' => 'Email Templates',
                    'route' => '',
                    'icon' => 'fa fa-envelope',
                    'permission' => '',
                ],

                [
                    'title' => 'Custom Fields',
                    'route' => '',
                    'icon' => 'fa fa-wpforms',
                    'permission' => '',
                ],

                [
                    'title' => 'Site Menu',
                    'route' => '',
                    'icon' => 'fa fa-bars',
                    'permission' => '',
                ],

                [
                    'title' => 'Topbar Icon',
                    'route' => '',
                    'icon' => 'fa fa-ellipsis-h',
                    'permission' => '',
                ],

                [
                    'title' => 'IP List',
                    'route' => '',
                    'icon' => 'ap ap-ip',
                    'permission' => '',
                ],

                [
                    'title' => 'Locked User',
                    'route' => '',
                    'icon' => 'ap ap-locked-user2',
                    'permission' => '',
                ],

                [
                    'title' => 'Pages',
                    'route' => '',
                    'icon' => 'fa fa-file-o',
                    'permission' => '',
                ],

                [
                    'title' => 'Add-Ons',
                    'route' => '',
                    'icon' => 'fa fa-puzzle-piece',
                    'permission' => '',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | API Settings
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'API Setting',
            'icon' => 'ap ap-api',
            'permission' => '',

            'children' => [

                [
                    'title' => 'Social Login Setting',
                    'route' => '',
                    'icon' => 'fa fa-share-alt',
                    'permission' => '',
                ],

                [
                    'title' => 'Remote Server Login',
                    'route' => '',
                    'icon' => 'ap ap-remote-login',
                    'permission' => '',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | Payment Settings
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'Payment Settings',
            'icon' => 'ap ap-api',
            'permission' => '',

            'children' => [

                [
                    'title' => 'Payment Basic Settings',
                    'route' => '',
                    'icon' => 'fa fa-gear',
                    'permission' => '',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | User Settings
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'User Settings',
            'icon' => 'fa fa-user',
            'permission' => '',

            'children' => [

                [
                    'title' => 'User List',
                    'route' => '',
                    'icon' => 'fa fa-list',
                    'permission' => '',
                ],

                [
                    'title' => 'Role List',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'Role Access',
                    'route' => '',
                    'permission' => '',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | App Information
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'App Information',
            'icon' => 'fa fa-info-circle',
            'permission' => '',

            'children' => [

                [
                    'title' => 'Debug Log',
                    'route' => '',
                    'icon' => 'fa fa-bug text-warning',
                    'permission' => '',
                ],

                [
                    'title' => 'License',
                    'route' => '',
                    'icon' => 'fa fa-bug text-warning',
                    'permission' => '',
                ],

                [
                    'title' => 'Site Info',
                    'route' => '',
                    'icon' => 'fa fa-info text-warning',
                    'permission' => '',
                ],

                [
                    'title' => 'App Update',
                    'route' => '',
                    'icon' => 'fa fa-arrow-circle-o-up',
                    'permission' => '',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | Payment List
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'Payment List',
            'route' => '',
            'icon' => 'fa fa-money',
            'permission' => '',
        ],


        /*
        |--------------------------------------------------------------------------
        | Staff Menu
        |--------------------------------------------------------------------------
        */

        [
            'type' => 'label',
            'label' => 'Staff Menu',
            'permission' => '',
        ],


        [
            'title' => 'My Dashboard',
            'route' => '',
            'icon' => 'ap ap-dashboard',
            'permission' => '',
        ],


        /*
        |--------------------------------------------------------------------------
        | Tickets
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'Ticket',
            'icon' => 'fa fa-ticket',
            'permission' => '',

            'active_routes' => [
                'admin.ticket.*',
            ],

            'children' => [

                [
                    'title' => 'Create Ticket',
                    'route' => '',
                    'icon' => 'fa fa-pencil-square-o',
                    'permission' => '',
                ],

                [
                    'title' => 'All Active Tickets',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'My Active Tickets',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'My Active Paid Tickets',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'My Closed Tickets',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'My Assigned Tickets',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'All Unassigned Tickets',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'All Paid Tickets',
                    'route' => '',
                    'permission' => '',
                ],

                [
                    'title' => 'All Closed Tickets',
                    'route' => '',
                    'permission' => '',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | Web Chat
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'Web Chat',
            'icon' => 'ap ap-chat3',
            'permission' => '',

            'children' => [

                [
                    'title' => 'Chat Panel',
                    'route' => '',
                    'icon' => 'ap ap-chat',
                    'permission' => '',
                ],

                [
                    'title' => 'Chat Canned Message',
                    'route' => '',
                    'permission' => '',
                ],

            ],
        ],


        /*
        |--------------------------------------------------------------------------
        | Other Staff Menus
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'Ticket Feedback',
            'route' => '',
            'icon' => 'fa fa-ticket',
            'permission' => '',
        ],

        [
            'title' => 'Announcements',
            'route' => '',
            'icon' => 'fa fa-bullhorn',
            'permission' => '',
        ],

        [
            'title' => 'Knowledge',
            'route' => '',
            'icon' => 'fa fa-graduation-cap',
            'permission' => '',
        ],


        /*
        |--------------------------------------------------------------------------
        | FAQ
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'FAQ',
            'icon' => 'fa fa-question-circle-o',
            'permission' => '',

            'children' => [

                [
                    'title' => 'FAQ List',
                    'route' => '',
                    'icon' => 'fa fa-question-circle-o',
                    'permission' => '',
                ],

                [
                    'title' => 'FAQ Category',
                    'route' => '',
                    'icon' => 'fa fa-question-circle-o',
                    'permission' => '',
                ],

            ],
        ],


        [
            'title' => 'Testimonial',
            'route' => '',
            'icon' => 'fa fa-thumbs-up',
            'permission' => '',
        ],

        [
            'title' => 'Category',
            'route' => '',
            'icon' => 'fa fa-table',
            'permission' => '',
        ],

        [
            'title' => 'Canned Msg',
            'route' => '',
            'icon' => 'fa fa-stack-exchange',
            'permission' => '',
        ],

        [
            'title' => 'Client',
            'route' => '',
            'icon' => 'ap ap-client',
            'permission' => '',
        ],


        /*
        |--------------------------------------------------------------------------
        | Message
        |--------------------------------------------------------------------------
        */

        [
            'title' => 'Message',
            'icon' => 'fa fa-envelope',
            'permission' => '',

            'children' => [

                [
                    'title' => 'My Message',
                    'route' => '',
                    'icon' => 'fa fa-envelope-open',
                    'permission' => '',
                ],

                [
                    'title' => 'Sent Message',
                    'route' => '',
                    'icon' => 'fa fa-envelope',
                    'permission' => '',
                ],

            ],
        ],

    ];

@endphp


{{-- Desktop Sidebar --}}
<aside class="admin-sidebar d-none d-lg-flex flex-column">

    {{-- Logo --}}
    <div class="sidebar-logo">

        <a href="{{ route('admin.dashboard') }}"
           class="text-decoration-none">

            <span class="logo-icon">
                <i class="fa fa-layer-group"></i>
            </span>

            <span class="logo-text">
                Admin Panel
            </span>

        </a>

    </div>


    {{-- Menu --}}
    <div class="sidebar-menu flex-grow-1">

        @foreach($menus as $menu)

            {{-- Section Label --}}
            @if(($menu['type'] ?? null) === 'label')

                @if(!empty($menu['permission']) && !auth()->can($menu['permission']))
                    @continue
                @endif

                <div class="sidebar-heading">
                    {{ $menu['label'] }}
                </div>

                @continue
            @endif


            {{-- Permission Check (Skip if user lacks permission) --}}
            @if(!empty($menu['permission']) && !auth()->can($menu['permission']))
                @continue
            @endif


            {{-- Menu With Children --}}
            @if(!empty($menu['children']))

                @php

                    $collapseId = 'sidebar-' . md5($menu['title']);

                    $isActive = false;

                    foreach ($menu['children'] as $child) {

                        if (
                            !empty($child['route']) &&
                            request()->routeIs($child['route'])
                        ) {
                            $isActive = true;
                            break;
                        }

                    }

                    if (!$isActive && !empty($menu['active_routes'])) {

                        foreach ($menu['active_routes'] as $activeRoute) {

                            if (request()->routeIs($activeRoute)) {
                                $isActive = true;
                                break;
                            }

                        }

                    }

                @endphp


                <div class="sidebar-item">

                    <a href="#{{ $collapseId }}"
                       class="sidebar-link {{ $isActive ? 'active' : '' }}"
                       data-bs-toggle="collapse"
                       role="button"
                       aria-expanded="{{ $isActive ? 'true' : 'false' }}">

                        <span class="sidebar-link-left">

                            @if(!empty($menu['icon']))
                                <i class="{{ $menu['icon'] }}"></i>
                            @endif

                            <span>
                                {{ $menu['title'] }}
                            </span>

                        </span>

                        <i class="fa fa-chevron-down sidebar-arrow"></i>

                    </a>


                    <div class="collapse {{ $isActive ? 'show' : '' }}"
                         id="{{ $collapseId }}">

                        <ul class="sidebar-submenu">

                            @foreach($menu['children'] as $child)

                                {{-- Check Child Permission --}}
                                @if(!empty($child['permission']) && !auth()->can($child['permission']))
                                    @continue
                                @endif

                                <li>

                                    <a href="{{ !empty($child['route']) ? route($child['route']) : '#' }}"
                                       class="{{ !empty($child['route']) && request()->routeIs($child['route']) ? 'active' : '' }}">

                                        @if(!empty($child['icon']))
                                            <i class="{{ $child['icon'] }}"></i>
                                        @endif

                                        <span>
                                            {{ $child['title'] }}
                                        </span>

                                    </a>

                                </li>

                            @endforeach

                        </ul>

                    </div>

                </div>


            {{-- Normal Menu --}}
            @elseif(!empty($menu['route']))

                <div class="sidebar-item">

                    <a href="{{ !$menu['route'] ? route($menu['route']) : '#' }}"
                       class="sidebar-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">

                        <span class="sidebar-link-left">

                            @if(!empty($menu['icon']))
                                <i class="{{ $menu['icon'] }}"></i>
                            @endif

                            <span>
                                {{ $menu['title'] }}
                            </span>

                        </span>

                    </a>

                </div>

            @endif

        @endforeach

    </div>


    {{-- Sidebar Bottom --}}
    <div class="sidebar-bottom">

        <div class="sidebar-user">

            <div class="user-avatar">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>

            <div class="user-info">

                <div class="user-name">
                    {{ auth()->user()->name ?? 'Admin' }}
                </div>

                <small>
                    Administrator
                </small>

            </div>

        </div>

    </div>

</aside>


{{-- Mobile Offcanvas Sidebar --}}
<div class="offcanvas offcanvas-start admin-mobile-sidebar"
     tabindex="-1"
     id="mobileSidebar">

    <div class="offcanvas-header">

        <h5 class="offcanvas-title">
            <i class="fa fa-layer-group me-2"></i>
            Admin Panel
        </h5>

        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="offcanvas">
        </button>

    </div>


    <div class="offcanvas-body p-0">

        {{-- Reuse the same menu logic --}}
        <div class="sidebar-menu">

            @foreach($menus as $menu)

                @if(($menu['type'] ?? null) === 'label')

                    @if(!empty($menu['permission']) && !auth()->can($menu['permission']))
                        @continue
                    @endif

                    <div class="sidebar-heading">
                        {{ $menu['label'] }}
                    </div>

                    @continue
                @endif


                @if(!empty($menu['permission']) && !auth()->can($menu['permission']))
                    @continue
                @endif


                @if(!empty($menu['children']))

                    @php
                        $mobileCollapseId = 'mobile-' . md5($menu['title']);
                        $mobileActive = false;

                        foreach ($menu['children'] as $child) {
                            if (
                                !empty($child['route']) &&
                                request()->routeIs($child['route'])
                            ) {
                                $mobileActive = true;
                                break;
                            }
                        }
                    @endphp

                    <div class="sidebar-item">

                        <a href="#{{ $mobileCollapseId }}"
                           class="sidebar-link {{ $mobileActive ? 'active' : '' }}"
                           data-bs-toggle="collapse">

                            <span class="sidebar-link-left">

                                <i class="{{ $menu['icon'] ?? 'fa fa-folder' }}"></i>

                                <span>
                                    {{ $menu['title'] }}
                                </span>

                            </span>

                            <i class="fa fa-chevron-down sidebar-arrow"></i>

                        </a>


                        <div class="collapse {{ $mobileActive ? 'show' : '' }}"
                             id="{{ $mobileCollapseId }}">

                            <ul class="sidebar-submenu">

                                @foreach($menu['children'] as $child)

                                    @if(!empty($child['permission']) && !auth()->can($child['permission']))
                                        @continue
                                    @endif

                                    <li>

                                        <a href="{{ !empty($child['route']) ? route($child['route']) : '#' }}"
                                           class="{{ !empty($child['route']) && request()->routeIs($child['route']) ? 'active' : '' }}">

                                            <i class="{{ $child['icon'] ?? 'fa fa-circle' }}"></i>

                                            <span>{{ $child['title'] }}</span>

                                        </a>

                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                @elseif(!empty($menu['route']))

                    <div class="sidebar-item">

                        <a href="{{ $menu['route'] ? route($menu['route']) : '#' }}"
                           class="sidebar-link {{ request()->routeIs($menu['route']) ? 'active' : '' }}">

                            <span class="sidebar-link-left">

                                <i class="{{ $menu['icon'] ?? 'fa fa-circle' }}"></i>

                                <span>
                                    {{ $menu['title'] }}
                                </span>

                            </span>

                        </a>

                    </div>

                @endif

            @endforeach

        </div>

    </div>

</div>