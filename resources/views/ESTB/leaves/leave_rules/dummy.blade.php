<div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
    <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
        <thead class="bg-gray-50 dark:bg-black/20">
        <tr class="">
            <th scope="col" class="dark:text-white/80">S.no</th>
            <th scope="col" class="dark:text-white/80">@sortablelink('dept_name','Department Name')</th>
            <th scope="col" class="dark:text-white/80">@sortablelink('dept_shortname','Department ShortName')</th>
            <th scope="col" class="dark:text-white/80">@sortablelink('yoe','Year of Establishment')</th>
            <th scope="col" class="dark:text-white/80">Status</th>
            <th scope="col" class="dark:text-white/80">Actions</th>
            
        </tr>
        </thead>
        <tbody class="">
            <form class="form-inline" action="{{route('ESTB.departments.indexfiltering')}}" method="GET">
                @csrf
                
                <div class="relative flex rounded-sm float-right">
                    <input type="text" class="ti-form-input ltr:pl-11 rtl:pr-11 rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10" id="filter" name="filter"  placeholder="Department name..." value="{{$filter}}">
                        
                    <div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
                    <svg class="h-4 w-4 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    </div>
                    <button type="submit" class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">Search</button>
                </div>

            </form>
        @php
            $i = 1;
        @endphp
        @forelse($department as $dept)

        <tr class="">
            <td>{{ $i++ }}</td>
            <td>
            <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                <div class="block w-full my-auto">
                    {{$dept->dept_name}}
                </div>
            </div>
            </td>
            <td><span>{{$dept->dept_shortname}}</span></td>
            <td><span>{{$dept->yoe}}</span></td>
            <td><span>{{$dept->status}}</span></td>
            
            <td class="font-medium space-x-2 rtl:space-x-reverse">
            <div class="hs-tooltip ti-main-tooltip">
                <button data-hs-overlay="#dept_edit_modal{{$i}}"
                class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                    <span
                        class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                        role="tooltip">
                        Edit
                    </span>
                </button>


                    <div id="dept_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                            <div class="ti-modal-content">
                            <div class="ti-modal-header">
                                <h3 class="ti-modal-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                    Edit Department
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
                            <form  action="{{route('ESTB.departments.update',$dept->id)}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="ti-modal-body">
                                   
                                    <div class="max-w-sm space-y-3 pb-6">
                                        <label for="with-corner-hint" class="ti-form-label">Department Name : </label>
                                        <input type="text" name="dept_name" class="ti-form-input" placeholder="Department name" value="{{$dept->dept_name}}">
                                    </div>
                                    <div class="max-w-sm space-y-3 pb-6">
                                        <label for="" class="ti-form-label">Department Short Name : </label>
                                        <input type="text" name="dept_shortname" class="ti-form-input" placeholder="Department short name" value="{{$dept->dept_shortname}}">
                                    </div>
                                    <label for="" class="ti-form-label">Year of Establishment :</label>
                                    <div class="flex shadow-sm max-w-sm space-y-3 pb-6">
                                        
                                        <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                    class="ri ri-calendar-line"></i></span>
                                        </div>

                                        <input type="text" name="yoe"
                                            class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                            id="date" placeholder="Choose date"  value="{{$dept->yoe}}">
                                    </div>
                                    @if($dept->status == 'inactive')
                                    <br/>
                                        <div class="flex">
                                            <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                            <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                        </div>
                                    @endif
                            
                                </div>
                                <div class="ti-modal-footer">
                                    <button type="button"
                                    class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                    data-hs-overlay="#hs-medium-modal">
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
            <form action="{{ route('ESTB.departments.destroy',$dept->id) }}" method="post">
               
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
            <p class="text-dark"><b>No Departments Added.</b></p>
        @endforelse
        </tbody>
    </table>
    </div>


    <!--filtering-->
    <form class="form-inline" action="{{route('ESTB.departments.indexfiltering')}}" method="GET">
        @csrf
        
        <div class="relative flex rounded-sm float-right">
            <input type="text" class="ti-form-input ltr:pl-11 rtl:pr-11 rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10" id="filter" name="filter" placeholder="Department name..." value="{{$filter}}">
                
            <div class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
            <svg class="h-4 w-4 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
            </div>
            <button type="submit" class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">Search</button>
        </div>

    </form>


    <!--pagination code-->
    
    
<!-- Pagination-->
<div class="sm:flex items-center">
    <div class="">
        showing {{$department->firstItem()}} to {{$department->lastItem()}} of {{$department->total()}}
    </div>
    <div class="ltr:ml-auto rtl:mr-auto">
        <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
            <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="{{$department->previousPageUrl()}}">
                <span aria-hidden="true">Prev</span>
                <span class="sr-only">Previous</span>
            </a>
            @php
                if (isset ($_GET['page']) ) {  
                    $page = $_GET['page'];
                    $url_page = $_GET['page'];
                } else {  
                    $page = 1; 
                    $url_page = 1;
                }  
                $per_page_count = $department->perPage();
                $total_result = $department->total();
                $page_first_result = ($page-1) * $per_page_count; 
                
                $number_of_page = ceil ($total_result / $per_page_count);  
            @endphp
            
            @for ($page = 1; $page<= $number_of_page; $page++)
                @if ($page == $url_page)
                    <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="{{$department->url($page)}}" aria-current="page">{{$page}}</a>
                @else
                        <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="{{$department->url($page)}}">{{$page}}</a>
                @endif
            @endfor
            <!--a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);" aria-current="page">1</a>
            <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">2</a>
            <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">3</a-->
            <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="{{ $department->nextPageUrl() }} ">
                <span class="sr-only">Next</span>
                <span aria-hidden="true">Next</span>
            </a>
        </nav>
    </div>
</div>

    <!--th scope="col" class="dark:text-white/80 font-bold">@sortablelink('carry_forwardable','Carry forwardable')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('max_carry_forwardable','Max Carry forwardable')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('cf_wef','WEF')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('cf_gcr','GC RES No')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('encashable','Encashable')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('enc_wef','WEF')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('enc_gcr','GC RES No')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('max_encashable','Max Encashable')</th>
                                                    <th scope="col" class="dark:text-white/80 font-bold">@sortablelink('gap','Gap')</th-->
                                                   



<!--td><span>{{$lr->carry_forwardable}}</span></td>
                                                    <td><span>{{$lr->max_carry_forwardable}}</span></td>
                                                    <td><span>{{$lr->cf_wef}}</span></td>
                                                    <td><span>{{$lr->cf_gcr}}</span></td>
                                                    <td><span>{{$lr->encashable}}</span></td>
                                                    <td><span>{{$lr->enc_wef}}</span></td>
                                                    <td><span>{{$lr->enc_gcr}}</span></td>
                                                    <td><span>{{$lr->max_encashable}}</span></td>
                                                    <td><span>{{$lr->gap}}</span></td-->




                                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                            <div class="hs-tooltip ti-main-tooltip">
                                                                <button data-hs-overlay="#leave_rule_edit_modal{{$i}}"
                                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        <span
                                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                                            role="tooltip">
                                                                            Edit
                                                                        </span>
                                                                </button>
                                    
                                    
                                                                <div id="leave_rule_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:mx-auto ">
                                                                
                                                                        <div class="ti-modal-content">
                                                                            <div class="ti-modal-header">
                                                                                <h3 class="ti-modal-title">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                                        Edit Leave Rule
                                                                                </h3>
                                                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                                                    data-hs-overlay="#leave_rule_edit_modal{{$i}}">
                                                                                    <span class="sr-only">Close</span>
                                                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                                        fill="currentColor" />
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                            <form  action="{{route('ESTB.leaves.leave_rules.update',[$leaves->id,$lr->id])}}" method="post">
                                                                                @csrf
                                                                                @method('patch')
                                                                                <div class="ti-modal-body">
                                                                                    <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                                        <div class="flex items-center pb-6  white-space:normal word-break:break-all ">
                                                                                    
                                                                                            <label for="" class="ti-form-label font-bold pr-4">Is Carry Forwardable?</label>
                                                                                            
                                                                                            <input type="radio" name="carry_forwardable" class="ti-form-radio" id="year1" value="Yes" {{$lr->carry_forwardable =='Yes'?'selected':''}}>
                                                                                            <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
                                                                                            <input type="radio" name="carry_forwardable" class="ti-form-radio " id="year2" value="No" {{$lr->carry_forwardable =='No'?'selected':''}} >
                                                                                            <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
                                                                                    
                                                                                        </div>
                                                                                        <div class="space-y-2 pb-6">
                                                                                            <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                            <input type="text" name="cf_wef" class="ti-form-input flatpickr-input" id="date"
                                                                                                placeholder="Choose date" readonly value={{$lr->cf_wef}}>
                                                                                        </div>
                                                                                        <div class="space-y-2 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                            <input type="text" name="cf_gcr" class="ti-form-input"  placeholder="GCR" value={{$lr->cf_gcr}}>
                                                                                        </div>
                                                                                        <div class="space-y-2 pb-6">
                                                                                            <label class="ti-form-label mb-0 font-bold">Max Carry Forwardable</label>
                                                                                            <input type="text" name="max_carry_forwardable" class="ti-form-input flatpickr-input"
                                                                                                placeholder="Max Carry Forwardable" value={{$lr->max_cf}}>
                                                                                        </div>  
                                                                                    </div>
                                                                                    <div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0"> 
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                    <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                                        <div class="flex items-center  pb-6 ">
                                                                                            <label for="" class="ti-form-label font-bold pr-2">Is Encashable</label>
                                                                                    
                                                                                            <input type="radio" name="encashable" class="pr-2 ml-2 ti-form-radio" id="year1" value="Yes" {{$lr->encashable =='Yes'?'selected':''}}>
                                                                                            <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                                        
                                                                                            <input type="radio" name="encashable" class="pr-2 ml-3 ti-form-radio" id="year2" value="No" {{$lr->encashable =='No'?'selected':''}}>
                                                                                            <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                                    
                                                                                        </div>
                                                                                        <div class="space-y-2  pb-6 ">
                                                                                            <label class="ti-form-label mb-0 font-bold pl-4">With Effect From</label>
                                                                                            <input type="text" name="enc_wef" class="ti-form-input flatpickr-input pl-4" id="date"
                                                                                                placeholder="Choose date" readonly value={{$lr->enc_wef}}>
                                                                                        </div>
                                                                                        <div class="space-y-2  pb-6 ">
                                                                                            <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                            <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR" value="{{$lr->enc_gcr}}">
                                                                                        </div>
                                                                                        <div class="space-y-2  pb-6 ">
                                                                                            <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
                                                                                            <input type="text" name="max_encashable" class="ti-form-input flatpickr-input"
                                                                                                placeholder="Max encashable" value={{$lr->max_enc}}>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                    <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                                        <div class="flex items-center">
                                                                                            <label for="" class="ti-form-label font-bold pr-2">Gap for reapplying this leave</label>
                                                                                            <input type="radio" name="gap" class="pr-2 ml-2 ti-form-radio" id="gap" value="Yes" {{$lr->gap =='Yes'?'selected':''}}>
                                                                                            <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
                                                                                        
                                                                                            <input type="radio" name="gap" class="pr-2 ml-3 ti-form-radio" id="gap" value="No" {{$lr->gap =='No'?'selected':''}}>
                                                                                            <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
                                                                                            
                                                                                        </div>
                                                                                        <div class="space-y-2 pb-6">
                                                                                            <label class="ti-form-label mb-0 font-bold pl-4">With Effect From</label>
                                                                                            <input type="text" name="gap_wef" class="ti-form-input flatpickr-input pl-4" id="date"
                                                                                                placeholder="Choose date" readonly value={{$lr->gap_wef}}>
                                                                                        </div>
                                                                                        <div class="space-y-2 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">GC Res NO: </label>
                                                                                            <input type="text" name="gap_gcr" class="ti-form-input"  placeholder="GCR"  value={{$lr->gap_gcr}}>
                                                                                        </div>
                                                                                    
                                                                                        <div class="space-y-2 pb-6">
                                                                                            <label for="" class="ti-form-label font-bold">Gap in No. of Days </label>
                                                                                            <input type="text" name="min_gap" class="ti-form-input"  placeholder="Gap between 2 similar leaves" value={{$lr->min_gap}}>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                    <div class="grid lg:grid-cols-2 gap-2 pb-4 space-y-2 lg:space-y-0">    
                                                                                        <div class="space-y-2  pb-4 ">
                                                                                            <label class="ti-form-label mb-0 font-bold">Maximum times this leave can be availed</label>
                                                                                            <input type="text" name="max_time_allowed" class="ti-form-input flatpickr-input pb-4"
                                                                                                placeholder="Maximum times the leave can be taken" value="{{$l->max_time_allowed}}">
                                                                                        </div>
                                                                                        <div class="space-y-2  pb-4 ">
                                                                                            <label class="ti-form-label mb-0 font-bold">Period in which Maximum times this leave can be availed</label>
                                                                                            <select class="ti-form-select" name="period">
                                                                                                <option value='#'>Select the Period</option>
                                                                                                <option value='entire service' {{$lr->period == "entire service"?'selected':''}}>Entire Service</option>
                                                                                                <option value='five years' {{$lr->period == "five years"?'selected':''}}>Once in Five Years</option>
                                                                                                <option value='one year' {{$lr->period == "one year"?'selected':''}}>Once in a Year</option>
                                                                                                <option value='six months' {{$lr->period == "six months"?'selected':''}}>Once in six months</option>
                                                                                                <option value='one month' {{$lr->period == 'one month'? 'selected':''}}>Once in a month</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                    <div class="grid lg:grid-cols-4 gap-2 space-y-2 lg:space-y-0">    
                                                                                        <div class="space-y-2  pb-4 ">
                                                                                            <label class="ti-form-label mb-0 font-bold">Prior Intimation days</label>
                                                                                            <input type="text" name="no_days_prior_intimation" class="ti-form-input flatpickr-input"
                                                                                                placeholder="Approval required before going on leave" value="{{$lr->prior_intimation_days}}">
                                                                                        </div>
            
                                                                                    </div>
                                                                                    <hr class="pb-4 border-1 dark:bg-gray-700"/>
                                                                                        <!-- Combination Rules Setting Section -->
                                                                                    <label for="" class="ti-form-label font-bold">Check the leaves that can be combined with this leave type </label>
                                                                                                
                                                                                    @foreach($allleaves as $l) <!--For running the leave list-->
                                                                                        @if($l->vacation_type == $leaves->vacation_type && $l->id!=$leaves->id)
                                                                                            @php
                                                                                                $checked="";
                                                                                                $combination_type_checked="";
                                                                                            @endphp
                                                                                            @if($leaves->combineleaves !=null)
                                                                                                @foreach($leaves->combine_leave as $l_combination)
                                                                                                    <!--To make checkboxes to be checked when the value available in DB for Leave Type-->
                                                                                                    @if($l_combination->pivot->combined_with==$l->id && $l_combination->pivot->status=='Active')
                                                                                                        @php
                                                                                                            $checked="checked";
                                                                                                            $combination_type_checked=$l_combination->pivot->sandwiching;
                                                                                                        @endphp
                                                                                                
                                                                                                    @endif    
                                                                                                @endforeach
                                                                                            @endif
                                                                                            <div class="flex">
                                                                                                <div class="max-w-sm space-y-3 pb-6 ">
                                                                                                    <div class="max-w-sm pb-2">
                                                                                                    
                                                                                                        <input type="checkbox" name="leavetype[]" class="pr-4 pb-4 Leave_type"  {{$checked}} value="{{$l->id}}"> {{$l->longname}}
                                                                                                        <div class="py-4"><label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"><b>Combination Type:</b></label>
                                                                                                            <input type="radio" name="allowed[{{$l->id}}]" class="pr-4 combo_type" {{($combination_type_checked == "Bothside" && $checked=="checked")?'checked':''}} value="Bothside"> Both Side
                                                                                                            <input type="radio" name="allowed[{{$l->id}}]" class="pr-4 combo_type" {{($combination_type_checked == "Oneside" && $checked=="checked")?'checked':''}} value="Oneside"> One Side
                                                                                                        
                                                                                                        </div>
                                                                                                    </div>
                                                                                            
                                                                                                </div>
                                                                                            </div>
                                                                                
                                                                                        @endif
                                                                            
                                                                                    @endforeach
                                                                                    <div class="max-w-sm space-y-3 pb-6 ">
                                                                                        <label class="ti-form-label mb-0 font-bold">With Effect From</label>
                                                                                        <input type="text" name="com_wef" class="ti-form-input flatpickr-input" id="date"  placeholder="Choose date" value="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="ti-modal-footer">
                                                                                    <button type="button"
                                                                                        class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                                        data-hs-overlay="#leave_rule_edit_modal{{$i}}">
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
                                                                <form action="{{ route('ESTB.leaves.leave_rules.destroy',[$leaves->id,$lr->id])}}" method="post">
                                                    
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
                                                        </div>
                                                        