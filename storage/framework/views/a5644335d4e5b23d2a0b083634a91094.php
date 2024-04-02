
            <header class="header custom-sticky !top-0 !w-full">
                <nav class="main-header" aria-label="Global">
                    <div class="header-content">
                    <div class="header-left">
                        <!-- Navigation Toggle -->
                        <div class="">
                        <button type="button" class="sidebar-toggle">
                            <span class="sr-only">Toggle Navigation</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime" enable-background="new 0 0 24 24"
                            height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                            <g>
                                <rect fill="none" height="24" width="24"></rect>
                            </g>
                            <g>
                                <g>
                                <path d="M4,12c0-4.41,3.59-8,8-8s8,3.59,8,8s-3.59,8-8,8S4,16.41,4,12 M12,11l-4,0v2l4,0v3l4-4l-4-4V11z"
                                    opacity=".3"></path>
                                <path
                                    d="M4,12c0-4.41,3.59-8,8-8s8,3.59,8,8s-3.59,8-8,8S4,16.41,4,12 M2,12c0,5.52,4.48,10,10,10c5.52,0,10-4.48,10-10 c0-5.52-4.48-10-10-10C6.48,2,2,6.48,2,12L2,12z M12,11l-4,0v2l4,0v3l4-4l-4-4V11z">
                                </path>
                                </g>
                            </g>
                            </svg>
                        </button>
                        </div>
                        <!-- End Navigation Toggle -->
                    </div>

                    <div class="responsive-logo">
                        <a class="responsive-logo-dark" href="<?php echo e(url('index')); ?>" aria-label="Brand"><img
                            src="<?php echo e(asset('build/assets/img/brand-logos/desktop-logo.png')); ?>" alt="logo" class="mx-auto"></a>
                        <a class="responsive-logo-light" href="<?php echo e(url('index')); ?>" aria-label="Brand"><img
                            src="<?php echo e(asset('build/assets/img/brand-logos/desktop-dark.png')); ?>" alt="logo" class="mx-auto"></a>
                    </div>

                    <div class="header-right">
                        <div class="responsive-headernav">
                        <div class="header-nav-right">
                            <div class="header-country hs-dropdown ti-dropdown hidden sm:block"
                            data-hs-dropdown-placement="bottom-right">
                            <button id="dropdown-flag" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle p-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] border-0 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                <img src="<?php echo e(asset('build/assets/img/flags/10.png')); ?>" alt="flag-img" class="h-[1.375rem] w-[1.375rem]">
                            </button>
                            <div class="hs-dropdown-menu ti-dropdown-menu min-w-[10rem]" aria-labelledby="dropdown-flag">
                                <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                <div class="py-2 first:pt-0 last:pb-0">
                                    <div class="ti-dropdown-item">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                        <img src="<?php echo e(asset('build/assets/img/flags/10.png')); ?>" alt="flag-img">
                                        </div>
                                        <div>
                                        <p class="text-xs font-medium">
                                            USA
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ti-dropdown-item">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                        <img src="<?php echo e(asset('build/assets/img/flags/1.png')); ?>" alt="flag-img">
                                        </div>
                                        <div>
                                        <p class="text-xs font-medium">
                                            Argentina
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ti-dropdown-item">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                        <img src="<?php echo e(asset('build/assets/img/flags/2.png')); ?>" alt="flag-img">
                                        </div>
                                        <div>
                                        <p class="text-xs font-medium">
                                            Canada
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ti-dropdown-item">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                        <img src="<?php echo e(asset('build/assets/img/flags/3.png')); ?>" alt="flag-img">
                                        </div>
                                        <div>
                                        <p class="text-xs font-medium">
                                            France
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ti-dropdown-item">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                        <img src="<?php echo e(asset('build/assets/img/flags/4.png')); ?>" alt="flag-img">
                                        </div>
                                        <div>
                                        <p class="text-xs font-medium">
                                            Germany
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="ti-dropdown-item">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                        <div class="h-[1.375rem] w-[1.375rem] rounded-sm">
                                        <img src="<?php echo e(asset('build/assets/img/flags/5.png')); ?>" alt="flag-img">
                                        </div>
                                        <div>
                                        <p class="text-xs font-medium">
                                            Italy
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="header-search">
                            <button aria-label="button" type="button" data-hs-overlay="#search-modal"
                                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                </path>
                                </svg>
                            </button>
                            </div>
                            <div class="header-theme-mode hidden sm:block">
                            <a aria-label="anchor" class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                href="javascript:;" data-hs-theme-click-value="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime"
                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                <rect fill="none" height="24" width="24"></rect>
                                <path
                                    d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27 C17.45,17.19,14.93,19,12,19c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z"
                                    opacity=".3"></path>
                                <path
                                    d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19 c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36 c-0.98,1.37-2.58,2.26-4.4,2.26c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z">
                                </path>
                                </svg>
                            </a>
                            <a aria-label="anchor" class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                href="javascript:;" data-hs-theme-click-value="light">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime"
                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                <rect fill="none" height="24" width="24"></rect>
                                <circle cx="12" cy="12" opacity=".3" r="3"></circle>
                                <path
                                    d="M12,9c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S10.35,9,12,9 M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5 S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1 s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0 c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95 c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41 L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41 s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06 c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z">
                                </path>
                                </svg>
                            </a>
                            </div>
                            <div class="header-fullscreen hidden lg:block">
                                <a aria-label="anchor" href="javascript:void(0);" onclick="openFullscreen();"
                                    class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime full-screen-open" height="24px"
                                    viewBox="0 0 24 24" width="24px" fill="#000000">
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime full-screen-close hidden"
                                    height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                                    <path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="header-cart hs-dropdown ti-dropdown hidden lg:block" data-hs-dropdown-placement="bottom-right">
                            <button id="dropdown-cart" type="button" class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                                    opacity=".3"></path>
                                <path
                                    d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                                </path>
                                </svg>
                                <span class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">
                                <span
                                    class="relative inline-flex rounded-full h-5 w-5 bg-danger text-white justify-center items-center" id="cart-data2">4</span>
                                </span>
                            </button>
                            <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0" aria-labelledby="dropdown-cart">
                                <div class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center">
                                <p class="ti-dropdown-header-title !text-white font-semibold">Shopping Cart</p>
                                <a href="javascript:void(0)" class="badge bg-black/20 text-white rounded-sm" id="cart-data">4 Items</a>
                                </div>
                                <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                <div class="py-2 first:pt-0 last:pb-0" id="allCartsContainer">
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('cart')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                        <img loading="lazy" src="<?php echo e(asset('build/assets/img/ecommerce/products/1.png')); ?>" alt="product-img"
                                        class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                        <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-white">
                                            Black Heals For Women
                                        </p>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-xs">$699</h5>
                                            <span class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$999</span>
                                        </div>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('cart')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                        <img loading="lazy" src="<?php echo e(asset('build/assets/img/ecommerce/products/2.png')); ?>" alt="product-img"
                                        class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                        <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-white">
                                            Tshirt For Men
                                        </p>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-xs">$245</h5>
                                            <span class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$599</span>
                                        </div>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('cart')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                        <img loading="lazy" src="<?php echo e(asset('build/assets/img/ecommerce/products/9.png')); ?>" alt="product-img"
                                        class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                        <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-white">
                                            Travel Bag For Womens
                                        </p>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-xs">$299</h5>
                                            <span class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$399</span>
                                        </div>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('cart')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse w-full">
                                        <img loading="lazy" src="<?php echo e(asset('build/assets/img/ecommerce/products/10.png')); ?>" alt="product-img"
                                        class="avatar p-2 shadow-none  shrink-0 items-center justify-center rounded-sm bg-gray-100 dark:bg-black/20 !ring-transparent">
                                        <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-white">
                                            Leather Wallet For Grils
                                        </p>
                                        <div class="flex space-x-2 rtl:space-x-reverse">
                                            <h5 class="text-xs">$100</h5>
                                            <span class="my-auto line-through text-xs text-gray-400 dark:text-white/70">$150</span>
                                        </div>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="header-remove-btn ltr:ml-auto rtl:mr-auto flex-shrink-0 inline-flex items-center justify-center text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                </div>
                                <div class="py-2 first:pt-0 last:pb-0 px-5">
                                    <div class="flex justify-between">
                                    <div>
                                        <span class="text-xs font-semibold text-gray-800 dark:text-white">Total</span>
                                    </div>
                                    <div class="text-end font-medium">
                                        <span class="text-xs font-semibold text-gray-800 dark:text-white">$40,020</span>
                                    </div>
                                    </div>
                                </div>
                                <div class="py-2 first:pt-0 px-5">
                                    <a class="w-full ti-btn ti-btn-primary p-2" href="<?php echo e(url('checkout')); ?>">
                                    Proceed Checkout
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="header-notification hs-dropdown ti-dropdown hidden sm:block"
                            data-hs-dropdown-placement="bottom-right">
                            <button id="dropdown-notification" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="relative w-6 h-6 fill-headerprime" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                <path d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z" opacity=".3"></path>
                                <path
                                    d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-11c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2v-5zm-2 6H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2c.15-2.65 1.51-4.97 3.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43c2.02 1.45 3.39 3.77 3.54 6.42z">
                                </path>
                                </svg>
                                <span class="flex absolute h-5 w-5 top-0 ltr:right-0 rtl:left-0 -mt-1 ltr:-mr-1 rtl:-ml-1">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-success/80 opacity-75"></span>
                                <span
                                    class="relative inline-flex rounded-full h-5 w-5 bg-success text-white justify-center items-center" id="notify-data">4</span>
                                </span>
                            </button>
                            <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0" aria-labelledby="dropdown-notification">
                                <div class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center">
                                <p class="ti-dropdown-header-title !text-white font-semibold">Notifications</p>
                                <a href="javascript:void(0)" class="badge bg-black/20 text-white rounded-sm">Mark All Read</a>
                                </div>
                                <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                <div class="py-2 first:pt-0 last:pb-0" id="allNotifyContainer">
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('mail-inbox')); ?>" class="flex space-x-3 rtl:space-x-reverse">
                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                        <img src="<?php echo e(asset('build/assets/img/users/17.jpg')); ?>" alt="img" class="rounded-sm">
                                        </div>
                                        <div class="relative w-full">
                                        <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Elon Isk</h5>
                                        <p class="text-xs mb-1 max-w-[200px] truncate">Hello there! How are you doing? Call me when...</p>
                                        <p class="text-xs text-gray-400 dark:text-white/70">2 min</p>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('mail-inbox')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                        <img src="<?php echo e(asset('build/assets/img/users/2.jpg')); ?>" alt="img" class="rounded-sm">
                                        </div>
                                        <div class="relative w-full">
                                        <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Shakira Sen</h5>
                                        <p class="text-xs mb-1 max-w-[200px] truncate">I would like to discuss about that assets...</p>
                                        <p class="text-xs text-gray-400 dark:text-white/70">09:43</p>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('mail-inbox')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                        <img src="<?php echo e(asset('build/assets/img/users/21.jpg')); ?>" alt="img" class="rounded-sm">
                                        </div>
                                        <div class="relative w-full">
                                        <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Sebastian</h5>
                                        <p class="text-xs mb-1 max-w-[200px] truncate">Shall we go to the cafe at downtown...</p>
                                        <p class="text-xs text-gray-400 dark:text-white/70">yesterday</p>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                    <div class="ti-dropdown-item relative header-box">
                                    <a href="<?php echo e(url('mail-inbox')); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <div class="ltr:mr-2 rtl:ml-2 avatar rounded-full ring-0">
                                        <img src="<?php echo e(asset('build/assets/img/users/11.jpg')); ?>" alt="img" class="rounded-sm">
                                        </div>
                                        <div class="relative w-full">
                                        <h5 class="text-sm text-gray-800 dark:text-white font-semibold mb-1">Charlie Davieson</h5>
                                        <p class="text-xs mb-1 max-w-[200px] truncate">Lorem ipsum dolor sit amet, consectetur</p>
                                        <p class="text-xs text-gray-400 dark:text-white/70">yesterday</p>
                                        </div>
                                    </a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="header-remove-btn ltr:ml-auto rtl:mr-auto text-lg text-gray-500/20 dark:text-white/20 hover:text-gray-800 dark:hover:text-white">
                                        <i class="ri-close-circle-line"></i>
                                    </a>
                                    </div>
                                </div>
                                <div class="py-2 first:pt-0 px-5">
                                    <a class="w-full ti-btn ti-btn-primary p-2" href="<?php echo e(url('mail-inbox')); ?>">
                                    View All
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="header-apps hs-dropdown ti-dropdown hidden md:block" data-hs-dropdown-placement="bottom-right">
                            <button aria-label="button" id="dropdown-apps" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle p-0 border-0 flex-shrink-0 h-[2.375rem] w-[2.375rem] rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-headerprime"
                                enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                <g>
                                    <rect fill="none" height="24" width="24"></rect>
                                </g>
                                <g>
                                    <g>
                                    <polygon opacity=".3" points="4,7 20,7 20,3.98 4,4"></polygon>
                                    <path d="M5,20h14V9H5V20z M9,12h6v2H9V12z" opacity=".3"></path>
                                    <path
                                        d="M20,2H4C3,2,2,2.9,2,4v3.01C2,7.73,2.43,8.35,3,8.7V20c0,1.1,1.1,2,2,2h14c0.9,0,2-0.9,2-2V8.7c0.57-0.35,1-0.97,1-1.69V4 C22,2.9,21,2,20,2z M19,20H5V9h14V20z M20,7H4V4l16-0.02V7z">
                                    </path>
                                    <rect height="2" width="6" x="9" y="12"></rect>
                                    </g>
                                </g>
                                </svg>
                            </button>
                            <div class="hs-dropdown-menu ti-dropdown-menu w-[20rem] border-0" aria-labelledby="dropdown-apps">
                                <div
                                class="ti-dropdown-header !bg-primary border-b dark:border-white/10 flex justify-between items-center text-center">
                                <p class="ti-dropdown-header-title font-semibold !text-white">Related Apps</p>
                                </div>
                                <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                <div class="grid grid-cols-3 gap-0 p-4 pt-2">
                                    <a href="<?php echo e(url('mail-inbox')); ?>" class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                    <i class="ri ri-mail-line leading-none text-2xl avatar ring-0 bg-primary/20 text-primary rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">Mail Inbox</div>
                                    </a>
                                    <a href="<?php echo e(url('chat')); ?>" class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                    <i class="ri ri-chat-2-line leading-none text-2xl avatar ring-0 bg-secondary/20 text-secondary rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">Chat</div>
                                    </a>
                                    <a href="<?php echo e(url('tasks')); ?>" class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                    <i class="ri ri-task-line leading-none text-2xl avatar ring-0 bg-warning/20 text-warning rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">Task</div>
                                    </a>
                                    <a href="<?php echo e(url('calendar')); ?>" class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                    <i class="ri ri-calendar-event-line leading-none text-2xl avatar ring-0 bg-danger/20 text-danger rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">Calendar</div>
                                    </a>
                                    <a href="<?php echo e(url('filemanager')); ?>" class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                    <i class="ri ri-file-copy-2-line leading-none text-2xl avatar ring-0 bg-info/20 text-info rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">FileManager</div>
                                    </a>
                                    <a href="<?php echo e(url('contacts')); ?>" class="block pt-0 p-2 text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                    <i class="ri ri-group-line leading-none text-2xl avatar ring-0 bg-success/20 text-success rounded-sm p-3 my-3 align-middle flex justify-center mx-auto"></i>
                                    <div class="text-xs font-semibold text-gray-800 dark:text-white">Contacts</div>
                                    </a>
                                </div>
                                <div class="py-2 first:pt-0 px-5">
                                    <a class="w-full ti-btn ti-btn-primary p-2" href="javascript:void(0);">
                                    View All
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="header-profile hs-dropdown ti-dropdown" data-hs-dropdown-placement="bottom-right">
                            <button id="dropdown-profile" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle gap-2 p-0 flex-shrink-0 h-8 w-8 rounded-full shadow-none focus:ring-gray-400 text-xs dark:focus:ring-white/10">
                                <img class="inline-block rounded-full ring-2 ring-white dark:ring-white/10"
                                src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="Image Description">
                            </button>

                            <div class="hs-dropdown-menu ti-dropdown-menu border-0 w-[20rem]" aria-labelledby="dropdown-profile">
                                <div class="ti-dropdown-header !bg-primary flex">
                                <div class="ltr:mr-3 rtl:ml-3">
                                    <img class="avatar shadow-none rounded-full !ring-transparent"
                                    src="<?php echo e(asset('build/assets/img/users/1.jpg')); ?>" alt="profile-img">
                                </div>
                                <div>
                                    <p class="ti-dropdown-header-title !text-white">Json Taylor</p>
                                    <p class="ti-dropdown-header-content !text-white/50">Web Designer</p>
                                </div>
                                </div>
                                <div class="mt-2 ti-dropdown-divider">
                                <a href="<?php echo e(url('profile')); ?>" class="ti-dropdown-item">
                                    <i class="ti ti-user-circle text-lg"></i>
                                    Profile
                                </a>
                                <a href="<?php echo e(url('mail-inbox')); ?>" class="ti-dropdown-item">
                                    <i class="ti ti-inbox text-lg"></i>
                                    Inbox
                                </a>
                                <a href="<?php echo e(url('tasks')); ?>" class="ti-dropdown-item">
                                    <i class="ti ti-clipboard-check text-lg"></i>
                                    Task Manager
                                </a>
                                <a href="<?php echo e(url('profile-settings')); ?>" class="ti-dropdown-item">
                                    <i class="ti ti-adjustments-horizontal text-lg"></i>
                                    Settings
                                </a>
                                <a href="<?php echo e(url('index3')); ?>" class="ti-dropdown-item">
                                    <i class="ti ti-wallet text-lg"></i>
                                    Bal: $7,12,950
                                </a>
                                <a href="<?php echo e(url('signin')); ?>" class="ti-dropdown-item">
                                    <i class="ti ti-logout  text-lg"></i>
                                    Log Out
                                </a>
                                </div>
                            </div>
                            </div>
                            <div class="switcher-icon">
                            <button aria-label="button" type="button"
                                class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-gray-100 hover:bg-gray-200 text-gray-500 align-middle focus:outline-none focus-visible:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-white/70 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                data-hs-overlay="#hs-overlay-switcher">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 animate-spin fill-headerprime" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="#000000">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M19.28 8.6l-.7-1.21-1.27.51-1.06.43-.91-.7c-.39-.3-.8-.54-1.23-.71l-1.06-.43-.16-1.13L12.7 4h-1.4l-.19 1.35-.16 1.13-1.06.44c-.41.17-.82.41-1.25.73l-.9.68-1.05-.42-1.27-.52-.7 1.21 1.08.84.89.7-.14 1.13c-.03.3-.05.53-.05.73s.02.43.05.73l.14 1.13-.89.7-1.08.84.7 1.21 1.27-.51 1.06-.43.91.7c.39.3.8.54 1.23.71l1.06.43.16 1.13.19 1.36h1.39l.19-1.35.16-1.13 1.06-.43c.41-.17.82-.41 1.25-.73l.9-.68 1.04.42 1.27.51.7-1.21-1.08-.84-.89-.7.14-1.13c.04-.31.05-.52.05-.73 0-.21-.02-.43-.05-.73l-.14-1.13.89-.7 1.1-.84zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"
                                    opacity=".3" />
                                <path
                                    d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" />
                                </svg>
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </nav>
            </header><?php /**PATH E:\projects\laravel\vite\synto\synto-final\synto\resources\views/layouts/components/header.blade.php ENDPATH**/ ?>