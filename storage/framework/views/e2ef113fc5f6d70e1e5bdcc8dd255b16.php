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
                            id="date" placeholder="Choose date"  value="<?php echo e($ntp->wef); ?>">
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
                
                
                    
                    <input type="submit" class="ti-btn  bg-warning text-white hover:bg-warning  focus:ring-primary  dark:focus:ring-offset-white/10" value="Update"/>
                    
                    </div>
                </form>  
         <?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/payscales/non_teaching/dummy.blade.php ENDPATH**/ ?>