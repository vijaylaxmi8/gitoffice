<form action="{{route('hr.religion.store')}}"  method="POST">
    @csrf
     <input type="text" class="ti-form-input" name="religion_name" placeholder="Religion Name">
                                                        
            <input type="submit" name="religion_submit" class="ti-btn  bg-primary text-white hover:bg-primary  focus:ring-primary " value="Save"/>
            
        </div>
    </form>