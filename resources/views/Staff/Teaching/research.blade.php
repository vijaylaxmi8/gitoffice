@extends('layouts.components.staff.master-teaching')

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
                                    {{-- <h1>Welcome, {{ $staff->fname }}</h1> --}}
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium">Welcome<span class="text-primary"> {{ $staff->fname.' '.$staff->mname.' '.$staff->lname }}</span></h3>
                                </div>    
                                <ol class="flex items-center whitespace-nowrap min-w-0"> 
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                            Research Activities
                                            <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                        
                                </ol>
                            </div>
                        <!-- Page Header Close -->

                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-6">
                                 <!-- For Checking whether status is set or no-->
                                 @if(session('return_data'))
                                    @if (Session::get('return_data')['status'] == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> Database transaction Successful
                                        </div>
                                    @elseif(Session::get('return_data')['status'] == 0 && Session::get('return_data')['file_size_status'] == 0)
                                        @if(Session::get('return_data')['status'] == 0)
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> Something went Wrong !
                                            </div>
                                        @endif
                                        @if (Session::get('return_data')['file_size_status'] == 0)
                                            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                                <span class='font-bold'>Result : </span> File size is more than 500KB. Please consider re-uploading
                                            </div>
                                        @endif
                                    @endif
                                    @php 
                                        Illuminate\Support\Facades\Session::forget('return_data'); 
                                        header("refresh: 2"); 
                                    @endphp
                                @endif   

                            </div>
                        </div>
                        <!-- Start::row-1 -->
                        <div class="col-span-12 xl:col-span-9">
                            <div class="box">
                                <div class="box-header">
                                    {{-- <h4>Research Activities</h4> --}}
                                </div>
       
                                <div class="box-body pt-0">
                                    <nav class="-mb-0.5 flex justify-center space-x-6 rtl:space-x-reverse md:h-full md:w-48" aria-label="Tabs">
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white active" id="pills-with-brand-color-item-1" data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1">
                                        Conferences
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-2" data-hs-tab="#pills-with-brand-color-2" aria-controls="pills-with-brand-color-2">
                                            Publications
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-3" data-hs-tab="#pills-with-brand-color-3" aria-controls="pills-with-brand-color-3">
                                        Book & Chapters
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-4" data-hs-tab="#pills-with-brand-color-4" aria-controls="pills-with-brand-color-4">
                                            Funding And Consultancy
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-4" data-hs-tab="#pills-with-brand-color-5" aria-controls="pills-with-brand-color-4">
                                           Copyrights/Patents
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-4" data-hs-tab="#pills-with-brand-color-6" aria-controls="pills-with-brand-color-4">
                                           Achivements
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-4 inline-flex items-center gap-2 bg-transparent text-sm font-medium text-center text-gray-500 rounded-sm hover:text-primary  dark:text-white/70 dark:hover:text-white" id="pills-with-brand-color-item-4" data-hs-tab="#pills-with-brand-color-7" aria-controls="pills-with-brand-color-4">
                                           Reviewer\Editor
                                        </button>
                                    </nav>

                                    <div class="mt-3">
                                        <div id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1">
                                            <!-- Conferences tab content-->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Conference Attended Details</h5>
                                                    </div>
                                                    <button id="conference_attended_btn" data-hs-overlay="#add_conference_activity_attended" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Conference Attended 
                                                    </button>
                                                    <div id="add_conference_activity_attended" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Add New Conference Attended details<span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_conference_activity_attended">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                    @if(($errors->has('conference_name'))||($errors->has('attended_as'))||($errors->has('from_date'))||($errors->has('to_date'))||($errors->has('no_of_days'))||($errors->has('title'))||($errors->has('place'))||($errors->has('sponsored'))||($errors->has('sponsored_by'))||($errors->has('amount'))||($errors->has('weblink'))||($errors->has('type_of_level'))||($errors->has('ISSN_NO')))
                                                                        <script>
                                                                            // alert(1);
                                                                            $(window).on('load', function() {

                                                                                 $('#pills-with-brand-color-1').trigger('click')
                                                                                $('#conference_attended_btn').trigger("click");

                                                                                
                                                                                    
                                                                            });      
                                                                        </script>
                                                                    @endif
                                                                </div>
                                                                <form action="{{route('Teaching.research.conference.attended.store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold"> Conference Name:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="conference_name" class="ti-form-input" placeholder=" Conference Name" id="con_att_conference_name">
                                                                                @if($errors->has('qual_name'))
                                                                                    <div class="text-red-700">{{ $errors->first('qual_name')}}</div>
                                                                                @endif
                                                                                <div id="con_att_conferenceNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Attended As: <span class="text-red-500">*</span></label>
                                                                                <select  class="ti-form-input" name="attended_as" id="con_att_attended_as">
                                                                                    <option value="#">Choose an option</option>
                                                                                    <option value="Resource Person">Resource Person</option>
                                                                                    <option value="Paper Presenter">Paper Presenter</option>
                                                                                    <option value="Participant">Participant</option>
                                                                                </select>
                                                                                @if($errors->has('attended_as'))
                                                                                    <div class="text-red-700">{{ $errors->first('attended_as')}}</div>
                                                                                @endif
                                                                                <div id="con_att_attendedasError" class="error text-red-700"></div>
                                                                            </div>   
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">From Date: <span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                                                                <input type="date" name="from_date" id="con_att_from_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date"
                                                                                    placeholder="Choose date">
                                                                                @if($errors->has('from_date'))
                                                                                    <div class="text-red-700">{{ $errors->first('from_date')}}</div>
                                                                                @endif
                                                                                <div id="con_att_fromdateError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">To Date: <span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                                                                <input type="date" name="to_date" id="con_att_to_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_to_date"
                                                                                            placeholder="Choose date">
                                                                                @if($errors->has('to_date'))
                                                                                    <div class="text-red-700">{{ $errors->first('to_date')}}</div>
                                                                                @endif
                                                                                <div id="con_att_todateError" class="error text-red-700"></div>
                                                                            </div>                                                                              
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">No Of Days: <span class="text-red-500">*</span></label>
                                                                                <input type="text" name="no_of_days" id="con_att_no_ofdays" class="ti-form-input conf_attended_no_of_days" placeholder="No Of Days" readonly>
                                                                                <div id="con_att_noofdaysError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Title: <span class="text-red-500">*</span></label>
                                                                                <input type="text" name="title" class="ti-form-input" placeholder="Paper Title" id="con_att_title">
                                                                                @if($errors->has('title'))
                                                                                    <div class="text-red-700">{{ $errors->first('title')}}</div>
                                                                                @endif
                                                                                <div id="con_att_titleError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Place: <span class="text-red-500">*</span></label>
                                                                                <input type="text" name="place" class="ti-form-input" placeholder="Place" id="con_att_place">
                                                                                @if($errors->has('place'))
                                                                                    <div class="text-red-700">{{ $errors->first('place')}}</div>
                                                                                @endif
                                                                                <div id="con_att_palceError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Sponsored: <span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select sponsor_type_attended sponsored" name="sponsored" id="con_att_sponsored">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                                @if($errors->has('sponsored'))
                                                                                    <div class="text-red-700">{{ $errors->first('sponsored')}}</div>
                                                                                @endif
                                                                                <div id="con_att_sponsoredError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0"> 
                                                                            <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                <select class="ti-form-select sponsoredBy" name="sponsored_by" id="con_att_sponsoredby">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option  value="KLS GIT">KLS GIT</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                                @if($errors->has('sponsored_by'))
                                                                                    <div class="text-red-700">{{ $errors->first('sponsored_by')}}</div>
                                                                                @endif
                                                                                <div id="con_att_sponsoredbyError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 otherSponsor" id="otherSponsor">
                                                                                <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                                <input type="text" name="other_sponsored" class="ti-form-input" placeholder="Other Sponsor" id="con_att_other_sponsored">
                                                                                @if($errors->has('other_sponsored'))
                                                                                    <div class="text-red-700">{{ $errors->first('other_sponsored')}}</div>
                                                                                @endif
                                                                                <div id="con_att_othersponsoredError" class="error text-red-700"></div>
                                                                            </div>


                                                                            
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6 amount">
                                                                                <label for="" class="ti-form-label font-bold">Amount :</label>
                                                                                <input type="number" min="0" step="1" name="amount" class="ti-form-input" placeholder="Amount" id="con_att_amount">
                                                                                @if($errors->has('amount'))
                                                                                    <div class="text-red-700">{{ $errors->first('amount')}}</div>
                                                                                @endif
                                                                                <div id="con_att_amountError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-6 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Weblink:</label>
                                                                                <input type="url" name="weblink" id="cont_att_weblink" class="ti-form-input" placeholder=" https://www.">
                                                                                @if($errors->has('weblink'))
                                                                                    <div class="text-red-700">{{ $errors->first('weblink')}}</div>
                                                                                @endif
                                                                                <div id="con_att_weblinkError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select" name="type_of_level" id="con_att_typeoflevel">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="National">National</option>
                                                                                    <option value="International">International</option>
                                                                                </select>
                                                                                @if($errors->has('type_of_level'))
                                                                                    <div class="text-red-700">{{ $errors->first('type_of_level') }}</div>
                                                                                @endif
                                                                                <div id="con_att_typeoflevelError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">ISSN Number:</label>
                                                                                <input type="text" name="ISSN_NO" class="ti-form-input" placeholder="ISSN Number" id="con_att_issn_number">
                                                                                @if($errors->has('ISSN_NO'))
                                                                                    <div class="text-red-700">{{ $errors->first('ISSN_NO')}}</div>
                                                                                @endif
                                                                                <div id="con_att_issnnumberError" class="error text-red-700"></div>
                                                                            </div>                   
                                                                        </div>   
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">*</span></label>
                                                                                <span class="sr-only">Choose Profile photo</span>
                                                                                <input type="file" accept="application/pdf" name="document" id="conf_att_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                file:rounded-sm file:border-0
                                                                                file:text-sm file:font-semibold
                                                                                file:bg-primary file:text-white
                                                                                hover:file:bg-primary focus-visible:outline-none doc" required>
                                                                                @if($errors->has('document'))
                                                                                    <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                @endif
                                                                                <div id="pro_att_documentError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>             
                                                                    </div> 
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_conference_activity_attended">
                                                                            Close
                                                                        </button>
                                                                        <input type="submit" id="conference_attended_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                            
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="conference_attended_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">E-Gov Id</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Conference Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Attended As</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">From date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">No Of Days</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Paper Title</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Place</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>     
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Sponsored By</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Amount</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Weblink</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Type Of Level</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">ISSN Number</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Document</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Action</th>
                                
                                                                </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                    @if($staff->conferences_attendee!=null)
                                                                    @forelse($staff->conferences_attendee as $act)
                                                                        <tr class="">
                            
                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$act->egov_id}}</span></td>
                                                                                <td><span>{{$act->conference_name}}</span></td>
                                                                                <td><span>{{$act->attended_as}}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($act->from_date)->format('d-M-Y') }}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($act->to_date)->format('d-M-Y') }}</span></td>
                                                                                <td><span>{{$act->no_of_days}}</span></td>
                                                                                <td><span>{{$act->title}}</span></td>
                                                                                <td><span>{{$act->place}}</span></td>
                                                                                <td><span>{{$act->sponsored}}</span></td>
                                                                                <td><span>{{$act->sponsored_by}}</span></td>
                                                                                <td><span>{{$act->amount}}</span></td>
                                                                                <td><span>{{$act->weblink}}</span></td>
                                                                                <td><span>{{$act->type_of_level}}</span></td>
                                                                                <td><span>{{$act->ISSN_NO}}</span></td>
                                                                                <td><span><a href={{asset('Uploads/Research/Conference_Attended/'.$act->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$act->document}}</a></span></td>

                            
                                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <button data-hs-overlay="#conference_attended_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary conference_attended_edit_modal_click">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            Edit
                                                                                        </span>
                                                                                    </button>
                                                                                    <div id="conference_attended_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                            <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                        Edit Conference Attended Details
                                                                                                    </h3>
                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                    data-hs-overlay="#conference_attended_edit_modal{{$i}}">
                                                                                                    <span class="sr-only">Close</span>
                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                        fill="currentColor" />
                                                                                                    </svg>
                                                                                                    </button>
                                                                                                    @if(($errors->has('edit_conference_name'))||($errors->has('edit_attended_as'))||($errors->has('edit_from_date'))||($errors->has('edit_to_date'))||($errors->has('edit_no_of_days'))||($errors->has('edit_title'))||($errors->has('edit_place'))||($errors->has('edit_sponsored'))||($errors->has('edit_sponsored_by'))||($errors->has('edit_amount'))||($errors->has('edit_weblink'))||($errors->has('edit_type_of_level')))
                                                                                                        <script>
                                                                                                            window.onload=function(){
                                                                                                            //alert('123');
                                                                                                            //alert("Validation errors");

                                                                                                            // document.getElementById('btn'+{{old('modal_no')}}).click();
                                                                                                        
                                                                                                            };   
                                                                                                        
                                                                                                        </script>
                                                                                                    @endif
                                                                                                </div>
                                                                                                <form  action="{{route('Teaching.research.conference.attended.update',$act->id)}}" enctype="multipart/form-data" method="post">
                                                                                                    @csrf
                                                                                                    @method('patch')
                                                                                                    <div class="ti-modal-body">
                                                                                                        <input type='hidden' name='modal_no' class='modal_no' value={{old('modal_no')}}/>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Conference Name : <span class="text-red-500">*</span></label>
                                                                                                                <input type="text" name="edit_conference_name" class="ti-form-input" required placeholder="Conference Name" value="{{$act->conference_name}}">
                                                                                                                @if($errors->has('edit_conference_name'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_conference_name')}}</div>
                                                                                                                @endif
                                                                                                                <div id="titleError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Attended As : <span class="text-red-500">*</span></label>
                                                                                                                <select  class="ti-form-input" name="edit_attended_as" required>
                                                                                                                    <option value="#">Choose an option</option>
                                                                                                                    <option value="Resource Person" {{$act->attended_as=='Resource Person'? 'selected':''}}>Resource Person</option>
                                                                                                                    <option value="Paper Presenter"  {{$act->attended_as=='Paper Presenter'? 'selected':''}}>Paper Presenter</option>
                                                                                                                    <option value="Participant" {{$act->attended_as=='Participant'? 'selected':''}}>Participant</option>
                                                                                                                </select>
                                                                                                                @if($errors->has('edit_attended_as'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_attended_as')}}</div>
                                                                                                                @endif
                                                                                                                <div id="attendedError" class="error text-red-700"></div>
                                                                                                            </div> 
                                                                                                        </div>  
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">    
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">From Date : <span class="text-red-500">*</span></label>
                                                                                                                <div class="px-2 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                                </div>
                                                                
                                                                                                                <input type="date" name="edit_from_date"
                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date_edit"
                                                                                                                     required placeholder="Choose date" value="{{$act->from_date}}">
                                                                                                                    @if($errors->has('edit_from_date'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('edit_from_date')}}</div>
                                                                                                                    @endif
                                                                                                                    <div id="fromdateError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                             <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">To Date : <span class="text-red-500">*</span></label>
                                                                                                                <div class="px-2 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                                                </div>
                                                                
                                                                                                                <input type="date" name="edit_to_date"
                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_to_date_edit"
                                                                                                                     required placeholder="Choose date" value="{{$act->to_date}}">
                                                                                                                    @if($errors->has('edit_to_date'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('edit_to_date')}}</div>
                                                                                                                    @endif
                                                                                                                <div id="todateError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                           
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">No Of Days:</label>
                                                                                                                <input type="text" name="edit_no_of_days" class="ti-form-input conf_attended_no_of_days_edit" required placeholder="No Of Days" value="{{$act->no_of_days}}" readonly>
                                                                                                                @if($errors->has('edit_no_of_days'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_no_of_days')}}</div>
                                                                                                                @endif
                                                                                                                <div id="noofdaysError" class="error text-red-700"></div>
                                                                                                                
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Title:</label>
                                                                                                                <input type="text" name="edit_title" class="ti-form-input" required placeholder="Paper Title" value="{{$act->title}}">
                                                                                                                @if($errors->has('edit_title'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_title')}}</div>
                                                                                                                @endif
                                                                                                                <div id="titleError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Place:</label>
                                                                                                                <input type="text" name="edit_place" class="ti-form-input" placeholder="Place" value="{{$act->place}}">
                                                                                                                @if($errors->has('edit_place'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_place')}}</div>
                                                                                                                @endif
                                                                                                                <div id="placeError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                                                                <select class="ti-form-select sponsor_type_attended sponsored" name="edit_sponsored">
                                                                                                                    <option value="#">Choose One</option>
                                                                                                                    <option value="Yes" {{$act->sponsored=='Yes'? 'selected':''}}>Yes</option>
                                                                                                                    <option value="No"  {{$act->sponsored=='No'? 'selected':''}}>No</option>
                                                                                                                </select>
                                                                                                                @if($errors->has('edit_sponsored'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_sponsored')}}</div>
                                                                                                                @endif
                                                                                                                <div id="sponsoredError" class="error text-red-700"></div>
                                                                                                            </div> 
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            {{-- <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                                                <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                                                <input type="text" name="sponsored_by" class="ti-form-input" placeholder="Sponsored By" value="{{$act->sponsored_by}}">
                                                                                                            </div> --}}
                                                                                                            <div class="max-w-sm space-y-3 pb-6 sponsored_by">
                                                                                                                <label for="" class="ti-form-label font-bold">Sponsored By:</label>
                                                                                                                <select class="ti-form-select sponsoredBy" name="edit_sponsored_by">
                                                                                                                    <option value="#">Choose One</option>
                                                                                                                    <option value="KLS GIT" {{$act->sponsored_by=='KLS GIT'? 'selected':''}}>KLS GIT</option>
                                                                                                                    <option value="Other" {{$act->sponsored_by=='Other'? 'selected':''}}>Other</option>
                                                                                                                </select>
                                                                                                                @if($errors->has('edit_sponsored_by'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_sponsored_by')}}</div>
                                                                                                                @endif
                                                                                                                <div id="sponsoredbyError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6 otherSponsor" id="otherSponsor">
                                                                                                                <label for="" class="ti-form-label font-bold">Other Sponsor:</label>
                                                                                                                <input type="text" name="edit_other_sponsored" class="ti-form-input" placeholder="Other Sponsor" value="{{$act->other_sponsored}}">
                                                                                                                <div id="othersponsorError" class="error text-red-700"></div>
                                                                                                            </div>


                                                                                                           
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6 amount">
                                                                                                                <label for="" class="ti-form-label font-bold">Amount :</label>
                                                                                                                <input type="number" min="0" step="1" name="edit_amount" class="ti-form-input" placeholder="Amount" value="{{$act->amount}}">
                                                                                                                @if($errors->has('edit_amount'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('edit_amount')}}</div>
                                                                                                                @endif
                                                                                                                <div id="amountError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Weblink:</label>
                                                                                                                <input type="url" name="edit_weblink" class="ti-form-input" placeholder="Weblink" value="{{$act->weblink}}">
                                                                                                                @if($errors->has('edit_weblink'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('edit_weblink')}}</div>
                                                                                                                @endif
                                                                                                                <div id="weblinkError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                                                                <select class="ti-form-select" name="edit_type_of_level">
                                                                                                                    <option value="#">Choose One</option>
                                                                                                                    <option value="National" {{$act->type_of_level=='National'? 'selected':''}}>National</option>
                                                                                                                    <option value="International" {{$act->type_of_level=='International'? 'selected':''}}>International</option>
                                                                                                                    
                                                                                                                </select>
                                                                                                                @if($errors->has('type_of_level'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('type_of_level') }}</div>
                                                                                                                @endif
                                                                                                                
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">ISSN Number:</label>
                                                                                                                <input type="text" name="edit_ISSN_NO" class="ti-form-input" placeholder="ISSN Number" value="{{$act->ISSN_NO}}">
                                                                                                                @if($errors->has('ISSN_NO'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('ISSN_NO')}}</div>
                                                                                                                @endif
                                                                                                                <div id="pub_issnnumberError" class="error text-red-700"></div>
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* {{$act->document}}</span></label>
                                                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                                                            <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                            file:rounded-sm file:border-0
                                                                                                                            file:text-sm file:font-semibold
                                                                                                                            file:bg-primary file:text-white
                                                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="{{$act->document}}">
                                                                                                                            @if($errors->has('document'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                                            @endif
                                                                                                                        <div id="con_att_documentError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>                               
                                                                                                        </div>              
                                                                                                    </div> 
                                                                                                    <div class="ti-modal-footer">
                                                                                                        <button type="button"
                                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                        data-hs-overlay="#conference_attended_edit_modal{{$i}}">
                                                                                                        Close
                                                                                                        </button>
                                                                                                        
                                                                                                        <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                        
                                                                                                    </div>
                                                                                                </form>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                <form action="{{ route('Teaching.research.conference.attended.destroy',$act->id) }}" method="post">
                                                                                
                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                    @method('delete')
                                                                                    @csrf
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                        Delete
                                                                                    </span>
                                                                                    </button>
                                                                                </form>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        @empty
                                                                            {{-- <tr>
                                                                            <td>no records</td>
                                                                            </tr>       --}}
                                                                    @endforelse
                                                                @endif
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>

                                            <!-- End of Conferences attended table--> 

                                            <!-- Start of Conferences COnducted details-->
                                            
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Conference Conducted History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button id="conference_conducted_btn" data-hs-overlay="#add_conference_activity_conducted" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Conference Conducted 
                                                    </button>
                                                    <div id="add_conference_activity_conducted" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Add New Conference Conducted Details<span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#add_conference_activity_conducted">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                    </button>
                                                                    @if(($errors->has('cc_conference_name'))||($errors->has('cc_co_organizer'))||($errors->has('cc_no_of_participants'))||($errors->has('cc_sponsored'))||($errors->has('cc_sponsoring_agency'))||($errors->has('cc_sponsored'))||($errors->has('cc_sponsoring_agency_name_address'))||($errors->has('cc_from_date'))||($errors->has('cc_to_date'))||($errors->has('cc_no_of_days'))||($errors->has('cc_place'))||($errors->has('cc_publisher'))||($errors->has('cc_role'))||($errors->has('cc_weblink'))||($errors->has('cc_ISSN_NO')))
                                                                        <script>
                                                                            // alert(1);

                                                                            $(window).on('load', function() {
                                                                                //if($('#horizontal-alignment-item-2').parent().find('.active')){
                                                                                // alert('Its active');
                                                                                //$('#horizontal-alignment-item-2').trigger('click')
                                                                                $('#conference_conducted_btn').trigger("click");

                                                                                
                                                                            });
                                                                        </script>
                                                                    @endif
                                                                </div>
                                                                <form action="{{route('Teaching.research.conference.conducted.store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label">CONFERENCE NAME:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="cc_conference_name" class="ti-form-input" required placeholder="Title" id="con_cond_conference_name">
                                                                                @if($errors->has('cc_conference_name'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_conference_name')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_conferenceNameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">Co Organizer :</label>
                                                                                <input type="text" name="cc_co_organizer" class="ti-form-input" required placeholder="Co Organizer" id="con_cond_co_organizer">
                                                                                @if($errors->has('cc_co_organizer'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_co_organizer')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_coorganizerError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">No of Participants:<span class="text-red-500">*</span></label>
                                                                                <input type="number" min="0" name="cc_no_of_participants" class="ti-form-input" required placeholder="No of Participants" id="con_cond_no_ofparticipants">
                                                                                @if($errors->has('cc_no_of_participants'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_no_of_participants')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_participantError" class="error text-red-700"></div>
                                                                            </div>

                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Sponsored:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select sponsor_type sponsored" name="cc_sponsored" id="con_cond_sponsored">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                                @if($errors->has('cc_sponsored'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_sponsored')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_sponsoredError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6 sponsoring_agency">
                                                                                <label for="" class="ti-form-label">Sponsoring Agency:</label>
                                                                                <input type="text" name="cc_sponsoring_agency" class="ti-form-input" placeholder="Sponsoring Agency" id="con_cond_sponsoring_agency">
                                                                                @if($errors->has('cc_sponsoring_agency'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_sponsoring_agency')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_sponsoragencyError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">ISSN Number:</label>
                                                                                <input type="text" name="cc_ISSN_NO" class="ti-form-input" placeholder="ISSN Number">
                                                                                @if($errors->has('cc_ISSN_NO'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_ISSN_NO')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_placeError" class="error text-red-700"></div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">From Date :<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                        

                                                                                </div>
                                
                                                                                <input type="date" name="cc_from_date" id="con_cond_from_date"
                                                                                    class="ti-form-input date rounded-l-none focus:z-10 flatpickr-input conf_conducted_from_date"
                                                                                    required placeholder="Choose date">
                                                                                    @if($errors->has('cc_from_date'))
                                                                                        <div class="text-red-700">{{ $errors->first('cc_from_date')}}</div>
                                                                                    @endif
                                                                                    <div id="con_cond_fromdateError" class="error text-red-700"></div>
                                                                            </div>


                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">To Date :<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                
                                                                                <input type="date" name="cc_to_date" id="con_cond_to_date"
                                                                                    class="ti-form-input date rounded-l-none focus:z-10 flatpickr-input conf_conducted_to_date"
                                                                                        required placeholder="Choose date">
                                                                                    @if($errors->has('cc_to_date'))
                                                                                        <div class="text-red-700">{{ $errors->first('cc_to_date')}}</div>
                                                                                    @endif
                                                                                    <div id="con_cond_todateError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">No Of Days:</label>
                                                                                <input type="text" id="con_cond_no_ofdays" name="cc_no_of_days" class="ti-form-input conf_conducted_no_of_days" required placeholder="No Of Days" readonly>
                                                                                @if($errors->has('con_cond_no_ofdays'))
                                                                                    <div class="text-red-700">{{ $errors->first('con_cond_no_ofdays')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_noofError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">Place:</label>
                                                                                <input type="text" name="cc_place" class="ti-form-input" placeholder="Place" id="con_cond_place">
                                                                                @if($errors->has('cc_place'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_place')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_placeError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">Publisher:</label>
                                                                                <input type="text" name="cc_publisher" class="ti-form-input" placeholder="Publisher" id="con_cond_publisher">
                                                                                @if($errors->has('cc_publisher'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_publisher')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_publisherError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold"> Role: <span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select sponsored" name="cc_role" required id="con_cond_role">
                                                                                    <option value="#">Choose the role</option>
                                                                                    <option value="Convener">Convener</option>
                                                                                    <option value="Co-convener">Co-convener</option>
                                                                                    <option value="Team Member">Team Member</option>
                                                                                    <option value="Coordinator">Coordinator</option>
                                                                                </select>
                                                                                @if($errors->has('cc_role'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_role')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_roleError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label">Weblink:</label>
                                                                                <input type="url" id="con_cond_weblink" name="cc_weblink" class="ti-form-input" placeholder="https://wwww.">
                                                                                @if($errors->has('cc_weblink'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_weblink')}}</div>
                                                                                @endif
                                                                                <div id="con_cond_weblinkError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select" name="cc_type_of_level" id="cc_typeof_level">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="National">National</option>
                                                                                    <option value="International">International</option>
                                                                                </select>
                                                                                @if($errors->has('cc_type_of_level'))
                                                                                    <div class="text-red-700">{{ $errors->first('cc_type_of_level') }}</div>
                                                                                @endif
                                                                                <div id="cc_typeoflevelError" class="error text-red-700"></div>
                                                                            </div>
                                                                                              
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* </span></label>
                                                                                    <span class="sr-only">Choose Profile photo</span>
                                                                                        <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                        file:rounded-sm file:border-0
                                                                                        file:text-sm file:font-semibold
                                                                                        file:bg-primary file:text-white
                                                                                        hover:file:bg-primary focus-visible:outline-none doc" required value="">
                                                                                        {{-- @if($errors->has('document'))
                                                                                            <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                        @endif
                                                                                    <div id="con_att_documentError" class="error text-red-700"></div> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                    </div>    
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                        data-hs-overlay="#add_conference_activity_conducted">
                                                                        Close
                                                                        </button>
                                                                        
                                                                        <input type="submit" id="conference_conducted_add_btn" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="conference_conducted_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">Conference Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Co Organizer</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">No Of Participants</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Sponsoring Agency</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">From date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">No Of Days</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Place</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Publisher</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Weblink</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Type Of Level</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">ISSN Number</th>
                                                                     <th scope="col" class="dark:text-white/80 font-bold">Document</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">actions</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @if($staff->conferences_conducted !=null)
                                                                    @forelse($staff->conferences_conducted as $con)

                                                                    <tr class="">
                                                                        <td><span>{{$i++}}</span></td>
                                                                        <td><span>{{$con->egov_id}}</span></td>
                                                                        <td><span>{{$con->conference_name}}</span></td>
                                                                        <td><span>{{$con->co_organizer}}</span></td>
                                                                        <td><span>{{$con->no_of_participants}}</span></td>
                                                                        <td><span>{{$con->sponsored}}</span></td>
                                                                        <td><span>{{$con->sponsoring_agency}}</span></td>
                                                                        <td><span>{{\Carbon\Carbon::parse($con->from_date)->format('d-M-Y') }}</span></td>
                                                                        <td><span>{{\Carbon\Carbon::parse($con->to_date)->format('d-M-Y') }}</span></td>
                                                                        <td><span>{{$con->no_of_days}}</span></td>
                                                                        <td><span>{{$con->place}}</span></td>
                                                                        <td><span>{{$con->publisher}}</span></td>
                                                                        <td><span>{{$con->role}}</span></td>
                                                                        <td><span>{{$con->weblink}}</span></td>
                                                                        <td><span>{{$con->type_of_level}}</span></td>
                                                                        <td><span>{{$con->ISSN_NO}}</span></td>
                                                                        <td><span><a href={{asset('Uploads/Research/Conference_Conducted/'.$con->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$con->document}}</a></span></td>
                                                                        
                                                                        <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <button data-hs-overlay="#conference_conducted_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary conference_conducted_edit_modal_click">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                        Edit
                                                                                    </span>
                                                                                </button>
                                                                                <div id="conference_conducted_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                        <div class="ti-modal-content">
                                                                                            <div class="ti-modal-header">
                                                                                                <h3 class="ti-modal-title">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    Edit Conference Conducted{{$con->id}}
                                                                                                </h3>
                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                    data-hs-overlay="#conference_conducted_edit_modal{{$i}}">
                                                                                                    <span class="sr-only">Close</span>
                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                        fill="currentColor" />
                                                                                                    </svg>
                                                                                                </button>
                                                                                                @if(($errors->has('ce_conference_name'))||($errors->has('ce_co_organizer'))||($errors->has('ce_no_of_participants'))||($errors->has('ce_sponsored'))||($errors->has('ce_sponsoring_agency'))||($errors->has('ce_sponsored'))||($errors->has('ce_sponsoring_agency_name_address'))||($errors->has('ce_from_date'))||($errors->has('ce_to_date'))||($errors->has('ce_no_of_days'))||($errors->has('ce_place'))||($errors->has('ce_publisher'))||($errors->has('ce_role'))||($errors->has('ce_weblink'))||($errors->has('ce_ISSN_NO')))
                                                                                                    <script>
                                                                                                        // alert(1);

                                                                                                        $(window).on('load', function() {

                                                                                                        });
                                                                                                    </script>
                                                                                                @endif
                                                                                                
                                                                                            </div>
                                                                                            <form  action="{{route('Teaching.research.conference.conducted.update',$con->id)}}" enctype="multipart/form-data" method="post">
                                                                                                @csrf
                                                                                                @method('patch')
                                                                                                <div class="ti-modal-body">
                                                                                                    <input type='hidden' name='modal_no' id='modal_no' value={{old('modal_no')}}/>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="with-corner-hint" class="ti-form-label">Conference Name :<span class="text-red-500">*</span> </label>
                                                                                                            <input type="text" name="ce_conference_name" class="ti-form-input" required placeholder="Title" value="{{$con->conference_name}}">
                                                                                                            <div id="conferenceNameError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">Co Organizer :<span class="text-red-500">*</span></label>
                                                                                                            <input type="text" name="ce_co_organizer" class="ti-form-input" required placeholder="Co Organizer"value="{{$con->co_organizer}}">
                                                                                                            <div id="coorganizerError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">No of Participants :<span class="text-red-500">*</span></label>
                                                                                                            <input type="text" name="ce_no_of_participants" class="ti-form-input" required placeholder="No of Participants"value="{{$con->no_of_participants}}">
                                                                                                            <div id="participantError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">Sponsored :<span class="text-red-500">*</span></label>
                                                                                                            <select class="ti-form-select sponsor_type sponsored" name="ce_sponsored">
                                                                                                                <option value="#">Choose One</option>
                                                                                                                <option value="Yes" {{$con->sponsored=='Yes'? 'selected':''}}>Yes</option>
                                                                                                                <option value="No" {{$con->sponsored=='No'? 'selected':''}}>No</option>
                                                                                                            </select>
                                                                                                            <div id="sponsoredError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                                                        <div class="max-w-sm space-y-3 pb-6 sponsoring_agency">
                                                                                                            <label for="" class="ti-form-label">Sponsoring Agency:</label>
                                                                                                            <input type="text" name="ce_sponsoring_agency" class="ti-form-input" placeholder="Sponsoring Agency" value="{{$con->sponsoring_agency}}">
                                                                                                            <div id="sponsoragencyError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">ISSN Number:</label>
                                                                                                            <input type="text" name="ce_ISSN_NO" class="ti-form-input" placeholder="ISSN Number" value="{{$con->ISSN_NO}}">
                                                                                                            @if($errors->has('cc_ISSN_NO'))
                                                                                                                <div class="text-red-700">{{ $errors->first('cc_ISSN_NO')}}</div>
                                                                                                            @endif
                                                                                                            <div id="con_cond_placeError" class="error text-red-700"></div>
                                                                                                        </div>  
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">From Date :<span class="text-red-500">*</span></label>
                                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                            </div>
                                                            
                                                                                                            <input type="date" name="ce_from_date"
                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_conducted_from_date_edit"
                                                                                                                    required placeholder="Choose date" value="{{$con->from_date}}">
                                                                                                            <div id="fromdateError" class="error text-red-700"></div>
                                                                                                        </div>


                                                                                                        <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">To Date :<span class="text-red-500">*</span></label>
                                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                                            </div>
                                                                                                            <input type="date" name="ce_to_date"
                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_conducted_to_date_edit"
                                                                                                                    required placeholder="Choose date" value="{{$con->to_date}}">
                                                                                                            <div id="todateError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">No Of Days:</label>
                                                                                                            <input type="text" name="ce_no_of_days" class="ti-form-input conf_conducted_no_of_days_edit" required placeholder="No Of Days" value="{{$con->no_of_days}}">
                                                                                                            <div id="noofdaysError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">Place:</label>
                                                                                                            <input type="text" name="ce_place" class="ti-form-input" placeholder="Place" value="{{$con->place}}">
                                                                                                            <div id="placeError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">Publisher:</label>
                                                                                                            <input type="text" name="ce_publisher" class="ti-form-input" placeholder="Publisher" value="{{$con->publisher}}">
                                                                                                            <div id="publisherError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="with-corner-hint" class="ti-form-label font-bold"> Role:<span class="text-red-500">*</span> </label>
                                                                                                            <select class="ti-form-select sponsored" name="ce_role" required> 
                                                                                                                    <option value="#">Choose the role</option>
                                                                                                                    <option value="Convener" {{$con->role=='Convener'?'selected':''}}>convener</option>
                                                                                                                    <option value="Co-convener" {{$con->role=='Co-convener'?'selected':''}}>Co-convener</option>
                                                                                                                    <option value="Team Member" {{$con->role=='Team Member'?'selected':''}}>Team Member</option>
                                                                                                                    <option value="Coordinator" {{$con->role=='Coordinator'?'selected':''}}>Coordinator</option>
                                                                                                                </select>
                                                                                                            <div id="roleError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label">Weblink:</label>
                                                                                                            <input type="url" name="ce_weblink" class="ti-form-input" placeholder="Weblink" value="{{$con->weblink}}">
                                                                                                            <div id="weblinkError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label font-bold">Type Of Level:<span class="text-red-500">*</span></label>
                                                                                                            <select class="ti-form-select" name="ce_type_of_level">
                                                                                                                <option value="#">Choose One</option>
                                                                                                                <option value="National" {{$con->type_of_level=='National'? 'selected':''}}>National</option>
                                                                                                                <option value="International" {{$con->type_of_level=='International'? 'selected':''}}>International</option>
                                                                                                                
                                                                                                            </select>
                                                                                                            @if($errors->has('ce_type_of_level'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('ce_type_of_level') }}</div>
                                                                                                                @endif
                                                                                                            <div id="cc_typeoflevelError" class="error text-red-700"></div>
                                                                                                        </div>
                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* {{$con->document}}</span></label>
                                                                                                            <span class="sr-only">Choose Profile photo</span>
                                                                                                                <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                file:rounded-sm file:border-0
                                                                                                                file:text-sm file:font-semibold
                                                                                                                file:bg-primary file:text-white
                                                                                                                hover:file:bg-primary focus-visible:outline-none doc" required value="{{$con->document}}">
                                                                                                                @if($errors->has('document'))
                                                                                                                    <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                                @endif
                                                                                                            <div id="docEditError" class="error text-red-700"></div>
                                                                                                        </div>                   
                                                                                                    </div>        
                                                                                                </div> 
                                                                                                <div class="ti-modal-footer">
                                                                                                    <button type="button"
                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                    data-hs-overlay="#conference_conducted_edit_modal{{$i}}">
                                                                                                    Close
                                                                                                    </button>
                                                                                                    
                                                                                                    <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                    
                                                                                                </div>
                                                                                            </form>  
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                <form action="{{ route('Teaching.research.conference.conducted.destroy',$con->id) }}" method="post">
                                                                                
                                                                                    <button onclick="return confirm('Are you Sure')"
                                                                                        class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                            @method('delete')
                                                                                            @csrf
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            Delete
                                                                                        </span>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </td>
                                                                    </tr> 
                                                                    @empty
                                                                        {{-- <tr>
                                                                        No Records
                                                                        </tr>      --}}
                                                                    @endforelse
                                                                @endif
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                            <!-- End of Conference conducted details-->
                                        </div>   
                                        <!-- Second Tab Starts here-->
                                        
                                        <!--Start of publications details-->
                                        <div id="pills-with-brand-color-2" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-2">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Journal Publications</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button id="publication_btn" data-hs-overlay="#add_publicaitons" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Journal Publication 
                                                    </button>
                                                    <div id="add_publicaitons" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Journal Publication<span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_publicaitons">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                         @if(($errors->has('level'))||($errors->has('title'))||($errors->has('date'))||($errors->has('journal'))||($errors->has('link'))||($errors->has('role'))||($errors->has('role')))
                                                                                <script>
                                                                                    // alert(1);
                                                                                    $(window).on('load', function() {
                                                                                        //if($('#horizontal-alignment-item-2').parent().find('.active')){
                                                                                            //alert('Its active');
                                                                                            //alert(614);
                                                                                            $('#pills-with-brand-color-2').trigger('click');
                                                                                            //alert('conducted clicked');
                                                                                            $('#publication_btn').trigger("click");

                                                                                    }); 
                                                                                </script>
                                                                        @endif
                                                                </div>
                                                                <form  action="{{route('Teaching.research.publication.store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf 
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold"> Level :<span class="text-red-500">*</span> </label>
                                                                                <select class="ti-form-select level pub_level" name="level" id="pub_level">
                                                                                    <option value="#">Choose Level</option>
                                                                                    <option value="Q1">Q1</option>
                                                                                    <option value="Q2">Q2</option>  
                                                                                    <option value="Q3">Q3</option>
                                                                                    <option value="Q4">Q4</option>
                                                                                    <option value="SCI">SCI</option>
                                                                                    <option value="Web of Science">Web of Science</option>  
                                                                                    <option value="Scopus Indexed">Scopus Indexed</option>
                                                                                    <option value="UGC General">UGC General</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                                @if($errors->has('level'))
                                                                                    <div class="text-red-700">{{ $errors->first('level') }}</div>
                                                                                @endif
                                                                                <div id="pub_levelError" class="error text-red-700"></div>
                                                                            </div>

                                                                            <div class="max-w-sm space-y-3 pb-6" id="pub_other_level">
                                                                                <label for="" class="ti-form-label font-bold">Other Level:</label>
                                                                                <input type="text" name="other_level" class="ti-form-input" placeholder="Other Level" id="pub_otherlevel">
                                                                                @if($errors->has('other_level'))
                                                                                    <div class="text-red-700">{{ $errors->first('other_level') }}</div>
                                                                                @endif
                                                                                <div id="pub_other_levelError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="title" class="ti-form-input" placeholder="Title" id="pub_title">
                                                                                 @if($errors->has('title'))
                                                                                     <div class="text-red-700">{{ $errors->first('title') }}</div>
                                                                                 @endif
                                                                                <div id="pub_titleError" class="error text-red-700"></div>
                                                                            </div>   

                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Date of Publication:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                                                            
                                                                                    <input type="date" name="date" id="pub_dateofpublication"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date"
                                                                                              placeholder="Choose date" >
                                                                                    @if($errors->has('date'))
                                                                                         <div class="text-red-700">{{ $errors->first('date') }}</div>
                                                                                     @endif
                                                                                    <div id="pub_dateofpublicatonError" class="error text-red-700"></div>      
                                                                            </div>                                                                                 
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Journal:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="journal" class="ti-form-input"  placeholder="Journal" id="pub_journal">
                                                                                 @if($errors->has('journal'))
                                                                                    <div class="text-red-700">{{ $errors->first('journal') }}</div>
                                                                                @endif
                                                                                <div id="pub_journalError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">DOI Number:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="doi_number" class="ti-form-input" required placeholder="Doi Number" id="pub_doi_number" >
                                                                                    @if($errors->has('doi_number'))
                                                                                    <div class="text-red-700">{{ $errors->first('doi_number') }}</div>
                                                                                @endif
                                                                                <div id="pub_doi_numberError" class="error text-red-700"></div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Link:</label>
                                                                                <input type="url" id="pub_link" name="link" class="ti-form-input" placeholder="Link Should Be http://www.">
                                                                                    @if($errors->has('link'))
                                                                                         <div class="text-red-700">{{ $errors->first('link') }}</div>
                                                                                     @endif
                                                                                     <div id="pub_linkError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Author Role:<span class="text-red-500">*</span></label>

                                                                                <select class="ti-form-select role" name="role" id="pub_authorrole">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="Author">Author</option>
                                                                                    <option value="Co-Author">Co-Author</option>
                                                                                </select>
                                                                                @if($errors->has('role'))
                                                                                        <div class="text-red-700">{{ $errors->first('role') }}</div>
                                                                                    @endif
                                                                                <div id="pub_authorroleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* </span></label>
                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                            <input type="file" accept="application/pdf" name="document" id="pub_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                            file:rounded-sm file:border-0
                                                                                            file:text-sm file:font-semibold
                                                                                            file:bg-primary file:text-white
                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="">
                                                                                            @if($errors->has('document'))
                                                                                                <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                            @endif
                                                                                        <div id="pub_documentError" class="error text-red-700"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>  
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_publicaitons">
                                                                            Close
                                                                        </button>
                                                                                        
                                                                        <input type="submit" id="publication_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                            <table id="publication_table"class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">
                                                                        <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Journal Level</th>
                                                                         <th scope="col" class="dark:text-white/80 font-bold">Other Level</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Paper Title</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Date of Publication</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Name of the Journal</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">DOI Number</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Web Link of the Publication</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Role of the Author</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Document</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">actions</th>
                                                                    </tr>
                                                                </thead>
                                                                @php
                                                                    $i=1;
                                                                @endphp
                                                                <tbody class="">
                                                                    @if($staff->publications!=null)
                                                                        @forelse($staff->publications as $pub)
                                                                            <tr class="">

                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$pub->egov_id}}</span></td>
                                                                                <td><span>{{$pub->level}}</span></td>
                                                                                <td><span>{{$pub->other_level}}</span></td>
                                                                                <td><span>{{$pub->title}}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($pub->date)->format('d-M-Y') }}</span></td>
                                                                                <td><span>{{$pub->journal}}</span></td>
                                                                                <td><span>{{$pub->doi_number}}</span></td>
                                                                                <td><span>{{$pub->link}}</span></td>
                                                                                <td><span>{{$pub->role}}</span></td>
                                                                                <td><span><a href={{asset('Uploads/Research/Publications/'.$pub->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$pub->document}}</a></span></td>
                                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#publication_edit_modal{{$i}}"  id="btn{{$i}}" btn-val={{$i}}
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary publication_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>
                                                            
                                                        
                                                                                            <div id="publication_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Journal Publication
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#publication_edit_modal{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor" />
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                            @if((($errors->has('e_level'))||($errors->has('e_title'))||($errors->has('e_date'))||($errors->has('e_journal'))||($errors->has('e_link'))||($errors->has('e_role'))||($errors->has('e_doi_number'))))
                                                                                                                <script>
                                                                                                                    window.onload=function(){
                                                                                                                    //alert('123');
                                                                                                                     document.getElementById('btn'+{{old('modal_no')}}).click();

                                                                                                                    };   
                                                                                                                
                                                                                                                </script>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                        <form action="{{route('Teaching.research.publication.update',$pub->id)}}" enctype="multipart/form-data" method="post">
                                                                                                             @csrf
                                                                                                            @method('patch')
                                                                                                            <div class="ti-modal-body">
                                                                                                                <input type='hidden' name='modal_no' class='modal_no' value={{old('modal_no')}}/>

                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Level : <span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select level pub_level" name="e_level" id="pub_level" >
                                                                                                                            <option value="#">Choose Level</option>
                                                                                                                            <option value="Q1" {{$pub->level=='Q1'? 'selected':''}}>Q1</option>
                                                                                                                            <option value="Q2"  {{$pub->level=='Q2'? 'selected':''}}>Q2</option>  
                                                                                                                            <option value="Q3"  {{$pub->level=='Q3'? 'selected':''}}>Q3</option>
                                                                                                                            <option value="Q4"  {{$pub->level=='Q4'? 'selected':''}}>Q4</option> 
                                                                                                                            <option value="SCI"  {{$pub->level=='SCI'? 'selected':''}}>SCI</option>
                                                                                                                            <option value="Web of Science"  {{$pub->level=='Web of Science'? 'selected':''}}>Web of Science</option>
                                                                                                                            <option value="Scopus Indexed" {{$pub->level=='Scopus Indexed'? 'selected':''}}>Scopus Indexed</option>
                                                                                                                            <option value="UGC General" {{$pub->level=='UGC General'? 'selected':''}}>UGC General</option>
                                                                                                                            <option value="Other" {{$pub->level=='Other'? 'selected':''}}>Other</option>
                                                                                                                        </select>
                                                                                                                        @if($errors->has('e_level'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('e_level') }}</div>
                                                                                                                        @endif
                                                                                                                                                        
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6" id="pub_other_level" >
                                                                                                                        <label for="" class="ti-form-label font-bold">Other Level:</label>
                                                                                                                        <input type="text" name="other_level" class="ti-form-input" placeholder="Other Level" value="{{$pub->other_level}}">
                                                                                                                        @if($errors->has('other_level'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('other_level') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="pub_other_levelError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="e_title" class="ti-form-input" required placeholder=" Title" value="{{$pub->title}}">
                                                                                                                         @if($errors->has('e_title'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('e_title') }}</div>
                                                                                                                         @endif
                                                                                                                        
                                                                                                                    </div>   
                                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Date :<span class="text-red-500">*</span></label>
                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70">
                                                                                                                                <i class="ri ri-calendar-line"></i></span>
                                                                                                                        </div>
                                                                                                                        <input type="date" name="e_date"
                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date conf_attended_from_date"
                                                                                                                                    required placeholder="Choose date" value="{{$pub->date}}" >
                                                                                                                            @if($errors->has('e_date'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('e_date') }}</div>
                                                                                                                        @endif     
                                                                                                                    </div>
                                                                                                                                                                                             
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                     <div class="max-w-sm space-y-3 pb-6">
                                                                                                                            <label for="" class="ti-form-label font-bold">Journal:<span class="text-red-500">*</span></label>
                                                                                                                            <input type="text" name="e_journal" class="ti-form-input" required placeholder="Journal" value="{{$pub->journal}}">
                                                                                                                            @if($errors->has('e_journal'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('e_journal') }}</div>
                                                                                                                         @endif
                                                                                                                    </div>     
                                                                                                                     <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">DOI Number:<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="e_doi_number" class="ti-form-input" placeholder="Doi Number" id="pub_doi_number" value="{{$pub->doi_number}}">
                                                                                                                            @if($errors->has('e_doi_number'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('e_doi_number') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="pub_doi_numberError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                   <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Link:</label>
                                                                                                                        <input type="url" name="e_link" class="ti-form-input" required placeholder="Link Should Be http://www." value="{{$pub->link}}">
                                                                                                                        @if($errors->has('e_link'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('e_link') }}</div>
                                                                                                                         @endif
                                                                                                                    </div>
                                                                                                                     <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Author Role:<span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select role" name="e_role">
                                                                                                                            <option value="#">Choose One</option>
                                                                                                                            <option value="Author" {{$pub->role=='Author'? 'selected': ''}}>Author</option>
                                                                                                                            <option value="Co-Author" {{$pub->role=='Co-Author'?'selected':''}}>Co-Author</option>
                                                                                                                        </select>
                                                                                                                        @if($errors->has('e_role'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('e_role') }}</div>
                                                                                                                         @endif
                                                                                                        
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* {{$pub->document}}</span></label>
                                                                                                                        <span class="sr-only">Choose Profile photo</span>
                                                                                                                            <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                            ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                            file:rounded-sm file:border-0
                                                                                                                            file:text-sm file:font-semibold
                                                                                                                            file:bg-primary file:text-white
                                                                                                                            hover:file:bg-primary focus-visible:outline-none doc" required value="{{$pub->document}}">
                                                                                                                            @if($errors->has('document'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                                            @endif
                                                                                                                        <div id="docEditError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                                            
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#publication_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                                </button>
                                                                                                                            
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                        
                                                                                                            </div>
                                                                                                        </form>  
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('Teaching.research.publication.destroy',$pub->id) }}" method="post">
                                                                                            
                                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Delete
                                                                                                    </span>
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </td>
                                                                            </tr> 
                                                                                @empty
                                                                                {{-- <tr>
                                                                                    <td>no records</td>
                                                                                </tr>      --}}
                                                                        @endforelse
                                                                    @endif
                                                                </tbody>
                                                            </table>  
                                                        </div>   
                                                </div>

                                            </div>
                                        </div>
                                        <!--end of publications-->

                                            <!-- Start Books And Chapters -->
                                        <div id="pills-with-brand-color-3" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-3">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Books And Chapters</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button id="books_chapter_btn" data-hs-overlay="#add_book_chapter" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Books And Chapters 
                                                    </button>
                                                    <div id="add_book_chapter" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Books And Chapters <span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_book_chapter">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                      @if(($errors->has('bc_title'))||($errors->has('bc_publisher_name'))||($errors->has('bc_edition'))||($errors->has('bc_doi'))||($errors->has('bc_date'))||($errors->has('bc_issue'))||($errors->has('bc_type'))||($errors->has('bc_chapter_title'))||($errors->has('bc_start_page_no'))||($errors->has('bc_end_page_no'))||($errors->has('bc_book_level')))
                                                                                <script>
                                                                                    // alert(1);
                                                                                    $(window).on('load', function() {
                                                                                        
                                                                                        $('#pills-with-brand-color-3').trigger('click');
                                                                                        //alert('conducted clicked');
                                                                                        $('#books_chapter_btn').trigger("click");

                                                                                    }); 
                                                                                </script>
                                                                        @endif
                                                                </div>
                                                                <form  action="{{route('Teaching.research.book_publication.store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                            
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="bc_title" class="ti-form-input" required placeholder="Title" id="bp_title">
                                                                                @if($errors->has('bc_title'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_title') }}</div>
                                                                                 @endif
                                                                                <div id="bp_titleError" class="error text-red-700"></div>        
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Book Level:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select" required name="bc_book_level" id="bp_book_level">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="National">National</option>
                                                                                    <option value="International">International</option>
                                                                                </select>
                                                                                 @if($errors->has('bc_book_level'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_book_level') }}</div>
                                                                                 @endif
                                                                                 <div id="bp_booklevelError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Publisher Name :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="bc_publisher_name" class="ti-form-input" required placeholder="Publisher Name" id="bp_publisher_name">
                                                                                 @if($errors->has('bc_publisher_name'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_publisher_name') }}</div>
                                                                                 @endif
                                                                                 <div id="bp_publishernameError" class="error text-red-700"></div>       
                                                                            </div>      
                                                                        </div>

                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Edition:</label>
                                                                                <input type="text" name="bc_edition" class="ti-form-input" required placeholder="Edition" id="bp_edition">
                                                                                 @if($errors->has('bc_edition'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_edition') }}</div>
                                                                                 @endif
                                                                                <div id="bp_editionError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">DOI Number:</label>
                                                                                <input type="text" name="bc_doi" class="ti-form-input" placeholder="DOI" id="bp_doi">
                                                                                 @if($errors->has('bc_doi'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_doi') }}</div>
                                                                                 @endif
                                                                                <div id="bp_doiError" class="error text-red-700"></div>
                                                                            </div>
                                                                                                                                                              
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Date:<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                                                            
                                                                                    <input type="date" name="bc_date" id="bp_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                             required placeholder="Choose date">
                                                                                 @if($errors->has('bc_date'))
                                                                                        <div class="text-red-700">{{ $errors->first('bc_date') }}</div>
                                                                                 @endif
                                                                                 <div id="bp_dateError" class="error text-red-700"></div>
                                                                            </div> 
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Issue:</label>
                                                                                <input type="text" name="bc_issue" class="ti-form-input" required placeholder="Issue" id="bp_issue">
                                                                                 @if($errors->has('bc_issue'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_issue') }}</div>
                                                                                 @endif
                                                                                 <div id="bp_issueError" class="error text-red-700"></div>
                                                                            </div>
                                                                           
                                                                           
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Type:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select book_chapter_type" name="bc_type" required id="bp_type">
                                                                                    <option value="#">Choose One</option>
                                                                                    <option value="Book">Book</option>
                                                                                    <option value="Chapter">Chapter</option>
                                                                                </select>
                                                                                 @if($errors->has('bc_type'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_type') }}</div>
                                                                                 @endif
                                                                                 <div id="bp_typeError" class="error text-red-700"></div>
                                                                            </div>
                                                                             <div class="max-w-sm space-y-3 pb-6 chapter_title">
                                                                                <label for="" class="ti-form-label font-bold">Chapter Title:</label>
                                                                                <input type="text" name="bc_chapter_title" class="ti-form-input"  placeholder="Chapter Title" id="bp_chapter_title">
                                                                                @if($errors->has('bc_chapter_title'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_chapter_title') }}</div>
                                                                                @endif
                                                                                <div id="bp_chaptertitleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            
                                                                            
                                                                        </div> 
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6 start_page_no">
                                                                                <label for="" class="ti-form-label font-bold">Start Page No:</label>
                                                                                <input type="number" min="0" step="1" name="bc_start_page_no" class="ti-form-input"  placeholder="Start Page No" id="bp_start_page_no">
                                                                                  @if($errors->has('bc_start_page_no'))
                                                                                            <div class="text-red-700">{{ $errors->first('bc_start_page_no') }}</div>
                                                                                 @endif
                                                                                <div id="bp_startpagenoError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6 end_page_no">
                                                                                <label for="" class="ti-form-label font-bold">End Page No:</label>
                                                                                <input type="number" min="0" step="1" name="bc_end_page_no" class="ti-form-input"  placeholder="End Page No" id="bp_end_page_no">
                                                                                 @if($errors->has('bc_end_page_no'))
                                                                                    <div class="text-red-700">{{ $errors->first('bc_end_page_no') }}</div>
                                                                                 @endif
                                                                                 <div id="bp_endpagenoError" class="error text-red-700"></div>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* </span></label>
                                                                                    <span class="sr-only">Choose Profile photo</span>
                                                                                        <input type="file" accept="application/pdf" name="document" id="book_chap_document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                        ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                        file:rounded-sm file:border-0
                                                                                        file:text-sm file:font-semibold
                                                                                        file:bg-primary file:text-white
                                                                                        hover:file:bg-primary focus-visible:outline-none doc" required value="">
                                                                                        @if($errors->has('document'))
                                                                                            <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                        @endif
                                                                                    <div id="bookchap_documentError" class="error text-red-700"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>  
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_book_chapter">
                                                                            Close
                                                                        </button>

                                                                        <input type="submit" id="book_chapter_add_btn" class="ti-btn bg-primary text-white hover:bg-primary focus:ring-primary dark:focus:ring-offset-white/10" id="add" value="Add"/>
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="book_chapter_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S NO</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">title</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Book Level</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Publisher Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Edition</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">DOI Number</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Issue</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Type</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Chapter Title</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Start Page No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">End Page No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Document</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Action</th>
                                                                </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @if($staff->book_publications!=null)
                                                                    @forelse($staff->book_publications as $book)
                                                                        <tr class="">

                                                                            <td><span>{{$i++}}</span></td>
                                                                            <td><span>{{$book->egov_id}}</span></td>
                                                                            <td><span>{{$book->title}}</span></td>
                                                                            <td><span>{{$book->book_level}}</span></td>
                                                                            <td><span>{{$book->publisher_name}}</span></td>
                                                                            <td><span>{{$book->edition}}</span></td>
                                                                            <td><span>{{$book->doi}}</span></td>
                                                                            <td><span>{{\Carbon\Carbon::parse($book->date)->format('d-M-Y') }}</span></td>
                                                                            <td><span>{{$book->issue}}</span></td>
                                                                            <td><span>{{$book->type}}</span></td>
                                                                            <td><span>{{$book->chapter_title}}</span></td>
                                                                            <td><span>{{$book->start_page_no}}</span></td>
                                                                            <td><span>{{$book->end_page_no}}</span></td>
                                                                            {{-- <td><span>{{$book->document}}</span></td> --}}
                                                                            <td><span><a href={{asset('Uploads/Research/Book_Chapters/'.$book->document)}} class='font-medium text-blue-600 dark:text-blue-500 hover:underline' target="_blank">{{$book->document}}</a></span></td>
                                                                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#book_edit_modal{{$i}}"  id="btn{{$i}}" btn-val={{$i}}
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary book_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>
                                                            
                                                        
                                                                                            <div id="book_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Books And Chapters
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                data-hs-overlay="#book_edit_modal{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                    fill="currentColor" />
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                             @if(($errors->has('ebc_title'))||($errors->has('ebc_publisher_name'))||($errors->has('ebc_edition'))||($errors->has('ebc_doi'))||($errors->has('ebc_date'))||($errors->has('ebc_issue'))||($errors->has('ebc_type'))||($errors->has('ebc_chapter_title'))||($errors->has('ebc_start_page_no'))||($errors->has('ebc_end_page_no'))||($errors->has('ebc_book_level')))
                                                                                                                <script>
                                                                                                                     window.onload=function(){
                                                                                                                    //alert('123');
                                                                                                                    //alert(899);
                                                                                                                    // document.getElementById('btn'+{{old('modal_no')}}).click();

                                                                                                                };   
                                                                                                            
                                                                                                                </script>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                        <form  action="{{route('Teaching.research.book_publication.update',$book->id)}}" method="post" enctype="multipart/form-data">
                                                                                                            @csrf
                                                                                                            @method('patch')
                                                                                                           <div class="ti-modal-body">
                                                                                                             <input type='hidden' name='book_edit_modal' class='book_edit_modal_no' value={{old('book_edit_modal_no')}}/>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="ebc_title" class="ti-form-input" required placeholder="Title" value="{{$book->title}}">
                                                                                                                         @if($errors->has('ebc_title'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_title') }}</div>
                                                                                                                        @endif
                                                                                                                                
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Book Level:<span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select edit_bp_book_level" required name="ebc_book_level">
                                                                                                                            <option value="#">Choose One</option>
                                                                                                                            <option value="National" {{$book->book_level=='National'? 'selected':''}}>National</option>
                                                                                                                            <option value="International" {{$book->book_level=='International'? 'selected':''}}>International</option>
                                                                                                                        </select>
                                                                                                                        @if($errors->has('ebcbook_level'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebcbook_level') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="bp_booklevelError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Publisher Name :<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="ebc_publisher_name" class="ti-form-input" required placeholder="Publisher Name" value="{{$book->publisher_name}}">
                                                                                                                         @if($errors->has('ebc_publisher_name'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_publisher_name') }}</div>
                                                                                                                        @endif
                                                                                                                                
                                                                                                                    </div>      
                                                                                                                </div>

                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Edition:</label>
                                                                                                                        <input type="text" name="ebc_edition" class="ti-form-input" required placeholder="Edition" value="{{$book->edition}}">
                                                                                                                         @if($errors->has('ebc_edition'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_edition') }}</div>
                                                                                                                        @endif
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">DOI:</label>
                                                                                                                        <input type="text" name="ebc_doi" class="ti-form-input" required placeholder="DOI" value="{{$book->doi}}">
                                                                                                                           @if($errors->has('ebc_doi'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_doi') }}</div>
                                                                                                                        @endif
                                                                                                                    </div>
                                                                                                                                                                                                    
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Date:<span class="text-red-500">*</span></label>
                                                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                                                            </div>
                                                                                                                    
                                                                                                                            <input type="date" name="ebc_date"
                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                     required placeholder="Choose date" value="{{$book->date}}">
                                                                                                                        @if($errors->has('ebc_date'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_date') }}</div>
                                                                                                                        @endif
                                                                                                                    </div> 
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Issue:</label>
                                                                                                                        <input type="text" name="ebc_issue" class="ti-form-input" required placeholder="Issue" value="{{$book->issue}}">
                                                                                                                         @if($errors->has('ebc_issue'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_issue') }}</div>
                                                                                                                        @endif
                                                                                                                    </div>
                                                                                                                
                                                                                                                
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Type:<span class="text-red-500">*</span></label>
                                                                                                                        <select class="ti-form-select book_chapter_type" name="ebc_type">
                                                                                                                            <option value="#">Choose One</option>
                                                                                                                            <option value="Book" {{$book->type=='Book'?'selected': ''}}>Book</option>
                                                                                                                            <option value="Chapter" {{$book->type=='Chapter'?'selected':''}}>Chapter</option>
                                                                                                                         @if($errors->has('ebc_type'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_type') }}</div>
                                                                                                                        @endif
                                                                                                                        </select>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6 chapter_title">
                                                                                                                        <label for="" class="ti-form-label font-bold">Chapter Title:</label>
                                                                                                                        <input type="text" name="ebc_chapter_title" class="ti-form-input"  placeholder="Chapter Title" value="{{$book->chapter_title}}">
                                                                                                                          @if($errors->has('ebc_chapter_title'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_chapter_title') }}</div>
                                                                                                                        @endif
                                                                                                                    </div>
                                                                                                                    
                                                                                                                    
                                                                                                                </div> 
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6 start_page_no">
                                                                                                                        <label for="" class="ti-form-label font-bold">Start Page No:</label>
                                                                                                                        <input type="number" min="0" step="1" name="ebc_start_page_no" class="ti-form-input"  placeholder="Start Page No" value="{{$book->start_page_no}}">
                                                                                                                        @if($errors->has('ebc_start_page_no'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_start_page_no') }}</div>
                                                                                                                        @endif

                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6 end_page_no">
                                                                                                                        <label for="" class="ti-form-label font-bold">End Page No:</label>
                                                                                                                        <input type="number" min="0" step="1" name="ebc_end_page_no" class="ti-form-input"  placeholder="End Page No" value="{{$book->end_page_no}}">
                                                                                                                        @if($errors->has('ebc_end_page_no'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('ebc_end_page_no') }}</div>
                                                                                                                        @endif
                                                                                                                    </div> 
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <div class="max-w-sm space-y-3 pb-6">
                                                                                                                            <label for="" class="ti-form-label pt-4 font-bold">Document:<span class="text-red-500">* {{$book->document}}</span></label>
                                                                                                                            <span class="sr-only">Choose Profile photo</span>
                                                                                                                                <input type="file" accept="application/pdf" name="document" class="block w-full text-sm text-gray-500 dark:text-white/70 focus:outline-0
                                                                                                                                ltr:file:mr-4 rtl:file:ml-4 file:py-2 file:px-4
                                                                                                                                file:rounded-sm file:border-0
                                                                                                                                file:text-sm file:font-semibold
                                                                                                                                file:bg-primary file:text-white
                                                                                                                                hover:file:bg-primary focus-visible:outline-none edit_book_chap_document doc" required value="{{$book->document}}">
                                                                                                                                @if($errors->has('document'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('document') }}</div>
                                                                                                                                @endif
                                                                                                                            <div id="book_chap_documentError" class="error text-red-700"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>  
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#book_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                                </button>
                                                                                                                                
                                                                                                                <input type="submit" class="ti-btn bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                            
                                                                                                            </div>
                                                                                                        </form>  
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('Teaching.research.book_publication.destroy',$book->id) }}" method="post">
                                                                                            
                                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                @method('delete')
                                                                                                @csrf
                                                                                                <span
                                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                    role="tooltip">
                                                                                                    Delete
                                                                                                </span>
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                            </td>  
                                                                        </tr> 
                                                                            @empty
                                                                                {{-- <tr>
                                                                                <td colspan="15">no records</td>
                                                                                </tr>      --}}
                                                                    @endforelse
                                                                @endif
                                                            </tbody>
                                                            
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>

                                        </div>
                                    
                            
                                        <!-- End Books And Chapters -->
                                                                                                        
                                        <div id="pills-with-brand-color-4" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-4">
                                           <!-- Start of Funding Projects -->
                                           <div class="box border-0 shadow-none mb-0">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Fund Details</h5>
                                                    </div>
                                                    <button id="fund_btn" data-hs-overlay="#add_fund" class="hs-dropdown-toggle ti-btn ti-btn-primary " >
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Fund 
                                                    </button>
                                                                                            
                                                    <div id="add_fund" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Add New Fund<span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#add_fund">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                            </svg>
                                                                    </button>
                                                                    @if(($errors->has('f_proposal_title'))||($errors->has('f_role'))||($errors->has('f_amount'))||($errors->has('f_proposal_status'))||($errors->has('f_application_date'))||($errors->has('f_fund_received'))||($errors->has('f_project_status'))||($errors->has('f_completion_year'))||($errors->has('f_type')))
                                                                        <script>
                                                                            //alert(1);
                                                                            $(window).on('load', function() {
                                                                                //if($('#horizontal-alignment-item-1').parent().find('.active')){
                                                                                    //alert('attended');
                                                                                    
                                                                                    //  $('#horizontal-alignment-item-1').trigger('click')
                                                                                    $('#fund_btn').trigger("click");

                                                                                // }else{
                                                                                //     //alert('Not Active');
                                                                                //     $('#horizontal-alignment-item-1').parent().find(':first').trigger('click');
                                                                                //     $('#activity_attended_btn').trigger("click");
                                                                                // }
                                                                                //$('#activity_attended_btn').trigger( "click" );
                                                                                    
                                                                            });      
                                                                        </script>
                                                                    @endif
                                                                </div>
                                                                <form id="fund_btn" action="{{route('Teaching.research.funded_project.store')}}" method="post">
                                                                    @csrf                                     
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Title :<span class="text-red-500">*</span> </label>
                                                                                <input type="text" name="f_proposal_title" class="ti-form-input" required placeholder="Proposal Title" id="f_proposaltitle">
                                                                                    @if($errors->has('f_proposal_title'))
                                                                                        <div class="text-red-700">{{ $errors->first('f_proposal_title') }}</div>
                                                                                    @endif
                                                                                    <div id="f_proposaltitleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Role: <span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select role" name="f_role" required id="f_role">
                                                                                    <option value="#">Choose Role</option>
                                                                                    <option value="Principle Investigator">Principle Investigator</option>
                                                                                    <option value="Co-Investigator">Co-Investigator</option>
                                                                                    <option value="Architect">Architect</option>
                                                                                                            
                                                                                </select>
                                                                                @if($errors->has('f_role'))
                                                                                    <div class="text-red-700">{{ $errors->first('f_role') }}</div>
                                                                                @endif
                                                                                <div id="f_roleError" class="error text-red-700"></div>                                                                                                                                                                               
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Type: <span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select role" name="f_type" required id="f_type">
                                                                                    <option value="#">Choose Type</option>
                                                                                    <option value="Govt-funded">Govt Funded</option>
                                                                                    <option value="Private funded">Private Funded</option>
                                                                                </select>
                                                                                @if($errors->has('f_type'))
                                                                                    <div class="text-red-700">{{ $errors->first('f_type') }}</div>
                                                                                @endif
                                                                                <div id="f_typeError" class="error text-red-700"></div>                                                                                                                                                                               
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Amount: </label>
                                                                                    <input type="number" min="0" name="f_amount" class="ti-form-input" placeholder="Amount" id="f_amount">
                                                                                        @if($errors->has('f_amount'))
                                                                                        <div class="text-red-700">{{ $errors->first('f_amount') }}</div>
                                                                                    @endif
                                                                                    <div id="f_amountError" class="error text-red-700"></div>                                                                              
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Status:<span class="text-red-500">*</span> </label>
                                                                                <select class="ti-form-select proposal_status" name="f_proposal_status" required id="f_proposal_status">
                                                                                        <option value="#">Choose Proposal Status</option>
                                                                                        <option value="Accepted">Accepted</option>
                                                                                        <option value="Pending">Pending</option>
                                                                                        <option value="Rejected">Rejected</option>
                                                                                </select> 
                                                                                @if($errors->has('f_proposal_status'))
                                                                                    <div class="text-red-700">{{ $errors->first('f_proposal_status') }}</div>
                                                                                @endif
                                                                                <div id="f_proposal_statusError" class="error text-red-700"></div>                             
                                                                            </div>                                                                        
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Application Date :<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                </div>                                                 
                                                                                <input type="date" name="f_application_date" id="f_application_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                        required placeholder="Choose date" >
                                                                                    @if($errors->has('f_application_date'))
                                                                                            <div class="text-red-700">{{ $errors->first('f_application_date') }}</div>
                                                                                    @endif
                                                                                    <div id="f_application_dateError" class="error text-red-700"></div>   
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Fund Received:</label>
                                                                                <input type="number" min="0" name="f_fund_received" class="ti-form-input" placeholder="Fund Received" id="f_fund_received">
                                                                                    @if($errors->has('f_fund_received'))
                                                                                    <div class="text-red-700">{{ $errors->first('f_fund_received') }}</div>
                                                                                @endif 
                                                                                <div id="f_fundreceivedError" class="error text-red-700"></div> 
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Project status:<span class="text-red-500">*</span></label>
                                                                                <select class="ti-form-select project_status" name="f_project_status" required id="f_project_status">
                                                                                    <option value="#">select Project Status</option>
                                                                                    <option value="On-Going">On Going</option>
                                                                                    <option value="Completed">Completed</option>
                                                                                </select> 
                                                                                @if($errors->has('f_project_status'))
                                                                                    <div class="text-red-700">{{ $errors->first('f_project_status') }}</div>
                                                                                @endif
                                                                                <div id="f_project_statusError" class="error text-red-700"></div>  
                                                                            </div>
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Completion Year :</label>
                                                                                <input type="number" min="0" step="1" name="f_completion_year" class="ti-form-input" required placeholder="Completion Year" id="f_completion_year">
                                                                                @if($errors->has('f_completion_year'))
                                                                                    <div class="text-red-700">{{ $errors->first('f_completion_year') }}</div>
                                                                                @endif
                                                                                <div id="f_completion_yearError" class="error text-red-700"></div>  
                                                                            </div>
                                                                        </div>                                                                                     
                                                                    </div>    
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_fund">
                                                                            Close
                                                                        </button>                                 
                                                                        <input type="submit" id="funding_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                                                
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                                        
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="fund_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Proposal Title</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Type</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Amount</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Proposal Status</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Application Date</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Fund Received</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Project Status</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Completion Year</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Action</th>  
                                                                </tr>
                                                            </thead>
                                                            @php
                                                            $i=1;
                                                            @endphp
                                                                <tbody class="">
                                                                    @if($staff->funded_project !=null)
                                                                        @forelse($staff->funded_project as $fund)
                                                                            <tr class="">
                                                                            
                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$fund->egov_id}}</span></td>
                                                                                <td><span>{{$fund->proposal_title}}</span></td>
                                                                                <td><span>{{$fund->role}}</span></td>
                                                                                 <td><span>{{$fund->type}}</span></td>
                                                                                <td><span>{{$fund->amount}}</span></td>
                                                                                <td><span>{{$fund->proposal_status}}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($fund->application_date)->format('d-M-Y') }}</span></td>                                    
                                                                                <td><span>{{$fund->fund_received}}</span></td>
                                                                                <td><span>{{$fund->project_status}}</span></td>
                                                                                <td><span>{{($fund->completion_year)}}</span></td>                                    
                                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                                        <button data-hs-overlay="#fund_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary fund_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                <span
                                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                role="tooltip">
                                                                                                Edit
                                                                                                </span>
                                                                                        </button>
                                                                                                        
                                                                                                    
                                                                                        <div id="fund_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                <div class="ti-modal-content">
                                                                                                    <div class="ti-modal-header">
                                                                                                        <h3 class="ti-modal-title">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                            Edit Conference Attended Details
                                                                                                        </h3>
                                                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                data-hs-overlay="#fund_edit_modal{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                <path
                                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                    fill="currentColor" />
                                                                                                                </svg>
                                                                                                        </button>
                                                                                                         @if(($errors->has('edit_title'))||($errors->has('edit_organizer'))||($errors->has('edit_role'))||($errors->has('edit_level'))||($errors->has('edit_category'))||($errors->has('edit_sponsored'))||($errors->has('edit_sponsored_by'))||($errors->has('edit_from_date'))||($errors->has('edit_to_date'))||($errors->has('edit_no_of_days')))
                                                                                                                <script>
                                                                                                                    //alert(387);
                                                                                                                        window.onload=function(){
                                                                                                                        //alert('123');
                                                                                                                        //alert("Validation errors");

                                                                                                                    // document.getElementById('btn'+{{old('modal_no')}}).click();
                                                                                                                    };   
                                                                                                                
                                                                                                                </script>
                                                                                                        @endif
                                                                                                        
                  
                     
                                                                                                    </div>
                                                                                                    <form  action="{{route('Teaching.research.funded_project.update',$fund->id)}}" method="post">
                                                                                                        @csrf
                                                                                                        @method('patch')
                                                                                                        <div class="ti-modal-body">
                                                                                                        <input type='hidden' name='modal_no' class='modal_no' value={{old('modal_no')}}/>
                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Title : <span class="text-red-500">*</span></label>
                                                                                                                    <input type="text" name="fe_proposal_title" class="ti-form-input" required placeholder=" Proposal Title" value="{{$fund->proposal_title}}">
                                                                                                                    @if($errors->has('fe_proposal_title'))
                                                                                                                         <div class="text-red-700">{{ $errors->first('fe_proposal_title') }}</div>
                                                                                                                    @endif
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Role: <span class="text-red-500">*</span></label>
                                                                                                                    <select class="ti-form-select role" name="fe_role" required>
                                                                                                                        <option value="#">Choose Role</option>
                                                                                                                        <option value="Principle Investigator" {{$fund->role=='Principle Investigator'? 'selected': ''}}>Principle Investigator</option>
                                                                                                                        <option value="Co-Investigator"{{$fund->role=='Co-Investigator'? 'selected': ''}}>Co-Investigator</option>
                                                                                                                        <option value="Architect"{{$fund->role=='Architect'? 'selected': ''}}>Architect</option>
                                                                                                                        
                                                                                                                    </select> 
                                                                                                                     @if($errors->has('fe_role'))
                                                                                                                         <div class="text-red-700">{{ $errors->first('fe_role') }}</div>
                                                                                                                    @endif                                                                                                                                                                                   
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Type: <span class="text-red-500">*</span></label>
                                                                                                                    <select class="ti-form-select role" name="fe_type" required>
                                                                                                                        <option value="#">Choose type</option>
                                                                                                                        <option value="Govt-funded" {{$fund->type=='Govt-funded'? 'selected': ''}}>Govt Funded</option>
                                                                                                                        <option value="Private Funded"{{$fund->type=='Private Funded'? 'selected': ''}}>Private Funded</option>
                                                                                                                       
                                                                                                                    </select> 
                                                                                                                     @if($errors->has('fe_type'))
                                                                                                                         <div class="text-red-700">{{ $errors->first('fe_type') }}</div>
                                                                                                                    @endif                                                                                                                                                                                   
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Amount: </label>
                                                                                                                    <input type="number" min="0" name="fe_amount" class="ti-form-input" required placeholder="Amount" value="{{$fund->amount}}">
                                                                                                                     @if($errors->has('fe_amount'))
                                                                                                                         <div class="text-red-700">{{ $errors->first('fe_amount') }}</div>
                                                                                                                    @endif 
                                                                                                                                                                                    
                                                                                                                </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Proposal Status:<span class="text-red-500">*</span> </label>
                                                                                                                    <select class="ti-form-select proposal_status" name="fe_proposal_status" required>
                                                                                                                        <option value="#">Choose Proposal Status</option>
                                                                                                                        <option value="Accepted"{{$fund->proposal_status=='Accepted'? 'selected': ''}}>Accepted</option>
                                                                                                                        <option value="Pending"{{$fund->proposal_status=='Pending'? 'selected': ''}}>Pending</option>
                                                                                                                        <option value="Rejected"{{$fund->proposal_status=='Rejected'? 'selected': ''}}>Rejected</option>
                                                                                                                    </select>
                                                                                                                     @if($errors->has('fe_proposal_status'))
                                                                                                                         <div class="text-red-700">{{ $errors->first('fe_proposal_status') }}</div>
                                                                                                                    @endif   
                                                                                                                                                                                    
                                                                                                                </div>                                                                        
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label font-bold">Application Date :<span class="text-red-500">*</span></label>
                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                class="ri ri-calendar-line"></i></span>
                                                                                                                        </div>
                                                                                                                                                
                                                                                                                            <input type="date" name="fe_application_date"
                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                     value={{$fund->application_date}}  required placeholder="Choose date" >
                                                                                                                                      @if($errors->has('fe_application_date'))
                                                                                                                                            <div class="text-red-700">{{ $errors->first('fe_application_date') }}</div>
                                                                                                                                     @endif  
                                                                                                                </div>
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label font-bold">Fund Received:</label>
                                                                                                                    <input type="number" min="0" name="fe_fund_received" class="ti-form-input" placeholder="Fund Received" value="{{$fund->fund_received}}">
                                                                                                                    @if($errors->has('fe_fund_received'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('fe_fund_received') }}</div>
                                                                                                                     @endif 
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label font-bold">Project status:<span class="text-red-500">*</span></label>
                                                                                                                     <select class="ti-form-select project_status" name="fe_project_status" required>
                                                                                                                        <option value="#">select Project Status</option>
                                                                                                                        <option value="On-Going"{{$fund->project_status=='On-Going'? 'selected': ''}}>On Going</option>
                                                                                                                        <option value="Completed"{{$fund->project_status=='Completed'? 'selected': ''}}>Completed</option>
                                                                                                                    </select>
                                                                                                                    @if($errors->has('fe_project_status'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('fe_project_status') }}</div>
                                                                                                                     @endif   
                                                                                                                </div>
                                                                                                                <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                    <label for="" class="ti-form-label font-bold">Completion Year :</label>
                                                                                                                    <input type="number" name="fe_completion_year" class="ti-form-input" required placeholder="Completion Year" value="{{$fund->completion_year}}">
                                                                                                                     @if($errors->has('fe_completion_year'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('fe_completion_year') }}</div>
                                                                                                                     @endif
                                                                                                                </div>
                                                                                                            </div>
                                                                                                                                                                
                                                                                                                                                                            
                                                                                                        </div>  
                                                                                                        <div class="ti-modal-footer">
                                                                                                            <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#fund_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                            </button>
                                                                                                                                                            
                                                                                                            <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                                                            
                                                                                                        </div>
                                                                                                    </form>  
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                                        <form action="{{ route('Teaching.research.funded_project.destroy',$fund->id) }}" method="post">
                                                                                                                                
                                                                                            <button onclick="return confirm('Are you Sure')"
                                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <span
                                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                    role="tooltip">
                                                                                                    Delete
                                                                                                    </span>
                                                                                            </button>
                                                                                        </form>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            @empty
                                                                            {{-- <tr>
                                                                                <td>no records</td>
                                                                            </tr>       --}}
                                                                        @endforelse
                                                                    @endif
                                                                </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                           <!--End of Funduing Projects -->

                                           <!--Start of Consultancy Projects -->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Consultancy History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button  id="consultancy_btn" data-hs-overlay="#add_consultancy" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Add Consultancy
                                                    </button>
                                                    <div id="add_consultancy" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Add New Consultancy <span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#add_consultancy">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                    </button>
                                                                        @if(($errors->has('c_consultancy_title'))||($errors->has('c_agency'))||($errors->has('c_from_date'))||($errors->has('c_to_date'))||($errors->has('c_amount')))
                                                                            <script>
                                                                                //alert(1);
                                                                                $(window).on('load', function() {
                                                                                    //if($('#horizontal-alignment-item-1').parent().find('.active')){
                                                                                        //alert('attended');
                                                                                        
                                                                                        //$('#horizontal-alignment-item-1').trigger('click')
                                                                                        $('#consultancy_btn').trigger("click");

                                                                                    // }else{
                                                                                    //     //alert('Not Active');
                                                                                    //     $('#horizontal-alignment-item-1').parent().find(':first').trigger('click');
                                                                                    //     $('#activity_attended_btn').trigger("click");
                                                                                    // }
                                                                                    //$('#activity_attended_btn').trigger( "click" );
                                                                                        
                                                                                });      
                                                                            </script>
                                                                        @endif
                                                                        
                                                                </div>
                                                                <form  action="{{route('Teaching.research.consultancy.store')}}" method="post">
                                                                        @csrf
                                                                    
                                                                        <div class="ti-modal-body">
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Consultacy Title :<span class="text-red-500">*</span></label>
                                                                                    <input type="text" name="c_consultancy_title" class="ti-form-input" required placeholder="Consultacy Title" id="consult_consultancy_title">
                                                                                     @if($errors->has('c_consultancy_title'))
                                                                                            <div class="text-red-700">{{ $errors->first('c_consultancy_title')}}</div>
                                                                                    @endif
                                                                                    <div id="consult_consultancy_titleError" class="error text-red-700"></div>
                                                                                </div>
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label font-bold">Agency :</label>
                                                                                    <input type="text" name="c_agency" class="ti-form-input" required placeholder="Agency" id="consult_agency">
                                                                                      @if($errors->has('c_agency'))
                                                                                            <div class="text-red-700">{{ $errors->first('c_agency')}}</div>
                                                                                    @endif

                                                                                    <div id="consult_agencyError" class="error text-red-700"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                               <div class="flex max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label font-bold">From Date:<span class="text-red-500">*</span></label>
                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                        </div>                    
                                                                                        <input type="date" name="c_from_date" id="consult_from_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                            required placeholder="Choose date">
                                                                                              @if($errors->has('c_from_date'))
                                                                                                    <div class="text-red-700">{{ $errors->first('c_from_date')}}</div>
                                                                                             @endif
                                                                                            <div id="consult_from_dateError" class="error text-red-700"></div>
                                                                                </div> 
                                                                                <div class="flex max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label font-bold">To Date:<span class="text-red-500">*</span></label>
                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                        </div>                    
                                                                                        <input type="date" name="c_to_date" id="consult_to_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                             required placeholder="Choose date">
                                                                                               @if($errors->has('c_to_date'))
                                                                                                    <div class="text-red-700">{{ $errors->first('c_to_date')}}</div>
                                                                                             @endif

                                                                                             <div id="consult_to_dateError" class="error text-red-700"></div>
                                                                                </div>     

                                                                               
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="max-w-sm space-y-3 pb-6">
                                                                                    <label for="" class="ti-form-label font-bold">Amount:</label>
                                                                                    <input type="number" min="0" name="c_amount" class="ti-form-input" placeholder="Amount" id="consult_amount">
                                                                                     @if($errors->has('c_amount'))
                                                                                                    <div class="text-red-700">{{ $errors->first('c_amount')}}</div>
                                                                                     @endif
                                                                                    <div id="consult_amountError" class="error text-red-700"></div>
                                                                                    
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>    
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_consultancy">
                                                                            Close
                                                                            </button>
                                                                                
                                                                            <input type="submit" id="consultancy_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                            
                                                                        </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="consultancy_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold ">Consultancy Title</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Agency</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">From Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Amount</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Action</th>
                                                            </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @if($staff->consultancy !=null)
                                                                        @forelse($staff->consultancy as $consult)

                                                                        <tr class="">

                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$consult->egov_id}}</span></td>
                                                                                <td><span>{{$consult->consultancy_title}}</span></td>
                                                                                <td><span>{{$consult->agency}}</span></td>
                                                                                <td><span>{{$consult->from_date}}</span></td>
                                                                                <td><span>{{$consult->to_date}}</span></td>
                                                                                <td><span>{{$consult->amount}}</span></td>
                                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <button data-hs-overlay="#consultancy_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}}
                                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary consultancy_edit_modal_click">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            Edit
                                                                                        </span>
                                                                                    </button>
                                                        
                                                    
                                                                                        <div id="consultancy_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                        Edit Consultancy
                                                                                                    </h3>
                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                    data-hs-overlay="#consultancy_edit_modal{{$i}}">
                                                                                                    <span class="sr-only">Close</span>
                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                        fill="currentColor" />
                                                                                                    </svg>
                                                                                                    </button>
                                                                                                        @if(($errors->has('ce_consultancy_title'))||($errors->has('ce_agency'))||($errors->has('ce_from_date'))||($errors->has('ce_to_date'))||($errors->has('ce_amount')))
                                                                                                                <script>
                                                                                                                    //alert(387);
                                                                                                                        window.onload=function(){
                                                                                                                        //alert('123');
                                                                                                                        //alert("Validation errors");

                                                                                                                    // document.getElementById('btn'+{{old('modal_no')}}).click();
                                                                                                                    };   
                                                                                                                
                                                                                                                </script>
                                                                                                         @endif
                                                                                                </div>
                                                                                                <form  action="{{route('Teaching.research.consultancy.update',$consult->id)}}" method="post">
                                                                                                    @csrf
                                                                                                    @method('patch')
                                                                                                    <div class="ti-modal-body">
                                                                                                    <input type='hidden' name='consultancy_modal_no' class='consultancy_modal_no' value={{old('consultancy_modal_no')}}/>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="with-corner-hint" class="ti-form-label">Consultancy Title: <span class="text-red-500">*</span></label>
                                                                                                                <input type="text" name="ce_consultancy_title" class="ti-form-input" required placeholder="Faculty Name" value="{{$consult->consultancy_title}}">
                                                                                                                  @if($errors->has('ce_consultancy_title'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('ce_consultancy_title') }}</div>
                                                                                                                @endif
                                                                                                        
                                                                                                            </div>
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label">Agency :</label>
                                                                                                                <input type="text" name="ce_agency" class="ti-form-input" placeholder="Agency" value="{{$consult->agency}}">
                                                                                                                 @if($errors->has('ce_agency'))
                                                                                                                        <div class="text-red-700">{{ $errors->first('ce_agency') }}</div>
                                                                                                                @endif
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">From Date:</label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>                    
                                                                                                                    <input type="date" name="ce_from_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                         required placeholder="Choose date" value="{{$consult->from_date}}">
                                                                                                                           @if($errors->has('ce_from_date'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_from_date') }}</div>
                                                                                                                         @endif
                                                                                                            </div> 
                                                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">To Date:</label>
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                                                    </div>                    
                                                                                                                    <input type="date" name="ce_to_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                         required placeholder="Choose date" value="{{$consult->to_date}}">
                                                                                                                         @if($errors->has('ce_to_date'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_to_date') }}</div>
                                                                                                                         @endif
                                                                                                            </div> 

                                                                                                           
                                                                                                        </div>
                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                                                <label for="" class="ti-form-label font-bold">Amount:</label>
                                                                                                                <input type="number" min="0" name="ce_amount" class="ti-form-input" required placeholder="Amount" value="{{$consult->amount}}">
                                                                                                                 @if($errors->has('ce_amount'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_amount') }}</div>
                                                                                                                 @endif
                                                                                                                
                                                                                                            </div>
                                                                                                            
                                                                                                        </div>
                                                                                                    </div>  
                                                                                                    <div class="ti-modal-footer">
                                                                                                        <button type="button"
                                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                        data-hs-overlay="#consultancy_edit_modal{{$i}}">
                                                                                                        Close
                                                                                                        </button>
                                                                                                        
                                                                                                        <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                        
                                                                                                        </div>
                                                                                                    </form>  
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                <form action="{{route('Teaching.research.consultancy.conducted.destroy',$consult->id) }}" method="post">
                                                                                
                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                    @method('delete')
                                                                                    @csrf
                                                                                    <span
                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                        role="tooltip">
                                                                                        Delete
                                                                                    </span>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                            </td>
                                                                        </tr> 
                                                                        @empty
                                                                            {{-- <tr>
                                                                            <td>no records</td>
                                                                            </tr>      --}}
                                                                        @endforelse
                                                                @endif
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>

                                           <!--End of Consultancy Projects -->
                                    
                                        </div>
                                        <div id="pills-with-brand-color-5" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-4">
                                          
                                           <!--Start of Patents -->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Patents History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button id="patents_btn"data-hs-overlay="#add_patents" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Patents
                                                    </button>
                                                    <div id="add_patents" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add Patents<span class="text-red-400">
                                                                    </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#add_patents">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                            @if(($errors->has('p_appl_no'))||($errors->has('p_appl_date'))||($errors->has('p_title'))||($errors->has('p_status'))||($errors->has('p_patent_no'))||($errors->has('p_publication_no'))||($errors->has('p_publication_date')))
                                                                                    <script>
                                                                                        //alert(1);
                                                                                        $(window).on('load', function() {
                                                                                            //if($('#horizontal-alignment-item-1').parent().find('.active')){
                                                                                                //alert('attended');
                                                                                                
                                                                                               // $('#horizontal-alignment-item-1').trigger('click')
                                                                                               $('#patents_btn').trigger("click");

                                                                                            // }else{
                                                                                            //     //alert('Not Active');
                                                                                            //     $('#horizontal-alignment-item-1').parent().find(':first').trigger('click');
                                                                                            //     $('#activity_attended_btn').trigger("click");
                                                                                            // }
                                                                                            //$('#activity_attended_btn').trigger( "click" );
                                                                                                
                                                                                        });      
                                                                                    </script>
                                                                                @endif
                                                                </div>
                                                                <form  action="{{route('Teaching.research.patent.store')}}" method="post">
                                                                    @csrf 
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold"> Application No : <span class="text-red-500">*</span></label>
                                                                                <input type="text" name="p_appl_no" class="ti-form-input" required placeholder=" Application No" id="pt_appl_no">
                                                                                 @if($errors->has('p_appl_no'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_appl_no')}}</div>
                                                                                @endif
                                                                                <div id="pt_appl_noError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Application  Date :<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                        class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                                    
                                                                                <input type="text" name="p_appl_date" id="pt_appl_date"
                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                    required placeholder="Choose date">
                                                                                    @if($errors->has('p_appl_date'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_appl_date')}}</div>
                                                                                @endif
                                                                                <div id="pt_appl_dateError" class="error text-red-700"></div>
                                                                            </div>   
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold"> Title:<span class="text-red-500">*</span> </label>
                                                                                <input type="text" name="p_title" class="ti-form-input" required placeholder="Title" id="pt_title">
                                                                                     @if($errors->has('p_title'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_title')}}</div>
                                                                                    @endif
                                                                                <div id="pt_titleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Status:<span class="text-red-500">*</span></label>
                                                                                    <select class="ti-form-select status" name="p_status" id="pt_status">
                                                                                        <option value="#">Choose Status</option>
                                                                                        <option value="Granted">Granted</option>
                                                                                        <option value="Pending">Pending</option>
                                                                                        <option value="Awarded">Awarded</option>
                                                                                        <option value="Rejected">Rejected</option>
                                                                                    </select>
                                                                                    @if($errors->has('p_status'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_status')}}</div>
                                                                                    @endif
                                                                                    <div id="pt_statusError" class="error text-red-700"></div>
                                                                            </div>
                                                                                                                                                                    
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Patent No:<span class="text-red-500">*</span></label>
                                                                                <input type="number" min="0" step="1" name="p_patent_no" class="ti-form-input" required placeholder="Patent No" id="pt_patent_no">
                                                                                  @if($errors->has('p_patent_no'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_patent_no')}}</div>
                                                                                    @endif
                                                                                <div id="pt_patentnoError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Publication No:<span class="text-red-500">*</span></label>
                                                                                <input type="number" min="0" step="1" name="p_publication_no" class="ti-form-input" required placeholder="Publication No" id="pt_publication_no">
                                                                                 @if($errors->has('p_publication_no'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_publication_no')}}</div>
                                                                                    @endif
                                                                                <div id="pt_publicationnoError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Publicaion Date :<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                                                                            
                                                                                <input type="date" name="p_publication_date" id="pt_publication_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                    required placeholder="Choose date">
                                                                                    @if($errors->has('p_publication_date'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_publication_date')}}</div>
                                                                                    @endif
                                                                                <div id="pt_publicationdateError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Stream/Domain : <span class="text-red-500">*</span></label>
                                                                                <input type="text" name="p_stream_domain" class="ti-form-input" required placeholder="Stream Domain" id="stream_domain">
                                                                                 @if($errors->has('p_stream_domain'))
                                                                                        <div class="text-red-700">{{ $errors->first('p_stream_domain')}}</div>
                                                                                @endif
                                                                                <div id="pt_stream_domainError" class="error text-red-700"></div>
                                                                            </div>
                                                                       
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_patents">
                                                                            Close
                                                                        </button>
                                                                                        
                                                                        <input type="submit" id="patents_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                            <table id="patent_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">
                                                                        <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Application No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Application Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Title</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Stream Domain</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Patents No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Publication No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Publication Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">action</th>
                                                                    </tr>
                                                                </thead>
                                                                @php
                                                                    $i=1;
                                                                @endphp
                                                                <tbody class="">
                                                                    @if($staff->patent!=null)
                                                                        @forelse($staff->patent as $pate)
                                                                            <tr class="">

                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$pate->egov_id}}</span></td>
                                                                                <td><span>{{$pate->appl_no}}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($pate->appl_date)->format('d-M-Y') }}</span></td>
                                                                                <td><span>{{$pate->title}}</span></td>
                                                                                <td><span>{{$pate->status}}</span></td>
                                                                                 <td><span>{{$pate->stream_domain}}</span></td>
                                                                                <td><span>{{$pate->patent_no}}</span></td>
                                                                                <td><span>{{$pate->publication_no}}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($pate->publication_date)->format('d-M-Y') }}</span></td>
                                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#patents_edit_modal{{$i}}"  id="btn{{$i}}" btn-val={{$i}}
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary patents_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>
                                                            
                                                        
                                                                                            <div id="patents_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Patents
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#patents_edit_modal{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor" />
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                                 @if(($errors->has('pe_appl_no'))||($errors->has('pe_appl_date'))||($errors->has('pe_title'))||($errors->has('pe_status'))||($errors->has('pe_patent_no'))||($errors->has('pe_publication_no'))||($errors->has('pe_publication_date'))||($errors->has('pe_stream_domain')))
                                                                                                                    <script>
                                                                                                                    //alert(387);
                                                                                                                        window.onload=function(){
                                                                                                                        //alert('123');
                                                                                                                        //alert("Validation errors");

                                                                                                                    // document.getElementById('btn'+{{old('modal_no')}}).click();
                                                                                                                    };   
                                                                                                                
                                                                                                                    </script>
                                                                                                             @endif

                                                                                                        </div>
                                                                                                        <form  action="{{route('Teaching.research.patent.update',$pate->id)}}" method="post">
                                                                                                             @csrf
                                                                                                            @method('patch')
                                                                                                            <div class="ti-modal-body">
                                                                                                            <input type='hidden' name='patent_modal_no' class='patent_modal_no' value={{old('patent_modal_no')}}/>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Application No :<span class="text-red-500">*</span> </label>
                                                                                                                        <input type="text" name="pe_appl_no" class="ti-form-input" required placeholder=" Application No" value="{{$pate->appl_no}}">
                                                                                                                          @if($errors->has('pe_appl_no'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('pe_appl_no') }}</div>
                                                                                                                         @endif
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Application  Date :<span class="text-red-500">*</span></label>
                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                class="ri ri-calendar-line"></i></span>
                                                                                                                        </div>
                                                                                            
                                                                                                                        <input type="text" name="pe_appl_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                            required placeholder="Choose date" value="{{$pate->appl_date}}">
                                                                                                                              @if($errors->has('pe_appl_date'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('pe_appl_date') }}</div>
                                                                                                                         @endif
                                                                                                                                
                                                                                                                    </div>   
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Title: <span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="pe_title" class="ti-form-input" required placeholder="Title" value="{{$pate->title}}">
                                                                                                                             @if($errors->has('pe_title'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('pe_title') }}</div>
                                                                                                                         @endif
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Status:<span class="text-red-500">*</span></label>
                                                                                                                            <select class="ti-form-select status" name="pe_status" required>
                                                                                                                                <option value="#">Choose Status</option>
                                                                                                                                <option value="Granted" {{$pate->status=='Granted'? 'selected': ''}}>Granted</option>
                                                                                                                                <option value="Pending" {{$pate->status=='Pending'? 'selected': ''}}>Pending</option>
                                                                                                                                <option value="Awarded" {{$pate->status=='Awarded'? 'selected': ''}}>Awarded</option>
                                                                                                                                <option value="Rejected" {{$pate->status=='Rejected'? 'selected': ''}}>Rejected</option>
                                                                                                                                   @if($errors->has('pe_status'))
                                                                                                                                        <div class="text-red-700">{{ $errors->first('pe_status') }}</div>
                                                                                                                                 @endif
                                                                                                                            </select>
                                                                                                                    </div>
                                                                                                                                                                                                            
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Patent No:<span class="text-red-500">*</span></label>
                                                                                                                        <input type="number" min="0" step="1" name="pe_patent_no" class="ti-form-input" required placeholder="Patent No" value="{{$pate->patent_no}}">
                                                                                                                          @if($errors->has('pe_patent_no'))
                                                                                                                                        <div class="text-red-700">{{ $errors->first('pe_patent_no') }}</div>
                                                                                                                            @endif
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Publication No:<span class="text-red-500">*</span></label>
                                                                                                                        <input type="number" min="0" step="1" name="pe_publication_no" class="ti-form-input" required placeholder="Publication No" value="{{$pate->publication_no}}">
                                                                                                                          @if($errors->has('pe_publication_no'))
                                                                                                                                        <div class="text-red-700">{{ $errors->first('pe_publication_no') }}</div>
                                                                                                                            @endif
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font_bold">Publicaion Date :<span class="text-red-500">*</span></label>
                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                class="ri ri-calendar-line"></i></span>
                                                                                                                        </div>
                                                                                            
                                                                                                                        <input type="date" name="pe_publication_date"
                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                required placeholder="Choose date" value="{{$pate->publication_date}}">
                                                                                                                                @if($errors->has('pe_publication_date'))
                                                                                                                                    <div class="text-red-700">{{ $errors->first('pe_publication_date') }}</div>
                                                                                                                                @endif
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Stream/Domain : <span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="pe_stream_domain" class="ti-form-input" required placeholder="Stream Domain" value="{{$pate->stream_domain}}">
                                                                                                                        @if($errors->has('pe_stream_domain'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('pe_stream_domain')}}</div>
                                                                                                                        @endif
                                                                                                                        <div id="pt_stream_domainError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#patents_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                                </button>
                                                                                                                            
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                        
                                                                                                            </div>
                                                                                                        </form>  
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('Teaching.research.patent.destroy',$pate->id) }}" method="post">
                                                                                            
                                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Delete
                                                                                                    </span>
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </td>
                                                                            </tr> 
                                                                                @empty
                                                                                {{-- <tr>
                                                                                    <td>no records</td>
                                                                                </tr>      --}}
                                                                        @endforelse
                                                                    @endif
                                                                </tbody>
                                                            </table>  
                                                        </div>   
                                                </div>

                                            </div>
                                           <!--End of Patents -->


                                           <!--Start Of Copyrights-->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Copyrights History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button id="copyright_btn" data-hs-overlay="#add_copyright" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Copyright
                                                    </button>
                                                    <div id="add_copyright" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Copyright<span class="text-red-400">
                                                                    </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                            data-hs-overlay="#add_copyright">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                            </svg>
                                                                        </button>
                                                                            @if(($errors->has('c_copyright_title'))||($errors->has('c_copyright_date'))||($errors->has('c_author_name'))||($errors->has('c_status'))||($errors->has('c_description')))
                                                                                    <script>
                                                                                        //alert(1);
                                                                                        $(window).on('load', function() {
                                                                                            //if($('#horizontal-alignment-item-1').parent().find('.active')){
                                                                                                //alert('attended');
                                                                                                
                                                                                               // $('#horizontal-alignment-item-1').trigger('click')
                                                                                               $('#copyright_btn').trigger("click");

                                                                                            // }else{
                                                                                            //     //alert('Not Active');
                                                                                            //     $('#horizontal-alignment-item-1').parent().find(':first').trigger('click');
                                                                                            //     $('#activity_attended_btn').trigger("click");
                                                                                            // }
                                                                                            //$('#activity_attended_btn').trigger( "click" );
                                                                                                
                                                                                        });      
                                                                                    </script>
                                                                                @endif
                                                                </div>
                                                                <form  action="{{route('Teaching.research.copyright.store')}}" method="post">
                                                                    @csrf 
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Copyright Title : <span class="text-red-500">*</span></label>
                                                                                <input type="text" name="c_copyright_title" class="ti-form-input" required placeholder="Copyright Title" id="rc_copyright_title">
                                                                                  
                                                                                    @if($errors->has('c_copyright_title'))
                                                                                            <div class="text-red-700">{{ $errors->first('c_copyright_title')}}</div>
                                                                                    @endif
                                                                                <div id="rc_copyrighttitleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Copyright Date :<span class="text-red-500">*</span></label>
                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                        <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                    </div>
                                                        
                                                                                    <input type="date" name="c_copyright_date" id="rc_copyright_date"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                     required placeholder="Choose date">
                                                                                     @if($errors->has('c_copyright_date'))
                                                                                            <div class="text-red-700">{{ $errors->first('c_copyright_date')}}</div>
                                                                                    @endif
                                                                                    <div id="rc_copyrightdateError" class="error text-red-700"></div>
                                                                                        
                                                                            </div>   
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Author Name:<span class="text-red-500">*</span> </label>
                                                                                <input type="text" name="c_author_name" class="ti-form-input" required placeholder="Author Name" id="rc_author_name">
                                                                                 @if($errors->has('c_author_name'))
                                                                                            <div class="text-red-700">{{ $errors->first('c_author_name')}}</div>
                                                                                    @endif
                                                                                <div id="rc_authornameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold">Status:<span class="text-red-500">*</span> </label>
                                                                                <select class="ti-form-select status" name="c_status" required id="rc_status">
                                                                                    <option value="#">Choose Status</option>
                                                                                    <option value="Applied">Applied</option>
                                                                                    <option value="Awarded">Awarded</option>
                                                                                </select>
                                                                                  @if($errors->has('c_status'))
                                                                                            <div class="text-red-700">{{ $errors->first('c_status')}}</div>
                                                                                    @endif
                                                                                <div id="rc_statusError" class="error text-red-700"></div>
                                                                            </div>
                                                                                                                                                                    
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Description:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="c_description" class="ti-form-input" required placeholder="Description" id="rc_description">
                                                                                   @if($errors->has('c_description'))
                                                                                            <div class="text-red-700">{{ $errors->first('c_description')}}</div>
                                                                                    @endif
                                                                                <div id="rc_descriptionError" class="error text-red-700"></div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                       
                                                                        
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_copyright">
                                                                            Close
                                                                        </button>
                                                                                        
                                                                        <input type="submit" id="copyright_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                            <table  id="copyright_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">
                                                                        <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Copyright Title</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Copyright Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Author Name</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Description</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                @php
                                                                    $i=1;
                                                                @endphp
                                                                <tbody class="">
                                                                    @if($staff->copyright!=null)
                                                                        @forelse($staff->copyright as $copy)
                                                                            <tr class="">

                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$copy->egov_id}}</span></td>
                                                                                <td><span>{{$copy->copyright_title}}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($copy->copyright_date)->format('d-M-Y') }}</span></td>
                                                                                <td><span>{{$copy->author_name}}</span></td>
                                                                                <td><span>{{$copy->status}}</span></td>
                                                                                <td><span>{{$copy->description}}</span></td>
                                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#copyright_edit_modal{{$i}}"  id="btn{{$i}}" btn-val={{$i}}
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary copyright_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>
                                                            
                                                        
                                                                                            <div id="copyright_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Copyright
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#copyright_edit_modal{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor" />
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                               @if(($errors->has('ce_copyright_title'))||($errors->has('ce_copyright_date'))||($errors->has('ce_author_name'))||($errors->has('ce_status'))||($errors->has('ce_description')))
                                                                                                                    <script>
                                                                                                                    //alert(387);
                                                                                                                        window.onload=function(){
                                                                                                                        //alert('123');
                                                                                                                        //alert("Validation errors");

                                                                                                                    // document.getElementById('btn'+{{old('modal_no')}}).click();
                                                                                                                    };   
                                                                                                                
                                                                                                                     </script>
                                                                                                                @endif
                                                                                                        </div>
                                                                                                        <form  action="{{route('Teaching.research.copyright.update',$copy->id)}}" method="post">
                                                                                                             @csrf
                                                                                                            @method('patch')
                                                                                                            <div class="ti-modal-body">
                                                                                                            <input type='hidden' name='copyright_modal_no' class='copyright_modal_no' value={{old('copyright_modal_no')}}/>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Copyright Title : <span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="ce_copyright_title" class="ti-form-input" required placeholder="Copyright Title" value="{{$copy->copyright_title}}">
                                                                                                                        
                                                                                                                            @if($errors->has('ce_copyright_title'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_copyright_title') }}</div>
                                                                                                                            @endif
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Copyright Date :<span class="text-red-500">*</span></label>
                                                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                                                                    class="ri ri-calendar-line"></i></span>
                                                                                                                            </div>
                                                                                                
                                                                                                                            <input type="date" name="ce_copyright_date"
                                                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                             required placeholder="Choose date" value="{{$copy->copyright_date}}">
                                                                                                                                @if($errors->has('ce_copyright_date'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_copyright_date') }}</div>
                                                                                                                            @endif
                                                                                                                                
                                                                                                                    </div>   
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Author Name:<span class="text-red-500">*</span> </label>
                                                                                                                        <input type="text" name="ce_author_name" class="ti-form-input" required placeholder="Author Name" value="{{$copy->author_name}}">
                                                                                                                          @if($errors->has('ce_author_name'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_author_name') }}</div>
                                                                                                                            @endif
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold">Status:<span class="text-red-500">*</span> </label>
                                                                                                                        <select class="ti-form-select status" name="ce_status" required>
                                                                                                                            <option value="#">Choose Status</option>
                                                                                                                            <option value="Applied" {{$copy->status=='Applied'? 'selected': ''}}>Applied</option>
                                                                                                                            <option value="Awarded" {{$copy->status=='Awarded'? 'selected': ''}}>Awarded</option>
                                                                                                                        </select>
                                                                                                                          @if($errors->has('ce_status'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_status') }}</div>
                                                                                                                            @endif
                                                                                                                    </div>
                                                                                                                                                                                                            
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Description:<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="ce_description" class="ti-form-input" required placeholder="Description" value="{{$copy->description}}">
                                                                                                                          @if($errors->has('ce_description'))
                                                                                                                                <div class="text-red-700">{{ $errors->first('ce_description') }}</div>
                                                                                                                            @endif
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#copyright_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                                </button>
                                                                                                                            
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                        
                                                                                                            </div>
                                                                                                        </form>  
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('Teaching.research.copyright.destroy',$copy->id) }}" method="post">
                                                                                            
                                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Delete
                                                                                                    </span>
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </td>
                                                                            </tr> 
                                                                                @empty
                                                                                {{-- <tr>
                                                                                    <td>no records</td>
                                                                                </tr>      --}}
                                                                        @endforelse
                                                                    @endif
                                                                </tbody>
                                                            </table>  
                                                        </div>   
                                                </div>

                                            </div>

                                           <!--Ends Of Copyrights -->
                                    
                                        </div>


                                        <div id="pills-with-brand-color-6" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-4">
                                          
                                          <!--Start of Achievements -->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>General Achivements</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button id="general_achievements_btn" data-hs-overlay="#add_general_achievements" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add General Achivements
                                                    </button>
                                                    <div id="add_general_achievements" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New General Achievements<span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_general_achievements">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                        @if(($errors->has('ga_award'))||($errors->has('ga_year'))||($errors->has('ga_details')))
                                                                                    <script>
                                                                                        //alert(1);
                                                                                        $(window).on('load', function() {
                                                                                            //if($('#horizontal-alignment-item-1').parent().find('.active')){
                                                                                                //alert('attended');
                                                                                                
                                                                                               // $('#horizontal-alignment-item-1').trigger('click')
                                                                                               $('#general_achievements_btn').trigger("click");

                                                                                            // }else{
                                                                                            //     //alert('Not Active');
                                                                                            //     $('#horizontal-alignment-item-1').parent().find(':first').trigger('click');
                                                                                            //     $('#activity_attended_btn').trigger("click");
                                                                                            // }
                                                                                            //$('#activity_attended_btn').trigger( "click" );
                                                                                                
                                                                                        });      
                                                                                    </script>
                                                                        @endif
                                                                </div>
                                                                <form  action="{{route('Teaching.research.general_achievements.store')}}" method="post">
                                                                    @csrf
                                                                            
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Award:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="ga_award" class="ti-form-input" required placeholder="Award" id="rga_award">
                                                                                 @if($errors->has('ga_award'))
                                                                                     <div class="text-red-700">{{ $errors->first('ga_award')}}</div>
                                                                                @endif
                                                                                <div id="rga_awardError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Year:</label>
                                                                                <input type="number" min="0" step="1" name="ga_year" class="ti-form-input" required placeholder="Year" id="rga_year">
                                                                                 @if($errors->has('ga_year'))
                                                                                    <div class="text-red-700">{{ $errors->first('ga_year')}}</div>
                                                                                @endif
                                                                                <div id="rga_yearError" class="error text-red-700"></div>    
                                                                            </div>      
                                                                        </div>

                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Details:</label>
                                                                                <input type="text" name="ga_details" class="ti-form-input" required placeholder="Details" id="rga_details">
                                                                                 @if($errors->has('ga_details'))
                                                                                    <div class="text-red-700">{{ $errors->first('ga_details')}}</div>
                                                                                 @endif
                                                                                <div id="rga_detailsError" class="error text-red-700"></div>
                                                                            </div>                                                                     
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_general_achievements">
                                                                            Close
                                                                        </button>
                                                                                        
                                                                        <input type="submit" id="achievments_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table id="general_achievements_table" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold">S NO</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Award</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Year</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Details</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Action</th>
                                                                </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @if($staff->general_achievements!=null)
                                                                    @forelse($staff->general_achievements as $achivement)
                                                                        <tr class="">

                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$achivement->award}}</span></td>
                                                                                <td><span>{{$achivement->year}}</span></td>
                                                                                <td><span>{{$achivement->details}}</span></td>
                                                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#general_achievements_edit_modal{{$i}}" id="btn{{$i}}" btn-val={{$i}} 
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary general_achievements_edit_modal_click">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>
                                                            
                                                        
                                                                                            <div id="general_achievements_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Books And Chapters
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                data-hs-overlay="#general_achievements_edit_modal{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                    fill="currentColor" />
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                                 @if(($errors->has('gae_award'))||($errors->has('gae_year'))||($errors->has('gae_details')))
                                                                                                                    <script>
                                                                                                                    //alert(387);
                                                                                                                        window.onload=function(){
                                                                                                                        //alert('123');
                                                                                                                        //alert("Validation errors");

                                                                                                                    // document.getElementById('btn'+{{old('modal_no')}}).click();
                                                                                                                    };   
                                                                                                                
                                                                                                                    </script>
                                                                                                                 @endif
                                                                                                        </div>
                                                                                                        <form  action="{{route('Teaching.research.general_achievements.update',$achivement->id)}}" method="post">
                                                                                                            @csrf
                                                                                                            @method('patch')
                                                                                                            <div class="ti-modal-body">
                                                                                                            <input type='hidden' name='achievements_modal_no' class='achievements_modal_no' value={{old('achievements_modal_no')}}/>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Award :<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="gae_award" class="ti-form-input" required placeholder="Award" value="{{$achivement->award}}">
                                                                                                                         @if($errors->has('gae_award'))
                                                                                                                             <div class="text-red-700">{{ $errors->first('gae_award') }}</div>
                                                                                                                         @endif
                                                                                                                                
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Year:</label>
                                                                                                                        <input type="number" min="0"  name="gae_year" class="ti-form-input" required placeholder="Year" value="{{$achivement->year}}">
                                                                                                                         @if($errors->has('gae_year'))
                                                                                                                             <div class="text-red-700">{{ $errors->first('gae_year') }}</div>
                                                                                                                         @endif
                                                                                                                        

                                                                                                                                
                                                                                                                    </div>      
                                                                                                                </div>

                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Details:</label>
                                                                                                                        <input type="text" name="gae_details" class="ti-form-input" required placeholder="Details" value="{{$achivement->details}}">
                                                                                                                         @if($errors->has('gae_details'))
                                                                                                                             <div class="text-red-700">{{ $errors->first('gae_details') }}</div>
                                                                                                                         @endif
                                                                                                                    </div>                                                                     
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#general_achievements_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                                </button>
                                                                                                                                
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                            
                                                                                                            </div>
                                                                                                        </form>  
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('Teaching.research.general_achievements.destroy',$achivement->id) }}" method="post">
                                                                                            
                                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                                class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                @method('delete')
                                                                                                @csrf
                                                                                                <span
                                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                    role="tooltip">
                                                                                                    Delete
                                                                                                </span>
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                                </td>  
                                                                            </tr> 
                                                                            @empty
                                                                                {{-- <tr>
                                                                                <td>no records</td>
                                                                                </tr>      --}}
                                                                        @endforelse
                                                                    @endif
                                                            </tbody>
                                                            
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                          <!--End of Achievements -->
                                        </div>

                                        <!--Reviewer\Editor-->
                                        <div id="pills-with-brand-color-7" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-4">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i>Reviewer/Editor</h5>
                                                </div>
                                                <div class="box-body">
                                                    <button data-hs-overlay="#add_reviewer_editor" id="review_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Add Reviewer/Editor 
                                                    </button>
                                                    <div id="add_reviewer_editor" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Add New Reviewer/Editor <span class="text-red-400">
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_reviewer_editor">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                    @if((($errors->has('title'))||($errors->has('journal_name'))||($errors->has('publisher_name'))||($errors->has('reviewed_date'))||($errors->has('level'))||($errors->has('other_level'))))
                                                                        <script>
                                                                            $(window).on('load', function() 
                                                                            {
                                                                                $('#review_btn').trigger("click");
                                                                            }); 
                                                                        </script>
                                                                    @endif
                                                                </div>
                                                                <form  action="{{route('Teaching.research.reviewer_editor.store')}}" method="post">
                                                                    @csrf 
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="with-corner-hint" class="ti-form-label font-bold"> Level :<span class="text-red-500">*</span> </label>
                                                                                <select class="ti-form-select level reviewerlevel" name="level" id="re_level">
                                                                                    <option value="#">Choose Level</option>
                                                                                    <option value="Q1">Q1</option>
                                                                                    <option value="Q2">Q2</option>  
                                                                                    <option value="Q3">Q3</option>
                                                                                    <option value="Q4">Q4</option>
                                                                                    <option value="SCI">SCI</option>
                                                                                    <option value="Web of Science">Web of Science</option>  
                                                                                    <option value="Scopus Indexed">Scopus Indexed</option>
                                                                                    <option value="UGC General">UGC General</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                                @if($errors->has('level'))
                                                                                    <div class="text-red-700">{{ $errors->first('level') }}</div>
                                                                                @endif
                                                                                <div id="re_levelError" class="error text-red-700"></div>
                                                                            </div>

                                                                            <div class="max-w-sm space-y-3 pb-6 re_otherLevel"  style="display: none;">
                                                                                <label for="" class="ti-form-label font-bold">Other Level:</label>
                                                                                <input type="text" name="other_level" class="ti-form-input " placeholder="Other Level" id="re_other_level">
                                                                                @if($errors->has('other_level'))
                                                                                    <div class="text-red-700">{{ $errors->first('other_level') }}</div>
                                                                                @endif
                                                                                <div id="re_other_levelError" class="error text-red-700"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="title" class="ti-form-input"  placeholder="Title" id="re_title">
                                                                                @if($errors->has('title'))
                                                                                    <div class="text-red-700">{{ $errors->first('title') }}</div>
                                                                                @endif
                                                                                <div id="re_titleError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Journal Name:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="journal_name" class="ti-form-input"  placeholder="Journal Name" id="re_journal_name">
                                                                                @if($errors->has('journal_name'))
                                                                                    <div class="text-red-700">{{ $errors->first('journal_name') }}</div>
                                                                                @endif
                                                                                <div id="re_journalnameError" class="error text-red-700"></div>
                                                                            </div>                                                                    
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Publisher Name:<span class="text-red-500">*</span></label>
                                                                                <input type="text" name="publisher_name" class="ti-form-input"  placeholder="Publisher Name" id="re_publisher_name">
                                                                                @if($errors->has('publisher_name'))
                                                                                    <div class="text-red-700">{{ $errors->first('publisher_name') }}</div>
                                                                                @endif
                                                                                <div id="re_publishernameError" class="error text-red-700"></div>
                                                                            </div>
                                                                            <div class="flex max-w-sm space-y-3 pb-6">
                                                                                <label for="" class="ti-form-label font-bold">Review Date:<span class="text-red-500">*</span></label>
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                                                        
                                                                                <input type="date" name="reviewed_date"
                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                        required placeholder="Choose date" id="re_review_date">
                                                                                @if($errors->has('date'))
                                                                                    <div class="text-red-700">{{ $errors->first('date') }}</div>
                                                                                @endif
                                                                                <div id="re_review_dateError" class="error text-red-700"></div>      
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_reviewer_editor">
                                                                            Close
                                                                        </button>
                                                                                        
                                                                        <input type="submit" id="reviewer_editor_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                            <table id="reviewer_editor_table"class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr class="">
                                                                        <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">E-Gov ID</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Level</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Other Level</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Title</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Journal Name</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Publisher Name</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Review Date</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">actions</th>
                                                                    </tr>
                                                                </thead>
                                                                @php
                                                                    $i=1;
                                                                @endphp
                                                                <tbody class="">
                                                                    @if($staff->reviewer_editor!=null)
                                                                        @forelse($staff->reviewer_editor as $rc)
                                                                            <tr class="">

                                                                                <td><span>{{$i++}}</span></td>
                                                                                <td><span>{{$rc->egov_id}}</span></td>
                                                                                <td><span>{{$rc->level}}</span></td>
                                                                                <td>
                                                                                    <span>{{$rc->other_level}}</span>
                                                                                </td>
                                                                                {{-- <td>
                                                                                    <span>{{ $rc->other_level ? $rc->other_level : '--NA--' }}</span>
                                                                                </td> --}}
                                                                                <td><span>{{$rc->title}}</span></td>
                                                                                <td><span>{{\Carbon\Carbon::parse($rc->reviewed_date)->format('d-M-Y') }}</span></td>
                                                                                <td><span>{{$rc->journal_name}}</span></td>
                                                                                <td><span>{{$rc->publisher_name}}</span></td>
                                                                                
                                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <button data-hs-overlay="#reviewer_editor_edit_modal{{$i}}"  id="btn{{$i}}" btn-val={{$i}}
                                                                                                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary reviewer_editor_edit_modal">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>
                                                                                            <div id="reviewer_editor_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Journal Publication
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#reviewer_editor_edit_modal{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor" />
                                                                                                                </svg>
                                                                                                            </button>
                                                                                                            @if((($errors->has('title'))||($errors->has('journal_name'))||($errors->has('publisher_name'))||($errors->has('reviewed_date'))||($errors->has('level'))||($errors->has('other_level'))))
                                                                                                                <script>
                                                                                                                    $(window).on('load', function() 
                                                                                                                    {
                                                                                                                        $('#review_btn').trigger("click");
                                                                                                                    }); 
                                                                                                                </script>              
                                                                                                            @endif
                                                                                                        </div>
                                                                                                        <form action="{{route('Teaching.research.reviewer_editor.update',$rc->id)}}" method="post">
                                                                                                            @csrf
                                                                                                            @method('patch')
                                                                                                            <div class="ti-modal-body">
                                                                                                             <input type='hidden' name='review_modal_no' class='review_modal_no' value={{old('review_modal_no')}}/>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Level :<span class="text-red-500">*</span> </label>
                                                                                                                        <select class="ti-form-select level reviewerlevel" name="level" id="re_level">
                                                                                                                            <option value="#">Choose Level</option>
                                                                                                                            <option value="Q1" {{$rc->level=='Q1'? 'selected': ''}}>Q1</option>
                                                                                                                            <option value="Q2" {{$rc->level=='Q2'? 'selected': ''}}>Q2</option>
                                                                                                                            <option value="Q3" {{$rc->level=='Q3'? 'selected': ''}}>Q1</option>
                                                                                                                            <option value="Q4" {{$rc->level=='Q4'? 'selected': ''}}>Q1</option>
                                                                                                                            <option value="SCI" {{$rc->level=='SCI'? 'selected': ''}}>SCI</option>
                                                                                                                            <option value="Web of Science" {{$rc->level=='Web of Science'? 'selected': ''}}>Web of Science</option>
                                                                                                                            <option value="Scopus Indexed" {{$rc->level=='Scopus Indexed'? 'selected': ''}}>Scopus Indexed</option>
                                                                                                                            <option value="UGC General" {{$rc->level=='UGC General'? 'selected': ''}}>UGC General</option>
                                                                                                                            <option value="Other" {{$rc->level=='Other'? 'selected': ''}}>Other</option>


                                                                                                                        </select>
                                                                                                                        @if($errors->has('level'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('level') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="re_levelError" class="error text-red-700"></div>
                                                                                                                    </div>

                                                                                                                    <div class="max-w-sm space-y-3 pb-6 re_otherLevel"  style="display: none;">
                                                                                                                        <label for="" class="ti-form-label font-bold">Other Level:</label>
                                                                                                                        <input type="text" name="other_level" class="ti-form-input " placeholder="Other Level" id="re_other_level" value="{{$rc->other_level}}">
                                                                                                                        @if($errors->has('other_level'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('other_level') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="re_other_levelError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Title :<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="title" class="ti-form-input"  placeholder="Title" id="re_title" value="{{$rc->title}}">
                                                                                                                        @if($errors->has('title'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('title') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="re_titleError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Journal Name:<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="journal_name" class="ti-form-input"  placeholder="Journal Name" id="re_journal_name" value="{{$rc->journal_name}}">
                                                                                                                        @if($errors->has('journal_name'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('journal_name') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="re_journalnameError" class="error text-red-700"></div>
                                                                                                                    </div>                                                                    
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                    <div class="max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Publisher Name:<span class="text-red-500">*</span></label>
                                                                                                                        <input type="text" name="publisher_name" class="ti-form-input"  placeholder="Publisher Name" id="re_publisher_name" value="{{$rc->publisher_name}}">
                                                                                                                        @if($errors->has('publisher_name'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('publisher_name') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="re_publishernameError" class="error text-red-700"></div>
                                                                                                                    </div>
                                                                                                                    <div class="flex max-w-sm space-y-3 pb-6">
                                                                                                                        <label for="" class="ti-form-label font-bold">Review Date:<span class="text-red-500">*</span></label>
                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-calendar-line"></i></span>
                                                                                                                        </div>
                                                                                                                
                                                                                                                        <input type="date" name="reviewed_date"
                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                 placeholder="Choose date" id="re_review_date" value="{{$rc->reviewed_date}}">
                                                                                                                        @if($errors->has('date'))
                                                                                                                            <div class="text-red-700">{{ $errors->first('date') }}</div>
                                                                                                                        @endif
                                                                                                                        <div id="re_review_dateError" class="error text-red-700"></div>      
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#reviewer_editor_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                                </button>
                                                                                                                            
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                        
                                                                                                            </div>
                                                                                                        </form>  
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('Teaching.research.reviewer_editor.destroy',$rc->id) }}" method="post">
                                                                                            
                                                                                                <button onclick="return confirm('Are you Sure')"
                                                                                                    class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Delete
                                                                                                    </span>
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </td>
                                                                            </tr> 
                                                                                @empty
                                                                                {{-- <tr>
                                                                                    <td>no records</td>
                                                                                </tr>      --}}
                                                                        @endforelse
                                                                    @endif
                                                                </tbody>
                                                            </table>  
                                                        </div>   
                                                </div>

                                            </div>
                                        </div>
                                        <!--End Reviewer\Editor-->
                                    </div>                                                                      
                                </div>
                            </div>
                        </div>
                             <!-- End::row-1 -->
                    </div>    
                    <!-- End::main-content -->

                </div>
               

            

@endsection

@section('scripts')

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')
        <!-- pro activity other sponsored code start-->
        <!-- Include the latest jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

        <!-- Include the latest DataTables -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <!-- Include jQuery library if not already included -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Include jQuery library (if not already included) -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#pub_other_level').hide();
                $('#pub_level').change(function(){
                if($(this).val() == 'Other'){
                    $('#pub_other_level').show();
                } else {
                    $('#pub_other_level').hide();
                }
                
                });


                //Reviewer\Editor hide function
                $('.reviewerlevel').change(function () {
                    if ($(this).val() === 'Other') {
                        $('.re_otherLevel').show();
                       
                    } else {
                        $('.re_otherLevel').hide();
                      
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function(){

                $('.sponsoredBy').change(function () {
                    if ($(this).val() === 'Other') {
                        $('.otherSponsor').show();
                    } else {
                        $('.otherSponsor').hide();
                    }
                   

                    new DataTable('#conference_attended_table');
                    new DataTable('#conference_conducted_table');
                    new DataTable('#publication_table');
                    new DataTable('#book_chapter_table');
                    new DataTable('#fund_table');
                    new DataTable('#consultancy_table');
                    new DataTable('#patent_table');
                    new DataTable('#reviewer_editor_table');
                });
                    
                
                
                //      //for calculating the no of days for Conference attended (Adding)
                //     $(document).on('change', '.conf_attended_to_date',function(){
                //             //alert('Date altered');

                //         var conf_attended_from_date = $('.conf_attended_from_date').val();
                //         var conf_attended_to_date = $('.conf_attended_to_date').val();
                //      // alert(attended_to_date+'-'+attended_from_date);
                //         if(conf_attended_from_date != ""){
                //             var startDay = new Date(conf_attended_from_date);  
                //             var endDay = new Date(conf_attended_to_date);  

                //             //alert(startDay+'-'+endDay);

                //             // Determine the time difference between two dates     
                //             var millisBetween = endDay.getTime() - startDay.getTime();  
                            
                //             // Determine the number of days between two dates  
                //             var days = millisBetween / (1000 * 3600 * 24);  
                //             $('.conf_attended_no_of_days').val(days);
                //         }else{
                //             $('.conf_attended_from_date').focus();
                //             alert('Please fill the from date');
                //         }
                    
                //         //alert(millisBetween);
                //     });


                // //for calculating the no of days for Conference attended (Editing)
                // $(document).on('change', '.conf_attended_to_date_edit',function(){
                //         //alert('Date altered');

                //     var conf_attended_from_date_edit = $('.conf_attended_from_date_edit').val();
                //     var conf_attended_to_date_edit = $('.conf_attended_to_date_edit').val();
                //     // alert(attended_to_date+'-'+attended_from_date);
                //     if(conf_attended_from_date_edit != ""){
                //         var startDay = new Date(conf_attended_from_date_edit);  
                //         var endDay = new Date(conf_attended_to_date_edit);  

                //         //alert(startDay+'-'+endDay);

                //         // Determine the time difference between two dates     
                //         var millisBetween = endDay.getTime() - startDay.getTime();  
                        
                //         // Determine the number of days between two dates  
                //         var days = millisBetween / (1000 * 3600 * 24);  
                //         $('.conf_attended_no_of_days_edit').val(days);
                //     }else{
                //         $('.conf_attended_from_date_edit').focus();
                //         alert('Please fill the from date');
                //     }
                
                //     //alert(millisBetween);
                // });


                // //for calculating the no of days for Conference conducted (Adding)
                // $(document).on('change', '.conf_conducted_to_date',function(){
                //         //alert('Date altered');

                //     var conf_conducted_from_date = $('.conf_conducted_from_date').val();
                //     var conf_conducted_to_date = $('.conf_conducted_to_date').val();
                //     // alert(attended_to_date+'-'+attended_from_date);
                //     if(conf_conducted_from_date != ""){
                //         var startDay = new Date(conf_conducted_from_date);  
                //         var endDay = new Date(conf_conducted_to_date);  

                //         //alert(startDay+'-'+endDay);

                //         // Determine the time difference between two dates     
                //         var millisBetween = endDay.getTime() - startDay.getTime();  
                        
                //         // Determine the number of days between two dates  
                //         var days = millisBetween / (1000 * 3600 * 24);  
                //         $('.conf_conducted_no_of_days').val(days);
                //     }else{
                //         $('.conf_conducted_from_date').focus();
                //         alert('Please fill the from date');
                //     }
                
                //     //alert(millisBetween);
                // });

                // //for calculating the no of days for Conference conducted (Editing)
                // $(document).on('change', '.conf_conducted_to_date_edit',function(){
                //         //alert('Date altered');

                //     var conf_conducted_from_date_edit = $('.conf_conducted_from_date_edit').val();
                //     var conf_conducted_to_date_edit = $('.conf_conducted_to_date_edit').val();
                // // alert(attended_to_date+'-'+attended_from_date);
                //     if(conf_conducted_from_date != ""){
                //         var startDay = new Date(conf_conducted_from_date_edit);  
                //         var endDay = new Date(conf_conducted_to_date_edit);  

                //         //alert(startDay+'-'+endDay);

                //         // Determine the time difference between two dates     
                //         var millisBetween = endDay.getTime() - startDay.getTime();  
                        
                //         // Determine the number of days between two dates  
                //         var days = millisBetween / (1000 * 3600 * 24);  
                //         $('.conf_conducted_no_of_days_edit').val(days);
                //     }else{
                //         $('.conf_conducted_from_date_edit').focus();
                //         alert('Please fill the from date');
                //     }
                
                //     //alert(millisBetween);
                // });

                //for calculating the no of days for Conference activities attended (Adding)
                $(document).on('change', '.conf_attended_to_date',function(){
                                //alert('Date altered');

                            var conf_attended_from_date = $('.conf_attended_from_date').val();
                            var conf_attended_to_date = $('.conf_attended_to_date').val();
                        // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_attended_to_date != ""){
                                if(conf_attended_from_date == conf_attended_to_date){
                                    $('.conf_attended_no_of_days').removeClass('border border-red-500 focus:border-blue-500');
                                
                                    $('.conf_attended_no_of_days').val(1); // when both from date and to date are same, it means the no of days should be 1.
                                
                                }else if(conf_attended_from_date > conf_attended_to_date){
                                    $('.conf_attended_no_of_days').val(0);
                                    $('.conf_attended_no_of_days').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_attended_to_date').val();
                                    $('.conf_attended_to_date').focus();
                                
                                }else{
                                    $('.conf_attended_no_of_days').removeClass('border border-red-500 focus:border-blue-500');
                                    var startDay = new Date(conf_attended_from_date);  
                                    var endDay = new Date(conf_attended_to_date);  

                                
                                    // Determine the time difference between two dates     
                                    var millisBetween = endDay.getTime() - startDay.getTime();  
                                    
                                    // Determine the number of days between two dates  
                                    var days = millisBetween / (1000 * 3600 * 24);  
                                    var days=days+1; //for acurate no calculation.

                                    $('.conf_attended_no_of_days').val(days);
                                }
                            }else{
                                    $('.conf_attended_from_date').focus();
                                    alert('Please fill the from date');
                            }
                        
                            
        
                        });

                        ////////
                        ////////

                            //Calculating the no of days while Editing th entry
                        ///////
                        //for calculating the no of days for Research Conference activities attended (Editing)
                        $(document).on('change', '.conf_attended_to_date_edit',function(){
                                //alert('Date altered');

                            var conf_attended_from_date_edit = $('.conf_attended_from_date_edit').val();
                            var conf_attended_to_date_edit = $('.conf_attended_to_date_edit').val();
                        // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_attended_from_date_edit != ""){
                                if(conf_attended_from_date_edit == conf_attended_to_date_edit){
                                    //when both dates are same , then no of days would be 1.
                                    $('.conf_attended_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');
                                
                                    $('.conf_attended_no_of_days_edit').val(1);
                                }else if(conf_attended_from_date_edit > conf_attended_to_date_edit){
                                    $('.conf_attended_no_of_days_edit').val(0);
                                    $('.conf_attended_no_of_days_edit').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_attended_to_date_edit').val();
                                    $('.conf_attended_to_date_edit').focus();
                                    //$('.no_of_days_attended_edit').val(days);
                                }else{
                                    $('.conf_attended_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');
                                    
                                    var startDay = new Date(conf_attended_from_date_edit);  
                                    var endDay = new Date(conf_attended_to_date_edit);  

                                    //alert(startDay+'-'+endDay);

                                    // Determine the time difference between two dates     
                                    var millisBetween = endDay.getTime() - startDay.getTime();  
                                    
                                    // Determine the number of days between two dates  
                                    var days = millisBetween / (1000 * 3600 * 24);
                                    days =  days+1;  
                                    $('.conf_attended_no_of_days_edit').val(days);
                                }

                                
                            }else{
                                $('.conf_attended_from_date_edit').focus();
                                alert('Please fill the from date');
                            }
                        
                            //alert(millisBetween);
                        

        
                        });


                        //for calculating the no of days for Conference activities Conducted (Adding)
                        $(document).on('change', '.conf_conducted_to_date',function(){
                            //alert('Date altered');

                            var conf_conducted_from_date = $('.conf_conducted_from_date').val();
                            var conf_conducted_to_date = $('.conf_conducted_to_date').val();
                            // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_conducted_to_date != ""){
                                if(conf_conducted_from_date == conf_conducted_to_date){
                                    $('.conf_conducted_no_of_days').removeClass('border border-red-500 focus:border-blue-500');
                                
                                    $('.conf_conducted_no_of_days').val(1); // when both from date and to date are same, it means the no of days should be 1.
                                
                                }else if(conf_conducted_from_date > conf_conducted_to_date){
                                    $('.conf_conducted_no_of_days').val(0);
                                    $('.conf_conducted_no_of_days').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_conducted_to_date').val();
                                    $('.conf_conducted_to_date').focus();
                                
                                }else{
                                    $('.conf_conducted_no_of_days').removeClass('border border-red-500 focus:border-blue-500');
                                    var startDay = new Date(conf_conducted_from_date);  
                                    var endDay = new Date(conf_conducted_to_date);  

                                
                                    // Determine the time difference between two dates     
                                    var millisBetween = endDay.getTime() - startDay.getTime();  
                                    
                                    // Determine the number of days between two dates  
                                    var days = millisBetween / (1000 * 3600 * 24);  
                                    var days=days+1; //for acurate no calculation.

                                    $('.conf_conducted_no_of_days').val(days);
                                }
                            }
                            else{
                                    $('.conf_conducted_from_date').focus();
                                    alert('Please fill the from date');
                                }
                   
        
                        });

                        ////////
                        ////////

                            //Calculating the no of days while Editing th entry
                        ///////
                        //for calculating the no of days for Research Conference activities Conducted (Editing)
                        $(document).on('change', '.conf_conducted_to_date_edit',function(){
                                //alert('Date altered');

                            var conf_conducted_from_date_edit = $('.conf_conducted_from_date_edit').val();
                            var conf_conducted_to_date_edit = $('.conf_conducted_to_date_edit').val();
                            // alert(attended_to_date+'-'+attended_from_date);
                            if(conf_conducted_from_date_edit != ""){
                                if(conf_conducted_from_date_edit == conf_conducted_to_date_edit){
                                    //when both dates are same , then no of days would be 1.
                                    $('.conf_conducted_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');
                                
                                    $('.conf_conducted_no_of_days_edit').val(1);
                                }else if(conf_conducted_from_date_edit > conf_conducted_to_date_edit){
                                    $('.conf_conducted_no_of_days_edit').val(0);
                                    $('.conf_conducted_no_of_days_edit').addClass('border border-red-500 focus:border-blue-500');
                                    $('.conf_conducted_to_date_edit').val();
                                    $('.conf_conducted_to_date_edit').focus();
                                    //$('.no_of_days_attended_edit').val(days);
                                }else{
                                    $('.conf_conducted_no_of_days_edit').removeClass('border border-red-500 focus:border-blue-500');
                                    
                                    var startDay = new Date(conf_conducted_from_date_edit);  
                                    var endDay = new Date(conf_conducted_to_date_edit);  

                                    //alert(startDay+'-'+endDay);

                                    // Determine the time difference between two dates     
                                    var millisBetween = endDay.getTime() - startDay.getTime();  
                                    
                                    // Determine the number of days between two dates  
                                    var days = millisBetween / (1000 * 3600 * 24);
                                    days =  days+1;  
                                    $('.conf_conducted_no_of_days_edit').val(days);
                                }

                                
                            }else{
                                $('.conf_conducted_from_date_edit').focus();
                                alert('Please fill the from date');
                            }
                        
                            //alert(millisBetween);
                        

        
                        });




                    $(document).on('change','.book_chapter_type',function(){
                    //   alert('changed');
                            if($(this).val() == "Book"){
                                //if books 
                                $('.chapter_title').hide();
                                $('.start_page_no').hide();
                                $('.end_page_no').hide();

                            }else{
                                //if chapters
                                $('.chapter_title').show();
                                $('.start_page_no').show();
                                $('.end_page_no').show();
                            }
                    });




                    //profeesional activity attented
                     $(document).on('change','.sponsor_type_attended',function(){
                    //   alert('changed');
                            if($(this).val() == "Yes"){
                                //if yes 
                                $('.sponsored_by').show();
                               

                            }else{
                                //if no
                                $('.sponsored_by').hide();
                                $('.otherSponsor').hide();
                                $('.amount').hide();
                               
                            }
                    });


                      //profeesional activity Conducted
                    $(document).on('change','.sponsor_type',function(){
                        //   alert('changed');
                            if($(this).val() == "Yes"){
                                //if yes 
                                $('.sponsoring_agency').show();
                               

                            }else{
                                //if no
                                $('.sponsoring_agency').hide();
                               
                            }
                    });

                    //Validation for Conference Activity Attended
                    new DataTable('#conference_attended_table');
                    
                    $(document).on('click','.conference_attended_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                    //Validation for Conference Activity Conducted
                    //new DataTable('#conference_conducted_table');
                    
                    $(document).on('click','.conference_conducted_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                    //Validation for publication
               
                    //alert('Hello from jquery');
                    new DataTable('#publication_table');
                    
                    $(document).on('click','.publication_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                     //Validation for books and chapters 
               
                    //alert('Hello from jquery');
                    new DataTable('#book_chapter_table');
                    
                    $(document).on('click','.book_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                     //Validation for funded project
               
                    //alert('Hello from jquery');
                    new DataTable('#fund_table');
                    
                    $(document).on('click','.fund_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                     //Validation for consultancy
               
                    //alert('Hello from jquery');
                    new DataTable('#consultancy_table');
                    
                    $(document).on('click','.consultancy_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });
                    
                     //Validation for patents
               
                    //alert('Hello from jquery');
                    new DataTable('#patent_table');
                    
                    $(document).on('click','.patents_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                    //Validation for copyright
               
                    //alert('Hello from jquery');
                    new DataTable('#copyright_table');
                    
                    $(document).on('click','.copyright_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });





                    //Validation for general achievements
               
                    //alert('Hello from jquery');
                    new DataTable('#general_achievements_table');
                    
                    $(document).on('click','.general_achievements_edit_modal_click',function(){
                        //var 
                        var modal_no = $(this).attr("btn-val");
                        
                        //alert($(this).find('.caste_edit_modal_no').val());
                        $('.modal_no').val(modal_no); 
                    });

                    //Conference Activity Attended Validation

                    function isValidUrl(url) {
                        var urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/;
                        return urlRegex.test(url);
                    }
                    $(document).on('click','#conference_attended_add_btn',function(e){
                        //alert('123')

                        var con_att_conference_name = $('#con_att_conference_name').val();
                        var con_att_attended_as = $('#con_att_attended_as').val();
                        var con_att_from_date = $('#con_att_from_date').val();
                        var con_att_to_date = $('#con_att_to_date').val();
                        var con_att_no_ofdays = $('#con_att_no_ofdays').val();
                        var con_att_title = $('#con_att_title').val();
                        var con_att_place = $('#con_att_place').val();
                        var con_att_sponsored = $('#con_att_sponsored').val();
                        var con_att_sponsoredby = $('#con_att_sponsoredby').val();
                        var con_att_other_sponsored = $('#con_att_other_sponsored').val();
                        var con_att_amount = $('#con_att_amount').val();
                        var cont_att_weblink = $('#cont_att_weblink').val();
                        var con_att_typeoflevel = $('#con_att_typeoflevel').val();
                        var con_att_issn_number = $('#con_att_issn_number').val();
                        var conf_att_document = $('#conf_att_document').val();



                        var flag = false;

                        //alert(con_att_conference_name + '-' + con_att_attended_as + '-' + con_att_from_date + '-' + con_att_to_date + '-' + con_att_no_ofdays + '-' + con_att_title + '-' + con_att_place + '-' + con_att_sponsored + '-' + con_att_sponsoredby + '-' + con_att_other_sponsored + '-' + con_att_amount + '-' + cont_att_weblink);

                        if(con_att_conference_name == ''){
                            $('#con_att_conferenceNameError').text('Conference Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_att_conference_name.trim())){
                            $('#con_att_conferenceNameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_att_attended_as == '#'){
                            $('#con_att_attendedasError').text('Please Choose a correct Option');
                            flag = true;
                        }
                        if(con_att_from_date.trim() === ''){
                            $('#con_att_fromdateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(con_att_to_date.trim() === ''){
                            $('#con_att_todateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(con_att_no_ofdays <= 0){
                            $('#con_att_noofdaysError').text('Choose a proper from date and to date.');
                            flag = true;
                        }
                        if(con_att_title == ''){
                            $('#con_att_titleError').text('title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_att_title.trim())){
                            $('#con_att_titleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_att_place == ''){
                            $('#con_att_palceError').text('Place Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_att_place.trim())){
                            $('#con_att_palceError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_att_sponsored == '#'){
                            $('#con_att_sponsoredError').text('Please Choose a correct option');
                            flag = true;
                        }
                       
                        
                        if (con_att_sponsoredby !== '#' && con_att_sponsoredby !== '') {
                        
                        } 

                        if (con_att_other_sponsored !== '') {
                            if (!/^[a-zA-Z\s]+$/.test(con_att_other_sponsored.trim())) {
                                $('#con_att_othersponsoredError').text('Please fill the correct value');
                                flag = true;
                            }
                        }
                        
                        if (con_att_amount.trim() !== '') {
                            if (!/^\d+$/.test(con_att_amount.trim())) {
                                $('#con_att_amountError').text('Please fill a valid numeric value');
                                flag = true;
                            }
                            
                        } else {
                            // The field is optional and empty, no validation needed
                        }

                        if (cont_att_weblink.trim() !== '') {
                            if (!isValidUrl(cont_att_weblink)) {
                                $('#con_att_weblinkError').text('Please enter a valid web link');
                                flag = true;
                            }
                           
                        } else {
                            // The field is optional and empty, no validation
                        }
                        if(con_att_typeoflevel == '#'){
                            $('#con_att_typeoflevelError').text('Please Choose a correct Option');
                            flag = true;
                        }
                        if(conf_att_document[0].files.length === 0){
                            //alert('file not choosen');
                            $('#pro_att_documentError').text('Please choose a file');
                            flag = true;
                        }
                        

                        if(flag == true){
                            e.preventDefault();
                        }

                    });


                    //Validation for conference conducted
                    $(document).on('click','#conference_conducted_add_btn',function(e){
                        //alert('123')

                        var con_cond_conference_name = $('#con_cond_conference_name').val();
                        var con_cond_co_organizer = $('#con_cond_co_organizer').val();
                        var con_cond_no_ofparticipants = $('#con_cond_no_ofparticipants').val();
                        var con_cond_sponsored = $('#con_cond_sponsored').val();
                        var con_cond_sponsoring_agency = $('#con_cond_sponsoring_agency').val();
                        var con_cond_from_date = $('#con_cond_from_date').val();
                        var con_cond_to_date = $('#con_cond_to_date').val();
                        var con_cond_no_ofdays = $('#con_cond_no_ofdays').val();
                        var con_cond_place = $('#con_cond_place').val();
                        var con_cond_publisher = $('#con_cond_publisher').val();
                        var con_cond_role = $('#con_cond_role').val();
                        var con_cond_weblink = $('#con_cond_weblink').val();
                        var cc_typeof_level = $("#cc_typeof_level").val();

                        var flag = false;

                        //alert('');
                        if(con_cond_conference_name == ''){
                            $('#con_cond_conferenceNameError').text('Conference Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_conference_name.trim())){
                            $('#con_cond_conferenceNameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_co_organizer == ''){
                            $('#con_cond_coorganizerError').text('Organizer Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_co_organizer.trim())){
                            $('#con_cond_coorganizerError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_no_ofparticipants == ''){
                            $('#con_cond_participantError').text('No Of Participant is missing');
                            flag = true;
                        }else if (!/^\d+$/.test(con_cond_no_ofparticipants.trim())){
                            $('#con_cond_participantError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_sponsored == '#'){
                            $('#con_cond_sponsoredError').text('Please Choose a correct option');
                            flag = true;
                        }
                        //if(con_cond_sponsoring_agency == ''){
                            //$('#con_cond_sponsoragencyError').text('Organizer Name is missing');
                            //flag = true;
                        // }else if (!/^[a-zA-Z\s]+$/.test(con_cond_sponsoring_agency.trim())){
                            //$('#con_cond_sponsoragencyError').text('Please fill the correct value');
                            //flag = true;
                        // }
                        if(con_cond_from_date.trim() === ''){
                            $('#con_cond_fromdateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(con_cond_to_date.trim() === ''){
                            $('#con_cond_todateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(con_cond_no_ofdays <= 0){
                            $('#con_cond_noofError').text('Choose a proper from date and to date.');
                            flag = true;
                        }
                        if(con_cond_place == ''){
                            $('#con_cond_placeError').text('Place Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_place.trim())){
                            $('#con_cond_placeError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_publisher == ''){
                            $('#con_cond_publisherError').text('Publisher Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(con_cond_publisher.trim())){
                            $('#con_cond_publisherError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(con_cond_role =='#'){
                            $('#con_cond_roleError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if (con_cond_weblink == '') {
                            $('#con_cond_weblinkError').text('Web link is missing');
                            flag = true;
                        } else if (!isValidUrl(con_cond_weblink)) {
                            $('#con_cond_weblinkError').text('Please enter a valid web link');
                            flag = true;
                        }
                         if(cc_typeof_level =='#'){
                            $('#cc_typeoflevelError').text('Please Choose a correct option.');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });


                    function isValidUrl(url) {
                        var urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/;
                        return urlRegex.test(url);
                    }
                    // Validation for publication
                    $(document).on('click','#publication_add_btn',function(e){

                        var pub_level = $('.pub_level').val();
                        var pub_title = $('#pub_title').val();
                        var pub_dateofpublication = $('#pub_dateofpublication').val();
                        var pub_journal = $('#pub_journal').val();
                        var pub_link = $('#pub_link').val();
                        var pub_authorrole = $('#pub_authorrole').val();
                        var pub_otherlevel = $('#pub_otherlevel').val();
                        var pub_doi_number = $('#pub_doi_number').val();
                        var pub_document = $('#pub_document').val();

                        var flag = false;


                        if(pub_level =='#'){
                            $('#pub_levelError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if (pub_otherlevel !== '') {
                            if (!/^[a-zA-Z0-9\s]*$/.test(pub_otherlevel.trim())) {
                                $('#pub_other_levelError').text('Please fill the correct value');
                                flag = true;
                            }
                        }
                       
                        /////
                        if(pub_doi_number == ''){
                            $('#pub_doi_numberError').text('DOI Number is missing');
                            flag = true;
                        }else if (!/^[0-9a-zA-Z]*$/.test(pub_doi_number.trim())){
                            $('#pub_doi_numberError').text('Please fill the correct value');
                            flag = true;
                        }

                        ///

                        if(pub_title == ''){
                            $('#pub_titleError').text('Title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pub_title.trim())){
                            $('#pub_titleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(pub_dateofpublication.trim() === ''){
                            $('#pub_dateofpublicatonError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(pub_journal == ''){
                            $('#pub_journalError').text('Journal Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pub_journal.trim())){
                            $('#pub_journalError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(pub_authorrole =='#'){
                            $('#pub_authorroleError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if (pub_link == '') {
                            $('#pub_linkError').text('Web link is missing');
                            flag = true;
                        } else if (!isValidUrl(pub_link)) {
                            $('#pub_linkError').text('Please enter a valid web link');
                            flag = true;
                        }

                         if(pub_document[0].files.length === 0){
                            //alert('file not choosen');
                            $('#pub_documentError').text('Please choose a file');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });


                    // Validation for Books And Publications
                    $(document).on('click','#book_chapter_add_btn',function(e){

                        var bp_title = $('#bp_title').val();
                        var bp_publisher_name = $('#bp_publisher_name').val();
                        var bp_edition = $('#bp_edition').val();
                        var bp_doi = $('#bp_doi').val();
                        var bp_date = $('#bp_date').val();
                        var bp_issue = $('#bp_issue').val();
                        var bp_type = $('#bp_type').val();
                        var bp_chapter_title = $('#bp_chapter_title').val();
                        var bp_start_page_no = $('#bp_start_page_no').val();
                        var bp_end_page_no = $('#bp_end_page_no').val();
                        var bp_book_level = $('#bp_book_level').val();

                        var flag = false;


                        if(bp_title == ''){
                            $('#bp_titleError').text('Title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(bp_title.trim())){
                            $('#bp_titleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(bp_book_level =='#'){
                            $('#bp_booklevelError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(bp_publisher_name == ''){
                            $('#bp_publishernameError').text('Publisher Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(bp_publisher_name.trim())){
                            $('#bp_publishernameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(bp_edition == ''){
                            $('#bp_editionError').text('Edition is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z0-9\s]+$/.test(bp_edition.trim())){
                            $('#bp_editionError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(bp_date.trim() === ''){
                            $('#bp_dateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if (bp_doi !== '') {
                            if (!/^[0-9a-zA-Z]*$/.test(bp_doi.trim())) {
                                $('#bp_doiError').text('Please fill with alphanumeric characters');
                            }
                           
                        } else {
                            // The field is optional and empty, no validation need
                        }
                         if(bp_issue == ''){
                            $('#bp_issueError').text('Issue Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(bp_issue.trim())){
                            $('#bp_issueError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(bp_type =='#'){
                            $('#bp_typeError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if (bp_chapter_title !== '') {
                            if (!/^[a-zA-Z\s]+$/.test(bp_chapter_title.trim())) {
                                $('#bp_chaptertitleError').text('Please fill the correct value');
                                flag = true;
                            }
                        }

                        if (bp_start_page_no !== '') {
                            if (!/^\d+$/.test(bp_start_page_no.trim())) {
                                $('#bp_startpagenoError').text('Please fill the correct value (Only Number)');
                                flag = true;
                            }
                        }

                        if (bp_end_page_no !== '') {
                            if (!/^\d+$/.test(bp_end_page_no.trim())) {
                                $('#bp_endpagenoError').text('Please fill the correct value (Only Number)');
                                flag = true;
                            }
                        }
                        

                        if(flag == true){
                            e.preventDefault();
                        }


                    });

                     // Validation for Funding project
                    $(document).on('click','#funding_add_btn',function(e){

                        var f_proposaltitle = $('#f_proposaltitle').val();
                        var f_role = $('#f_role').val();
                        var f_amount = $('#f_amount').val();
                        var f_proposal_status = $('#f_proposal_status').val();
                        var f_application_date = $('#f_application_date').val();
                        var f_fund_received = $('#f_fund_received').val();
                        var f_project_status = $('#f_project_status').val();
                        var f_completion_year = $('#f_completion_year').val();
                        var f_type = $('#f_type').val();



                        var flag = false;


                        if(f_proposaltitle == ''){
                            $('#f_proposaltitleError').text('Proposal Title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(f_proposaltitle.trim())){
                            $('#f_proposaltitleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(f_role =='#'){
                            $('#f_roleError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(f_type =='#'){
                            $('#f_typeError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(f_amount == ''){
                            $('#f_amountError').text('Amount is missing');
                            flag = true;
                        }else if (!/^\d+(\.\d{1,2})?$/.test(f_amount.trim())){
                            $('#f_amountError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(f_proposal_status =='#'){
                            $('#f_proposal_statusError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(f_application_date.trim() === ''){
                            $('#f_application_dateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if (f_fund_received !== '') {
                            if (!/^\d+(\.\d{1,2})?$/.test(f_fund_received.trim())) {
                                $('#f_fundreceivedError').text('Please fill the correct value');
                                flag = true;
                            }
                        }
                        if(f_project_status =='#'){
                            $('#f_project_statusError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(f_completion_year == ''){
                            $('#f_completion_yearError').text('Completion Year is missing');
                            flag = true;
                        }else if (!/^\d+(\.\d{1,2})?$/.test(f_completion_year.trim())){
                            $('#f_completion_yearError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });

                    //Validation for Consultancy
                    $(document).on('click','#consultancy_store_add_btn',function(e){

                        var consult_consultancy_title = $('#consult_consultancy_title').val();
                        var consult_agency = $('#consult_agency').val();
                        var consult_from_date = $('#consult_from_date').val();
                        var consult_to_date = $('#consult_to_date').val();
                        var consult_amount = $('#consult_amount').val();
                        
                        var flag = false;


                        if(consult_consultancy_title == ''){
                            $('#consult_consultancy_titleError').text('Consultancy Title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(consult_consultancy_title.trim())){
                            $('#consult_consultancy_titleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(consult_agency == ''){
                            $('#consult_agencyError').text('Consultancy Agency Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(consult_agency.trim())){
                            $('#consult_agencyError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(consult_from_date.trim() === ''){
                            $('#consult_from_dateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(consult_to_date.trim() === ''){
                            $('#consult_to_dateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if (consult_amount !== '') {
                            if (!/^\d+$/.test(consult_amount.trim())) {
                                $('#consult_amountError').text('Please fill the correct value (Only digits)');
                                flag = true;
                            }
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                    });


                    //Validation for patents
                    $(document).on('click','#patents_store_add_btn',function(e){

                        var pt_appl_no = $('#pt_appl_no').val();
                        var pt_appl_date = $('#pt_appl_date').val();
                        var pt_title = $('#pt_title').val();
                        var pt_status = $('#pt_status').val();
                        var pt_patent_no = $('#pt_patent_no').val();
                        var pt_publication_no = $('#pt_publication_no').val();
                        var pt_publication_date = $('#pt_publication_date').val();
                        var stream_domain = $('#stream_domain').val();
                         

                        var flag = false;


                        if(pt_appl_no == ''){
                            $('#pt_appl_noError').text('Application Number is missing');
                            flag = true;
                        }else if (!/^\d+(\.\d{1,2})?$/.test(pt_appl_no.trim())){
                            $('#pt_appl_noError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(pt_appl_date.trim() === ''){
                            $('#pt_appl_dateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(pt_title == ''){
                            $('#pt_titleError').text('Title Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pt_title.trim())){
                            $('#pt_titleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(stream_domain == ''){
                            $('#pt_stream_domainError').text('Stream Domain Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(pt_title.trim())){
                            $('#pt_stream_domainError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(pt_status =='#'){
                            $('#pt_statusError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(pt_patent_no == ''){
                            $('#pt_patentnoError').text('Patent Number is missing');
                            flag = true;
                        }else if (!/^\d+(\.\d{1,2})?$/.test(pt_patent_no.trim())){
                            $('#pt_patentnoError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(pt_publication_no == ''){
                            $('#pt_publicationnoError').text('Application Number is missing');
                            flag = true;
                        }else if (!/^\d+(\.\d{1,2})?$/.test(pt_publication_no.trim())){
                            $('#pt_publicationnoError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(pt_publication_date.trim() === ''){
                            $('#pt_publicationdateError').text('Please Select a proper date');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }
                        
                    });

                    //Validaton for Copyrights
                    $(document).on('click','#copyright_store_add_btn',function(e){
                        
                        var rc_copyright_title = $('#rc_copyright_title').val();
                        var rc_copyright_date = $('#rc_copyright_date').val();
                        var rc_author_name = $('#rc_author_name').val();
                        var rc_status = $('#rc_status').val();
                        var rc_description = $('#rc_description').val();

                        var flag = false;


                        if(rc_copyright_title == ''){
                            $('#rc_copyrighttitleError').text('Copyright Title is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(rc_copyright_title.trim())){
                            $('#rc_copyrighttitleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(rc_copyright_date.trim() === ''){
                            $('#rc_copyrightdateError').text('Please Select a proper date');
                            flag = true;
                        }
                        if(rc_author_name == ''){
                            $('#rc_authornameError').text('Author Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(rc_author_name.trim())){
                            $('#rc_authornameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(rc_status =='#'){
                            $('#rc_statusError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if(rc_description == ''){
                            $('#rc_descriptionError').text('Description is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(rc_description.trim())){
                            $('#rc_descriptionError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                        
                    });

                    // Validation for General Achivements
                    $(document).on('click','#achievments_store_add_btn',function(e){

                        var rga_award = $('#rga_award').val();
                        var rga_year = $('#rga_year').val();
                        var rga_details = $('#rga_details').val();
                        
                        var flag = false;
                        
                        if(rga_award == ''){
                            $('#rga_awardError').text('Award Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(rga_award.trim())){
                            $('#rga_awardError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(rga_year == ''){
                            $('#rga_yearError').text('Year is missing');
                            flag = true;
                        }else if (!/^\d{4}$/.test(rga_year.trim())){
                            $('#rga_yearError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(rga_details == ''){
                            $('#rga_detailsError').text('Details is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(rga_details.trim())){
                            $('#rga_detailsError').text('Please fill the correct value');
                            flag = true;
                        }

                        if(flag == true){
                            e.preventDefault();
                        }

                        
                    });


                    // Validation for Reviewer\Editor
                    $(document).on('click','#reviewer_editor_add_btn',function(e){
                        
                        var re_level = $('#re_level').val();
                        var re_other_level = $('#re_other_level').val();
                        var re_title = $('#re_title').val();
                        var re_journal_name = $('#re_journal_name').val();
                        var re_publisher_name = $('#re_publisher_name').val();
                        var re_review_date = $('#re_review_date').val();

                        var flag = false;

                        if(re_level =='#'){
                            $('#re_levelError').text('Please Choose a correct option.');
                            flag = true;
                        }
                        if (re_other_level !== '') {
                            if (!/^[a-zA-Z0-9\s]*$/.test(re_other_level.trim())) {
                                $('#re_other_levelError').text('Please fill the correct value');
                                flag = true;
                            }
                        }
                        if(re_title == ''){
                            $('#re_titleError').text('Title is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(re_title.trim())){
                            $('#re_titleError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(re_journal_name == ''){
                            $('#re_journalnameError').text('Journal Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(re_journal_name.trim())){
                            $('#re_journalnameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(re_publisher_name == ''){
                            $('#re_publishernameError').text('Publisher Name is missing');
                            flag = true;
                        }else if (!/^[a-zA-Z\s]+$/.test(re_publisher_name.trim())){
                            $('#re_publishernameError').text('Please fill the correct value');
                            flag = true;
                        }
                        if(re_review_date.trim() === ''){
                            $('#re_review_dateError').text('Please Select a proper date');
                            flag = true;
                        }  

                        if(flag == true){
                            e.preventDefault();
                        }


                    });

                    $(document).on('click','.reviewer_editor_edit_modal',function(){
                    
                    
                    //var 
                    var attended_modal_no = $(this).attr("btn-val");
                    
                    //alert($(this).find('.caste_edit_modal_no').val());
                    $('.review_modal_no').val(review_modal_no); 
                });
                    

                    

            });
        </script>


        
    
        

@endsection