<?php
class NewsEvents extends Controller{

  protected function Index(){
    $viewmodel = new PostModel();
    $this->returnView($viewmodel->Index(), true);
  }

  protected function NewsDetails(){
    $viewmodel = new PostModel();
    $this->NewsEventView($viewmodel->NewsDetails(), true);
  }

}
?>
