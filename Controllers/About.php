<?php

class About extends Controller{
  protected function Index(){
    $viewmodel = new AboutModels();
    $this->returnView($viewmodel->Index(), true);
  }
}

?>
