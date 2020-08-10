<?php
class SolutionModels extends Model{

  public function Index(){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $page = "Home";
    $this->PageViews($ipaddress, $userAgent, $page);
    return;
  }

  public function Enterprise(){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $page = "Enterprise";
    $this->PageViews($ipaddress, $userAgent, $page);
    return;
    return;
  }

  public function API(){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $page = "APIGateway";
    $this->PageViews($ipaddress, $userAgent, $page);
    return;
  }

  public function Testing(){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $page = "Testing";
    $this->PageViews($ipaddress, $userAgent, $page);
    return;
  }

  public function SystemIntegration(){
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $page = "SystemIntegration";
    $this->PageViews($ipaddress, $userAgent, $page);
    return;
  }

  public function PageViews($ipaddress, $userAgent, $page){
    $this->query('SELECT page FROM userip WHERE page = :userip');
    $this->bind(':userip', $ipaddress);
    $rows = $this->resultSet();
    if($rows){
      echo "co data roi";
    }else {
      $this->query('INSERT INTO pageview (page, userip, useragent) VALUES (:page, :userip, :useragent)');
      $this->bind(':page', $page);
      $this->bind(':userip', $ipaddress);
      $this->bind(':useragent', $userAgent);
      $this->execute();
    }
  }

}

?>
