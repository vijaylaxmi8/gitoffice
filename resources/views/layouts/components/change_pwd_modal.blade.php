<div class="grid grid-cols-12 gap-x-6">
    <div class="col-span-6">
            <!-- For Checking whether status is set or no-->
            @if(session('status'))
            @if (session('status') == 1)
            <div class='bg-white dark:bg-bgdark border border-success alert text-success' role='alert'>
                <span class='font-bold'>Result: </span> Password Change Successfully
            </div>
            @elseif(session('status') == 0)
            <div class='bg-white dark:bg-bgdark border border-danger alert text-danger' role='alert'>
                <span class='font-bold'>Result : </span> Password Change Unsuccessfully Please Try Again
            </div>
        
            @endif
            @php 
                Illuminate\Support\Facades\Session::forget('status'); 
                header("refresh: 1"); 
            @endphp
        @endif

    </div>
</div>

<!--change password-->
<div id="change_password_btn" class="hs-overlay hidden ti-modal">
    <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-md lg:w-full m-3 md:mx-auto">
        <div class="ti-modal-content">
            <div class="ti-modal-header">
                <h3 class="ti-modal-title flex justify-center items-center">
                    <span class="text-blue-600">Change Password</span>
                </h3>
                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                    data-hs-overlay="#change_password_btn">
                    <span class="sr-only">Close</span>
                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                        fill="currentColor"/>
                    </svg>
                </button>
            </div>
            <div class="mt-5">
                <!-- Form -->
                <form id="form" action="{{route('password.change')}}" method="post">
                    @csrf
                    <div class="ti-modal-body">
                        <div class="grid gap-y-4">
                            <div class="flex justify-between items-center">
                                <label class="block text-sm mb-2 dark:text-white font-bold">Current Password</label>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" name="password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70 current_password" placeholder="Enter Current Password" required>
                                <span id="current_password_status"></span>
                                @if($errors->has('password'))
                                    <span id="password-error" class="text-red">{{ $errors->first('password') }}</span>
                                @endif
                                <div id="togglePassword" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                    </svg>
                                </div>
                            </div>
                           
                            <div class="flex justify-between items-center">
                                <label class="block text-sm mb-2 dark:text-white font-bold">New Password</label>
                            </div>
                            <div class="relative">
                                <input type="password" id="new_password" name="new_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70" placeholder="New Password" required>
                                <span id="new_password_status"></span>
                                @if($errors->has('new_password'))
                                    <span id="new-password-error" class="text-red">{{ $errors->first('new_password') }}</span>
                                @endif
                                <div id="togglenew_password" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between items-center">
                                <label class="block text-sm mb-2 dark:text-white font-bold">Confirm Password</label>
                            </div>
                            <div class="relative">
                                <input type="password" id="confirm_password" name="confirm_password" class="py-2 px-3 block w-full border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary dark:bg-bgdark dark:border-white/10 dark:text-white/70 confirm_password" placeholder="Confirm Password" required>
                                <span id="confirm_password_status"></span>
                                @if ($errors->has('confirm_password'))
                                    <span id="confirm-password-error" class="text-red">{{ $errors->first('confirm_password') }}</span>
                                @endif
                                <div id="toggleconfirm_password" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                        <path d="M12.0003 3C17.3924 3 21.8784 6.87976 22.8189 12C21.8784 17.1202 17.3924 21 12.0003 21C6.60812 21 2.12215 17.1202 1.18164 12C2.12215 6.87976 6.60812 3 12.0003 3ZM12.0003 19C16.2359 19 19.8603 16.052 20.7777 12C19.8603 7.94803 16.2359 5 12.0003 5C7.7646 5 4.14022 7.94803 3.22278 12C4.14022 16.052 7.7646 19 12.0003 19ZM12.0003 16.5C9.51498 16.5 7.90026 14.4853 7.90026 12C7.90026 9.51472 9.51498 7.5 12.0003 7.5C14.4855 7.5 16.9003 9.51472 16.9003 12C16.9003 14.4853 14.4855 16.5 12.0003 16.5ZM12.0003 14.5C13.381 14.5 14.9003 13.3807 14.9003 12C14.9003 10.6193 13.381 9.5 12.0003 9.5C10.6196 9.5 9.90026 10.6193 9.90026 12C9.90026 13.3807 10.6196 14.5 12.0003 14.5Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <span class="password_error_msg"></span>
                        </div>
                    </div>
                    <div class="ti-modal-footer">
                        <button type="button"
                            class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10"
                            data-hs-overlay="#change_password_btn">
                            Close
                        </button>
                
                        <input type="submit" class="ti-btn  text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10 change_pwd_btn" disabled value="Update"/>
                    </div>
                </form>
                <!--Form End-->
            </div>  
        </div>
    </div>
</div>

<!--change password-->