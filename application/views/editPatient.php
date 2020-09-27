<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header text-center">
                <h4 class="card-title">EDIT PATIENT</h4>                      
            </div>
            <div class="card-body">  
                <form action="<?php echo base_url()."UpdatePatient/update?id=".$editPatient->id ?>" method="POST">
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Identification *</label>
                        </div>                          
                        <input type="number" name="identification" value="<?php echo $editPatient->identification ?>" class="form-control" required>
                    </div>                               
                    <br>
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Name *</label>
                        </div>                          
                        <input type="text" value="<?php echo $editPatient->name_patient ?>" name="name_patient" class="form-control" required>
                    </div>
                    <br>
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Surname *</label>
                        </div>                          
                        <input type="text" value="<?php echo $editPatient->surname_patient ?>" name="surname_patient" class="form-control"required>
                    </div>
                    <br>
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Birthdate * </label>
                        </div>                          
                        <input type="text" value="<?php echo $editPatient->birthdate ?>" name="birthdate" class="form-control"required>
                        <span class="input-group-text" id="basic-addon2">DD/MM/AAAA</span>
                    </div>
                    <br> 
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">City *</label>
                        </div>                          
                        <input type="text" value="<?php echo $editPatient->city ?>" name="city" class="form-control"required>
                    </div> 
                    <br> 
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Neighborhood *</label>
                        </div>                          
                        <input type="text" value="<?php echo $editPatient->neighborhood ?>" name="neighborhood" class="form-control"required>
                    </div> 
                    <br> 
                    <div class="col-md-12 input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="">Cell phone *</label>
                        </div>                          
                        <input type="number" name="cell_phone_number" class="form-control" value="<?php echo $editPatient->cell_phone_number ?>" required>
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