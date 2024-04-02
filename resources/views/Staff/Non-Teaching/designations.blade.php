@extends('layouts.components.staff.master-nonteaching')

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
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                    Staff Designation & Payscale
                                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                </a>
                                </li>
                            </ol>
                        </div>
                        <!-- Page Header Close -->
                        
                    </div>
                    <!-- Start::main-content -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-12">
                            <div class="box">
                                <div class="box-body">                
                                     <!-- The tabluar representation of designation and payscale data-->
                                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                    <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                        <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr>
                                                <th rowspan="2" scope="col" class="dark:text-white/80 font-bold">S.no</th>
                                                <th scope="col" colspan="4" class="dark:text-white/80 font-bold">Designation Details
                                                </th>
                                                <th scope="col" colspan="4" class="dark:text-white/80 text-center font-bold">Pay Scale Details</th>
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
                                            @foreach ($staff->designations as $designation)
                                                @if($designation->isadditional == 0 ) <!--For working with regular designations-->
                                                    @php
                                                    $rowcount=0;
                                                        
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
                                                        //  $rowcount++;
                                                            if($staff->consolidated_teaching_pay !=null){
                                                                foreach($staff->consolidated_teaching_pay as $ctp){
                                                                    if($designation->pivot->end_date==null && $ctp->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($ctp->start_date>=$designation->pivot->start_date && $ctp->end_date<=$designation->pivot->end_date && $ctp->end_date!=null)
                                                                    {
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            }
                                                            
                                                        
                                                        
                                                            //for getting the non-teaching rowcount
                                                            if($staff->ntpayscale!=null)
                                                            {
                                                                
                                                                foreach($staff->ntpayscale as $ntp)
                                                                {
                                                        
                                                                    if($designation->pivot->end_date==null && $ntp->pivot->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($ntp->pivot->start_date>=$designation->pivot->start_date && $ntp->pivot->end_date<=$designation->pivot->end_date && $ntp->pivot->end_date!=null)
                                                                    {
                                                                    
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            
                                                            }
                                                            if($staff->ntcpayscale!=null)
                                                            {
                                                                foreach($staff->ntcpayscale as $ntcp)
                                                                {
                                                                    if($designation->pivot->end_date==null && $ntcp->pivot->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($ntcp->pivot->start_date>=$designation->pivot->start_date && $ntcp->pivot->end_date<=$designation->pivot->end_date && $ntcp->pivot->end_date!=null)
                                                                    {
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            }
                                                            if($staff->fixed_nt_pay!=null)
                                                            {
                                                                foreach($staff->fixed_nt_pay as $fntp)
                                                                {
                                                                    if($designation->pivot->end_date==null && $fntp->start_date>=$designation->pivot->start_date)
                                                                    {
                                                                        $rowcount++;
                                                                    }
                                                                    elseif($fntp->start_date>=$designation->pivot->start_date && $fntp->end_date<=$designation->pivot->end_date && $fntp->end_date!=null)
                                                                    {
                                                                        $rowcount++;
                                                                    
                                                                    }
                                                                }
                                                            }
                                                        $rowcount++;
                                                    
                                                        
                                                    @endphp

                                                    <tr class="{{$designation->pivot->status =='inactive'?'bg-gray-200':''}}">
                                                        <td rowspan={{$rowcount}}>{{ $i++  }}   </td>
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

                                                    <!-- Payscale and Designation Display for Teaching-->
                                                    {{-- @if($staff->latest_employee_type[0]->employee_type=='Teaching') --}}
                                                        
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
                                                                    @if($cons_teaching_pay->start_date>=$designation->pivot->start_date && $cons_teaching_pay->end_date!=null && $cons_teaching_pay->end_date<=$designation->pivot->end_date)
                                                                        <tr class="{{$cons_teaching_pay->status =='inactive'?'bg-gray-200':''}}">
                                                                            
                                                                            <td><span>{{$cons_teaching_pay->pay}}</span></td>
                                                                            <td><span>{{\Carbon\Carbon::parse($cons_teaching_pay->start_date)->format('d-M-Y')}}</span></td>
                                                                            <td><span>{{$cons_teaching_pay->end_date ==null ?'--NA--': \Carbon\Carbon::parse($cons_teaching_pay->end_date)->format('d-M-Y')}}</span></td>
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
                                                                            <td><!--Action button not added.--></td>
                                                                        </tr>
                                                                    @endif  
                                                                @else
                                                                    @if($cons_teaching_pay->end_date==null|| ($cons_teaching_pay->end_date>$designation->pivot->start_date))
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
                                                                                
                                                                        </tr>   
                                                                        @endif
                                                                
                                                                        
                                                                @endif 
                                                                @empty
                                                            
                                                            @endforelse
                                                        @endif
                                                        <!-- End of Teaching consolidated payscale -->
                                                    </tr>  
                                                    <!-- Teaching section designation and payscale ends here-->
                                                {{-- @else --}}
                                                <!--Non teaching Section starts here-->
                                                
                                                        @if($staff->ntpayscale != null)
                                                            @foreach ($staff->ntpayscale as $ntpays )
                                                            
                                                                @if($designation->pivot->end_date==null && $ntpays->pivot->start_date>=$designation->pivot->start_date)

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
                                                                       
                                                                    </tr>
                                                                @elseif($ntpays->pivot->start_date>=$designation->pivot->start_date && $ntpays->pivot->end_date<=$designation->pivot->end_date && $ntpays->pivot->end_date!=null)
                                                                <!--Checking if designation is closed if non-teaching payscale should be between start date and end date-->
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
                                                                    
                                                                </tr>
                                                                <!--ends here-->
                                                            @endif
                                                            @endforeach
                                                        @endif
                                                            <!--End of non teaching designation and poayscale section-->
                                                                <!--For non-teaching Consolidated payscale-->
                                                            @if($staff->ntcpayscale !=null)
                                                                @foreach ($staff->ntcpayscale as $ntcpays )
                                                                @if($designation->pivot->end_date==null && $ntcpays->pivot->start_date>=$designation->pivot->start_date)
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
                                                                        
                                                                        </tr>
                                                                    @elseif ($ntcpays->pivot->start_date>=$designation->pivot->start_date && $ntcpays->pivot->end_date<=$designation->pivot->end_date && $ntcpays->pivot->end_date!=null)
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

                                                                       
                                                                        </tr> 
                                                                    @endif   
                                                                @endforeach


                                                            @endif
                                                            <!--Non Teaching fixed salary section-->
                                                            @if ($staff->fixed_nt_pay !=null)
                                                                @forelse ($staff->fixed_nt_pay as $fntp)
                                                                <!--CHeck with designation and display accordingly-->
                                                                @if($designation->pivot->end_date==null && $fntp->start_date>=$designation->pivot->start_date)
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
                                                                        
                                                                    </tr>
                                                                    @elseif($fntp->start_date>=$designation->pivot->start_date && $fntp->end_date<=$designation->pivot->end_date && $fntp->end_date!=null)
                                                                        <!--Check for designation ended matching payscale-->
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
                                                                           
                                                                        </tr>
                                                                        <!-- Checking with designation ends here-->
                                                                    @endif
                                                                @empty
                                                                        
                                                            @endforelse
                                                            
                                                        @endif

                                                        <!--End of non-teaching fixed pay (if)-->
                                                        
                                                    {{-- @endif   --}}
                                            @endif <!--end if for addiotional designation checking--> 
                                            @endforeach 
                                        </tbody>
                                    </table>  
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
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
            });
        </script>
@endsection