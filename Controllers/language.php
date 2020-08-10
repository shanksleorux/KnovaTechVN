<?php

class language extends Controller{

  protected function Vi(){
      $_SESSION['is_language'] = true;
      header('Location: '.ROOT_URL.'');
  }

  protected function En(){
      unset($_SESSION['is_language']);
      session_destroy();
      header('Location: '.ROOT_URL.'');
  }

}

?>
