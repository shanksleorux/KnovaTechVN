<?php

abstract class Controller{
  protected $request;
  protected $action;

  public function __construct($action, $request){
    $this->action = $action;
    $this->request = $request;
  }

  public function executeAction(){
    return $this->{$this->action}();
  }


  protected function returnView($viewmodel, $fullview){
    $view = 'Views/'. get_class($this). '/' . $this->action . '.php' ;
    if ($fullview) {
      require('Views/Index.php');
    }else{
        require($view);
      }
    }


  protected function adminView($viewmodel, $fullview){
    $view = 'Views/'. get_class($this). '/' . $this->action . '.php' ;
    if ($fullview) {
      require('Views/Admin.php');
    }else{
        require($view);
      }
  }

  protected function NewsEventView($viewmodel, $fullview){
    $view = 'Views/'. get_class($this). '/' . $this->action . '/View.php' ;
    if ($fullview) {
      require('Views/Index.php');
    }else{
        require($view);
      }
  }

  protected function CreateUsersView($viewmodel, $fullview){
    $view = 'Views/'. get_class($this). '/' . $this->action . '/' . $_GET['id'] . '.php' ;
    if ($fullview) {
      require('Views/Admin.php');
    }else{
        require($view);
      }
  }

  protected function MangePostView($viewmodel, $fullview){
    $view = 'Views/'. get_class($this). '/' . $this->action . '/Index.php' ;
    if ($fullview) {
      require('Views/Admin.php');
    }else{
        require($view);
      }
  }

}
?>
