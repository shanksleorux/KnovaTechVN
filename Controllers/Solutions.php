<?php
class Solution extends Controller{

  protected function index(){
    $viewmodel = new SolutionModels();
    $this->returnView($viewmodel->index(), true);
  }

  protected function Enterprise(){
    $viewmodel = new SolutionModels();
    $this->returnView($viewmodel->Enterprise(), true);
  }

  protected function API(){
    $viewmodel = new SolutionModels();
    $this->returnView($viewmodel->API(), true);
  }

  protected function Testing(){
    $viewmodel = new SolutionModels();
    $this->returnView($viewmodel->Testing(), true);
  }

  protected function SystemIntegration(){
    $viewmodel = new SolutionModels();
    $this->returnView($viewmodel->SystemIntegration(), true);
  }

}
?>
