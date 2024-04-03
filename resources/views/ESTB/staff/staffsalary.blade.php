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
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Staff Overview of <span class="text-primary">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="{{route('ESTB.staff')}}">
                                    Staff
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                    Staff View
                                </li>
                                
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-6">
                                 <!-- For Checking whether status is set or no-->
                                 @if(session('status'))
                                    @if (session('status') == 1)
                                    <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                        <span class='font-bold'>Result: </span> Database transaction Successful
                                    </div>
                                    @elseif(session('status') == 0)
                                    <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                        <span class='font-bold'>Result : </span> Error in Database transaction
                                    </div>
                                
                                    @endif
                                    @php 
                                        Illuminate\Support\Facades\Session::forget('status'); 
                                        header("refresh: 1"); 
                                    @endphp
                                @endif

                            </div>
                        </div>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 14.0619V20H13V14.0619C16.9463 14.554 20 17.9204 20 22H4C4 17.9204 7.05369 14.554 11 14.0619ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Staff Basic Information
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="qualification" data-hs-tab="#qualification-tab" aria-controls="qualification-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12 14V22H4C4 17.5817 7.58172 14 12 14ZM18 21.5L15.0611 23.0451L15.6224 19.7725L13.2447 17.4549L16.5305 16.9775L18 14L19.4695 16.9775L22.7553 17.4549L20.3776 19.7725L20.9389 23.0451L18 21.5ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Qualification
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Department
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Association
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-4" data-hs-tab="#profile-settings-4" aria-controls="profile-settings-4" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                              Designation & Payscale
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-5" data-hs-tab="#profile-settings-5" aria-controls="profile-settings-5" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11 6V14H19C19 18.4183 15.4183 22 11 22C6.58172 22 3 18.4183 3 14C3 9.66509 6.58 6 11 6ZM21 2V4L15.6726 10H21V12H13V10L18.3256 4H13V2H21Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Leaves
                                        </button>
                                        <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="salary" data-hs-tab="#salary-tab" aria-controls="salary-tab" role="tab">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0004 16C14.2095 16 16.0004 14.2091 16.0004 12 16.0004 9.79086 14.2095 8 12.0004 8 9.79123 8 8.00037 9.79086 8.00037 12 8.00037 14.2091 9.79123 16 12.0004 16ZM21.0049 4.00293H3.00488C2.4526 4.00293 2.00488 4.45064 2.00488 5.00293V19.0029C2.00488 19.5552 2.4526 20.0029 3.00488 20.0029H21.0049C21.5572 20.0029 22.0049 19.5552 22.0049 19.0029V5.00293C22.0049 4.45064 21.5572 4.00293 21.0049 4.00293ZM4.00488 15.6463V8.35371C5.13065 8.017 6.01836 7.12892 6.35455 6.00293H17.6462C17.9833 7.13193 18.8748 8.02175 20.0049 8.3564V15.6436C18.8729 15.9788 17.9802 16.8711 17.6444 18.0029H6.3563C6.02144 16.8742 5.13261 15.9836 4.00488 15.6463Z" fill="rgba(255,255,255,1)"></path></svg>
                                             Salary
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
                                                <h5 class="box-title leading-none flex"><i class="ri ri-shield-user-line ltr:mr-2 rtl:ml-2"></i> Personal Information</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div>
                                                        <form action="{{route('ESTB.staff.update',$staff->id)}}" method="post">
                                                            @csrf
                                                            @method('patch')
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2 ">
                                                                    <label class="ti-form-label mb-0 font-bold">First Name</label>
                                                                    <input type="text" name="fname" id="fname" class="my-auto ti-form-input" placeholder="Firstname" value="{{$staff->fname}}">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Middle Name</label>
                                                                    <input type="text" name="mname" class="my-auto ti-form-input" placeholder="Middle Name" value="{{$staff->mname}}">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Last Name</label>
                                                                    <input type="text" name="lname" id="lname" class="my-auto ti-form-input" placeholder="Lastname" value="{{$staff->lname}}">
                                                                </div>
                                                            </div>
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0 pb-4">
                                                                <div class="space-y-2">
                                                                <label class="ti-form-label mb-0 font-bold">Employee Type</label>
                                                                    <select class="ti-form-select" name="employee_type" id="employee_type">
                                                                        <option value="null">Choose a Employee Type</option>
                                                                        <option value="Teaching" {{$staff->employee_type == "Teaching"?'selected':''}}>Teaching</option>
                                                                        <option value="Non-Teaching" {{$staff->employee_type == "Non-Teaching"?'selected':''}}>Non-Teaching</option>
                                                                    </select>
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Email</label>
                                                                    <div class="flex rounded-sm">
                                                                        <input type="text" name="email" id="email_id" readonly class="my-auto ti-form-input" placeholder="youremail" value="{{$user->email}}">
                                                                        <!--span class="px-4 inline-flex items-center min-w-fit ltr:rounded-r-sm rtl:rounded-l-sm border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 text-sm dark:bg-black/20 dark:border-white/10">
                                                                            <span class="text-sm text-gray-500 dark:text-white/70">@git.edu</span>
                                                                        </span-->
                                                                    </div>   
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4"> 
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Religion</label>
                                                                    <select class="ti-form-select" name="religion_id" id="religion_id">
                                                                        <option>Choose a Religion</option>
                                                                        @foreach ($religions as $religion)
                                                                        <option value="{{$religion->id}}" {{$staff->religion_id == $religion->id? 'selected':''}}>{{$religion->religion_name}}</option>
                                                                    @endforeach
                                                            
                                                                        </select>
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Caste Category</label>
                                                                    
                                                                    <select class="ti-form-select" name="castecategory_id" id="castecategory_list">
                                                                        @foreach ($castecategories as $caste)
                                                                        <option value="{{$caste->id}}" {{$staff->castecategory_id == $caste->id? 'selected':''}}>{{$caste->caste_name.'-'.$caste->subcastes_name.'-'.$caste->category.'-'.$caste->category_no}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                
                                                                </div>  
                                                                    <div class="space-y-2 pr-4">
                                                                        <label class="ti-form-label mb-0">Gender</label>
                                                                        <div class="flex gap-x-6">
                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="female" {{$staff->gender == "female"?'checked':''}} class="ti-form-radio" id="hs-radio-group-1">
                                                                                <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Female</label>
                                                                            </div>
                                    
                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="male" {{$staff->gender == "male"?'checked':''}} class="ti-form-radio" id="hs-radio-group-2">
                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Male</label>
                                                                            </div>
                                    
                                                                            <div class="flex">
                                                                                <input type="radio" name="gender" value="others" {{$staff->gender == "others"?'checked':''}} class="ti-form-radio" id="hs-radio-group-3">
                                                                                <label for="hs-radio-group-3" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Others</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Birth</label>
                                                                        <input type="text" name="dob" value="{{$staff->dob}}" class="ti-form-input flatpickr-input date" id="dob"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Joining</label>
                                                                        <input type="text" name="doj" value="{{$staff->doj}}" class="ti-form-input flatpickr-input date" id="doj"
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Superannution</label>
                                                                        <input type="text" name="date_of_superanuation" class="ti-form-input flatpickr-input date" id="dos"
                                                                        value="{{$staff->date_of_superanuation}}" placeholder="Choose date" readonly>
                                                                    </div>
                                                                    
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Confirmation</label>
                                                                        @foreach($staff->associations as $asso)
                                                                            <input type="text" name="date_of_confirmation" class="ti-form-input flatpickr-input date" value="{{($asso->asso_name=='Confirmed'? $asso->pivot->start_date:"" )}}" id=""
                                                                            placeholder="Choose date" readonly>
                                                                        @endforeach
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Date Of Increment</label>
                                                                        <input type="text" name="date_of_increment" value="{{$staff->date_of_increment}}" class="ti-form-input flatpickr-input date" id=""
                                                                            placeholder="Choose date" readonly>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Blood Group</label>
                                                                        <select class="ti-form-select" name="bloodgroup">
                                                                            <option value="null">Choose a Blood Group</option>
                                                                            <option value="A+" {{$staff->bloodgroup == "A+"?'selected':''}}>A + (Positive)</option>
                                                                            <option value="A-" {{$staff->bloodgroup == "A-"?'selected':''}} >A - (Negetive)</option>
                                                                            <option value="B+" {{$staff->bloodgroup == "B+"?'selected':''}}>B + (Positive)</option>
                                                                            <option value="B-" {{$staff->bloodgroup == "B-"?'selected':''}}>B - (Negetive)</option>
                                                                            <option value="AB+" {{$staff->bloodgroup == "AB+"?'selected':''}}>AB + (Positive)</option>
                                                                            <option value="AB-" {{$staff->bloodgroup == "AB-"?'selected':''}}>AB - (Negetive)</option>
                                                                            <option value="O+" {{$staff->bloodgroup == "O+"?'selected':''}}>O + (Positive)</option>
                                                                            <option value="O-" {{$staff->bloodgroup == "O-"?'selected':''}}>O - (Negetive)</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">PAN Card No:</label>
                                                                        <input type="text" name="pan_card" class="my-auto ti-form-input"
                                                                            placeholder="XXXXX XXXXX" value="{{$staff->pan_card}}">
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Adhar Card No:</label>
                                                                        <input type="text" name="adhar_card" class="my-auto ti-form-input"
                                                                            placeholder="XXXX-XXXX-XXXX-XXXX" value="{{$staff->adhar_card}}">
                                                                    </div>
                                                                    <div class="space-y-2">
                                                                        <label class="ti-form-label mb-0 font-bold">Contact No:</label>
                                                                        <input type="text" name="contactno" value="{{$staff->contactno}}" class="my-auto ti-form-input"
                                                                            placeholder="XXXXX-XXXXX">
                                                                    </div>
                                                            </div>
                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0 pb-4"> 
                                                                <div class="space-y-2" id="AICTE_id">
                                                                    <label class="ti-form-label mb-0 font-bold">AICTE ID:</label>
                                                                    <input type="text" name="aicte_id" class="my-auto ti-form-input" value="{{$staff->aicte_id}}"
                                                                        placeholder="AICTE ID">
                                                                </div>
                                                                <div class="space-y-2" id="VTU_id">
                                                                    <label class="ti-form-label mb-0 font-bold">VTU ID:</label>
                                                                    <input type="text" name="vtu_id" class="my-auto ti-form-input" value="{{$staff->vtu_id}}"
                                                                        placeholder="VTU ID">
                                                                </div>
                                                                @if($staff->employee_type=="Non-Teaching")
                                                                <div class="space-y-2" id="ESI_no">
                                                                    <label class="ti-form-label mb-0 font-bold">ESI No:</label>
                                                                    <input type="text" name="esi_no" class="my-auto ti-form-input" value="{{$staff->esi_no}}"
                                                                        placeholder="ESI no">
                                                                </div>
                                                                <div class="space-y-2" id="UN_no">
                                                                    <label class="ti-form-label mb-0 font-bold">UN No:</label>
                                                                    <input type="text" name="un_no" class="my-auto ti-form-input" value="{{$staff->un_no}}"
                                                                        placeholder="Un No">
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <div class="my-5">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Local Address</label>
                                                                    <input type="text" name="local_address" class="my-auto ti-form-input" value="{{$staff->local_address}}" placeholder="Local Address">
                                                                </div>
                                                            </div>
                                                            <div class="my-5">
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Permanant Address</label>
                                                                    <input type="text" name="permanent_address" class="my-auto ti-form-input" value="{{$staff->permanent_address}}" placeholder="Permenant Address">
                                                                </div>
                                                            </div>
                                                            <div class="grid lg:grid-cols-3 gap-3 space-y-2 lg:space-y-0"> 
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency No</label>
                                                                    <input type="text" name="emergency_no" class="ti-form-input" value="{{$staff->emergency_no}}" placeholder="emergency no">
                                                                </div>
                                                                <div class="space-y-2">
                                                                    <label class="ti-form-label mb-0 font-bold">Emergency Name</label>
                                                                    <input type="text" name="emergency_name" class="ti-form-input" value="{{$staff->emergency_name}}" placeholder="emergency name">
                                                                </div>
                                                                
                                                                    
                                                            </div>
                                                            <div class="pt-6 pl-48">
                                                                <button type="submit" class="ti-btn m-0 ti-btn-soft-primary text-right">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z"></path></svg>
                                                                    Update
                                                                </button>
                                                                <!--a href="javascript:void(0);" class="ti-btn m-0 ti-btn-soft-secondary"><i class="ri ri-close-circle-line"></i> Cancel</a-->
                                                            
                                                            </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   

                                            {{-- qualification section start here --}}

                                        <div id="qualification-tab" class="hidden" role="tabpanel" aria-labelledby="qualification">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Qualification History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0 font-bold">Staff Qualification</label>                                     
                                                        <button data-hs-overlay="#change_qualification" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                                 Add New Qualification
                                                        </button>
                                                    </div>
                                                    <div id="change_qualification" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Add New Qualification <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                data-hs-overlay="#change_qualification">
                                                                                <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <form  action="{{route('ESTB.staff.qualification.store',$staff->id)}}" method="post">
                                                                    @csrf
                                                                    
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Qualification</label>
                                                                                <select class="ti-form-select" name="qualifications_id">
                                                                                    @foreach ($qualifications as $qualification)
                                                                                    <option value="{{$qualification->id}}" >{{$qualification->qual_name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Status</label>
                                                                                        <select class="ti-form-select" name="status" id="status">
                                                                                            <option value="Pursuing">Pursuing</option>
                                                                                            <option value="Completed">Completed</option>
                                                                                        </select>
                                                                            </div> 
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Year Of Passing :</label>
                                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                            
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                            </div>
                                            
                                                                                            <input type="text" name="yearofpassing"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                id="date" placeholder="Choose Date" value="" readonly>
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Board Or University</label>
                                                                                        <input type="text" name="boardoruniversity" class="ti-form-input" value="" placeholder="Enter Board or University"/>
                                                                                </div>
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Grade(CGP)</label>
                                                                                        <input type="text" name="grade" class="ti-form-input" value="" placeholder="Enter Your CGP Grade"/>
                                                                                </div>    
                                                                            </div>
                                                                        </div>    
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                data-hs-overlay="#change_qualification">
                                                                                 Close
                                                                        </button>
                                                                        
                                                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Insert"/>
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr class="">
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">S.no</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold ">Qualification Name</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Board/University</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Year of Passing</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Grade</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                    <th scope="col" class="dark:text-white/80 font-bold">Actions</th>                                                                                                 
                                                                </tr>                                                             
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                            @forelse($staff->qualifications as $qualification)
                                                                <tr>
                                                                    <td><span>{{$i++}}</span></td>
                                                                    <td><span>{{$qualification->qual_name}}</span></td>
                                                                    <td><span>{{$qualification->pivot->board_university}}</span></td>
                                                                    <td><span>{{$qualification->pivot->yop}}</span></td>
                                                                    <td><span>{{$qualification->pivot->grade}}</span></td>
                                                                    <td><span>{{$qualification->pivot->status}}</span></td>
                                                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                        <button data-hs-overlay="#qual_edit_modal{{$i}}"
                                                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            <span
                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                role="tooltip">
                                                                                    Edit
                                                                            </span>
                                                                        </button>
                                                                    <div id="qual_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                                            <div class="ti-modal-content">
                                                                                <div class="ti-modal-header">
                                                                                    <h3 class="ti-modal-title">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        Edit New Qualification <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                    </h3>
                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="#qual_edit_modal{{$i}}">
                                                                                        <span class="sr-only">Close</span>
                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor" />
                                                                                        </svg>
                                                                                    </button>
                                                                                </div>
                                                                                <form  action="{{route('ESTB.staff.qualification.update',[$staff->id,$qualification->id])}}" method="post">
                                                                                     @csrf
                                                                                     @method('patch')
                                                                                        <div class="ti-modal-body">
                                                                                            <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                <div class="space-y-2">
                                                                                                    <label class="ti-form-label mb-0 font-bold">Qualification </label>
                                                                                                    <select class="ti-form-select" name="qualifications_id">
                                                                                                        @foreach ($qualifications as $qual)
                                                                                                            
                                                                                                            <option value="{{$qual->id}}" {{($qualification->id==$qual->id? "selected":"") }}  >{{$qual->qual_name}}</option>
                                                                                                            
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                    
                                                                                                </div>
                                                                                                    <div class="space-y-2">
                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Status</label>
                                                                                                            <select class="ti-form-select" name="status" id="status">
                                                                                                                <option value="Persuing" {{($qualification->pivot->status=="Pursuing"? "selected":"")}}>Pursuing</option>
                                                                                                                <option value="Completed" {{($qualification->pivot->status=="Completed"? "selected":"")}}>Completed</option>
                                                                                                            </select>
                                                                                                    </div> 
                                                                                                        <div class="space-y-2">
                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Year Of Passing :</label>
                                                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                            
                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                </div>
                                                                                                                    <input type="text" name="yearofpassing"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                            id="date" placeholder="Choose Date" value="{{$qualification->pivot->yop}}" readonly>
                                                                                                            </div>
                                                                                                        </div>
                                                                                
                                                                                                            <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Board Or University</label>
                                                                                                                <input type="text" name="boardoruniversity" class="ti-form-input" value="{{$qualification->pivot->board_university}}" placeholder="Enter Board or University"/>
                                                                                                            </div>
                                                                                                                <div class="space-y-2">
                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Grade(CGP)</label>
                                                                                                                    <input type="text" name="grade" class="ti-form-input" value="{{$qualification->pivot->grade}}" placeholder="Enter Your CGP Grade"/>
                                                                                                                </div> 
                                                                                                            </div>
                                                                               
                                                                                                        </div>    
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                     data-hs-overlay="#qual_edit_modal{{$i}}">
                                                                                                                    Close
                                                                                                                </button>
                                                                        
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                    
                                                                                                            </div>
                                                                    </form>  
                                                        </div>
                                                    </div>
                                                    </div>


                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                    <form action="{{ route('ESTB.staff.qualification.destroy',[$staff->id,$qualification->id]) }}" method="post">
                                                                    
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


                                                                </tr>
                                                              
                                                             
                                                                @empty
                                                                <tr>
                                                                No records
                                                                </tr>
                                                            @endforelse
                                                           
                                                        
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                        </div>
                                                 
                                                        {{-- qualification section ends here --}}

                                        <div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Department History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0 font-bold">Department</label>
                                                        
                                                    </div>
                                                    <button data-hs-overlay="#change_department" class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                                                        Change Department
                                                    </button>
                                                    <div id="change_department" class="hs-overlay hidden ti-modal">
                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                                                            <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Change Department of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                    </h3>
                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                    data-hs-overlay="#hs-medium-modal">
                                                                    <span class="sr-only">Close</span>
                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                        fill="currentColor" />
                                                                    </svg>
                                                                    </button>
                                                                </div>
                                                                <form  action="{{route('ESTB.staff.department.update',$staff->id)}}" method="post">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <div class="ti-modal-body">
                                                                        <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="space-y-2">
                                                                                <label class="ti-form-label mb-0 font-bold">Department List</label>
                                                                                    @php
                                                                                        $checked="";
                                                                                        $counter = 0;
                                                                                    @endphp
                                                                                    @foreach ($departments as $department)
                                                                                        @foreach($staff->departments as $dept)
                                                                                            @if($department->id==$dept->id && $dept->pivot->status=="active")
                                                                                                @php 
                                                                                                    $checked="checked";
                                                                                                    break;
                                                                                                @endphp
                                                                                            @endif
                                                                                        @endforeach

                                                                                        <div class="flex">
                                                                                                
                                                                                            <input type="checkbox" name="departments[]"  value="{{$department->id}}" {{$checked}} class="ti-form-checkbox mt-0.5" id="hs-checkbox-group-1">
                                                                                            <label for="hs-checkbox-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{$department->dept_name}}</label>
                                                                                        </div>
                                                                                        @php
                                                                                            $checked="";
                                                                                        @endphp
                                                                                  @endforeach
                                                                            </div>
                                                                            
                                                                        </div> 
                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                            <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                    <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                        
                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                        </div>
                                        
                                                                                        <input type="text" name="start_date"
                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                            id="date" placeholder="Choose date" readonly>
                                                                                    </div>
                                                                            </div>
                                                                            <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Reason:</label>
                                                                                    <input type="text" name="reason" class="ti-form-input"/>
                                                                            </div>   
                                                                                    
                                                                        </div>
                                                                        <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                            <div class="space-y-2">
                                                                                <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                <input type="text" name="gcr" class="ti-form-input"/>
                                                                            </div>
                                                                        </div>    
                                                                    </div>    
                                                                    <div class="ti-modal-footer">
                                                                        <button type="button"
                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                        data-hs-overlay="#change_department">
                                                                        Close
                                                                        </button>
                                                                        
                                                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                    
                                                                    </div>
                                                                </form>  
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold ">S.no</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Department Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                
                                                            </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @foreach ($staff->departments as $dept)
                                                                
                                                                <tr class="{{$dept->pivot->status =='active'?'':'bg-gray-200'}}">
                                                                    <td>{{ $i++}}</td>
                                                                    <td>
                                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                        <div class="block w-full my-auto">
                                                                        
                                                                                {{$dept->dept_name}}
                                                                        
                                                                        </div>
                                                                    </div>
                                                                    </td>
                                                                    <td><span>{{\Carbon\Carbon::parse($dept->pivot->start_date)->format('d-M-Y') }}</span></td>
                                                                    <td><span>{{ $dept->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($dept->pivot->end_date)->format('d-M-Y') }}</span></td>
                                                                    <td><span>
                                                                        @php
                                                                                    $sdate=new DateTime($dept->pivot->start_date);
                                                                            
                                                                                    if ($dept->pivot->end_date!=null)
                                                                                        $edate=new DateTime($dept->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                    @endphp    
                                                                        
                                                                           {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                                        </span></td>
                                                                    <td><span>{{$dept->pivot->status}}</span></td>
                                                                    
                                                                    <td>
                                                                        <!--Edit modal for departments staff-->
                                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                        data-hs-overlay="#edit_department{{$i}}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                         <span
                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                    role="tooltip">
                                                                                    Edit
                                                                                </span>
                                                                        </button>
                                                                        <div id="edit_department{{$i}}" class="hs-overlay hidden ti-modal">
                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                <div class="ti-modal-content">
                                                                                    <div class="ti-modal-header">
                                                                                        <h3 class="ti-modal-title">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                             Edit departmernt of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                        </h3>
                                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="#edit_department{{$i}}">
                                                                                        <span class="sr-only">Close</span>
                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor" />
                                                                                        </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <form  action="{{route('ESTB.staff.department.correction',[$staff->id,$dept->id])}}" method="post">
                                                                                        @csrf
                                                                                        @method('patch')
                                                                                        <div class="ti-modal-body">
                                                                                                @if($dept->pivot->status == 'closed')
                                                                                                <br/>
                                                                                                    <div class="flex">
                                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                    </div>
                                                                                                @else 
                                                                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                            <label class="ti-form-label mb-0 font-bold">Departmrent</label>
                                                                                                            <select class="ti-form-select" name="departments_id">
                                                                                                                @foreach ($departments as $department)
                                                                                                                <option value="{{$department->id}}" {{($department->id==$dept->id?'selected':'')}}>{{$department->dept_name}}</option>
                                                                                                                @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div> 
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                    
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                    </div>
                                                                    
                                                                                                                    <input type="text" name="start_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                        id="date" placeholder="Choose date" value="{{$dept->pivot->start_date}}" readonly>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                                <input type="text" name="reason" class="ti-form-input" value="{{$dept->pivot->reason}}"/>
                                                                                                        </div>   
                                                                                                            
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$dept->pivot->gcr}}"/>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                   
                                                                                                    @endif
                                                                                        </div>    
                                                                                        <div class="ti-modal-footer">
                                                                                            <button type="button"
                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                            data-hs-overlay="#edit_department{{$i}}">
                                                                                            Close
                                                                                            </button>
                                                                                            
                                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                        
                                                                                        </div>
                                                                                    </form>  
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--Edit modal for departments staff ends-->
                                                                        <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                        @if($dept->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <form action="{{ route('ESTB.staff.departments.destroy',[$staff->id,$dept->id]) }}" method="post">
                                                                               
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
                                                                        <!-- Delete the entry ends-->
                                                                        @endif
                                                                    </td>
                                                                </tr>        
                                                                @endforeach
                                                            </tbody>
                                                        </table>  
                                                    </div>   
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Association Section starts here -->
                                        <div id="profile-settings-3" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-3">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-lock-line ltr:mr-2 rtl:ml-2"></i> Staff Association</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div>
                                                        <!--modal for changing the assocations-->
                                                        <button data-hs-overlay="#change_association"  class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M11.8611 2.39057C12.8495 1.73163 14.1336 1.71797 15.1358 2.35573L19.291 4.99994H20.9998C21.5521 4.99994 21.9998 5.44766 21.9998 5.99994V14.9999C21.9998 15.5522 21.5521 15.9999 20.9998 15.9999H19.4801C19.5396 16.9472 19.0933 17.9102 18.1955 18.4489L13.1021 21.505C12.4591 21.8907 11.6609 21.8817 11.0314 21.4974C10.3311 22.1167 9.2531 22.1849 8.47104 21.5704L3.33028 17.5312C2.56387 16.9291 2.37006 15.9003 2.76579 15.0847C2.28248 14.7057 2 14.1254 2 13.5109V6C2 5.44772 2.44772 5 3 5H7.94693L11.8611 2.39057ZM4.17264 13.6452L4.86467 13.0397C6.09488 11.9632 7.96042 12.0698 9.06001 13.2794L11.7622 16.2518C12.6317 17.2083 12.7903 18.6135 12.1579 19.739L17.1665 16.7339C17.4479 16.5651 17.5497 16.2276 17.4448 15.9433L13.0177 9.74551C12.769 9.39736 12.3264 9.24598 11.9166 9.36892L9.43135 10.1145C8.37425 10.4316 7.22838 10.1427 6.44799 9.36235L6.15522 9.06958C5.58721 8.50157 5.44032 7.69318 5.67935 7H4V13.5109L4.17264 13.6452ZM14.0621 4.04306C13.728 3.83047 13.3 3.83502 12.9705 4.05467L7.56943 7.65537L7.8622 7.94814C8.12233 8.20827 8.50429 8.30456 8.85666 8.19885L11.3419 7.45327C12.5713 7.08445 13.8992 7.53859 14.6452 8.58303L18.5144 13.9999H19.9998V6.99994H19.291C18.9106 6.99994 18.5381 6.89148 18.2172 6.68727L14.0621 4.04306ZM6.18168 14.5448L4.56593 15.9586L9.70669 19.9978L10.4106 18.7659C10.6256 18.3897 10.5738 17.9178 10.2823 17.5971L7.58013 14.6247C7.2136 14.2215 6.59175 14.186 6.18168 14.5448Z" fill="rgba(255,255,255,1)"></path></svg>
                                                            Change association
                                                        </button>
                                                        <div id="change_association" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Change Association of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#change_association">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('ESTB.staff.association.update',$staff->id)}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label class="ti-form-label mb-0 font-bold">Association</label>
                                                                                    <select class="ti-form-select" name="associations_id" id="associations_id">
                                                                                    
                                                                                        @foreach ($associations as $association)
                                                                                        <option value="{{$association->id}}" {{($association->id==$staff->associations[0]->id?'selected':'')}}>{{$association->asso_name}}</option>
                                                                                    @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                @if($staff->employee_type == "Teaching")
                                                                                    <!--both of these div's are hidden, they are made visible through jquery by checking the association above-->
                                                                                    <!-- for displaying the consolidated pay option if the association choosen is contractual-->
                                                                                    <div class="space-y-2 hidden" id="consolidated_pay_div">
                                                                                        <label class="ti-form-label mb-0 font-bold">Consolidated Pay</label>
                                                                                        <input type="text" name="consolidated_pay" id="consolidated_pay" class="ti-form-input"/>
                                                                                    
                                                                                    </div>
                                                                                 

                                                                                @endif
                                                                            </div> 
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                            
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                            </div>
                                            
                                                                                            <input type="text" name="start_date"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                id="date" placeholder="Choose date" readonly>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Reason:</label>
                                                                                        <input type="text" name="reason" class="ti-form-input"/>
                                                                                </div>   
                                                                                    
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                    <input type="text" name="gcr" class="ti-form-input"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>    
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#change_association">
                                                                            Close
                                                                            </button>
                                                                            
                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                        
                                                                        </div>
                                                                    </form>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">S.no</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Association Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duartion</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Status</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                
                                                            </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @foreach ($staff->associations as $association)
                                                                <tr class="{{$association->pivot->status=='active'?'':'bg-gray-300'}}">
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>
                                                                    <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                        <div class="block w-full my-auto">
                                                                                {{$association->asso_name}}
                                                                        </div>
                                                                    </div>
                                                                    </td>
                                                                    <td><span>{{\Carbon\Carbon::parse($association->pivot->start_date)->format('d-M-Y') }}</span></td>
                                                                    <td><span>{{$association->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($association->pivot->end_date)->format('d-M-Y')  }}</span></td>
                                                                    <td><span>
                                                                        @php
                                                                             $sdate=new DateTime($association->pivot->start_date);
                                                                        
                                                                            
                                                                        if($association->pivot->end_date!=null)
                                                                                $edate=new DateTime($association->pivot->end_date);
                                                                        else
                                                                                $edate=Carbon\Carbon::now();
                                                                        
                                                                        
                                                                        $difference=$sdate->diff($edate);
                                                                        @endphp    
                                                                        
                                                                           {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                        
                                                                    </span></td>
                                                                    <td><span>{{$association->pivot->status}}</span></td>
                                                                    <td>
                                                                            <!--Edit modal for staff asssociation-->
                                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                        data-hs-overlay="#edit_asociation{{$i}}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            <span
                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                    role="tooltip">
                                                                                    Edit
                                                                            </span>
                                                                        </button>
                                                                        <div id="edit_asociation{{$i}}" class="hs-overlay hidden ti-modal">
                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                <div class="ti-modal-content">
                                                                                    <div class="ti-modal-header">
                                                                                        <h3 class="ti-modal-title">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                             Edit Association of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                        </h3>
                                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                        data-hs-overlay="#edit_asociation{{$i}}">
                                                                                        <span class="sr-only">Close</span>
                                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                            fill="currentColor" />
                                                                                        </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <form  action="{{route('ESTB.staff.association.correction',[$staff->id,$association->id])}}" method="post">
                                                                                        @csrf
                                                                                        @method('patch')
                                                                                        <div class="ti-modal-body">
                                                                                                @if($association->pivot->status == 'inactive')
                                                                                                <br/>
                                                                                                    <div class="flex">
                                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                    </div>
                                                                                                @else 
                                                                                                    <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                            <label class="ti-form-label mb-0 font-bold">Association</label>
                                                                                                            <select class="ti-form-select" name="associations_id" id="associations_id_edit">
                                                                                                                @foreach ($associations as $assoc)
                                                                                                                <option value="{{$assoc->id}}" {{($assoc->id==$association->id?'selected':'')}}>{{$assoc->asso_name}}</option>
                                                                                                            @endforeach
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        @if($staff->employee_type == "Teaching")
                                                                                                            <div class="space-y-2 hidden" id="consolidated_pay_div_edit">
                                                                                                                <label class="ti-form-label mb-0 font-bold">Consolidated Pay</label>
                                                                                                                <input type="text" name="consolidated_pay" id="consolidated_pay_edit" class="ti-form-input" />
                                                                                                            
                                                                                                            </div>
                                                                                                             <!-- for displaying the teaching payscales if the association is not contractual (others)-->
                                                                                        
                                                                                                                <div class="space-y-2 hidden" id="payscale_id_div_edit">
                                                                                                                    <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                                                    <select class="ti-form-select" name="payscales_id" id="">
                                                                                                                    
                                                                                                                        @foreach($payscales AS $payscale)
                                                                                                                        {{-- @if($designations[0]->emp_type =="Teaching") --}}
                                                                                                                            <option value="{{$payscale->id}}">{{$payscale->payscale_title.'-'.$payscale->basepay.'-'.$payscale->maxpay.'-'.$payscale->agp}}</option>
                                                                                                                        {{-- @endif   --}}
                                                                                                                    @endforeach
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                        @else 
                                                                                                            <!-- non teaching payscales pending-->
                                                                                                        @endif
                                                                                                        
                                                                                                    </div> 
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                    
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                    </div>
                                                                    
                                                                                                                    <input type="text" name="start_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                        id="date" placeholder="Choose date" value="{{$association->pivot->start_date}}" readonly>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                                <input type="text" name="reason" class="ti-form-input" value="{{$association->pivot->reason}}"/>
                                                                                                        </div>   
                                                                                                            
                                                                                                    </div>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$association->pivot->gcr}}"/>
                                                                                                        </div>
                                                                                                        
                                                                                                    </div>
                                                                                                    @endif
                                                                                        </div>    
                                                                                        <div class="ti-modal-footer">
                                                                                            <button type="button"
                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                            data-hs-overlay="#edit_asociation{{$i}}">
                                                                                            Close
                                                                                            </button>
                                                                                            
                                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                        
                                                                                        </div>
                                                                                    </form>  
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!--Edit modal for departments staff ends-->
                                                                        <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                        @if($association->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                            <form action="{{ route('ESTB.staff.associations.destroy',[$staff->id,$association->id]) }}" method="post">
                                                                               
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
                                                                        <!-- Delete the entry ends-->
                                                                        @endif
                                                                    </td>
                                                                </tr>        
                                                                @endforeach
                                                            </tbody>
                                                        </table>  
                                                    </div> 
                                            
                                                </div>
                                            </div>
                                        </div>
                                        <!--Desination & Payscale section starts here-->
                                        <div id="profile-settings-4" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-4">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-account-circle-line ltr:mr-2 rtl:ml-2"></i> Desination And Pay Scale</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div class="">
                                                        <!--modal for changing the designations-->
                                                        <button data-hs-overlay="#change_designation"
                                                        class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 15.2454V22.1169C17 22.393 16.7761 22.617 16.5 22.617C16.4094 22.617 16.3205 22.5923 16.2428 22.5457L12 20L7.75725 22.5457C7.52046 22.6877 7.21333 22.6109 7.07125 22.3742C7.02463 22.2964 7 22.2075 7 22.1169V15.2454C5.17107 13.7793 4 11.5264 4 9C4 4.58172 7.58172 1 12 1C16.4183 1 20 4.58172 20 9C20 11.5264 18.8289 13.7793 17 15.2454ZM12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15ZM12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9C16 11.2091 14.2091 13 12 13Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    
                                                            Change Designation & Payscale
                                                        
                                                        </button>
                                                        <div id="change_designation" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Change Designation And Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#change_designation">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('ESTB.staff.designationpayscale.update',$staff->id)}}" method="post">
                                                                        @csrf
                                                                        @method('patch')
                                                                        <div class="ti-modal-body">
                                                                            
                                                                            <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label class="ti-form-label mb-0 font-bold">Designation</label>
                                                                                    <select class="ti-form-select" name="designations_id" id="change_payscale_designation_id">
                                                                                        
                                                                                            @if ($staff->employee_type=='Teaching')
                                                                                                @foreach($designations AS $designation)
                                                                                                    @if($designation->emp_type =="Teaching")
                                                                                                    
                                                                                                        <option value="{{$designation->id}}" {{($designation->id == $staff->designations[0]->id ? 'selected':'')}}>{{$designation->design_name}}</option>
                                                                                                    
                                                                                                        @endif  
                                                                                                @endforeach  
                                                                                            @else
                                                                                                @foreach($designations AS $designation)
                                                                                                    @if($designation->emp_type =="Non-Teaching")
                                                                                                        <option value="{{$designation->id}}" {{($designation->id == $staff->designations[0]->id ? 'selected':'')}}>{{$designation->design_name}}</option>
                                                                                                    @endif
                                                                                                @endforeach  
                                                                                            @endif
                                                                                    </select>
                                                                                </div>
                                                                                <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                    <div class="space-y-2 pr-4">
                                                                                        <label class="ti-form-label mb-0 font-bold">Pay Type</label>
                                                                                        <div class="flex gap-x-6">
                                                                                            @if($staff->employee_type == "Non-Teaching")
                                                                                                <div class="flex" id="Consolidated">
                                                                                                    <input type="radio" name="pay_type" value="Consolidated"  {{count($staff->ntcpayscale)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-1 pay_type">
                                                                                                    <label for="hs-radio-group-1" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Consolidated</label>
                                                                                                </div>
                                                                                            @endif
                                                                                            <input type="hidden" class="" id="change_payscale_employee_type" value="{{$staff->employee_type}}"/>
                                                                                            <div class="flex">
                                                                                                <input type="radio" name="pay_type" value="Payscale"  id="Payscale" {{count($staff->ntpayscale)>0 ||  count($staff->teaching_payscale) >0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Payscale</label>
                                                                                            </div>
    
                                                                                            <div class="flex">
                                                                                                <input type="radio" name="pay_type" value="Fixed" id="Fixed" {{count($staff->fixed_nt_pay) >0 ||  count($staff->consolidated_teaching_pay)>0?'checked="checked"':''}} class="ti-form-radio" id="hs-radio-group-2 pay_type">
                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Fixed</label>
                                                                                            </div>
                                                    
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                                    @if ($staff->employee_type=='Teaching')
                                                                                        
                                                                                            @if($staff->associations[0]->asso_name  == "Contractual")
                                                                                                <div class="space-y-2" id="teahing_consolidated_pay_div"> <!--Fixed pay div-->
                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label>
                                                                                                    <input type="text" name="pay" class="ti-form-input" value="{{$staff->consolidated_teaching_pay[0]->pay}}"/>
                                                                                                </div>
                                                                                            @else 
                                                                                                <div class="space-y-2" id="t_payscale_div">
                                                                                                    <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                                        <select class="ti-form-select" name="payscales_id" id="teaching_payscales_id">
                                                                                                            @foreach($payscales AS $payscale)
                                                                                                            {{-- @if($designations[0]->emp_type =="Teaching") --}}
                                                                                                                <option value="{{$payscale->id}}" {{($payscale->id == $staff->teaching_payscale[0]->id ? 'selected':'')}}>{{$payscale->payscale_title.'-'.$payscale->basepay.'-'.$payscale->maxpay.'-'.$payscale->agp}}</option>
                                                                                                            {{-- @endif   --}}
                                                                                                        @endforeach
                                                                                                        </select>
                                                                                                </div>       
                                                                                            @endif      
                                                                                    @else
                                                                                        @if(count($staff->ntpayscale) >0)
                                                                                            <div class="space-y-2" id="nt_payscale_div">
                                                                                                <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                                <select class="ti-form-select" name="payscales_id">
                                                                                                @foreach($payscales AS $design_payscales)
                                                                                                    @foreach ($design_payscales->ntpayscales as $payscale_ntp)

                                                                                                    <option value="{{$payscale_ntp->id}}" {{($payscale_ntp->id == $staff->ntpayscale[0]->pivot->ntpayscle_id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntp->payband}}</option>
                                                                                            
                                                                                                    @endforeach
                                                                                                @endforeach
                                                                                                </select>
                                                                                            </div>    
                                                                                        @endif  
                                                                                        @if(count ($staff->ntcpayscale)  >0) <!-- For displaying th consolidated pay for non teaching staff-->
                                                                                            <div class="space-y-2" id="nt_consolidated_pay_div">
                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay </label>
                                                                                                    <select class="ti-form-select" name="payscales_id" id="nt_consolidated_pay">
                                                                                                        @foreach($payscales AS $design_payscales) 
                                                                                                            @foreach ($design_payscales->ntcpayscales as $payscale_ntc)
                                                                                                                {{-- {{$payscale_ntc}} --}}
                                                                                                                <option value="{{$payscale_ntc->id}}" {{($payscale_ntc->id == $staff->ntcpayscale[0]->pivot->ntpayscale_id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntc->basepay.'-'.$payscale_ntc->allowance.'- Year : '.$payscale_ntc->year}}</option>
                                                                                                            @endforeach 
                                                                                                        @endforeach 
                                                                                                    </select>
                                                                                            </div>
                                                                                        @endif
                                                                                        @if(count($staff->fixed_nt_pay) >0) <!-- For displaying th consolidated pay for non teaching staff-->
                                                                                        <div class="space-y-2" id="nt_fixed_pay_div">
                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label>
                                                                                                @foreach ($staff->fixed_nt_pay as $fntp)
                                                                                                    @if ($fntp->end_date == null)
                                                                                                    <input type="text" class="ti-form-input" value="{{$fntp->pay}}"/>
                                                                                        
                                                                                                    @endif
                                                                                                @endforeach
                                                                                        </div>        
                                                                                        @endif
                                                                                    @endif
                                                                                    <div class="" id="ajax_data_populate">

                                                                                    </div>   
                                                                                @if($staff->employee_type=="Non-Teaching" && $staff->associations[0]->asso_name  == "Confirmed" )
                                                                                <div class="space-y-2" id="payscalelevel">
                                                                                    <label class="ti-form-label mb-0 font-bold">Increment Level </label>
                                                                                    <select class="ti-form-select" name="payscale_level" id="payscale_level">
                                                                                        <option value="null">Choose the payscale level </option>
                                                                                        <option value="1" {{$staff->ntpayscale[0]->pivot->level==1? "selected":""}}>Increment Level-1</option>
                                                                                        <option value="2" {{$staff->ntpayscale[0]->pivot->level==2? "selected":""}}>Increment Level-2</option>
                                                                                        <option value="3" {{$staff->ntpayscale[0]->pivot->level==3? "selected":""}}>Increment Level-3</option>
                                                                                    </select>
                                                                                </div>
                                                                                @endif
                                                                            </div> 
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                            
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                            </div>
                                            
                                                                                            <input type="text" name="start_date"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                id="date" placeholder="Choose date" readonly>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Reason:</label>
                                                                                        <input type="text" name="reason" class="ti-form-input"/>
                                                                                </div>   
                                                                                        
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                    <input type="text" name="gcr" class="ti-form-input"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#change_designation">
                                                                            Close
                                                                            </button>
                                                                            
                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                        
                                                                        </div>
                                                                    </form>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- The tabluar representation of designation and payscale data-->
                                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                        <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                            <thead class="bg-gray-50 dark:bg-black/20">
                                                                <tr>
                                                                    <th rowspan="2" scope="col" class="dark:text-white/80 font-bold">S.no</th>
                                                                    <th scope="col" colspan="5" class="dark:text-white/80 font-bold">Designation Details
                                                                    </th>
                                                                    <th scope="col" colspan="5" class="dark:text-white/80 text-center font-bold">Pay Scale Details</th>
                                                                </tr>
                                                            <tr class="">
                                                                <th scope="col" class="dark:text-white/80 font-bold">Designation Name</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Duration</th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                <th scope="col" class="dark:text-white/20 text-center font-bold">Payscale Title</th>
                                                                <th scope="col" class="dark:text-white/80 text-center font-bold">Start Date</th>
                                                                <th scope="col" class="dark:text-white/80 text-center font-bold">End Date</th>
                                                                <th scope="col" class="dark:text-white/80 text-center font-bold">Duration </th>
                                                                <th scope="col" class="dark:text-white/80 font-bold">Actions</th>
                                                                
                                                            </tr>
                                                            </thead>
                                                            @php
                                                                $i=1;
                                                            @endphp
                                                            <tbody class="">
                                                                @foreach ($staff->designations as $designation)
                                                                    @if($designation->isadditional == 0 ) <!--For working with regular designations-->
                                                                        @php
                                                                        $rowcount=0;
                                                                            if($staff->employee_type=="Teaching" )
                                                                            {
                                                                                if($staff->teaching_payscale !=null){
                                                                                    foreach($staff->teaching_payscale as $tp)
                                                                                    {
                                                                                        if($designation->pivot->end_date==null && $tp->pivot->start_date>=$designation->pivot->start_date)
                                                                                        {    
                                                                                            $rowcount++;
                                                                                            
                                                                                        }
                                                                                        elseif($tp->pivot->start_date>=$designation->pivot->start_date && $tp->pivot->end_date<=$designation->pivot->end_date && $tp->pivot->end_date!=null)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        
                                                                                        }
                                                                                    }
                                                                                }
                                                                                $rowcount++;
                                                                                if($staff->consolidated_teaching_pay !=null){
                                                                                    foreach($staff->consolidated_teaching_pay as $ctp){
                                                                                        if($designation->pivot->end_date==null && $ctp->start_date>=$designation->pivot->start_date)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        }
                                                                                        elseif($ctp->start_date>=$designation->pivot->start_date && $ctp->end_date<=$designation->pivot->end_date && $ctp->pivot->end_date!=null)
                                                                                        {
                                                                                            $rowcount++;
                                                                                        
                                                                                        }
                                                                                    }
                                                                                }
                                                                                
                                                                                $rowcount++;
                                                                            }
                                                                            
                                                                        @endphp

                                                                        <tr class="{{$designation->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                            <td rowspan={{$rowcount}}>{{ $i++ }}  </td>
                                                                            <td rowspan={{$rowcount}}>
                                                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                                                    <div class="block w-full my-auto">
                                                                                    {{$designation->design_name}}
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td rowspan={{$rowcount}}><span>{{\Carbon\Carbon::parse($designation->pivot->start_date)->format('d-M-Y') }}</span></td>
                                                                            <td rowspan={{$rowcount}}><span>{{$designation->pivot->end_date==null?'--NA--': \Carbon\Carbon::parse($designation->pivot->end_date)->format('d-M-Y') }}</span></td>
                                                                            <td rowspan={{$rowcount}}><span>
                                                                                @php
                                                                                    $sdate=new DateTime($designation->pivot->start_date);
                                                                            
                                                                                    if ($designation->pivot->end_date!=null)
                                                                                        $edate=new DateTime($designation->pivot->end_date);
                                                                                    else
                                                                                        $edate=Carbon\Carbon::now();
                                                                                        $difference=$sdate->diff($edate);
                                                                                    @endphp    
                                                                        
                                                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                                             </span>
                                                                            </td>
                                                                            <td rowspan={{$rowcount}}>
                                                                                @if($designation->pivot->end_date == null)
                                                                                     <!--Edit modal for staff designation-->
                                                                                    <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                        data-hs-overlay="#edit_designation{{$i}}">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            Edit
                                                                                        </span>
                                                                                    </button>
                                                                                    <div id="edit_designation{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                            <div class="ti-modal-content">
                                                                                                <div class="ti-modal-header">
                                                                                                    <h3 class="ti-modal-title">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                        Edit Designation of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                    </h3>
                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                        data-hs-overlay="#edit_designation{{$i}}">
                                                                                                        <span class="sr-only">Close</span>
                                                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                                <path
                                                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                fill="currentColor" />
                                                                                                            </svg>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <form  action="{{route('ESTB.staff.designation.currentupdate',[$staff->id,$designation->id])}}" method="post">
                                                                                                    @csrf
                                                                                                    @method('patch')
                                                                                                    <div class="ti-modal-body">
                                                                                                        @if($designation->pivot->status == 'inactive')
                                                                                                            <br/>
                                                                                                            <div class="flex">
                                                                                                                <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                            </div>
                                                                                                        @else 
                                                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                                <div class="space-y-2">
                                                                                                                    <label class="ti-form-label mb-0 font-bold">Designations</label>
                                                                                                                    <select class="ti-form-select" name="designations_id">
                                                                                                                        @foreach ($designations as $design)
                                                                                                                            <option value="{{$design->id}}" {{($design->id==$designation->id?'selected':'')}}>{{$design->design_name}}</option>
                                                                                                                        @endforeach
                                                                                                                    </select>
                                                                                                                </div>
                                                                                                            
                                                                                                            </div> 
                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                <div class="space-y-2">
                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                        
                                                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                            </div>
                                                                        
                                                                                                                            <input type="text" name="start_date"
                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                id="date" placeholder="Choose date" value="{{$designation->pivot->start_date}}" readonly>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                            
                                                                                                                <div class="space-y-2">
                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                                    <input type="text" name="reason" class="ti-form-input" value="{{$designation->pivot->reason}}"/>
                                                                                                                </div>   
                                                                                                                
                                                                                                            </div>
                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                <div class="space-y-2">
                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                                    <input type="text" name="gcr" class="ti-form-input" value="xxxxxxxx"/>
                                                                                                                </div>
                                                                                                            
                                                                                                            </div>
                                                                                                        @endif
                                                                                                    </div>    
                                                                                                    <div class="ti-modal-footer">
                                                                                                        <button type="button"
                                                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                            data-hs-overlay="#edit_designation{{$i}}">
                                                                                                            Close
                                                                                                        </button>
                                                                                                
                                                                                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                            
                                                                                                    </div>
                                                                                                </form>  
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--Edit modal for designation staff ends-->
                                                                                    <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                                    @if($designation->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                            <form action="{{ route('ESTB.staff.designation.currentdestroy',[$staff->id,$designation->id]) }}" method="post">
                                                                                        
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
                                                                                        <!-- Delete the entry ends-->
                                                                                    @endif
                                                                                @endif
                                                                            </td>
                                                                        </tr>

                                                                        <!-- Payscale and Designation Display-->
                                                                        @if($staff->employee_type=='Teaching')
                                                                            
                                                                         @if($staff->teaching_payscale != null) <!-- For checking if teaching payscale is null-->
                                                                                  
                                                                            @forelse($staff->teaching_payscale as $payscale)
                                                                                @if($designation->pivot->end_date!=null && $designation->isadditonal==0)
                                                                                    @if($payscale->pivot->start_date>=$designation->pivot->start_date && $payscale->pivot->end_date!=null && $payscale->pivot->end_date<=$designation->pivot->end_date)
                                                                                        <tr class="{{$payscale->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                                                
                                                                                            <td><span>{{$payscale->payscale_title.'-'.$payscale->agp}}</span></td>
                                                                                            <td><span>{{\Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')}}</span></td>
                                                                                            <td><span>{{$payscale->pivot->end_date ==null ?'--NA--': \Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y')}}</span></td>
                                                                                            <td><span>
                                                                                                @php
                                                                                                    $sdate=new DateTime($payscale->pivot->start_date);
                                                                                
                                                                                                    if ($payscale->pivot->end_date!=null)
                                                                                                        $edate=new DateTime($payscale->pivot->end_date);
                                                                                                    else
                                                                                                        $edate=Carbon\Carbon::now();
                                                                                                        $difference=$sdate->diff($edate);
                                                                                                @endphp    
                                                                            
                                                                                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                            </span></td>
                                                                                        </tr>    
                                                                                    @endif
                                                                                @else
                                                                                    @if($payscale->pivot->end_date==null|| ($payscale->pivot->end_date>$designation->pivot->start_date ))
                                                                                        <tr class="{{$payscale->pivot->status =='inactive'?'bg-gray-200':''}}"> 
                                                                                                        
                                                                                            <td><span>{{$payscale->payscale_title.'-'.$payscale->agp}}</span></td>
                                                                                            <td><span>{{ \Carbon\Carbon::parse($payscale->pivot->start_date)->format('d-M-Y')}}</span></td>
                                                                                            <td><span>{{($payscale->pivot->end_date ==null ?'--NA--':\Carbon\Carbon::parse($payscale->pivot->end_date)->format('d-M-Y'))}}</span></td>
                                                                                            <td><span>
                                                                                                @php
                                                                                                    $sdate=new DateTime($payscale->pivot->start_date);
                                                                        
                                                                                                    if ($payscale->pivot->end_date!=null)
                                                                                                        $edate=new DateTime($payscale->pivot->end_date);
                                                                                                    else
                                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                                    $difference=$sdate->diff($edate);
                                                                                                                @endphp    
                                                                    
                                                                                                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                            </span></td>
                                                                                            <td>
                                                                                                @if($payscale->pivot->end_date == null)
                                                                                                            <!--Edit modal for staff Payscale teaching-->
                                                                                                    <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                                        data-hs-overlay="#edit_teaching_payscale{{$i}}">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                        <span
                                                                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                                    role="tooltip">
                                                                                                                    Edit
                                                                                                                </span>
                                                                                                    </button>
                                                                                                        <div id="edit_teaching_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                                <div class="ti-modal-content">
                                                                                                                    <div class="ti-modal-header">
                                                                                                                        <h3 class="ti-modal-title">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                                        </h3>
                                                                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                            data-hs-overlay="#edit_teaching_payscale{{$i}}">
                                                                                                                            <span class="sr-only">Close</span>
                                                                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <path
                                                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                                    fill="currentColor" />
                                                                                                                            </svg>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <form  action="{{route('ESTB.staff.payscale.update',[$staff->id,$payscale->id])}}" method="post">
                                                                                                                        @csrf
                                                                                                                        @method('patch')
                                                                                                                            <div class="ti-modal-body">
                                                                                                                                @if($payscale->pivot->status == 'inactive')
                                                                                                                                    <br/>
                                                                                                                                    <div class="flex">
                                                                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                                                    </div>
                                                                                                                                @else 
                                                                                                                                    <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                                                    
                                                                                                                                        <div class="space-y-2">
                                                                                                                                            @if ($staff->employee_type=='Teaching')
                                                                                                                                            
                                                                                                                                                @if($staff->associations[0]->asso_name  == "Contractual")
                                                                                                                                                    <div class="space-y-2">
                                                                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay </label>
                                                                                                                                                        <input type="text" name="pay" class="ti-form-input" value="{{$staff->consolidated_teaching_pay[0]->pay}}"/>
                                                                                                                                                    </div>
                                                                                                                                                @else 
                                                                                                                                                    <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                                                                                        <select class="ti-form-select" name="payscales_id">
                                                                                                                                                            @foreach($payscales AS $t_payscale)
                                                                                                                                                            {{-- @if($designations[0]->emp_type =="Teaching") --}}
                                                                                                                                                                <option value="{{$t_payscale->id}}" {{($t_payscale->id == $staff->teaching_payscale[0]->id ? 'selected':'')}}>{{$t_payscale->payscale_title.'-'.$t_payscale->basepay.'-'.$t_payscale->maxpay.'-'.$t_payscale->agp}}</option>
                                                                                                                                                            {{-- @endif   --}}
                                                                                                                                                             @endforeach
                                                                                                                                                        </select>
                                                                                                                                                @endif      
                                                                                                                                            @else
                                                                                                                                                @if($staff->associations[0]->asso_name  == "Confirmed")
                                                                                                                                                    <label class="ti-form-label mb-0 font-bold">Payscale</label>
                                                                                                                                                    <select class="ti-form-select" name="payscales_id">
                                                                                                                                                    @foreach($payscales AS $design_payscales)
                                                                                                                                                        @foreach ($design_payscales->ntpayscales as $payscale_ntp)
                                                        
                                                                                                                                                        <option value="{{$payscale_ntp->id}}" {{($payscale_ntp->id == $staff->ntpayscale[0]->pivot->ntpayscle_id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntp->payband}}</option>
                                                                                                                                                
                                                                                                                                                        @endforeach
                                                                                                                                                    @endforeach  
                                                                                                                                                @else <!-- For displaying th consolidated pay for non teaching staff-->
                                                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay </label>
                                                                                                                                                        <select class="ti-form-select" name="payscales_id">
                                                                                                                                                            @foreach($payscales AS $design_payscales) 
                                                                                                                                                                                                                        
                                                                                                                                                                    @foreach ($design_payscales->ntcpayscales as $payscale_ntc)
                                                                                                                                                                        {{-- {{$payscale_ntc}} --}}
                                                                                                                                                                        <option value="{{$payscale_ntc->id}}" {{($payscale_ntc->id == $staff->ntcpayscale[0]->pivot->ntpayscale_id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntc->basepay.'-'.$payscale_ntc->allowance.'- Year : '.$payscale_ntc->year}}</option>
                                                                                                                                                                    @endforeach 
                                                                                                                                                            @endforeach 
                                                                                                                                                        </select>
                                                                                                                                                @endif
                                                                                                                                            @endif
                                                                                                                                        </div>
                                                                                                                                        
                                                                                                                                    </div> 
                                                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                                        <div class="space-y-2">
                                                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                                                    
                                                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                                                    </div>
                                                                                                    
                                                                                                                                                    <input type="text" name="start_date"
                                                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                                        id="date" placeholder="Choose date" value="{{$payscale->pivot->start_date}}" readonly>
                                                                                                                                                </div>
                                                                                                                                        </div>
                                                                                                                                        
                                                                                                                                        <div class="space-y-2">
                                                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                                                                <input type="text" name="reason" class="ti-form-input" value="{{$payscale->pivot->reason}}"/>
                                                                                                                                        </div>   
                                                                                                                                            
                                                                                                                                    </div>
                                                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                                        <div class="space-y-2">
                                                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$payscale->pivot->gcr}}"/>
                                                                                                                                        </div>
                                                                                                                                        
                                                                                                                                    </div>
                                                                                                                                @endif
                                                                                                                            </div>    
                                                                                                                            <div class="ti-modal-footer">
                                                                                                                                <button type="button"
                                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                                    data-hs-overlay="#edit_teaching_payscale{{$i}}">
                                                                                                                                    Close
                                                                                                                                </button>
                                                                                                                            
                                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                        
                                                                                                                            </div>
                                                                                                                        
                                                                                                                    </form>  
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!--Edit modal for payscales staff ends-->
                                                                                                                <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                                                                @if($payscale->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                                                                        <form action="{{ route('ESTB.staff.payscale.destroy',[$staff->id,$payscale->id]) }}" method="post">
                                                                                                                        
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
                                                                                                                    <!-- Delete the entry ends-->
                                                                                                                @endif
                                                                                                    @endif

                                                                                            </td>
                                                                                        </tr>   
                                                                                    @endif
                                                                                    
                                                                                            
                                                                                @endif
                                                                            @empty

                                                                        @endforelse
                                                                    @endif 
                                                                            <!-- For displaying the consolidated payscales for teaching staff.-->
                                                                            @if($staff->consolidated_teaching_pay != null)
                                                                                @forelse ($staff->consolidated_teaching_pay as $cons_teaching_pay)
                                                                                    @if($designation->pivot->end_date!=null && $designation->isadditonal==0)
                                                                                        @if($cons_teaching_pay->pivot->start_date>=$designation->pivot->start_date && $cons_teaching_pay->pivot->end_date!=null && $cons_teaching_pay->pivot->end_date<=$designation->pivot->end_date)
                                                                                            <tr class="{{$cons_teaching_pay->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                                                
                                                                                                <td><span>{{$cons_teaching_pay->pivot->pay}}</span></td>
                                                                                                <td><span>{{\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')}}</span></td>
                                                                                                <td><span>{{$cons_teaching_pay->pivot->end_date ==null ?'--NA--': \Carbon\Carbon::parse($cons_teaching_pay->pivot->end_date)->format('d-M-Y')}}</span></td>
                                                                                                <td><span>
                                                                                                        @php
                                                                                                            $sdate=new DateTime($cons_teaching_pay->pivot->start_date);
                                                                                
                                                                                                            if ($cons_teaching_pay->end_date!=null)
                                                                                                                $edate=new DateTime($cons_teaching_pay->pivot->end_date);
                                                                                                            else
                                                                                                                $edate=Carbon\Carbon::now();
                                                                                                                $difference=$sdate->diff($edate);
                                                                                                            @endphp    
                                                                            
                                                                                                            {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                                </span></td>
                                                                                                <td>Action button 1</td>
                                                                                            </tr>
                                                                                        @endif  
                                                                                    @else
                                                                                        @if($cons_teaching_pay->end_date==null|| ($cons_teaching_pay->end_date>$designation->pivot->start_date ))
                                                                                            <tr class="{{$cons_teaching_pay->status =='inactive'?'bg-gray-200':''}}"> 
                                                                                                        
                                                                                                    <td><span>{{$cons_teaching_pay->pay}}</span></td>
                                                                                                    <td><span>{{ \Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')}}</span></td>
                                                                                                    <td><span>{{($cons_teaching_pay->end_date ==null ?'--NA--':\Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y'))}}</span></td>
                                                                                                    <td><span>
                                                                                                        @php
                                                                                                            $sdate=new DateTime($cons_teaching_pay->start_date);
                                                                        
                                                                                                                if ($cons_teaching_pay->end_date!=null)
                                                                                                                    $edate=new DateTime($cons_teaching_pay->end_date);
                                                                                                                else
                                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                                    $difference=$sdate->diff($edate);
                                                                                                                @endphp    
                                                                    
                                                                                                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                                    </span></td>
                                                                                                    <td>
                                                                                                         <!--Edit modal for staff designation-->
                                                                                                        <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                                            data-hs-overlay="#edit_cons_teaching_payscale{{$i}}">
                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                            <span
                                                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                                role="tooltip">
                                                                                                                Edit
                                                                                                            </span>
                                                                                                        </button>
                                                                                                        <!-- modal for editing consolidated teaching payscale-->
                                                                                                        <div id="edit_cons_teaching_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                                <div class="ti-modal-content">
                                                                                                                    <div class="ti-modal-header">
                                                                                                                        <h3 class="ti-modal-title">
                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                            Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                                        </h3>
                                                                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                            data-hs-overlay="#edit_cons_teaching_payscale{{$i}}">
                                                                                                                            <span class="sr-only">Close</span>
                                                                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                                                <path
                                                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                                    fill="currentColor" />
                                                                                                                            </svg>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <form  action="{{route('ESTB.staff.consolidated_teaching_pay.update',[$staff->id,$cons_teaching_pay->id])}}" method="post">
                                                                                                                        @csrf
                                                                                                                        @method('patch')
                                                                                                                            <div class="ti-modal-body">
                                                                                                                                @if($cons_teaching_pay->status == 'inactive')
                                                                                                                                    <br/>
                                                                                                                                    <div class="flex">
                                                                                                                                        <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                                                        <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                                                    </div>
                                                                                                                                @else 
                                                                                                                                <div class="grid lg:grid-cols-2 gap-1 space-y-2 lg:space-y-0">
                                                                                                                                        @if($staff->employee_type == "Teaching")
                                                                                                                                            <div class="space-y-2" id="consolidated_pay_div">
                                                                                                                                                <label class="ti-form-label mb-0 font-bold">Consolidated Pay</label>
                                                                                                                                                <input type="text" name="consolidated_pay" id="consolidated_pay" class="ti-form-input" value="{{$cons_teaching_pay->pay}}"/>
                                                                                                                                            
                                                                                                                                            </div>
                                                                                                                                        @endif
                                                                                                                                        <div class="space-y-2">
                                                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                                                
                                                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                                                </div>
                                                                                                
                                                                                                                                                <input type="text" name="start_date"
                                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                                    id="date" placeholder="Choose date" value="{{$cons_teaching_pay->start_date}}" readonly>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                <div class="grid lg:grid-cols-1 gap-2 space-y-2 lg:space-y-0">
                                                                                                                                    <div class="space-y-2">
                                                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                                                        <input type="text" name="gcr" class="ti-form-input" value="{{$cons_teaching_pay->gcr}}"/>
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                </div>
                                                                                                                            @endif
                                                                                                                            </div>
                                                                                                                            <div class="ti-modal-footer">
                                                                                                                                <button type="button"
                                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                                    data-hs-overlay="#edit_cons_teaching_payscale{{$i}}">
                                                                                                                                    Close
                                                                                                                                </button>
                                                                                                                            
                                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                        
                                                                                                                            </div>
                                                                                                                    </form> 
                                                                                                                </div> 
                                                                                                            </div> 
                                                                                                        </div> 
                                                                                                        <!-- Delete button for deleting the consolidated teaching pay scale , within one month of adding--> 
                                                                                                          <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                                                          @if($cons_teaching_pay->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                                                          <div class="hs-tooltip ti-main-tooltip">
                                                                                                              <form action="{{ route('ESTB.staff.payscale.destroy',[$staff->id,$cons_teaching_pay->id]) }}" method="post">
                                                                                                              
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
                                                                                                          <!-- Delete the entry ends-->
                                                                                                      @endif
                                                                                                    </td>
                                                                                            </tr>   
                                                                                            @endif
                                                                                    
                                                                                            
                                                                                    @endif 
                                                                                    @empty
                                                                                
                                                                                 @endforelse
                                                                                @endif
                                                                            <!-- End of Teaching consolidated payscale -->
                                                                        </tr>  
                                                                        <!-- Teaching section designation and payscale ends here-->
                                                                    @else
                                                                    <!--Non teaching Section starts here-->
                                                                    
                                                                            @if($staff->ntpayscale != null)
                                                                                    @foreach ($staff->ntpayscale as $ntpays )
                                                                                        <tr class="{{$ntpays->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                                            
                                                                                        <td>  
                                                                                            @php
                                                                                                   $level1_payscales =  explode("-",$ntpays->payband)
                                                                                            @endphp 
                                                                                            @if ($ntpays->pivot->level == 1)
                                                                                                
                                                                                                   {{$level1_payscales[0].'-'.$level1_payscales[1].'-'.$level1_payscales[2]}}
                                                                                              
                                                                                            @elseif ($ntpays->pivot->level == 2)
                                                                                            
                                                                                                  {{$level1_payscales[2].'-'.$level1_payscales[3].'-'.$level1_payscales[4]}}
                                                                                                
                                                                                            @else
                                                                                                      
                                                                                                   {{$level1_payscales[4].'-'.$level1_payscales[5].'-'.$level1_payscales[6]}}
                                                                                            
                                                                                            @endif
                                                                                        </td>
                                                                                    <td>{{ \Carbon\Carbon::parse($ntpays->pivot->start_date)->format('d-M-Y')}}</td>
                                                                                    <td>{{($ntpays->pivot->end_date == null ? '--NA--': \Carbon\Carbon::parse($ntpays->pivot->end_date)->format('d-M-Y') )}}</td>
                                                                                    <td>
                                                                                    @php
                                                                                                        $sdate=new DateTime($ntpays->pivot->start_date);
                                                                            
                                                                                                        if ($ntpays->pivot->end_date!=null)
                                                                                                            $edate=new DateTime($ntpays->pivot->end_date);
                                                                                                        else
                                                                                                            $edate=Carbon\Carbon::now();
                                                                                                            $difference=$sdate->diff($edate);
                                                                                                        @endphp    
                                                                        
                                                                                                        {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                    </td>
                                                                                    <td>
                                                                                        @if($ntpays->pivot->end_date == null)
                                                                                                <!--Edit modal for staff Payscale non-teaching-->
                                                                                            <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                            data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                            <span
                                                                                                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                        role="tooltip">
                                                                                                        Edit
                                                                                                    </span>
                                                                                            </button>
                                                                                            <div id="edit_nonteaching_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                    <div class="ti-modal-content">
                                                                                                        <div class="ti-modal-header">
                                                                                                            <h3 class="ti-modal-title">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                            </h3>
                                                                                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                            data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                                                            <span class="sr-only">Close</span>
                                                                                                            <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                                <path
                                                                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                fill="currentColor" />
                                                                                                            </svg>
                                                                                                            </button>
                                                                                                        </div>
                                                                                                        <form  action="{{route('ESTB.staff.payscale.update',[$staff->id,$ntpays->id])}}" method="post">
                                                                                                            @csrf
                                                                                                            @method('patch')
                                                                                                            <div class="ti-modal-body">
                                                                                                                    @if($ntpays->pivot->status == 'inactive')
                                                                                                                    <br/>
                                                                                                                        <div class="flex">
                                                                                                                            <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                                            <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                                        </div>
                                                                                                                    @else 
                                                                                                                        <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                                            <div class="space-y-2">
                                                                                                                                <label class="ti-form-label mb-0 font-bold">Payscales</label>
                                                                                                                                
                                                                                                                                <select class="ti-form-select" name="payscales_id">
                                                                                                                                    @if($staff->associations[0]->asso_name  == "Confirmed")

                                                                                                                                        @foreach($payscales AS $design_payscales)
                                                                                                                                                @foreach ($design_payscales->ntpayscales as $payscale_ntp)
                                                                                                                                                
                                                                                                                                                   
                                                                                                                                                    <option value="{{$payscale_ntp->id}}" {{($payscale_ntp->id == $ntpays->pivot->ntpayscale_id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntp->payband}}</option>
                                                                                                                                                    @endforeach
                                                                                                                                                @endforeach
                                                                                                                                              
                                                                                                                                    @else
                                                                                                                                        @foreach($payscales AS $ntcpaysc)
                                                                                                                                            @foreach ($payscale->designations as $payscale_designation)
                                                                                                                                                <option value="{{$ntcpaysc->id}}" {{($ntcpaysc->id == $ntpays->pivot->ntcpayscale_id ? 'selected':'')}}>{{payscale_designation->design_name.'-'.$ntcpaysc->basepay.'-'.$ntcpaysc->allowance}}</option>
                                                                                                                                            @endforeach
                                                                                                                                        @endforeach
                                                                                                                                    @endif
                                                                                                                            </select>
                                                                                                                            </div>
                                                                                                                            
                                                                                                                        </div> 
                                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                            @if($staff->employee_type=="Non-Teaching" && $staff->associations[0]->asso_name  == "Confirmed" )
                                                                                                                                <div class="space-y-2" id="payscalelevel">
                                                                                                                                    <label class="ti-form-label mb-0 font-bold">Increment Level </label>
                                                                                                                                    <select class="ti-form-select" name="payscale_level" id="payscale_level">
                                                                                                                                        <option value="null">Choose the payscale level </option>
                                                                                                                                        <option value="1" {{$staff->ntpayscale[0]->pivot->level==1? "selected":""}}>Increment Level-1</option>
                                                                                                                                        <option value="2" {{$staff->ntpayscale[0]->pivot->level==2? "selected":""}}>Increment Level-2</option>
                                                                                                                                        <option value="3" {{$staff->ntpayscale[0]->pivot->level==3? "selected":""}}>Increment Level-3</option>
                                                                                                                                    </select>
                                                                                                                                </div>
                                                                                                                            @endif
                                                                                                                            <div class="space-y-2">
                                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                                    <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                                        
                                                                                                                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                                        </div>
                                                                                        
                                                                                                                                        <input type="text" name="start_date"
                                                                                                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                            id="date" placeholder="Choose date" value="{{$ntpays->pivot->start_date}}" readonly>
                                                                                                                                    </div>
                                                                                                                            </div>
                                                                                                                            
                                                                                                                              
                                                                                                                                
                                                                                                                        </div>
                                                                                                                        <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                        <div class="space-y-2">
                                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                                                    <input type="text" name="reason" class="ti-form-input" value="{{$ntpays->pivot->reason}}"/>
                                                                                                                            </div> 
                                                                                                                            <div class="space-y-2">
                                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                                                <input type="text" name="gcr" class="ti-form-input" value="{{$ntpays->pivot->gcr}}"/>
                                                                                                                            </div>
                                                                                                                            
                                                                                                                        </div>
                                                                                                                        @endif
                                                                                                            </div>    
                                                                                                            <div class="ti-modal-footer">
                                                                                                                <button type="button"
                                                                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                                                                Close
                                                                                                                </button>
                                                                                                                
                                                                                                                <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                            
                                                                                                            </div>
                                                                                                        </form>  
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--Edit modal for departments staff ends-->
                                                                                                <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                                                @if($ntpays->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                                                    <div class="hs-tooltip ti-main-tooltip">
                                                                                                        <form action="{{ route('ESTB.staff.payscale.destroy',[$staff->id,$ntpays->id]) }}" method="post">
                                                                                                        
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
                                                                                                    <!-- Delete the entry ends-->
                                                                                                @endif
                                                                                            @endif

                                                                                            </td>
                                                                                        </tr>
                                                                                    
                                                                                    @endforeach
                                                                                @endif
                                                                                <!--End of non teaching designation and poayscale section-->
                                                                                    <!--For nom-teaching Consolidated payscale-->
                                                                                @if($staff->ntcpayscale !=null)
                                                                                    @foreach ($staff->ntcpayscale as $ntcpays )
                                                                                     <tr class="{{$ntcpays->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                                        <td>  
                                                                                            {{$ntcpays->basepay.'-'.$ntcpays->allowance.'-'.$ntcpays->year.' Year'}}
                                                                                        </td>
                                                                                        <td>{{\Carbon\Carbon::parse($ntcpays->pivot->start_date)->format('d-M-Y') }}</td>
                                                                                        <td>{{$ntcpays->pivot->end_date == null? '--NA--': \Carbon\Carbon::parse($ntcpays->pivot->end_date)->format('d-M-Y') }}</td>
                                                                                        <td>
                                                                                            @php
                                                                                                $sdate=new DateTime($ntcpays->pivot->start_date);
                                                                    
                                                                                                if ($ntcpays->pivot->end_date!=null)
                                                                                                    $edate=new DateTime($ntcpays->pivot->end_date);
                                                                                                else
                                                                                                    $edate=Carbon\Carbon::now();
                                                                                                    $difference=$sdate->diff($edate);
                                                                                            @endphp    
                                                                            
                                                                                                            {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}

                                                                                        </td>
                                                                                        <td>
                                                                                            @if($ntcpays->pivot->end_date == null)
                                                                                                    <!--Edit modal for staff Payscale non-teaching-->
                                                                                                <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                                data-hs-overlay="#edit_nonteachingconso_payscale{{$i}}">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                <span
                                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                            role="tooltip">
                                                                                                            Edit
                                                                                                        </span>
                                                                                                </button>
                                                                                                <div id="edit_nonteachingconso_payscale{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                        <div class="ti-modal-content">
                                                                                                            <div class="ti-modal-header">
                                                                                                                <h3 class="ti-modal-title">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                    Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                               </h3>
                                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                data-hs-overlay="#edit_nonteaching_payscale{{$i}}">
                                                                                                                <span class="sr-only">Close</span>
                                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                    fill="currentColor" />
                                                                                                                </svg>
                                                                                                                </button>
                                                                                                            </div>
                                                                                                            <form  action="{{route('ESTB.staff.payscale.update',[$staff->id,$ntcpays->id])}}" method="post">
                                                                                                                @csrf
                                                                                                                @method('patch')
                                                                                                                <div class="ti-modal-body">
                                                                                                                        @if($ntcpays->pivot->status == 'inactive')
                                                                                                                        <br/>
                                                                                                                            <div class="flex">
                                                                                                                                <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                                                <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                                            </div>
                                                                                                                        @else 
                                                                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                                                <div class="space-y-2">
                                                                                                                                    <label class="ti-form-label mb-0 font-bold">Payscales </label>
                                                                                                                                    
                                                                                                                                    <select class="ti-form-select" name="payscales_id">
                                                                                                                                        @if($staff->associations[0]->asso_name  == "Confirmed")

                                                                                                                                            @foreach($payscales AS $ntpaysc)
                                                                                                                                                <option value="{{$ntpaysc->id}}" {{($ntpaysc->id == $ntcpays->pivot->ntpayscale_id ? 'selected':'')}}>{{$ntpaysc->payband}}</option>
                                                                                
                                                                                                                                                @endforeach  
                                                                                                                                        @else
                                                                                                                                            @foreach($payscales AS $design_payscales) 
                                                                                                                                                    
                                                                                                                                                @foreach ($design_payscales->ntcpayscales as $payscale_ntc)
                                                                                                                                                    {{-- {{$payscale_ntc}} --}}
                                                                                                                                                    <option value="{{$payscale_ntc->id}}" {{($payscale_ntc->id == $ntcpays->pivot->ntpayscale_id ? 'selected':'')}}>{{$design_payscales->design_name.'-'.$payscale_ntc->basepay.'-'.$payscale_ntc->allowance}}</option>
                                                                                                                                                @endforeach 
                                                                                                                                            @endforeach 
                                                                                                                                            
                                                                                                                                        @endif
                                                                                                                                </select>
                                                                                                                                </div>
                                                                                                                                
                                                                                                                            </div> 
                                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                                <div class="space-y-2">
                                                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                                            
                                                                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                                            </div>
                                                                                            
                                                                                                                                            <input type="text" name="start_date"
                                                                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                                id="date" placeholder="Choose date" value="{{$ntcpays->pivot->start_date}}" readonly>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                
                                                                                                                                <div class="space-y-2">
                                                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Reason</label>
                                                                                                                                        <input type="text" name="reason" class="ti-form-input" value="{{$ntcpays->pivot->reason}}"/>
                                                                                                                                </div>   
                                                                                                                                    
                                                                                                                            </div>
                                                                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                                <div class="space-y-2">
                                                                                                                                    <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                                                    <input type="text" name="gcr" class="ti-form-input" value="{{$ntcpays->pivot->gcr}}"/>
                                                                                                                                </div>
                                                                                                                                
                                                                                                                            </div>
                                                                                                                            @endif
                                                                                                                </div>    
                                                                                                                <div class="ti-modal-footer">
                                                                                                                    <button type="button"
                                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                    data-hs-overlay="#edit_nonteachingconso_payscale{{$i}}">
                                                                                                                    Close
                                                                                                                    </button>
                                                                                                                    
                                                                                                                    <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                
                                                                                                                </div>
                                                                                                            </form>  
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!--Edit modal for departments staff ends-->
                                                                                                    <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                                                    @if($ntcpays->pivot->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                                                        <div class="hs-tooltip ti-main-tooltip">
                                                                                                            <form action="{{ route('ESTB.staff.payscale.destroy',[$staff->id,$ntcpays->id]) }}" method="post">
                                                                                                            
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
                                                                                                        <!-- Delete the entry ends-->
                                                                                                    @endif
                                                                                                @endif

                                                                                            </td>
                                                                                        </tr>
                                                                                    
                                                                                    @endforeach


                                                                                @endif
                                                                                <!--Non Teaching fixed salary section-->
                                                                                @if ($staff->fixed_nt_pay !=null)
                                                                                        @forelse ($staff->fixed_nt_pay as $fntp)
                                                                                        <tr class="{{$fntp->status =='inactive'?'bg-gray-200':''}}">
                                                                                            <td>  
                                                                                                {{$fntp->pay}}
                                                                                            </td>
                                                                                            <td>{{\Carbon\Carbon::parse($fntp->start_date)->format('d-M-Y') }}</td>
                                                                                            <td>{{$fntp->end_date == null? '--NA--': \Carbon\Carbon::parse($fntp->end_date)->format('d-M-Y') }}</td>
                                                                                            <td>
                                                                                                @php
                                                                                                    $sdate=new DateTime($fntp->start_date);
                                                                        
                                                                                                    if ($fntp->end_date!=null)
                                                                                                        $edate=new DateTime($fntp->end_date);
                                                                                                    else
                                                                                                        $edate=Carbon\Carbon::now();
                                                                                                        $difference=$sdate->diff($edate);
                                                                                                @endphp    
                                                                                
                                                                                                                {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
    
                                                                                            </td>
                                                                                            <td>
                                                                                                @if($fntp->end_date == null)
                                                                                                        <!--Edit modal for Fixed non-teaching-->
                                                                                                    <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                                    data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    <span
                                                                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                                                role="tooltip">
                                                                                                                Edit
                                                                                                            </span>
                                                                                                    </button>
                                                                                                    <div id="edit_fixed_nonteaching{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                                            <div class="ti-modal-content">
                                                                                                                <div class="ti-modal-header">
                                                                                                                    <h3 class="ti-modal-title">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                                        Edit Payscale of <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                                </h3>
                                                                                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                                    data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                                                                                    <span class="sr-only">Close</span>
                                                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <path
                                                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                                        fill="currentColor" />
                                                                                                                    </svg>
                                                                                                                    </button>
                                                                                                                </div>
                                                                                                                 <form  action="{{route('ESTB.staff.fixed_nt_pay.update',[$staff->id,$fntp->id])}}" method="post"> 
                                                                                                                    @csrf
                                                                                                                    @method('patch')
                                                                                                                    <div class="ti-modal-body">
                                                                                                                            @if($fntp->status == 'inactive')
                                                                                                                            <br/>
                                                                                                                                <div class="flex">
                                                                                                                                    <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                                                                </div>
                                                                                                                            @else 
                                                                                                                                <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                                                                    <div class="space-y-2">
                                                                                                                                        <label class="ti-form-label mb-0 font-bold">Fixed Pay </label>
                                                                                                                                        <input type="text" name="fixed_pay" class="ti-form-input" value="{{$fntp->pay}}"/>
                                                                                                                                    
                                                                                                                                                    
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                </div> 
                                                                                                                                <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                                                    <div class="space-y-2">
                                                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                                                
                                                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                                                </div>
                                                                                                
                                                                                                                                                <input type="text" name="start_date"
                                                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                                                    id="date" placeholder="Choose date" value="{{$fntp->start_date}}" readonly>
                                                                                                                                            </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="space-y-2">
                                                                                                                                        <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                                                        <input type="text" name="gcr" class="ti-form-input" value="{{$fntp->gcr}}"/>
                                                                                                                                    </div>
                                                                                                                                    
                                                                                                                                    
                                                                                                                                        
                                                                                                                                </div>
                                                                                                                                
                                                                                                                                @endif
                                                                                                                    </div>    
                                                                                                                    <div class="ti-modal-footer">
                                                                                                                        <button type="button"
                                                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                                        data-hs-overlay="#edit_fixed_nonteaching{{$i}}">
                                                                                                                        Close
                                                                                                                        </button>
                                                                                                                        
                                                                                                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                                    
                                                                                                                    </div>
                                                                                                                </form>   
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!--Edit modal for departments staff ends-->
                                                                                                        <!-- Delete the entry only when the duration is within 1 month of change of the department-->
                                                                                                        @if($fntp->status == 'active' && ($difference->y ==0 && $difference->m <= 1))
                                                                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                                                                {{-- <form action="{{ route('ESTB.staff.ntfixedpay.destroy',[$staff->id,$fntp->id]) }}" method="post"> --}}
                                                                                                                
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
                                                                                                                {{-- </form> --}}
                                                                                                                </div>
                                                                                                            <!-- Delete the entry ends-->
                                                                                                        @endif
                                                                                                    @endif
                                                                                            </td>
                                                                                        </tr>
                                                                                        @empty
                                                                                            
                                                                                        @endforelse
                                                                                    
                                                                                @endif

                                                                            <!--End of non-teaching fixed pay (if)-->
                                                                              
                                                                    @endif  
                                                                   @endif <!--end if for addiotional designation checking--> 
                                                                @endforeach 
                                                            </tbody>
                                                        </table>  
                                                    </div> 
                                                    
                                                    
                                                </div>
                                            </div>

                                            <hr/>
                                            <!--Additional Designation Section-->
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-account-circle-line ltr:mr-2 rtl:ml-2"></i> Additional Designation</h5>
                                                </div>
                                                <div class="box-body">
                                                    <!--modal for adding/changing the additional designations-->
                                                        <button data-hs-overlay="#add_additional_designation"
                                                        class="hs-dropdown-toggle ti-btn ti-btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M14 14.252V16.3414C13.3744 16.1203 12.7013 16 12 16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14C12.6906 14 13.3608 14.0875 14 14.252ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM18 17V14H20V17H23V19H20V22H18V19H15V17H18Z" fill="rgba(255,255,255,1)"></path></svg> 
                                                            Assign Additional Designation
                                                        
                                                        </button>
                                                        <div id="add_additional_designation" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Assign Additional Designation for <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                        </h3>
                                                                        <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                        data-hs-overlay="#add_additional_designation">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                            fill="currentColor" />
                                                                        </svg>
                                                                        </button>
                                                                    </div>
                                                                    <form  action="{{route('ESTB.staff.additional_designation.create',$staff->id)}}" method="post">
                                                                        @csrf
                                                                        <div class="ti-modal-body">
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label class="ti-form-label mb-0 font-bold">Designation</label>
                                                                                    <select class="ti-form-select" name="designation_id" id="designation_id">
                                                                                        <option value="0">Choose an additional designation</option>
                                                                                                @foreach($add_designations AS $add_design)
                                                                                                     <option value="{{$add_design->id}}">{{$add_design->design_name}}</option>
                                                                                                @endforeach  
                                                                                    </select>
                                                                                </div>
                                                                                <div class="space-y-2" id="dept_div">
                                                                                    <label class="ti-form-label mb-0 font-bold">Departments</label>
                                                                                    <select class="ti-form-select" name="dept_id">
                                                                                        <option value="0">Choose an department</option>
                                                                                                @foreach($departments AS $department)
                                                                                                     <option value="{{$department->id}}">{{$department->dept_name}}</option>
                                                                                                @endforeach  
                                                                                    </select>
                                                                                </div>
                                                                            </div> 
                                                                            <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                        <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                            
                                                                                            <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                            </div>
                                            
                                                                                            <input type="text" name="start_date"
                                                                                                class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                id="date" placeholder="Choose date" readonly>
                                                                                        </div>
                                                                                </div>
                                                                                <!--div class="space-y-2">
                                                                                        <label for="" class="ti-form-label mb-0 font-bold">Reason:</label>
                                                                                        <input type="text" name="reason" class="ti-form-input"/>
                                                                                </div-->   
                                                                                        
                                                                            </div>
                                                                            <div class="grid lg:grid-cols-1 gap-1 space-y-2 lg:space-y-0">
                                                                                <div class="space-y-2">
                                                                                    <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                    <input type="text" name="gcr" class="ti-form-input"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ti-modal-footer">
                                                                            <button type="button"
                                                                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                            data-hs-overlay="#add_additional_designation">
                                                                            Close
                                                                            </button>
                                                                            
                                                                            <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                        
                                                                        </div>
                                                                    </form>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tabular representation of additional designation-->
                                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                                            <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                                                <thead class="bg-gray-50 dark:bg-black/20">
                                                                    <tr>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">S.no</th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Additional Designation
                                                                        </th>
                                                                        <th scope="col" class="dark:text-white/80 font-bold">Department
                                                                        </th>
                                                                        <th scope="col" class="dark:text-white/80 text-center font-bold">Start Date</th>
                                                                        <th scope="col" class="dark:text-white/80 text-center font-bold">End Date</th>
                                                                        <th scope="col" class="dark:text-white/80 text-center font-bold">Duration</th>
                                                                        <th scope="col" class="dark:text-white/80 text-center font-bold">GCR</th>
                                                                        <th scope="col" class="dark:text-white/80 text-center font-bold">Status</th>
                                                                        <th scope="col" class="dark:text-white/80 text-center font-bold">Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                        $i=1;
                                                                        $dept="";
                                                                    @endphp
                                                                    @foreach ($staff->designations as $add_designaions)
                                                                        @if($add_designaions->isadditional==1)
                                                                        @foreach($staff->departments as $department)
                                                                           
                                                                            @if($department->id==$add_designaions->pivot->dept_id)
                                                                                @php
                                                                                    $dept=$department->dept_name;
                                                                                    break;
                                                                                @endphp
                                                                        
                                                                            @endif
                                                                        @endforeach
                                                                        <tr>
                                                                            <td>{{$i++}}</td>
                                                                            <td>{{$add_designaions->design_name}}</td>
                                                                            <td>{{$add_designaions->pivot->dept_id==null?'---NA---':$dept}}</td>
                                                                            <td>{{\Carbon\Carbon::parse($add_designaions->pivot->start_date)->format('d-M-Y') }}</td>
                                                                            <td>{{$add_designaions->pivot->end_date==null?'--NA--':\Carbon\Carbon::parse($add_designaions->pivot->end_date)->format('d-M-Y') }}</td>
                                                                            <td><span>
                                                                                @php
                                                                                            $sdate=new DateTime($add_designaions->pivot->start_date);
                                                                                    
                                                                                            if ($add_designaions->pivot->end_date!=null)
                                                                                                $edate=new DateTime($add_designaions->pivot->end_date);
                                                                                            else
                                                                                                $edate=Carbon\Carbon::now();
                                                                                                $difference=$sdate->diff($edate);
                                                                                            @endphp    
                                                                                
                                                                                   {{$difference->y."years ".$difference->m."months ".$difference->d."days"}}
                                                                                </span></td>


                                                                            <td>{{$add_designaions->pivot->gcr}}</td>
                                                                            <td>{{$add_designaions->status}}</td>
                                                                            <td>
                                                                                <button class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary"
                                                                                data-hs-overlay="#edit_additional_designation{{$i}}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                <span
                                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                                            role="tooltip">
                                                                                            Edit
                                                                                        </span>
                                                                                </button>
                                                                                <div id="edit_additional_designation{{$i}}" class="hs-overlay hidden ti-modal">
                                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                                        <div class="ti-modal-content">
                                                                                            <div class="ti-modal-header">
                                                                                                <h3 class="ti-modal-title">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                                    Edit Additional Designation for <span class="text-red-400">{{$staff->fname.' '.$staff->mname.' '.$staff->lname}}</span>
                                                                                                </h3>
                                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                                data-hs-overlay="#edit_additional_designation{{$i}}">
                                                                                                <span class="sr-only">Close</span>
                                                                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                                    fill="currentColor" />
                                                                                                </svg>
                                                                                                </button>
                                                                                            </div>
                                                                                            <form  action="{{route('ESTB.staff.additional_designation.update',[$staff->id, $add_designaions->pivot->id])}}" method="post">
                                                                                                @csrf
                                                                                                @method('patch')
                                                                                                <div class="ti-modal-body">
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                            <label class="ti-form-label mb-0 font-bold">Designation</label>
                                                                                                            <select class="ti-form-select" name="designation_id" id="designation_id">
                                                                                                                <option value="0">Choose an additional designation</option>
                                                                                                                        @foreach($add_designations AS $add_design)
                                                                                                                             <option value="{{$add_design->id}}" {{$add_designaions->id == $add_design->id? 'selected':''}}>{{$add_design->design_name}}</option>
                                                                                                                        @endforeach  
                                                                                                            </select>
                                                                                                        </div>
                                                                                                        <div class="space-y-2" id="dept_div">
                                                                                                            <label class="ti-form-label mb-0 font-bold">Departments</label>
                                                                                                            <select class="ti-form-select" name="dept_id">
                                                                                                                <option value="0">Choose an department</option>
                                                                                                                        @foreach($departments AS $department)
                                                                                                                             <option value="{{$department->id}}" {{$add_designaions->pivot->dept_id ==$department->id ?'selected':''}}>{{$department->dept_name}}</option>
                                                                                                                        @endforeach  
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div> 
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Effect from Date :</label>
                                                                                                                <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                    
                                                                                                                    <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                    </div>
                                                                    
                                                                                                                    <input type="text" name="start_date"
                                                                                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                        id="date" placeholder="Choose date" value="{{$add_designaions->pivot->start_date}}" readonly>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="space-y-2">
                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">GC Resolution:</label>
                                                                                                            <input type="text" name="gcr" class="ti-form-input" value="{{$add_designaions->pivot->gcr}}"/>
                                                                                                        </div>   
                                                                                                                
                                                                                                    </div>
                                                                                                    <p class="text-red-400">Note : Additional designation can be closed by filling the below information</p>
                                                                                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                                                                                        <div class="space-y-2">
                                                                                                            <label for="" class="ti-form-label mb-0 font-bold">Closing Date :</label>
                                                                                                            <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                                                                                                
                                                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z"></path></svg>
                                                                                                                </div>
                                                                
                                                                                                                <input type="text" name="end_date"
                                                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                                                                                    id="date" placeholder="Choose date" value="{{$add_designaions->pivot->end_date}}" readonly>
                                                                                                            </div>
                                                                                                        </div>    
                                                                                                            <div class="space-y-2">
                                                                                                                <label for="" class="ti-form-label mb-0 font-bold">Closing GC Resolution:</label>
                                                                                                                <input type="text" name="gcr_close" class="ti-form-input" value="{{$add_designaions->pivot->gcr_close}}"/>
                                                                                                            </div>
                                                                                                    
                                                                                                    
                                                                                                    </div>
                                                                                                </div>  
                                                                                                <div class="ti-modal-footer">
                                                                                                    <button type="button"
                                                                                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                                    data-hs-overlay="#edit_additional_designation{{$i}}">
                                                                                                    Close
                                                                                                    </button>
                                                                                                    
                                                                                                    <input type="submit" class="ti-btn  bg-primary text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                                                                                                
                                                                                                </div>
                                                                                            </form>  
                                                                                        </div> 
                                                                                    </div>
                                                                                </div>
                                                                                <div class="hs-tooltip ti-main-tooltip">
                                                                                    <form action="{{ route('ESTB.staff.additionaldesignation.destroy',[$staff->id,$add_designaions->pivot->id]) }}" method="post">
                                                                                    
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
                                                                        @endif
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>    
                                                </div>
                                            </div>       
                                        </div>
                                        <div id="profile-settings-5" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-5">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-notification-4-line ltr:mr-2 rtl:ml-2"></i> Leaves History</h5>
                                                </div>
                                                <div class="box-body">
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div id="salary-tab" class="hidden" role="tabpanel" aria-labelledby="salary">
                                            <div class="box border-0 shadow-none mb-0">
                                                <div class="box-header">
                                                    <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Salary History</h5>
                                                </div>
                                                <div class="box-body">
                                                    <div class="space-y-2">
                                                        <label class="ti-form-label mb-0 font-bold">Salary</label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="box-footer text-end space-x-3 rtl:space-x-reverse">
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

         <!-- TABULATOR JS -->
         <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

        <!-- FORM-LAYOUT JS -->
        @vite('resources/assets/js/profile-settings.js')
        
        <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                //ajax call to change the dropdwon List for castecategory based on religion
               // The Controller is : GetCaste CategoryListCOntroller.php
               $(document).on('change','#religion_id',function(){
                    //alert('Changed');
                    var religion_id = $(this).val();
                    $.ajax({
                        url:'/ESTB/staff/getcastecategory_list',
                        method:'GET',
                        data:{'r_id':religion_id},
                        success:function(data) {
                       console.log(data);
                            var castecategoriesDropdown = $('#castecategory_list');
                            castecategoriesDropdown.empty(); // Clear existing options
                            data.forEach(function(item) {
                                castecategoriesDropdown.append($('<option>').text(item['caste_name']+"-"+item['subcastes_name']+"-"+item['category']+"-"+item['category_no']).attr('value', item['id']));
                            });
                                // $.each(data, function (key, value) {
                                //     console.log(value);
                                //     
                                // });
                            //$("#castecategory_list").html(data);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                    
               });
               //for checking whether the employee type is teaching Or non teaching for enabling id's
               var employee_type = $('#employee_type').val();
                    if($(this).val()=='Teaching'){
                        $('#AICTE_id').show();
                        $('#VTU_id').show();

                        $('#ESI_no').hide();
                        $('#UN_no').hide();
                       
                    }else if($(this).val()=='Non-Teaching'){
                        $('#AICTE_id').hide();
                        $('#VTU_id').hide();

                        $('#ESI_no').show();
                        $('#UN_no').show();
                    }else{
                        //alert('Please choose appropriate employee type');
                    }
                   // on change the ids fields to be changed. 
               $(document).on('change','#employee_type',function(){
                    if($(this).val()=='Teaching'){
                        $('#AICTE_id').show();
                        $('#VTU_id').show();

                        $('#ESI_no').hide();
                        $('#UN_no').hide();
                       
                    }else if($(this).val()=='Non-Teaching'){
                        $('#AICTE_id').hide();
                        $('#VTU_id').hide();

                        $('#ESI_no').show();
                        $('#UN_no').show();
                    }else{
                        //do nothing.
                        alert('Please choose appropriate employee type');
                    }
                   
               });

            });

            $(document).on('change','#designation_id',function(){
                //alert('changed');
                if($(this).val()==1){
                    $('#dept_div').show();
                }else{
                    $('#dept_div'). hide();
                }
                
            });

                //while adding the consolidated field if the association choosen is contractual part time.
            $(document).on('change','#associations_id',function(){
                //alert('Association Changed');
                if($(this).val() == 4){
                    ///for checking if the association is contractual.
                    $('#consolidated_pay_div').removeClass('hidden');
                  //  $('#payscale_id_div').addClass('hidden');
                } 
                else{
                    $('#consolidated_pay_div').addClass('hidden');
                    //$('#payscale_id_div').removeClass('hidden');
                }
            });

            //while editing the consolidated teacching pay field , if choosen as contractual part time 
            $(document).on('change','#associations_id_edit',function(){
                //alert('Association Changed');
                if($(this).val() == 4) {//for checking if the association is contractual.
                    $('#consolidated_pay_div_edit').removeClass('hidden');
                    $('#payscale_id_div_edit').addClass('hidden');
                }else{
                    $('#consolidated_pay_div_edit').addClass('hidden');
                    $('#payscale_id_div_edit').removeClass('hidden');
                }
            });

            //on change of Pay type , get employee type, designation and then populate appropriate pay 
            $(document).on('change','input[type=radio][name=pay_type]',function(){
                    //alert($(this).val());
                     var pay_type = $(this).val();
                     var emp_type = $('#change_payscale_employee_type').val();
                     var designation_id = $('#change_payscale_designation_id').val();
                     alert(pay_type+'-'+emp_type+'-'+designation_id);
                    // //$('#payscalelevel').hide();
                    // //alert(pay_type+'-'+emp_type+'-'+designation_id);
                    // if(pay_type == "Fixed"){
                    //     $('#fixed_pay_div').show();
                    //     $('#payscale_div').hide();
                       
                    // }else{
                    //     $('#fixed_pay_div').hide();
                        
                    //     //ajax call for populating the pay 
                    $.ajax({
                            url:'/ESTB/staff/getstaffpay_list',
                            method:'GET',
                            data:{'pay_type':pay_type,'emp_type':emp_type,'designation_id':designation_id},
                            success:function(data) {
                                //console.log(data);
                                var staffPayDropdown = $('#ajax_data_populate');
                                staffPayDropdown.empty(); // Clear existing options
                                if(pay_type == "Consolidated"){
                                        console.log(data.ntcpayscales);
                                        staffPayDropdown.append('<label for="" class="ti-form-label mb-0 font-bold">Consolidated Pay </label><select class="ti-form-select" name="payscales_id" id="nt_consolidated_pay">');
                                      
                                        data.ntcpayscales.forEach(function(item) {

                                            $('#nt_consolidated_pay').append($('<option>').text(item['basepay']+'-'+item['allowance']+'- Year: '+item['year']).attr('value', item['id']));
                                        });
                                        //$('#payscale_div').show();
                                       console.log(staffPayDropdown);
                                        $('#nt_fixed_pay_div').hide(); // For displaying the payscale level
                                        $('#nt_payscale_div').hide();
                                        $('#payscalelevel').hide();
                                        // $("#ajax_data_populate").append(data.ntcpayscales);
                                        staffPayDropdown.append('</select>');


                                }

                                 if(pay_type == "Payscale"){
                                    if(emp_type == "Teaching"){
                                        //
                                        $('#teahing_consolidated_pay_div').hide();
                                        if($('#t_payscale_div').css('display') == 'none'){
                                            $('#t_payscale_div').show();
                                            
                                        }else{
                                            
                                            $('#ajax_data_populate').html('<label for="" class="ti-form-label mb-0 font-bold">Payscale </label><select class="ti-form-select" name="payscales_id" id="teaching_payscales_id">');
                                            data.forEach(function(item) {

                                                $('#teaching_payscales_id').append($('<option>').text(item['payscale_title']+"-"+item['basepay']+"-"+item['maxpay']+"-"+item['agp']).attr('value', item['id']));
                                            });
                                            $('#ajax_data_populate').append('</select>')
                                        }

                                       
                                        $('#nt_fixed_pay_div').hide();
                                        
                                        $("#payscale_id").append(data);
                                        $('#payscalelevel').hide();
                                    }else{
                                        console.log(data.ntpayscales);
                                        staffPayDropdown.append('<label for="" class="ti-form-label mb-0 font-bold">Payscale </label><select class="ti-form-select" name="payscales_id" id="nt_payscale">');
                                      
                                        data.ntpayscales.forEach(function(item) {

                                            $('#nt_payscale').append($('<option>').text(item['payband']).attr('value', item['id']));
                                        });
                                        $('#nt_fixed_pay_div').hide();
                                        $("#ajax_data_populate").append(data.ntpayscales);
                                        staffPayDropdown.append('</select>');

                                        if($('#payscalelevel').css('display') == 'none'){
                                                $('#payscalelevel').show();
                                        }else{
                                            $("#ajax_data_populate").append('<div class="space-y-2" id="payscalelevel"><label class="ti-form-label mb-0 font-bold">Increment Level </label>'
                                                                                    +'<select class="ti-form-select" name="payscale_level" id="payscale_level">'
                                                                                        +'<option value="null">Choose the payscale level </option>'
                                                                                        +'<option value="1" >Increment Level-1</option>'
                                                                                        +'<option value="2">Increment Level-2</option>'
                                                                                        +'<option value="3">Increment Level-3</option>'
                                                                                    +'</select>'
                                                                                +'</div>');
                                        }
                                        //$('#payscalelevel').show(); // For displaying the payscale level
                                    }
                                }
                                if(pay_type == "Fixed"){ // for fixed pay .for both (T and NT)

                                    
                                    $("#payscale_id").hide();
                                    $('#t_payscale_div').hide();
                                   // $('#nt_payscale_div').hide();
                                    if(emp_type == "Teaching"){
                                        //teaching fixed
                                        if($('#teahing_consolidated_pay_div').css('display') == 'none'){
                                                $('#teahing_consolidated_pay_div').show();
                                        }else{
                                                $('#ajax_data_populate').append('<label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label><input type="text" name="fixed_pay" class="ti-form-input" value=""/>');
                                        
                                            
                                        }
                                    }else{
                                        //non teaching fixed.
                                        if($('#nt_fixed_pay_div').css('display') == 'none'){
                                            $('#nt_fixed_pay_div').show();
                                        }else{
                                            $('#ajax_data_populate').append('<label for="" class="ti-form-label mb-0 font-bold">Fixed Pay </label><input type="text" name="fixed_pay" class="ti-form-input" value=""/>');
                                
                                        }
                                    }
                                   
                                        
                                    $('#payscalelevel').hide();
                                    }
                                
                                //$("#castecategory_list").html(data);
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });
                  

                        //for reseting the radio buttons 
                        $(document).on('change','#change_payscale_designation_id',function(){
                            //for re-populating the payscales by reseting the radio button of pay_type 
                            //This is connected with (on Change pay type)
                            if($('input[type=radio][name=pay_type]').is(':checked')){
                                //alert('its checked');
                                $('input[type=radio][name=pay_type]').prop('checked', false);
                            }
                        });
                   
               });

              
        </script>
@endsection