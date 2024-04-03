@extends('layouts.master')

@section('styles')

        <!-- TREEVIEW CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/js-treeview/treeview.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Treeview</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Advanced Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Treeview
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Basic Treeview</h5>
                                    </div>
                                    <div class="box-body">
                                        <div id="tree" class="text-base font-semibold text-gray-600 dark:text-white/70"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-1 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- TREEVIEW JS -->
        <script src="{{asset('build/assets/libs/js-treeview/treeview.min.js')}}"></script>
        @vite('resources/assets/js/treeview.js')
        

@endsection