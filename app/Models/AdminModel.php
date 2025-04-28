<?php
    namespace App\Models;
    use CodeIgniter\Model;

    class AdminModel extends Model
    {
        protected $table = "student";

        protected $allowedFields = [
            "fname",
            "lname",
            "email",
            "sem",
            "gender",
            "num",
            "password",

        ];
    }
?>