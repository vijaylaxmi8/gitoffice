@extends('layouts.master')

@section('styles')

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Carousel</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Carousel
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:!col-span-4 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Basic Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper Swiperslide-1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:!col-span-4 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Navigation Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:!col-span-4 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Pagination Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper-page">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:!col-span-4 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Pagination Progress Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper3">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:!col-span-4 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Scrollbar Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper4">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-scrollbar"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:!col-span-4 md:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Vertical Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper5 !h-[312px]">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Effect Cards Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="w-8/12 mx-auto">
                                    <div class="swiper mySwiper12">
                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Zoom Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="w-8/12 mx-auto">
                                    <div class="swiper mySwiper13">
                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div></div>
                                        <div class="swiper-slide"><div class="swiper-zoom-container"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Effect Fade Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="w-8/12 mx-auto">
                                    <div class="swiper mySwiper8">
                                        <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Free Mode Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper9">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Effect Coverflow Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper10">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Effect Flip Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper11">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-4 -->

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Space Between Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper6">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Free Mode Swiper Slide</h5>
                                </div>
                                <div class="box-body">
                                    <div class="swiper mySwiper7">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/1.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/2.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/3.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/7.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/8.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/9.jpg')}}" alt="image"></div>
                                        <div class="swiper-slide"><img src="{{asset('build/assets/img/gallery/10.jpg')}}" alt="image"></div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-5 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        @vite('resources/assets/js/swiper.js')


@endsection