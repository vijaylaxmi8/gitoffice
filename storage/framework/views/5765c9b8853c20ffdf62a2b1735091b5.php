
<aside class="app-sidebar" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="<?php echo e(url('index')); ?>" class="header-logo">
            <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo desktop-logo w-10 h-10">
            <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo toggle-logo w-10 h-10">
            <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo desktop-dark w-10 h-10">
            <img src="<?php echo e(asset('build/assets/img/brand-logos/git_logo.jpg')); ?>" alt="logo" class="main-logo toggle-dark w-10 h-10">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar " id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg></div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->
                <li class="slide">
                    <a href="<?php echo e(url('/PRINCIPALOFFICE/dashboard')); ?>" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 13H11V3H3V13ZM3 21H11V15H3V21ZM13 21H21V11H13V21ZM13 3V9H21V3H13Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">My Dashboard</span>
                    </a>
                </li>
                <li class="slide">
                    <a href="<?php echo e(url('/PRINCIPALOFFICE/events')); ?>" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M22 21H2V19H3V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21ZM17 19H19V11H13V19H15V13H17V19ZM17 9V5H5V19H11V9H17ZM7 11H9V13H7V11ZM7 15H9V17H7V15ZM7 7H9V9H7V7Z" fill="rgba(255,255,255,1)"></path></svg>
                        <span class="side-menu__label">Events</span>
                    </a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                height="24" viewBox="0 0 24 24">
                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside><?php /**PATH F:\laravel Apps\gitoffice\resources\views/layouts/components/PRINCIPALOFFICE/principalofficesidebar.blade.php ENDPATH**/ ?>