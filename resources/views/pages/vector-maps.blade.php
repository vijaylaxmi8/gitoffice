@extends('layouts.master')

@section('styles')

        <!-- VECTOR MAP CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/jsvectormap/css/jsvectormap.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Vector Maps</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Maps
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Vector Maps
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Basic Vector Map</h5>
                                </div>
                                <div class="box-body">
                                    <div id="vector-map"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Map With Markers</h5>
                                </div>
                                <div class="box-body">
                                    <div id="marker-map"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Map With Image Markers</h5>
                                </div>
                                <div class="box-body">
                                    <div id="marker-image-map"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Map With Lines</h5>
                                </div>
                                <div class="box-body">
                                    <div id="lines-map"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">US Vector Map</h5>
                                </div>
                                <div class="box-body">
                                    <div id="us-map"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Russia Vector Map</h5>
                                </div>
                                <div class="box-body">
                                    <div id="russia-map"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-5">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Spain Vector Map</h5>
                                </div>
                                <div class="box-body">
                                    <div id="spain-map"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Canada Vector Map</h5>
                                </div>
                                <div class="box-body">
                                    <div id="canada-map"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-4 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- JSVECTOR MAPS JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>

        <!-- JSVECTOR MAPS JS -->
        <script src="{{asset('build/assets/libs/jsvectormap/maps/world-merc.js')}}"></script>
        @vite('resources/assets/js/us-merc-en.js')


        @vite('resources/assets/js/russia.js')


        @vite('resources/assets/js/spain.js')


        @vite('resources/assets/js/canada.js')


        @vite('resources/assets/js/jsvectormap.js')
        

@endsection