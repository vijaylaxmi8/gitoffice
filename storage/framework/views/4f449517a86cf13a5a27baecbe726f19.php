<form  action="<?php echo e(route('ESTB.religion.castecategory.update',[$religion->id,$caste->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('patch'); ?>
    <div class="ti-modal-body">
        <input type="hidden" name="religion_id" value="<?php echo e($religion->id); ?>">
        <div class="max-w-sm space-y-3">
            <label for="with-corner-hint" class="ti-form-label">Caste Name : </label>
            <input type="text" name="caste_name" class="ti-form-input" placeholder="caste_name" value="<?php echo e($caste->caste_name); ?>">
        </div>
        <div class="max-w-sm space-y-3">
            <label for="with-corner-hint" class="ti-form-label">Subcaste Name : </label>
            <input type="text" name="subcastes_name" class="ti-form-input" placeholder="subcastes_name" value="<?php echo e($caste->subcastes_name); ?>">
        </div>
        <div class="max-w-sm space-y-3">
            <label for="with-corner-hint" class="ti-form-label">Category Name : </label>
            <input type="text" name="category" class="ti-form-input" placeholder="category" value="<?php echo e($caste->category); ?>">
        </div>
        <div class="max-w-sm space-y-3">
            <label for="with-corner-hint" class="ti-form-label">Category No. : </label>
            <input type="text" name="category_no" class="ti-form-input" placeholder="category no " value="<?php echo e($caste->category_no); ?>">
        </div>
        
        
        <?php if($caste->status == 'inactive'): ?>
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
    </form>  <?php /**PATH F:\laravel Apps\gitoffice\resources\views/ESTB/departments/dummy.blade.php ENDPATH**/ ?>