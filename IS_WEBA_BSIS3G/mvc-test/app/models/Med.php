<?php 
    
    // class Med extends Model
    // {
    //     public function validate($data)
    //     {
    //     $this->errors = [];

    //     if (empty($data['med_name'])) {

    //     $this->errors['med_name'] = 'Medicine name is requred';
    //     }

    //     if (empty($data['med_presc'])) {

    //     $this->errors['med_presc'] = 'Medicine prescription is required';
    //     }

    //     if (empty($data['med_type'])) {

    //     $this->errors['med_type'] = 'Medicine is required';
    //     } else if (!filter_var($data['med_type'], FILTER_VALIDATE_EMAIL)) {

    //     $this->errors['med_type'] = 'Medicine is not valid';
    //     }

    //     if (empty($data['med_quan'])) {

    //     $this->errors['med_quan'] = 'Medicine quantity is required';
    //     } else if (strlen($data['med_quan']) < 6) {

    //     $this->errors['med_quan'] = 'Quantity must be atleast 6 characters long';
    //     }

    //     if (count($this->errors) == 0) {
    //     return true;
    //     }
    //     return false;
    //     }
    // }
        
            class Med extends Model
                {

                    public function validate($data)
                    {
                        $this->errors = [];

                    if (empty($data['med_name'])) {
                        $this->errors['med_name'] = "Medicine Name is Required.";
                        }

                        if (empty($data['med_presc'])) {
                        $this->errors['med_presc'] = "Prescription is required.";
                        }

                        if (empty($data['med_type'])) {
                        $this->errors['med_type'] = "Medicine type is rquired.";
                        } 
                        if (empty($data['qty'])) {
                        $this->errors['qty'] = "Quantity number is required.";
                        } 

                        if (count($this->errors) == 0) {
                        return true;
                        } else {
                        return false;
                        }
                    }
                }


