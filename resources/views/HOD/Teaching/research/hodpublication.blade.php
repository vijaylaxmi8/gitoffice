@extends('layouts.components.HOD.master-hod')

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
                                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"><span class="text-primary">
                                    @if(session('deptid')==8)
                                        Weclome HOD Civil Engineering
                                        @elseif(session('deptid')==5)
                                        Welcome HOD Computer Science and Engineering
                                         @elseif(session('deptid')==17)
                                        Welcome HOD Architecture
                                         @elseif(session('deptid')==9)
                                        Welcome HOD Aeronautical Engineering
                                         @elseif(session('deptid')==2)
                                        Welcome HOD Electronics and Communication Engineering
                                         @elseif(session('deptid')==7)
                                        Welcome HOD Electrtical and Electronics Engineering
                                         @elseif(session('deptid')==6)
                                        Welcome HOD Information Science & Engineering
                                         @elseif(session('deptid')==1)
                                        Welcome HOD Mechanical Engineering
                                        @elseif(session('deptid')==24)
                                        Welcome HOD Master of Business Administration
                                         @elseif(session('deptid')==3)
                                        Welcome HOD Master of Computer Applications
                                         @elseif(session('deptid')==13)
                                        Welcome HOD Physics
                                         @elseif(session('deptid')==12)
                                        Welcome HOD Mathematics
                                         @elseif(session('deptid')==14)
                                        Welcome HOD Chemistry
                                    @endif 
                                    </span></h3>
                            </div>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                                <li class="text-sm">
                                <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="#">
                                   Publication
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
                                    <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto table-auto">
                                        <table id="publication" class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                                            <thead class="bg-gray-50 dark:bg-black/20">
                                            <tr class="">
                                                <th scope="col" class="dark:text-white/80 font-bold ">S.No</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Staff Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Dept Short Name</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">E-Gov ID</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Level</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Title</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Date</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Journal</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Link</th>
                                                <th scope="col" class="dark:text-white/80 font-bold ">Role</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                 @php
                                                    $i=1;
                                                @endphp
                                                @foreach ($publication as $pub)
                                                    <tr class="">

                                                        <td><span>{{ $i++ }}</span></td>
                                                        <td><span>{{ $pub->fname . ' ' . $pub->mname . ' ' . $pub->lname }}</span></td>
                                                        <td><span>{{ $pub->dept_shortname }}</span></td>
                                                        <td><span>{{ $pub->egov_id }}</span></td>
                                                        <td><span>{{ $pub->level }}</span></td>
                                                        <td><span>{{ $pub->title }}</span></td>
                                                        <td><span>{{\Carbon\Carbon::parse($pub->date)->format('d-M-Y') }}</span></td>
                                                        <td><span>{{ $pub->journal }}</span></td>
                                                        <td><span>{{ $pub->link }}</span></td>
                                                        <td><span>{{ $pub->role }}</span></td>
                                                    </tr>
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


        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"
        ></script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>

        <script href="https://cdn.tailwindcss.com/3.3.5"></script>
        
        <script>
            $(document).ready(function(){
               //alert('Hello from jquery');

               new DataTable('#publication');
            });
        </script>
        
@endsection