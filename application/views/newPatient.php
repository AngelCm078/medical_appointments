<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header text-center">
                <h4 class="card-title">NEW PATIENT</h4>                      
            </div>
            <div class="card-body">  
                <form action="<?php echo base_url()."NewPatient/create"?>" method="POST">
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Identification *</label>
                        </div>                          
                        <input type="number" name="identification" class="form-control" required>
                    </div>                               
                    <br>
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Name *</label>
                        </div>                          
                        <input type="text" name="name_patient" class="form-control" required>
                    </div>
                    <br>
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Surname *</label>
                        </div>                          
                        <input type="text" name="surname_patient" class="form-control"required>
                    </div>
                    <br>
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Birthdate * </label>
                        </div>                          
                        <input type="text" name="birthdate" class="form-control"required>
                        <span class="input-group-text" id="basic-addon2">DD/MM/AAAA</span>
                    </div>
                    <br> 
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">City *</label>
                        </div>                          
                        <input type="text" name="city" class="form-control"required>
                    </div> 
                    <br> 
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Neighborhood *</label>
                        </div>                          
                        <input type="text" name="neighborhood" class="form-control"required>
                    </div> 
                    <br> 
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Cell phone *</label>
                        </div>                          
                        <input type="number" name="cell_phone_number" class="form-control" required>
                    </div>  
                    <br> 
                    <div class="col-md-12 input-group">
                        <p class="text-danger">The fields marked with * are required</p>
                    </div> 
                                        
                    <br>                           
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Save</button> 
                    </div>                
                </form>      
                   
            </div>  
            
        </div>
    </div>