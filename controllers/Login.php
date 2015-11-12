<?php

class Login extends CI_Controller {
    
    public function entrar(){
        $this->load->view ("formlogin");
    }
    
    public function logout(){
        $this->session-> unset_userdata ("_ID");
         $this->session-> unset_userdata ("_NOME");
    }
    
    public function page (){
     
        if ($this->session->userdata("_NOME")!=null){
        echo "<h1> Pagina de usuario </h1>";
    } else {
        redirect ("/login/entrar");
    }    
    }

    public function auth (){
        $nome = $_POST["nome"]; //pega do formulario
         $pass = $_POST["senha"]; //pega do formulario
         // $email = $POST["emai"]; //pega do formulario
        $this->load->model('model');
        $usr = $this->model->getUser($nome,$pass);
        if($usr !== false){
            if($usr === "admin"){
                $this->session->set_userdata("-ID","admin");
                redirect ("/login/admin");
            }
        
        }else{
            redirect("/login/entrar");
        }
    }
      public function comum(){
          $nome =$this->session->userdata("_NOME");
          echo "<h1> Bem vindo " . $nome ." </h1>";
      }
      
      public function admin(){
         
              echo "<h1> Bem Vindo ADMIN </h1>";
          
          }
      }
      
     
  ?>