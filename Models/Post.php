<?php

class PostModel extends Model{

  public function Index(){
    $this->query('SELECT * FROM posts');
    $rows = $this->resultSet();
    return $rows;
  }

  public function NewsDetails(){
    $this->query('SELECT * FROM posts WHERE ID = :postID');
    $this->bind(':postID', $_GET['id']);
    $rows = $this->single();
    if($rows){
      $_SESSION['Tittle'] = $rows['PostTitle'];
      $_SESSION['Body'] = html_entity_decode($rows['PostBody']);
      $_SESSION['PostDate'] = $rows['PostDate'];
    }else {
      header('Location: http://localhost/');
    }
    return;
  }


}

?>
