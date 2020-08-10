<?php

class Contact extends Controller{
  protected function Index(){
    $viewmodel = new ContactModels();
    $this->returnView($viewmodel->Index(), true);
  }
}

?>
