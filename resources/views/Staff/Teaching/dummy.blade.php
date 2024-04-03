<tbody>
    @php
        $i=1;
    @endphp
    @foreach ($staff->departments as $dept)
                    
    <tr class="{{$dept->pivot->status =='active'?'':'bg-gray-200'}}">
        <td>{{ $i++ }}</td>
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



<div class="col-span-12 xl:col-span-3">
    <div class="box">
    
       
        <div class="box-body pt-0">
            <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 active" id="profile-settings-item-1" data-hs-tab="#profile-settings-1" aria-controls="profile-settings-1" role="tab">
                        <i class="ri ri-shield-user-line"></i>Conference
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-2" data-hs-tab="#profile-settings-2" aria-controls="profile-settings-2" role="tab">
                        <i class="ri ri-global-line"></i>Publications
                </button>
                 <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70" id="profile-settings-item-3" data-hs-tab="#profile-settings-3" aria-controls="profile-settings-3" role="tab">
                    <i class="ri ri-shield-user-line"></i>Books
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:border-primary hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-primary dark:hs-tab-active:text-white -mr-px py-3 px-3 inline-flex items-center gap-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-sm hover:text-gray-700 dark:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-gray-300" id="profile-settings-item-4" data-hs-tab="#profile-settings-4" aria-controls="profile-settings-4" role="tab">
                    <i class="ri ri-global-line"></i>Funding And Patents
                </button>
            
            </nav>
        </div>
    </div>
</div>
<div class="col-span-12 xl:col-span-9">
    <div class="box">
        <div class="box-body p-0">
            <!-- Conference Attended  Section starts here -->
            <div id="profile-settings-1" class="" role="tabpanel" aria-labelledby="profile-settings-item-1">
                
            </div>

            <!-- Conference Attended  Section Ends here -->

            <!-- Conference conducted  Section starts here -->
            <div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">
                
            </div>
            
            <!-- Conference Conducted  Section starts here -->
            
            <div id="profile-settings-3" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-3">
                <div class="box border-0 shadow-none mb-0">
                    <div class="box-body">
                        <div class="box-header">
                            <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Conference Attended Details</h5>
                        </div>
                    </div>
                </div>
            </div>           
            <!-- Conference Books  Section starts here -->
            <div id="profile-settings-4" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-4">
                <div class="box border-0 shadow-none mb-0">
                    <div class="box-body">
                        <div class="box-header">
                            <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Conference Attended Details</h5>
                        </div>
                    </div>
                </div>
            </div>  


           
            
        </div>
        
    </div>
</div>




<!-- Professional Activities content-->

<div id="profile-settings-1"  role="tabpanel" aria-labelledby="profile-settings-item-1">
    
</div> 
<!-- End of Tab 1 content : Attended --> 


<div id="profile-settings-2" class="hidden" role="tabpanel" aria-labelledby="profile-settings-item-2">
    




    <div class="box border-0 shadow-none mb-0">
        <div class="box-body">
            <div class="box-header">
                <h5 class="box-title leading-none flex"><i class="ri ri-global-line ltr:mr-2 rtl:ml-2"></i> Conference Conducted Details</h5>
            </div>
            <button data-hs-overlay="#add_conference_activity_conducted" class="hs-dropdown-toggle ti-btn ti-btn-primary " >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M17 19H19V11H13V19H15V13H17V19ZM3 19V4C3 3.44772 3.44772 3 4 3H18C18.5523 3 19 3.44772 19 4V9H21V19H22V21H2V19H3ZM7 11V13H9V11H7ZM7 15V17H9V15H7ZM7 7V9H9V7H7Z" fill="rgba(255,255,255,1)"></path></svg>
                Add Conference Conducted
            </button>
            <div id="add_conference_activity_conducted" class="hs-overlay hidden ti-modal">
                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 md:mx-auto">
                    <div class="ti-modal-content">
                        <div class="ti-modal-header">
                            <h3 class="ti-modal-title">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                Add New Conference Conducted <span class="text-red-400">
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
                        </div>
                            <form  action="{{route('Teaching.research.conference.conducted.store')}}" method="post">
                                @csrf
                              
                                <div class="ti-modal-body">
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Conference Name : </label>
                                            <input type="text" name="conference_name" class="ti-form-input" required placeholder=" Title">
                                                                
                                        </div>
                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Co-Oranizer Name: </label>
                                            <input type="text" name="co_organizer" class="ti-form-input" required placeholder="Co-Oranizer Name">
                                                                
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> No. of Participants : </label>
                                            <input type="text" name="no_of_participants" class="ti-form-input" required placeholder="No. of Participants">
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                        <div class="max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">Sponsored:</label>
                                            <select class="ti-form-select" name="sponsored" id="sponsored">
                                                <option value="#">Choose One</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div> 
                                
                                        
                                        <div class="max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">Sponsoring Agency:</label>
                                            <input type="text" name="sponsoring_agency" class="ti-form-input" required placeholder="Sponsoring Agency" >
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="flex max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">From Date :</label>
                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-calendar-line"></i></span>
                                                </div>
                            
                                                    <input type="date" name="from_date"
                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                            id="date" required placeholder="Choose date" >
                                        </div>
                                        <div class="flex max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">To Date :</label>
                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                        class="ri ri-calendar-line"></i></span>
                                                </div>
                            
                                                <input type="date" name="to_date"
                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                        id="date" required placeholder="Choose date">
                                        </div>                                                                              
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> No. of Days: </label>
                                            <input type="number" min=0 name="" class="ti-form-input" required placeholder="No. of Days">
                                                                
                                        </div>
                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Place: </label>
                                            <input type="text" name="place" class="ti-form-input" required placeholder="Location of the conference conducted">
                                                                
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Publisher: </label>
                                            <input type="text" name="publisher" class="ti-form-input" required placeholder="Details of Publisher if any">
                                                                
                                        </div>
                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Role: </label>
                                        <select class="ti-form-select" name="role" id="sponsored">
                                                <option value="#">Choose the role</option>
                                                <option value="Convener">convener</option>
                                                <option value="Co-convener">Co-convener</option>
                                                <option value="Team Member">Team Member</option>
                                                <option value="Coordinator">Coordinator</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Web URL: </label>
                                        <input type="text" name="weblink" class="ti-form-input" required placeholder="Web URL">
                                    </div>
                                    <div class="ti-modal-footer">
                                        <button type="button"
                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-overlay="#add_conference_activity_conducted">
                                        Close
                                        </button>
                                        
                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                    
                                    </div>
                            </form>  
                    </div> 
                </div>   
            </div>
            <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                    <thead class="bg-gray-50 dark:bg-black/20">
                    <tr class="">
                        <th scope="col" class="dark:text-white/80 font-bold">S.No</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Conference Name</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Co-organizer</th>
                        <th scope="col" class="dark:text-white/80 font-bold">No. of Participants </th>
                        <th scope="col" class="dark:text-white/80 font-bold">Sponsored</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Sponsoring Agency</th>
                        <th scope="col" class="dark:text-white/80 font-bold">From Date </th>
                        <th scope="col" class="dark:text-white/80 font-bold">To Date</th>
                        <th scope="col" class="dark:text-white/80 font-bold">NO. of Days</th>     
                        <th scope="col" class="dark:text-white/80 font-bold">Place</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Publisher</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Role</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Web Link</th>
                        <th scope="col" class="dark:text-white/80 font-bold">Action</th>

                    </tr>
                    </thead>
                    @php
                        $i=1;
                    @endphp
                    <tbody class="">
                         @if($staff->conferences_conducted!=null)
                            @forelse($staff->conferences_conducted as $act)
                                <tr class="">

                                        <td><span>{{$i++}}</span></td>
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

                                    <td class="font-medium space-x-2 rtl:space-x-reverse">
                                        <div class="hs-tooltip ti-main-tooltip">
                                            <button data-hs-overlay="#conference_conducted_edit_modal{{$i}}"
                                            class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                <span
                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                    role="tooltip">
                                                    Edit
                                                </span>
                                            </button>
                                        </div>
                                        <form  action="{{route('Teaching.research.conference.conducted.store')}}" method="post">
                                @csrf
                                @method('patch')
                              
                                <div class="ti-modal-body">
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Conference Name : </label>
                                            <input type="text" name="conference_name" class="ti-form-input" required placeholder=" Title">
                                                                
                                        </div>
                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Co-Oranizer Name: </label>
                                            <input type="text" name="co_organizer" class="ti-form-input" required placeholder="Co-Oranizer Name">
                                                                
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> No. of Participants : </label>
                                            <input type="text" name="no_of_participants" class="ti-form-input" required placeholder="No. of Participants">
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">
                                        <div class="max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">Sponsored:</label>
                                            <select class="ti-form-select" name="sponsored" id="sponsored">
                                                <option value="#">Choose One</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div> 
                                
                                        
                                        <div class="max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">Sponsoring Agency:</label>
                                            <input type="text" name="sponsoring_agency" class="ti-form-input" required placeholder="Sponsoring Agency" >
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="flex max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">From Date :</label>
                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                            class="ri ri-calendar-line"></i></span>
                                                </div>
                            
                                                    <input type="date" name="from_date"
                                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                            id="date" required placeholder="Choose date" >
                                        </div>
                                        <div class="flex max-w-sm space-y-3 pb-6">
                                            <label for="" class="ti-form-label font-bold">To Date :</label>
                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                        class="ri ri-calendar-line"></i></span>
                                                </div>
                            
                                                <input type="date" name="to_date"
                                                        class="ti-form-input rounded-l-none focus:z-10 flatpickr-input date"
                                                        id="date" required placeholder="Choose date">
                                        </div>                                                                              
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> No. of Days: </label>
                                            <input type="number" min=0 name="" class="ti-form-input" required placeholder="No. of Days">
                                                                
                                        </div>
                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Place: </label>
                                            <input type="text" name="place" class="ti-form-input" required placeholder="Location of the conference conducted">
                                                                
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-2 space-y-2 lg:space-y-0">

                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Publisher: </label>
                                            <input type="text" name="publisher" class="ti-form-input" required placeholder="Details of Publisher if any">
                                                                
                                        </div>
                                        <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Role: </label>
                                        <select class="ti-form-select" name="role" id="sponsored">
                                                <option value="#">Choose the role</option>
                                                <option value="Convener">convener</option>
                                                <option value="Co-convener">Co-convener</option>
                                                <option value="Team Member">Team Member</option>
                                                <option value="Coordinator">Coordinator</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label font-bold"> Web URL: </label>
                                        <input type="text" name="weblink" class="ti-form-input" required placeholder="Web URL">
                                    </div>
                                    <div class="ti-modal-footer">
                                        <button type="button"
                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                        data-hs-overlay="#add_conference_activity_conducted">
                                        Close
                                        </button>
                                        
                                        <input type="submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                    
                                    </div>
                            </form>  
                    </div> 
                </div>   
                      @empty                                                            
                 @endforelse     
                 @endif             



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
                            <th scope="col" class="dark:text-white/20 text-center font-bold">Payscale Title</th>
                            <th scope="col" class="dark:text-white/80 text-center font-bold">Start Date</th>
                            <th scope="col" class="dark:text-white/80 text-center font-bold">End Date</th>
                            <th scope="col" class="dark:text-white/80 text-center font-bold">Duration </th>
                            
                        </tr>
                        </thead>
                        @php
                                    $i=1;
                                @endphp
                                <tbody class="">
                                    @foreach ($staff[0]->designations as $designation)
                                        @if($designation->isadditional == 0 ) <!--For working with regular designations-->
                                            @php
                                            $rowcount=0;
                                                if($staff[0]->employee_type=="Teaching" )
                                                {
                                                    foreach($staff[0]->teaching_payscale as $tp)
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
                                            </tr>
                                            @if($staff[0]->employee_type=='Teaching')
                                                
                                                
                                                      
                                                    @foreach($staff[0]->teaching_payscale as $payscale)
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
                                                                
                                                                        </tr>   
                                                                @endif
                                                        
                                                                
                                                        @endif
                                            
                                                    @endforeach
                                            
                                        </tr>  
                                        
                                        @else
                                        <!--Non teaching Section starts here-->
                                        
                                                @if($staff[0]->ntpayscale != null)
                                                        @foreach ($staff[0]->ntpayscale as $ntpays )
                                                            <tr class="{{$payscale->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                                
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
                                                    
                                                    </tr>
                                                        
                                                        @endforeach
                                                    @endif
                                                    <!--End of non teaching designation and poayscale section-->
                                                        <!--For nom-teaching Consolidated payscale-->
                                                    @if($staff[0]->ntcpayscale !=null)
                                                        @foreach ($staff[0]->ntcpayscale as $ntcpays )
                                                            <tr>
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
                                                            
                                                            </tr>
                                                        
                                                        @endforeach
                                                    @endif    


                                                  
                                        @endif  
                                       @endif <!--end if for addiotional designation checking--> 
                                    @endforeach 
                                </tbody>
            </table>  
        </div>  
        