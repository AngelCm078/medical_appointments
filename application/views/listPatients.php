<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header text-center">
            <h4 class="card-title">LIST APPOINTMENTS</h4>
            </div>
            <div class="card-body text-center">
            <ul class="list-group list-group-horizontal-md flex-fill">
                <li class="list-group-item list-group-item-primary"><strong>Identification</strong></li>
                <li class="list-group-item list-group-item-primary"><strong>Name</strong></li>
                <li class="list-group-item list-group-item-primary"><strong>Surname</strong></li>
                <li class="list-group-item list-group-item-primary"><strong>Birthdate</strong></li>
                <li class="list-group-item list-group-item-primary"><strong>City</strong></li>
                <li class="list-group-item list-group-item-primary"><strong>Neighborhood</strong></li>
                <li class="list-group-item list-group-item-primary"><strong>Cell Phone</strong></li>
                <li class="list-group-item list-group-item-primary"><strong>Options</strong></li>
            </ul>
            <ul class="list-group list-group-horizontal-md flex-fill">
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
                <li class="list-group-item"></li>
            </ul>
            <?php

            foreach($patients as $patient){

                    $listPatient = "
                        <ul class='list-group list-group-horizontal-md'>
                            <li class='list-group-item'>$patient->identification</li>
                            <li class='list-group-item'>$patient->name_patient</li>
                            <li class='list-group-item'>$patient->surname_patient</li>
                            <li class='list-group-item'>$patient->birthdate</li>
                            <li class='list-group-item'>$patient->city</li>
                            <li class='list-group-item'>$patient->neighborhood</li>
                            <li class='list-group-item'>$patient->cell_phone_number</li>
                            <li class='list-group-item'>
                            <center>
                                <a href='EditPatient/edit?id=$patient->id' class='btn btn-warning' title='Modify this  record'><i class='fa fa-edit'></i></a> 
                                
                                <a href='DeletePatient/delete?id={$patient->id}' class='btn btn-danger' title='Delete this record'><i class='fa fa-trash'></i></a>
                            </center>                        
                            </li>
                        </ul>
                    ";                    
                    echo $listPatient;                
            }          
            ?>
            </div>                      
        </div>
    </div>
</div>