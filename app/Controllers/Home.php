<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Models\Addbook;


class Home extends BaseController
{
    public function login(): string
    {
        return view('login');
    }
    public function register(): string
    {
        return view('register');
    }
    public function Homepage(): string
    {
        return view('Homepage');
    }
    


    public function registeruser()
    {
        $firstname = $this->request->getVar("firstname");
        $lastname = $this->request->getVar("lastname");
        $email = $this->request->getVar("email");
        $semester = $this->request->getVar("semester");
        $password = $this->request->getVar("password");
        $gender = $this->request->getVar("gender");
        

        $rules = [
            "firstname" => "required",
            "lastname" => "required",
            "email" => "required|min_length[5]|max_length[30]|valid_email|is_unique[register.email]",
            "password" => "required|max_length[10]",
            "phonenumber" => "required|max_length[10]",
           
        ];
      

        if($this->validate($rules))
        {
            $userdata = [
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email,
                "semester" => $semester,
                "password" => $password,
                "gender" => $gender,
            ];

            $adminmodel = new AdminModel();
            $data = $adminmodel->save($userdata);
            if($data)
            {
                session()->setFlashdata("message","Student Account created succesfully...");
                return redirect()->to("/register");
    
            }
            else
    
            {
                echo "<p>error to create account</p>";
            }
            
        }
        else
        {
            $data["validation"] = $this->validator;
            return view("register",$data);
        }


    }

    

    public function loginuser()
    {
        $email = $this->request->getVar("email");
        $password = $this->request->getVar("password");


        $adminmodel = new AdminModel();

        $data = $adminmodel->where("email",$email)->first();
        if($data)
        {
        if($data["password"] == $password)
        {
            echo "Login";
            // session()->set(["useremail"=>$data["email"],"isLoggedin"=>true]);
            return redirect()->to("/dashboard");
        }
        else

        {
           echo "Invalid password";
            return redirect()->to("/login");
        }
    }
    else
    { 
        
        echo "Invalid user";
        return redirect()->to("/login");
    }
    }

    public function dashboard()
    {
       
        return view("dashboard");
      
    }
   

    public function stucreate()
    {
        
        return view("Addstu");
    }  
    
    public function displaystu()
    {
        $stumodel = new Addstu();
        $data["data"] = $stumodel->findAll();
        return view("displaystu",$data);
    } 
     public function stuadd()
    {
        $firstname = $this->request->getVar("firstname");
        $lastname = $this->request->getVar("lastname");
        $email = $this->request->getVar("email");
        $semester = $this->request->getVar("semester");
        $gender = $this->request->getVar("gender");
        $phonenumber = $this->request->getVar("phonenumber");
        $addmodel = new AddBook();
        $bookdata = [
            "firstname" => $firstname,
            "lastname" => $lastname,
            "email" => $email,
            "semester" => $semester,
            "gender" => $gender,
            "phonenumber" => $phonenumber,

         
        ];
        $data = $addmodel->save($studata);
        if($data)
        {

            session()->setFlashdata("message","Student Added succesfully...");
            return redirect()->to("/stu/create");
        }

        else
        {
            session()->setFlashdata("error","Error to Add stu...");
        }


        
        
    }

    public function stubook()
    {
        $uri = service("uri");
        $id = $uri->getSegment(3);
        $stumodel = new Addstu();

        $data = $stumodel->delete($id);
        if($data)
        {
            return redirect()->to("/stu");
        }
        else
        {
            echo "Error to delete data";
        }

    }

    public function updatestu()
    {
        $uri = service("uri");
        $id = $uri->getSegment(2);
        $stumodel = new Addstu();
        $data["data"] = $stumodel->where('id',$id)->first();
        return view("updatestu",$data);
    }

    public function updatstudata()
    {
        $firstname = $this->request->getVar("firstname");
        $lastname = $this->request->getVar("lastname");
        $email = $this->request->getVar("email");
        $semester = $this->request->getVar("semester");
        $gender = $this->request->getVar("gender");
        $phonenumber = $this->request->getVar("phonenumber");
        $uri = service("uri");
        $id = $uri->getSegment(3);
        $bookdata = [
            "firstname" => $firstname,
            "lastname" => $lastname,
            "email" => $email,
            "semester" => $semester,
            "gender" => $gender,
            "phonenumber" => $phonenumber,
         
        ];
        $stumodel = new Addstu();
        $stumodel->find($firstname);
        $data = $stumodel->update($firstname,$studata);

        if($data)
        {
            return redirect()->to("/stu");
        }
      
    }
}