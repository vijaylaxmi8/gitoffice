@extends('layouts.master')

@section('styles')

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Apex Charts</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Charts
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Apex Charts
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                        Line Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="line-chart"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Area Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="area-chart"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Column Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="column-chart"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Bar Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="bar-chart"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                            <!-- Start::row-3 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Line &amp; Column Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="mixed-linecolumn"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Timeline Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="timeline-basic"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-3 -->

                            <!-- Start::row-4 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Candlestick Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="candlestick-basic"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Boxplot Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="boxplot-basic"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-4 -->

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    3D Bubble Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="bubble-3d"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Datetime Scatter Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="scatter-datetime"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-5 -->

                            <!-- Start::row-6 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Heatmap Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="heatmap-basic"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Treemap Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="treemap-basic"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-6 -->

                            <!-- Start::row-7 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Pie Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="pie-basic"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Donut Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="donut-simple"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-7 -->

                            <!-- Start::row-8 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Radial Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="radialbar-basic"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Stroked Circular Gauge
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="circular-stroked"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-8 -->

                            <!-- Start::row-9 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Radar Chart-Multiple Series
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="radar-multiple"></div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xl:col-span-6">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">
                                    Polar Chart
                                    </h5>
                                </div>
                                <div class="box-body">
                                    <div id="polararea-basic" class="flex justify-center"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-9 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- APEX CHARTS JS  -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!--- USED IN ANNOTATIONS CHART -->
        <script src="{{asset('build/assets/apexcharts-stock-prices.js')}}"></script>

        <!-- INTERNAL APEX LINE CHART JS  -->
        @vite('resources/assets/js/apexchart.js')

        
@endsection