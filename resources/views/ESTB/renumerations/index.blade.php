@extends('layouts.master')

@section('styles')

    
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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Establishment Section</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                    <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0001 8.5L14.1161 13.5875L19.6085 14.0279L15.4239 17.6125L16.7023 22.9721L12.0001 20.1L7.29777 22.9721L8.57625 17.6125L4.3916 14.0279L9.88403 13.5875L12.0001 8.5ZM12.0001 13.707L11.2615 15.4835L9.34505 15.637L10.8051 16.8883L10.3581 18.759L12.0001 17.7564L13.6411 18.759L13.195 16.8883L14.6541 15.637L12.7386 15.4835L12.0001 13.707ZM8.00005 2V11H6.00005V2H8.00005ZM18.0001 2V11H16.0001V2H18.0001ZM13.0001 2V7H11.0001V2H13.0001Z"></path></svg>
                                         Renumerations
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z"></path></svg>    
                                    </a>
                                    </li>
                            
                                </ol>
                            </div>
                            <!-- Page Header Close -->

            
                          

                            <!-- Start::row-5 -->
                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-12">
                                    @if(session('status'))
                                        @if (session('status') == 1)
                                        <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                                            <span class='font-bold'>Result: </span> DataBase transaction Successful
                                        </div>
                                        @elseif(session('status') == 0)
                                        <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                                            <span class='font-bold'>Result : </span> Error in Database transaction
                                        </div>
                                    
                                        @endif
                                        @php 
                                            Illuminate\Support\Facades\Session::forget('status'); 
                                            header("refresh: 3");  
                                        @endphp
                                    @endif
                                    <div class="box">
                                    <div class="box-header">
                                        <div class="flex">
                                        <h5 class="box-title my-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M12.0001 8.5L14.1161 13.5875L19.6085 14.0279L15.4239 17.6125L16.7023 22.9721L12.0001 20.1L7.29777 22.9721L8.57625 17.6125L4.3916 14.0279L9.88403 13.5875L12.0001 8.5ZM12.0001 13.707L11.2615 15.4835L9.34505 15.637L10.8051 16.8883L10.3581 18.759L12.0001 17.7564L13.6411 18.759L13.195 16.8883L14.6541 15.637L12.7386 15.4835L12.0001 13.707ZM8.00005 2V11H6.00005V2H8.00005ZM18.0001 2V11H16.0001V2H18.0001ZM13.0001 2V7H11.0001V2H13.0001Z"></path></svg>
                                            Renumeration Head Details</h5>
                                        <div class=" block ltr:ml-auto rtl:mr-auto my-auto">
                                                <button type="button" id="renum_add_btn" class="hs-dropdown-toggle ti-btn ti-btn-primary" data-hs-overlay="#hs-medium-modal">
                                                
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z" fill="rgba(255,255,255,1)"></path></svg>
                                                    Add Renumeration Head
                                                </button>
            
                                                <div id="hs-medium-modal" class="hs-overlay hidden ti-modal">
                                                    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                        <div class="ti-modal-content">
                                                        <div class="ti-modal-header">
                                                            <h3 class="ti-modal-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3ZM5 5V19H19V5H5ZM11 11V7H13V11H17V13H13V17H11V13H7V11H11Z"></path></svg>
                                                               
                                                                Add New Renumeration Head
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
                                                            @if(($errors->has('activity')))
                                                                <script>
                                                                    //alert(1);
                                                                    $(window).on('load', function() {
                                                                    
                                                                        $('#renum_add_btn').trigger("click");
                                                                    });      
                                                                </script>
                                                            @endif
                                                        </div>
                                                        <form action="{{route('ESTB.renumerations.store')}}" method="post">
                                                            @csrf
                                                            <div class="ti-modal-body">
                                                               
                                                                <div class="max-w-sm space-y-3">
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold">Renumeration Activity : </label>
                                                                    <input type="text" id="renumactivity" name="activity" class="ti-form-input" placeholder="Renumeration Activity">
                                                                    @if($errors->has('activity'))
                                                                        <div class="text-red-700">{{ $errors->first('activity')}}</div>
                                                                    @endif
                                                                    <div id="activityNameError" class="error text-red-700"></div>
                                                                </div>
                                                               
                                                                <div class="max-w-sm space-y-3 mt-2">
                                                                    <label for="with-corner-hint" class="ti-form-label font-bold"> Level  : </label>
                                                                    <select id="renumlevel" class="ti-form-select" name="level">
                                                                        <option value="default" selected>Choose type</option>
                                                                        <option value="UG">UG</option>
                                                                        <option value="PG">PG</option>
                                                                    </select>
                                                                    @if($errors->has('level'))
                                                                        <div class="text-red-700">{{ $errors->first('level')}}</div>
                                                                    @endif
                                                                    <div id="levelError" class="error text-red-700"></div>
                                                                </div>
                                                        
                                                            </div>
                                                            <div class="ti-modal-footer">
                                                                <button type="button"
                                                                class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                                                                data-hs-overlay="#hs-medium-modal">
                                                                Close
                                                                </button>
                                                                
                                                                <input type="submit" id="renum_store_add_btn" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary  dark:focus:ring-offset-white/10" value="Add"/>
                                                                
                                                                </div>
                                                            </form>  
                                                        </div>
                                                    </div>
                                                </div>
                                            <button type="button" class="ti-btn m-0 rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                            View All</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                                        <table id="renumtable" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80">S.no</th>
                                                <th scope="col" class="dark:text-white/80">Renumerations Activity</th>
                                                <th scope="col" class="dark:text-white/80">Level</th>
                                                <th scope="col" class="dark:text-white/80">Status</th>
                                                <th scope="col" class="dark:text-white/80">Actions</th>
                                                
                                            </tr>
                                            </thead>
                                            <tbody class="">
                                            @php
                                                $i = 1;
                                            @endphp
                                            @forelse($renumerations as $renumeration)
                            
                                            <tr class="bg-red-700">
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                <div class="flex space-x-3 rtl:space-x-reverse w-full min-w-[200px]">
                                                    <div class="block w-full my-auto">
                                                        {{$renumeration->activity}}
                                                    </div>
                                                </div>
                                                </td>
                                                <td><span>{{$renumeration->level}}</span></td>
                                                <td><span>{{$renumeration->status}}</span></td>
                                                
                                                <td class="font-medium space-x-2 rtl:space-x-reverse">
                                                <div class="hs-tooltip ti-main-tooltip">
                                                    <button data-hs-overlay="#design_edit_modal{{$i}}"
                                                    class="hs-dropdown-toggle  m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                        <span
                                                            class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700"
                                                            role="tooltip">
                                                            Edit
                                                        </span>
                                                    </button>
                        
                    
                                                        <div id="design_edit_modal{{$i}}" class="hs-overlay hidden ti-modal">
                                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                <div class="ti-modal-content">
                                                                <div class="ti-modal-header">
                                                                    <h3 class="ti-modal-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                        Edit Renumeration
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
                                                                <form  action="{{route('ESTB.renumerations.update',$renumeration->id)}}" method="post">
                                                                    @csrf
                                                                    @method('patch')
                                                                    <div class="ti-modal-body">
                                                                       
                                                                        <div class="max-w-sm space-y-3">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Renumeration Activity : </label>
                                                                            <input type="text" name="edit_activity" class="ti-form-input" placeholder="Renumaration Activity" value="{{$renumeration->activity}}">
                                                                            @if($errors->has('edit_activity'))
                                                                                <div class="text-red-700">{{ $errors->first('edit_activity')}}</div>
                                                                            @endif
                                                                            <div id="activityNameError" class="error text-red-700"></div>
                                                                        </div>
                                                                        <div class="max-w-sm space-y-3">
                                                                            <label for="with-corner-hint" class="ti-form-label font-bold">Level : </label>
                                                                            <select class="ti-form-select" name="level">
                                                                                <option value="default">Choose type</option>
                                                                                <option value="UG" {{($renumeration->level == "UG")?'selected':''}}>UG</option>
                                                                                <option value="PG" {{($renumeration->level == "PG")?'selected':''}}>PG</option>
                                                                            </select>
                                                                            @if($errors->has('level'))
                                                                                <div class="text-red-700">{{ $errors->first('level')}}</div>
                                                                            @endif
                                                                            <div id="levelError" class="error text-red-700"></div>
                                                                        </div>
                                                                        @if($pay->status == 'inactive')
                                                                        <br/>
                                                                            <div class="flex">
                                                                                <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active" required>
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
                                                <form action="{{ route('ESTB.renumerations.destroy',$renumeration->id) }}" method="post">
                                                   
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
                                                <p class="text-dark"><b>No Renumerations Added.</b></p>
                                            @endforelse
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="sm:flex items-center">
                                            <div class="">
                                                showing 5 Entries <i class="ri-arrow-right-line ml-2 font-semibold"></i>
                                            </div>
                                            <div class="ltr:ml-auto rtl:mr-auto">
                                                <nav class="flex justify-center items-center space-x-2 rtl:space-x-reverse">
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span aria-hidden="true">Prev</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="bg-primary text-white py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);" aria-current="page">1</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">2</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center text-sm font-medium rounded-sm" href="javascript:void(0);">3</a>
                                                    <a class="text-gray-500 hover:text-primary e py-1 px-2 leading-none inline-flex items-center gap-2 rounded-sm" href="javascript:void(0);">
                                                        <span class="sr-only">Next</span>
                                                        <span aria-hidden="true">Next</span>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End::row-5 -->

                        </div>
                        <!-- End::main-content -->

                    </div>

@endsection

@section('scripts')

        <!-- APEX CHARTS JS -->
        <script src="{{asset('build/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        @vite('resources/assets/js/flatpickr.js')
         <script
        src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
        </script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
        <script href="https://cdn.tailwindcss.com/3.3.5"></script>

        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');
              
                new DataTable('#renumTable');

                $(document).on('click','#renum_store_add_btn',function(e){
                    var renumactivity = $('#renumactivity').val();
                    var renumlevel = $('#renumlevel').val();

                    var flag = false;

                    if(renumactivity == ''){
                        $('#activityNameError').text('Religion Name is missing');
                        flag = true;
                    }else if (!/^[a-zA-Z\s]+$/.test(renumactivity.trim())){
                        $('#activityNameError').text('Please fill the correct value');
                        flag = true;
                    }
                    if(renumlevel == '#'){
                        $('#levelError').text('Please Choose a correct option');
                        flag = true;
                    }
                    
                    if(flag == true){
                        e.preventDefault();
                    }
                });
            });
        </script>

        <!--<script>
             //validation 
            function validateForm() {
                var activityName = document.forms["renum_form"]["activity"].value;
                var levelName = document.forms["renum_form"]["level"].value;

                document.getElementById("activityNameError").innerHTML = "";
                document.getElementById("levelError").innerHTML = "";

                if (activityName.trim() === "") {
                    document.getElementById("activityNameError").innerHTML = "Activity Name is required";
                    return false;
                }else if (!/^[a-zA-Z]+$/.test(activityName.trim())) {
                document.getElementById("activityNameError").innerHTML = "Activity Name should contain only alphabetic characters";
                return false;
                }

                if (levelName.trim() === "") {
                    document.getElementById("levelError").innerHTML = "Level Name is required";
                    return false;
                }else if (!/^[a-zA-Z]+$/.test(levelName.trim())) {
                document.getElementById("levelError").innerHTML = "level Name should contain only alphabetic characters";
                return false;
                }
                return true;
            }
        </script>-->


        <!-- INDEX JS -->
        @vite('resources/assets/js/index-8.js')
        

@endsection