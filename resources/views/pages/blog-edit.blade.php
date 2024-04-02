@extends('layouts.master')

@section('styles')

        <!-- SWIPER CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

        <!-- CHOICES CSS  -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- QUILL CSS -->
        <link id="style" href="{{asset('build/assets/libs/quill/quill.snow.css')}}" rel="stylesheet">

        <!-- FILEPOND FILE UPLOAD CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond/filepond.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css')}}">

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
                                    <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Edit Blog</h3>
                                </div>
                                <ol class="flex items-center whitespace-nowrap min-w-0">
                                    <li class="text-sm">
                                        <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                                        Pages
                                        <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                                        </a>
                                    </li>
                                    <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                                        Edit Blog
                                    </li>
                                </ol>
                            </div>
                            <!-- Page Header Close -->

                            <!-- Start::row-1 -->
                            <div class="grid grid-cols-12 gap-x-6">
                            <div class="col-span-12 xxl:col-span-9">
                                <div class="box">
                                <div class="box-body space-y-5">
                                    <div>
                                    <label for="input-label1" class="ti-form-label">Blog Title</label>
                                    <input type="text" id="input-label1" class="ti-form-input" placeholder="blogtitle"
                                        value="Myths about Investment">
                                    </div>
                                    <div>
                                    <label class="ti-form-select-label">Categories</label>
                                    <select class="ti-form-select blog-tag2" multiple>
                                        <option value="Choice 1">Health</option>
                                        <option value="Choice 2">Lifestyle</option>
                                        <option value="Choice 3" selected>Business</option>
                                        <option value="Choice 4">Tourism</option>
                                        <option value="Choice 5">Nature</option>
                                        <option value="Choice 6">Development</option>
                                        <option value="Choice 7">Housing</option>
                                        <option value="Choice 8">Realestate</option>
                                        <option value="Choice 9">Architecture</option>
                                        <option value="Choice 9">Flowers</option>
                                    </select>
                                    </div>
                                    <div>
                                    <label for="input-label" class="ti-form-label">Content</label>
                                    <div class="ql-wrapper ql-wrapper-modal ht-250">
                                        <div class="flex-1" id="blog-edit">
                                        <h1 class="text-xl">Blog Heading</h1>
                                        <br>
                                        <p class="text-gray-500 dark:text-white/70 text-sm">I must explain to you how all this mistaken idea
                                            of denouncing pleasure and praising pain was born and I will give you a complete account of the
                                            system, and expound the actual teachings of the great explorer of the truth, the master-builder of
                                            human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
                                        <br>
                                        <p class="text-gray-500 dark:text-white/70 text-sm">but because those who do not know how to pursue
                                            pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone
                                            who loves or pursues or desires to obtain pain of itself, because it is pain, but because
                                            occasionally circumstances occur in which toil and pain can procure him some great pleasure. To
                                            take a trivial example.</p>
                                        <br>
                                        <p class="text-gray-500 dark:text-white/70 text-sm">Those who do not know how to pursue
                                            pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone
                                            who loves or pursues or desires to obtain pain of itself, because it is pain, but because
                                            occasionally circumstances occur in which toil and pain can procure him some great pleasure. To
                                            take a trivial example.</p>
                                        </div>
                                    </div>
                                    </div>
                                    <div>
                                    <label for="input-label" class="ti-form-label">Upload</label>
                                    <input type="file" class="filepond multiple-filepond" name="filepond" multiple data-allow-reorder="true"
                                        data-max-file-size="3MB" data-max-files="5">
                                    </div>
                                    <div class="sm:grid grid-cols-12 sm:gap-6 space-y-5 sm:space-y-0">
                                    <div class="col-span-12 lg:col-span-6">
                                        <label for="input-label2" class="ti-form-label">Blog Author</label>
                                        <input type="text" id="input-label2" class="ti-form-input" placeholder="Enter Name">
                                    </div>
                                    <div class="col-span-12 lg:col-span-6">
                                        <label for="input-label3" class="ti-form-label">Author Email</label>
                                        <input type="email" id="input-label3" class="ti-form-input" placeholder="Enter Email">
                                    </div>
                                    <div class="col-span-12">
                                        <label class="ti-form-select-label">Tags</label>
                                        <select class="ti-form-select blog-tag" multiple>
                                        <option value="Choice 1">Health</option>
                                        <option value="Choice 2">Lifestyle</option>
                                        <option value="Choice 3" selected>Business</option>
                                        <option value="Choice 4">Tourism</option>
                                        <option value="Choice 5">Nature</option>
                                        <option value="Choice 6">Development</option>
                                        <option value="Choice 7">Housing</option>
                                        <option value="Choice 8">Realestate</option>
                                        <option value="Choice 9">Architecture</option>
                                        <option value="Choice 9">Flowers</option>
                                        </select>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <label for="input-label" class="ti-form-label">Blog Published Date</label>
                                        <div class="flex rounded-sm shadow-sm">
                                        <div
                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                class="ri ri-calendar-line"></i></span>
                                        </div>
                                        <input type="text" class="ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input" id="blog-date"
                                            placeholder="Choose date" readonly>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <label for="input-label" class="ti-form-label">Blog Published Time</label>
                                        <div class="flex rounded-sm shadow-sm">
                                        <div
                                            class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                            <span class="text-sm text-gray-500 dark:text-white/70"><i class="ri ri-time-line"></i></span>
                                        </div>
                                        <input type="text" class="ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input" id="blog-time"
                                            placeholder="Choose date" readonly>
                                        </div>
                                    </div>
                                    <div class="col-span-12 lg:col-span-4">
                                        <label class="ti-form-select-label">Publish Status</label>
                                        <select class="ti-form-select blog-tag3" data-trigger>
                                        <option value="Choice 1">On-Hold</option>
                                        <option value="Choice 2">Published</option>
                                        <option value="Choice 3" selected>UnPublished</option>
                                        <option value="Choice 4">Discarded</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="box-footer bg-transparent">
                                    <div class="flex items-center justify-between">
                                    <button type="button" class="py-2 px-3 ti-btn ti-btn-secondary">
                                        Save To Draft
                                    </button>
                                    <button type="button" class="py-2 px-3 ti-btn ti-btn-primary">
                                        Publish Now
                                    </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12 xxl:col-span-3">
                                <div class="box">
                                <div class="box-body p-0">
                                    <div class="swiper mySwiper8">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                        <div class="rtl:dir-rtl">
                                            <img src="{{asset('build/assets/img/gallery/4.jpg')}}" alt="image">
                                            <div class="blog-caption text-start">
                                            <p class="mb-2 text-xs">The agency has a diverse workforce of just under 18,000 civil servants, and
                                                works with many more U.S.</p>
                                            <h6 class="text-base font-semibold mb-2">N.A.S.A</h6>
                                            <div class="flex items-center">
                                                <img src="{{asset('build/assets/img/users/15.jpg')}}" alt="" class="shadow-none ring-transparent avatar avatar-sm !rounded-full ltr:mr-2 rtl:ml-2">
                                                <div class="font-semibold">Json Taylor - <span class="text-xs opacity-70 font-normal">12,Dec 2022 -
                                                    04:34PM</span></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="swiper-slide">
                                        <div class="rtl:dir-rtl">
                                            <img src="{{asset('build/assets/img/gallery/5.jpg')}}" alt="image">
                                            <div class="blog-caption text-start">
                                            <p class="mb-2 text-xs">The agency has a diverse workforce of just under 18,000 civil servants, and
                                                works with many more U.S.</p>
                                            <h6 class="text-base font-semibold mb-2">N.A.S.A</h6>
                                            <div class="flex items-center">
                                                <img src="{{asset('build/assets/img/users/15.jpg')}}" alt="" class="shadow-none ring-transparent avatar avatar-sm !rounded-full ltr:mr-2 rtl:ml-2">
                                                <div class="font-semibold">Json Taylor - <span class="text-xs opacity-70 font-normal">12,Dec 2022 -
                                                    04:34PM</span></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="swiper-slide">
                                        <div class="rtl:dir-rtl">
                                            <img src="{{asset('build/assets/img/gallery/6.jpg')}}" alt="image">
                                            <div class="blog-caption text-start">
                                            <p class="mb-2 text-xs">The agency has a diverse workforce of just under 18,000 civil servants, and
                                                works with many more U.S.</p>
                                            <h6 class="text-base font-semibold mb-2">N.A.S.A</h6>
                                            <div class="flex items-center">
                                                <img src="{{asset('build/assets/img/users/15.jpg')}}" alt="" class="shadow-none ring-transparent avatar avatar-sm !rounded-full ltr:mr-2 rtl:ml-2">
                                                <div class="font-semibold">Json Taylor - <span class="text-xs opacity-70 font-normal">12,Dec 2022 -
                                                    04:34PM</span></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>

                                <div class="box">
                                <div class="box-header">
                                    <h5 class="box-title">Recent Blogs</h5>
                                </div>
                                <div class="box-body">
                                    <ul class="flex flex-col">
                                    <li class="ti-list-group pt-0 px-0 border-0 text-gray-800 dark:text-white">
                                        <div class="space-x-3 flex w-full rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/7.jpg')}}" class="avatar avatar-lg rounded-sm ring-0"
                                            alt="Image Description">
                                        <div class="flex justify-between w-full">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>Sept 29 , 2022</span></p>
                                            </div>
                                            <div class="my-auto ltr:ml-auto rtl:mr-auto hidden sm:block">
                                            <button type="button" aria-label="button"
                                                class="m-0 p-2 ti-btn bg-gray-100 text-gray-500 hover:text-white hover:bg-gray-500 ring-offset-white focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-gray-600 dark:text-white dark:focus:ring-offset-white/10"><i
                                                class="leading-none ri-arrow-right-s-line rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <div class="space-x-3 flex w-full rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/9.jpg')}}" class="avatar avatar-lg rounded-sm ring-0"
                                            alt="Image Description">
                                        <div class="flex justify-between w-full">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>3 hours ago</span></p>
                                            </div>
                                            <div class="my-auto ltr:ml-auto rtl:mr-auto hidden sm:block">
                                            <button type="button" aria-label="button"
                                                class="m-0 p-2 ti-btn bg-gray-100 text-gray-500 hover:text-white hover:bg-gray-500 ring-offset-white focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-gray-600 dark:text-white dark:focus:ring-offset-white/10"><i
                                                class="leading-none ri-arrow-right-s-line rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <div class="space-x-3 flex w-full rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/8.jpg')}}" class="avatar avatar-lg rounded-sm ring-0"
                                            alt="Image Description">
                                        <div class="flex justify-between w-full">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>30 mins ago</span></p>
                                            </div>
                                            <div class="my-auto ltr:ml-auto rtl:mr-auto hidden sm:block">
                                            <button type="button" aria-label="button"
                                                class="m-0 p-2 ti-btn bg-gray-100 text-gray-500 hover:text-white hover:bg-gray-500 ring-offset-white focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-gray-600 dark:text-white dark:focus:ring-offset-white/10"><i
                                                class="leading-none ri-arrow-right-s-line rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <div class="space-x-3 flex w-full rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/3.jpg')}}" class="avatar avatar-lg rounded-sm ring-0"
                                            alt="Image Description">
                                        <div class="flex justify-between w-full">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>l day ago</span></p>
                                            </div>
                                            <div class="my-auto ltr:ml-auto rtl:mr-auto hidden sm:block">
                                            <button type="button" aria-label="button"
                                                class="m-0 p-2 ti-btn bg-gray-100 text-gray-500 hover:text-white hover:bg-gray-500 ring-offset-white focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-gray-600 dark:text-white dark:focus:ring-offset-white/10"><i
                                                class="leading-none ri-arrow-right-s-line rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group px-0 border-0 text-gray-800 dark:text-white">
                                        <div class="space-x-3 flex w-full rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/2.jpg')}}" class="avatar avatar-lg rounded-sm ring-0"
                                            alt="Image Description">
                                        <div class="flex justify-between w-full">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-calendar-line text-xs"></i><span>l day ago</span></p>
                                            </div>
                                            <div class="my-auto ltr:ml-auto rtl:mr-auto hidden sm:block">
                                            <button type="button" aria-label="button"
                                                class="m-0 p-2 ti-btn bg-gray-100 text-gray-500 hover:text-white hover:bg-gray-500 ring-offset-white focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-gray-600 dark:text-white dark:focus:ring-offset-white/10"><i
                                                class="leading-none ri-arrow-right-s-line rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                    <li class="ti-list-group px-0 pb-0 border-0 text-gray-800 dark:text-white">
                                        <div class="space-x-3 flex w-full rtl:space-x-reverse">
                                        <img src="{{asset('build/assets/img/gallery/8.jpg')}}" class="avatar avatar-lg rounded-sm ring-0"
                                            alt="Image Description">
                                        <div class="flex justify-between w-full">
                                            <div class="space-y-1 my-auto">
                                            <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </h3>
                                            <p class="flex space-x-2 rtl:space-x-reverse text-gray-500 dark:text-white/70 text-xs"><i
                                                class="ri ri-time-line text-xs"></i><span>30 mins ago</span></p>
                                            </div>
                                            <div class="my-auto ltr:ml-auto rtl:mr-auto hidden sm:block">
                                            <button type="button" aria-label="button"
                                                class="m-0 p-2 ti-btn bg-gray-100 text-gray-500 hover:text-white hover:bg-gray-500 ring-offset-white focus:ring-gray-500 dark:bg-black/20 dark:hover:bg-black/30 dark:focus:ring-gray-600 dark:text-white dark:focus:ring-offset-white/10"><i
                                                class="leading-none ri-arrow-right-s-line rtl:rotate-180"></i></button>
                                            </div>
                                        </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                                <div class="box-footer text-center">
                                    <button type="button" class="py-1 px-3 ti-btn ti-btn-primary">
                                    View More
                                    </button>
                                </div>
                                </div>

                                <div class="box">
                                <div class="box-body">
                                    <h3 class="font-semibold text-base text-primary mb-2">Subscribe For More Blog's</h3>
                                    <input type="email" id="input-label" class="ti-form-input" placeholder="you@site.com">
                                    <button type="button" class="py-2 px-3 w-full ti-btn ti-btn-primary mt-2">
                                    subscribe
                                    </button>
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

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- QUILL EDITOR JS -->
        <script src="{{asset('build/assets/libs/quill/quill.min.js')}}"></script>

        <!-- FILEPOND FILE UPLOAD JS -->
        <script src="{{asset('build/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/filepond/filepond.min.js')}}"></script>

        <!-- FLATPICKR JS -->
        <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        @vite('resources/assets/js/blog.js')
        

        <!-- BLOG EDIT JS -->
        @vite('resources/assets/js/blog-edit.js')

        
@endsection