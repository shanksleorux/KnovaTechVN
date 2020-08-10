<?php

class Admin extends Controller{

  protected function Index(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->adminView($viewmodel->Index(), true);
  }

  protected function Login(){
    $viewmodel = new AdminModels();
    $this->returnView($viewmodel->Login(), true);
  }

  protected function Logout(){
    unset($_SESSION['is_log_in']);
    unset($_SESSION['user_data']);
    unset($_SESSION['is_Create_Success']);
    unset($_SESSION['is_Create_Failed']);
    unset($_SESSION['is_update_Success']);
    session_destroy();
    //Redirect to home page
    header('Location: '.ROOT_URL);
  }

  protected function Create(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->adminView($viewmodel->Create(), true);
  }

  protected function Users(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->adminView($viewmodel->Users(), true);
  }

  protected function MangeUsers(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->CreateUsersView($viewmodel->MangeUsers(), true);
  }

  protected function BlogPost(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->adminView($viewmodel->BlogPost(), true);
  }

  protected function EditPost(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->MangePostView($viewmodel->EditPost(), true);
  }

  protected function DeletePost(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->MangePostView($viewmodel->DeletePost(), true);
  }

  protected function Profile(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->adminView($viewmodel->Profile(), true);
  }

  protected function ContactForm(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->adminView($viewmodel->ContactForm(), true);
  }

  protected function EditPages(){
    if (!isset($_SESSION['is_log_in'])) {
      header('Location: '.ROOT_URL.'Admin/Login');
    }
    $viewmodel = new AdminModels();
    $this->adminView($viewmodel->EditPages(), true);
  }


}

?>
