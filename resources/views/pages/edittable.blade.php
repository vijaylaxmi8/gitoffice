@extends('layouts.master')

@section('styles')

        <!-- TABULATOR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')

                    <div class="content">

                        <!-- Start::main-content -->
                        <div class="main-content">

                            <!-- Page Header -->
                            <div class="block justify-between page-header sm:flex">
                                <div>
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Edit Tables</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Basic Ui
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                    </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Edit Tables
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Edit DataTable</h5>
                                </div>
                                <div class="box-body">
                                    <div class="overflow-hidden table-bordered">
                                    <div id="edit-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-1 -->

                            <!-- Start::row-2 -->
                            <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Edit with Validation DataTable</h5>
                                </div>
                                <div class="box-body">
                                    <div class="overflow-hidden table-bordered">
                                    <div id="validation-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End::row-2 -->

                        </div>
                        <!-- Start::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- TABULATOR JS -->
        <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>
        
        <!-- TABULATOR CUSTOM JS -->
        @vite('resources/assets/js/editdata.js')


@endsection