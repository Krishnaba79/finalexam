<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class Addstu extends Model
    {
        protected $table = "Books";
        protected $allowedFields = [
            "firstname",
            "lastname",
            "email",
            "semester",
            "gender",
            "phonenumber",
        ];
    }

?>