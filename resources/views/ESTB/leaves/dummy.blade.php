





<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
    <div class="flex items-center">
        
            <label for="" class="ti-form-label font-bold pr-4">Is Carry Forwardable</label>
        
            <input type="radio" name="carry_forwardable" class="ti-form-radio" id="year1" value="Yes" >
            <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
            <input type="radio" name="carry_forwardable" class="ti-form-radio " id="year2" value="No" >
            <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
    </div>
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">With Effect From</label>
        <input type="text" name="cf_wef" class="ti-form-input flatpickr-input" id="date"
             placeholder="Choose date" readonly>
    </div>
    <div class="max-w-sm space-y-3 pb-6 ">
        <label for="" class="ti-form-label font-bold">GC Res NO: </label>
        <input type="text" name="cf_gcr" class="ti-form-input"  placeholder="GCR">
    </div>
</div>
<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
    <div class="flex items-center">
        <label for="" class="ti-form-label font-bold pr-4">Is Encashable</label>
        <br/>
        <input type="radio" name="encashable" class="pr-4 ml-2 ti-form-radio" id="year1" value="1" >
        <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold">Yes</label>
       
        <input type="radio" name="encashable" class="pr-4 ml-3 ti-form-radio" id="year2" value="0" >
        <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold pr-4">No</label>
         
    </div>
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">With Effect From</label>
        <input type="text" name="enc_wef" class="ti-form-input flatpickr-input" id="date"
             placeholder="Choose date" readonly>
    </div>
    <div class="max-w-sm space-y-3 pb-6 ">
        <label for="" class="ti-form-label font-bold">GC Res NO: </label>
        <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR">
    </div>
</div>
<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
    
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">Max Carry Forwardable</label>
        <input type="text" name="max_carry_forwardable" class="ti-form-input flatpickr-input"
             placeholder="Max Carry Forwardable">
    </div>
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
        <input type="text" name="max_encashable" class="ti-form-input flatpickr-input"
             placeholder="Max encashable">
    </div>
    <div class="max-w-sm space-y-3 pb-6 ">
        <label for="" class="ti-form-label font-bold">Gap between Leaves </label>
        <input type="text" name="gap" class="ti-form-input"  placeholder="Gap between 2 similar leaves">
    </div>
</div>
<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
    
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">Prior Intimation days</label>
        <input type="text" name="no_days_prior_intimation" class="ti-form-input flatpickr-input"
             placeholder="Gap of days between application date and availing date">
    </div>
</div>





<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
    <div class="flex items-center">
     <label for="" class="ti-form-label font-bold pr-4">Is Carry Forwardable</label>

        <input type="radio" name="carry_forwardable" class="ti-form-radio" id="year1" value="Yes" {{$lr->carry_forwardable=="Yes"? "checked":""}} >
        <label for="carry_forwardable-yes" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-4"> Yes</label>
        <input type="radio" name="carry_forwardable" class=" ti-form-radio " id="year2" value="No" {{$lr->carry_forwardable=="No"? "checked":""}}>
        <label for="carry_forwardable-no" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70"> No</label>
</div>
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">With Effect From</label>
        <input type="text" name="cf_wef" class="ti-form-input flatpickr-input" id="date"
             placeholder="Choose date" value="{{$lr->cf_wef}}" readonly>
    </div>
    <div class="max-w-sm space-y-3 pb-6 ">
        <label for="" class="ti-form-label font-bold">GC Res NO: </label>
        <input type="text" name="cf_gcr" class="ti-form-input" value="{{$lr->cf_gcr}}"  placeholder="GCR">
    </div>
</div>
<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
    <div class="flex items-center">
        <label for="" class="ti-form-label font-bold pr-4">Is Encashable</label>
        <br/>
           
            <input type="radio" name="encashable" class="ti-form-radio" id="year1" value="1" {{$lr->encashable==1? "checked":""}}>
            <label class="text-sm text-gray-500 ltr:ml-3 rtl:ml-3 dark:text-white/70 font-bold pr-4">Yes</label>
            <input type="radio" name="encashable" class="ti-form-radio" id="year2" value="0" {{$lr->encashable==0? "checked":""}} >
            <label class="text-sm text-gray-500 ltr:ml-3 rtl:mr-3 dark:text-white/70 font-bold ">No</label>
    </div>
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">With Effect From</label>
        <input type="text" name="enc_wef" class="ti-form-input flatpickr-input" id="date"
             placeholder="Choose date" value="{{$lr->enc_wef}}">
    </div>
    <div class="max-w-sm space-y-3 pb-6 ">
        <label for="" class="ti-form-label font-bold">GC Res NO: </label>
        <input type="text" name="enc_gcr" class="ti-form-input"  placeholder="GCR" value="{{$lr->enc_gcr}}">
    </div>
</div>
<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">Max Carry Forwardable</label>
        <input type="text" name="max_carry_forwardable" class="ti-form-input flatpickr-input"
             placeholder="Max Carry Forwardable"  value="{{$lr->max_carry_forwardable}}">
    </div>
    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold">Max Encashable</label>
        <input type="text" name="max_encashable" class="ti-form-input flatpickr-input"
             placeholder="Max encashable" value="{{$lr->max_encashable}}">
    </div>
    <div class="max-w-sm space-y-3 pb-6 ">
        <label for="" class="ti-form-label font-bold">Gap between Leaves </label>
        <input type="text" name="gap" class="ti-form-input"  placeholder="Gap between 2 similar leaves" value="{{$lr->gap}}">
    </div>
</div>  
<div class="grid lg:grid-cols-3 gap-2 space-y-2 lg:space-y-0">    

    <div class="space-y-2">
        <label class="ti-form-label mb-0 font-bold pb-4">Prior Intimation days</label>
        <input type="text" name="no_days_prior_intimation" class="ti-form-input flatpickr-input"
            placeholder="Gap of days between application date and availing date" value="{{$lr->no_days_prior_intimation}}">
    </div>  
</div>
<!-- Combination Rules Setting Section -->
<label for="" class="ti-form-label font-bold">Check the leaves that can be combined with this leave type </label>
                    
@foreach($leaves as $l) <!--For running the leave list-->
    @if($l->vacation_type == $lr->vacation_type && $l->id!=$lr->id)
    @php
        $checked="";
        $combination_type_checked="";
    @endphp
    @if($lr->combineleaves !=null)
    @foreach($lr->combineleaves as $l_combination)
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