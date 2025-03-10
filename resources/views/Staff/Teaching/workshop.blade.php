@extends('layouts.master')

@section('styles')

        <!-- CHOICES CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- FLATPICKR CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

@endsection

@section('content')

                <div class="content">

                    <!-- Start::main-content -->
                    <div class="main-content">

                        <!-- Page Header -->
                        <div class="block justify-between page-header sm:flex">
                            <div>
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Profile Settings</h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                   Professional Activity
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Establishment Section
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start::row-1 -->
                        <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-3">
                            <div class="box">
                            <div class="box-body relative">
                                <div class="flex relative before:bg-black/50 before:absolute before:w-full before:h-full before:rounded-sm">
                                <img src="{{asset('build/assets/img/png-images/2.png')}}" alt="" class="h-[200px] w-full rounded-sm" id="profile-img2">
                                <span class="absolute top-5 ltr:right-5 rtl:left-5 flex p-2 rounded-sm ring-1 ring-black/10 text-white bg-black/10 leading-none">
                                    <i class="ri ri-pencil-line"></i>
                                    <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change2">
                                </span>
                                </div>
                                <div class="absolute top-[4.5rem] inset-x-0 text-center space-y-3">
                                <div class="flex justify-center w-full">
                                    <div class="relative">
                                    <img src="{{asset('build/assets/img/users/1.jpg')}}" class="w-24 h-24 rounded-full ring-4 ring-white/10 mx-auto" id="profile-img" alt="pofile-img">
                                    <span class="absolute bottom-0 ltr:right-0 rtl:left-0 block p-1 rounded-full ring-2 ring-white/10 text-white bg-white/10 dark:bg-bgdark leading-none">
                                        <i class="ri ri-pencil-line"></i>
                                        <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" id="profile-change">
                                    </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="box-body pt-0">
                                <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="profile-settings-item-1" data-hs-tab="#profile-settings-1" aria-controls="profile-settings-1" role="tab">
                                    <i class="ri ri-shield-user-line"></i>WORKSHOP
                                </button>
                                
                                </nav>
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-9">
                            <div class="box">
                            <div class="box-body p-0">
                                <div id="profile-settings-1" role="tabpanel" aria-labelledby="profile-settings-item-1">
                                <div class="box border-0 shadow-none mb-0">
                                    <div class="box-header">
                                    <h5 class="box-title leading-none flex"><i class="ri ri-shield-user-line ltr:mr-2 rtl:ml-2"></i>WORKSHOP</h5>
                                    </div>
                                    <div class="box-body">
                                    <div>
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">First Name</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Firstname">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Last Name</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Lastname">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Phone Number</label>
                                                <input type="number" class="my-auto ti-form-input" placeholder="+91 123-456-789">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Email Address</label>
                                                <input type="email" class="my-auto ti-form-input" placeholder="your@site.com">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Date Of Birth</label>
                                                <input type="text" class="ti-form-input flatpickr-input date" placeholder="Choose date" readonly>
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Gender</label>
                                                <ul class="flex flex-col sm:flex-row">
                                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-1" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio" checked>
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-1" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                        Female
                                                        </label>
                                                    </div>
                                                    </li>

                                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-2" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-2" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                        Male
                                                        </label>
                                                    </div>
                                                    </li>

                                                    <li class="ti-list-group gap-x-2.5 bg-white border text-gray-800 ltr:sm:-ml-px rtl:sm:-mr-px sm:mt-0 ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:first:rounded-bl-sm rtl:sm:first:rounded-br-sm ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-tr-sm rtl:sm:last:rounded-tl-sm dark:bg-bgdark dark:border-white/10 dark:text-white">
                                                    <div class="relative flex items-start w-full">
                                                        <div class="flex items-center h-5">
                                                        <input id="hs-horizontal-list-group-item-radio-3" name="hs-horizontal-list-group-item-radio" type="radio" class="ti-form-radio">
                                                        </div>
                                                        <label for="hs-horizontal-list-group-item-radio-3" class="ltr:ml-3 rtl:mr-3 block w-full text-sm text-gray-600 dark:text-white/70">
                                                        Others
                                                        </label>
                                                    </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="my-5">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Address</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="grid lg:grid-cols-2 gap-6">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">City</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="city">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Country</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="state">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">State</label>
                                                <input type="text" class="my-auto ti-form-input" placeholder="state">
                                            </div>
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Pincode</label>
                                                <input type="number" class="my-auto ti-form-input" placeholder="pincode">
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="space-y-2">
                                                <label class="ti-form-label mb-0">Bio</label>
                                                <textarea class="ti-form-input" rows="3" placeholder="Add Your Bio"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
            
                               
                            </div>
                            <div class="box-footer text-end space-x-3 rtl:space-x-reverse">
                                <a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-primary"><i class="ri ri-refresh-line"></i> Update</a>
                                <a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-secondary"><i class="ri ri-close-circle-line"></i> Cancel</a>
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

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')
        

@endsection