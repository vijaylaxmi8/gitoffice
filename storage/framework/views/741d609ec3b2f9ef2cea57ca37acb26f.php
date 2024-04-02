<div id="nt_consolidated_payscale_edit_modal<?php echo e(1); ?>" class="hs-overlay hidden ti-modal">
                                                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                                                    <div class="ti-modal-content">
                                                                    <div class="ti-modal-header">
                                                                        <h3 class="ti-modal-title">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z"></path></svg>
                                                                            Edit Payscale
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
                                                                    <form  action="<?php echo e(route('ESTB.payscales.non_teaching.update',$ntp->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('patch'); ?>
                                                                        <div class="ti-modal-body">
                                                                           
                                                                            <div class="max-w-sm space-y-3">
                                                                                <label for="with-corner-hint" class="ti-form-label">Title : </label>
                                                                                <input type="text" name="title" class="ti-form-input" placeholder="Payscale title" value="<?php echo e($ntp->title); ?>">
                                                                            </div>
                                                                            <div class="max-w-sm space-y-3">
                                                                                <label for="with-corner-hint" class="ti-form-label">Payband : </label>
                                                                                <input type="text" name="payband" class="ti-form-input" placeholder="payband" value="<?php echo e($ntp->payband); ?>">
                                                                            </div>
                                                                            
                                                                            <label for="" class="ti-form-label">Effect from Date :</label>
                                                                            <div class="flex shadow-sm max-w-sm space-y-3">
                                                                                
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                
                                                                                <input type="text" name="wef"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                    id="date" placeholder="Choose date" readonly value="<?php echo e($ntp->wef); ?>">
                                                                            </div>
                                                                            <label for="" class="ti-form-label">Closed On :</label>
                                                                            <div class="flex shadow-sm max-w-sm space-y-3">
                                                                                
                                                                                <div class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                                                    <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                                                            class="ri ri-calendar-line"></i></span>
                                                                                </div>
                                
                                                                                <input type="text" name="closedon"
                                                                                    class="ti-form-input rounded-l-none focus:z-10 flatpickr-input"
                                                                                    id="date" placeholder="Choose date" value="<?php echo e($ntp->closedon); ?>">
                                                                            </div>
                                                                            <?php if($ntp->status == 'inactive'): ?>
                                                                            <br/>
                                                                                <div class="flex">
                                                                                    <input type="radio" name="status" class="ti-form-radio" id="hs-radio-group-2" value="active">
                                                                                    <label for="hs-radio-group-2" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Make it Active</label>
                                                                                </div>
                                                                            <?php endif; ?>
                                                                    
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
                                                    </div><?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/payscales/non_teaching/bummy.blade.php ENDPATH**/ ?>