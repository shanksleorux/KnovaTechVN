<?php
class AdminModels extends Model{

  public function Index(){
    $this->query('SELECT * FROM totalview');
    $rows = $this->resultSet();
    return $rows;
  }

  public function BlogPost(){
    $this->query('SELECT * FROM posts');
    $rows = $this->resultSet();
    return $rows;
  }

  public function Login(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $password = md5($post['password']);
    if ($post['submit']) {
      $this->query('SELECT * FROM admin WHERE AdEmail = :AdEmail AND AdPassword = :AdPassword');
      $this->bind(':AdEmail', $post['Email']);
      $this->bind(':AdPassword', $password);
      $row = $this->single();
      if ($row) {
        $_SESSION['is_log_in'] = true ;
        $_SESSION['user_data'] = array(
            "id" => $row['AdID'],
            "name" => $row['AdFirstName'],
            "lastName" => $row['AdLastName'],
            "email" => $row['AdEmail'],
            "description" => $row['AdDescription']
        );
        header('Location: /admin');
      }else {
        $_SESSION['Log_in_fail'] = true;
      }
    }
    return;
  }

  public function Logout(){
    return;
  }

  public function Users(){
    $this->query('SELECT * FROM admin');
    $rows = $this->resultSet();
    return $rows;
  }

  public function MangeUsers(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $password = md5($post['fePassword']);
    if ($post['submit']) {
      //insert post into post table
      $this->query('INSERT INTO admin (AdFirstName, AdLastName, AdEmail, AdPassword, AdActive) VALUES (:AdFirstName, :AdLastName, :AdEmail, :AdPassword, :AdActive) ');
      $this->bind(':AdFirstName', $post['feFirstName']);
      $this->bind(':AdLastName', $post['feLastName']);
      $this->bind(':AdEmail', $post['feEmailAddress']);
      $this->bind(':AdPassword', $password);
      $this->bind(':AdActive', 1);
      $this->execute();
      //verify
      if ($this->lastInsertId()) {
       // Echo to verify
       $_SESSION['is_Create_Success'] = true;
     }
    }
    return;
  }

  public function Create(){
    if (isset($_POST['submit'])) {
      if($_POST['PostTitle'] != null && $_POST['ckeditor'] != null){
          //insert post into post table
          $this->query('INSERT INTO posts (PostTitle, PostBody, PostCat) VALUES (:PostTitle, :PostBody, :PostCat) ');
          $this->bind(':PostTitle', $_POST['PostTitle']);
          $data = $_POST['ckeditor'];
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          $this->bind(':PostBody', $data);
          $this->bind(':PostCat', $_POST['category']);
          $this->execute();
          //verify
          if ($this->lastInsertId()) {
           // Echo to verify
           $_SESSION['is_Create_Success'] = true;
        }else {
          $_SESSION['is_Create_Failed'] = true;
        }
     }else {
        $_SESSION['is_Create_Failed'] = true;
     }

    }
    return;
  }

  public function EditPost(){
    $this->query('SELECT * FROM posts WHERE ID = :postID');
    $this->bind(':postID', $_GET['id']);
    $rows = $this->single();
    if($rows){
      $_SESSION['Tittle'] = $rows['PostTitle'];
      $_SESSION['Body'] = $rows['PostBody'];
    }else {
      echo "................................................There'is no post";
    }
      //Update post into post table
    if (isset($_POST['submit'])) {
      $this->query('UPDATE posts SET PostTitle = :PostTitle, PostBody = :PostBody, PostCat = :PostCat WHERE ID = :id ');
      $this->bind(':PostTitle', $_POST['PostTitle']);
      $data = $_POST['ckeditor'];
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $this->bind(':PostBody', $data);
      $this->bind(':PostCat', $_POST['category']);
      $this->bind(':id', $_GET['id']);
      $this->execute();
       // redirect to Admin Blog Post page
       header('Location: '.ROOT_URL.'Admin/BlogPost');
   }
    return;
  }

  public function Profile(){
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $password = md5($post['fePassword']);
    if ($post['submit']) {
      //insert post into post table
      $this->query('UPDATE admin SET AdFirstName = :AdFirstName, AdLastName = :AdLastName, AdEmail = :AdEmail, AdPassword = :AdPassword, AdDescription = :AdDescription WHERE  AdID = :AdID');
      $this->bind(':AdFirstName', $post['feFirstName']);
      $this->bind(':AdLastName', $post['feLastName']);
      $this->bind(':AdEmail', $post['feEmailAddress']);
      $this->bind(':AdPassword', $password);
      $this->bind(':AdDescription', $post['feDescription']);
      $this->bind(':AdID', $_SESSION['user_data']['id']);
      $this->execute();
       // Echo to verify
       $_SESSION['is_update_Success'] = true;
     }
    return;
  }


  public function DeletePost(){
    $this->query('DELETE FROM posts WHERE posts.ID = :id ');
    $this->bind(':id', $_GET['id']);
    $this->execute();
    $_SESSION['is_Delete_Success'] = true;
    header('Location: '.ROOT_URL.'Admin/BlogPost');
    return;
  }

  public function ContactForm(){
    $this->query('SELECT * FROM message');
    $rows = $this->resultSet();
    return $rows;
  }

  public function EditPages(){
    require("lang/en.php");
    $file = "lang/en.php";
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['submit']) {
      file_put_contents($file,str_replace($menuSolution,$_POST['menuSolution'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuSolutionEnterprise,$_POST['menuSolutionEnterprise'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuSolutionAPI,$_POST['menuSolutionAPI'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuSolutionTesting,$_POST['menuSolutionTesting'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuSolutionSI,$_POST['menuSolutionSI'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuAbout,$_POST['menuAbout'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuNew,$_POST['menuNew'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuContact,$_POST['menuContact'],file_get_contents($file)));
      file_put_contents($file,str_replace($menuLang,$_POST['menuLang'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterContact,$_POST['FooterContact'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterComName,$_POST['FooterComName'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterAdd,$_POST['FooterAdd'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterPhone,$_POST['FooterPhone'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterEmail,$_POST['FooterEmail'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterNewLetter,$_POST['FooterNewLetter'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterNewLetterDes,$_POST['FooterNewLetterDes'],file_get_contents($file)));
      file_put_contents($file,str_replace($FooterNewLetterBtn,$_POST['FooterNewLetterBtn'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeSliderDemo,$_POST['HomeSliderDemo'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeSliderGet,$_POST['HomeSliderGet'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeGetInTouch,$_POST['HomeGetInTouch'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeTestingTitle,$_POST['HomeTestingTitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeTestingDesc,$_POST['HomeTestingDesc'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeSITitle,$_POST['HomeSITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeSIDesc,$_POST['HomeSIDesc'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeEnterpriseTitle,$_POST['HomeEnterpriseTitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeEnterpriseDesc,$_POST['HomeEnterpriseDesc'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeAPITitle,$_POST['HomeAPITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeAPIDesc,$_POST['HomeAPIDesc'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomePartner,$_POST['HomePartner'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeAboutTitle,$_POST['HomeAboutTitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeAboutDesc,$_POST['HomeAboutDesc'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeLearnMore,$_POST['HomeLearnMore'],file_get_contents($file)));
      file_put_contents($file,str_replace($HomeDownload,$_POST['HomeDownload'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section1Header,$_POST['Section1Header'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section1body,$_POST['Section1body'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2Header,$_POST['Section2Header'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2Body1,$_POST['Section2Body1'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2Body2,$_POST['Section2Body2'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2Body3,$_POST['Section2Body3'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2Body4,$_POST['Section2Body4'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2Body5,$_POST['Section2Body5'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2Body6,$_POST['Section2Body6'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section1APIHeader,$_POST['Section1APIHeader'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2APITitle,$_POST['Section2APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section2APIBody,$_POST['Section2APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section3APITitle,$_POST['Section3APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section3APIBody,$_POST['Section3APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section4APITitle,$_POST['Section4APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section4APIBody,$_POST['Section4APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section5APITitle,$_POST['Section5APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section5APIBody,$_POST['Section5APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section6APITitle,$_POST['Section6APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section6APIBody,$_POST['Section6APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section7APITitle,$_POST['Section7APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section7APIBody,$_POST['Section7APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section8APITitle,$_POST['Section8APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section8APIBody,$_POST['Section8APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section9APITitle,$_POST['Section9APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section9APIBody,$_POST['Section9APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section10APITitle,$_POST['Section10APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section10APIBody,$_POST['Section10APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section11APITitle,$_POST['Section11APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section11APIBody,$_POST['Section11APIBody'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section12APITitle,$_POST['Section12APITitle'],file_get_contents($file)));
      file_put_contents($file,str_replace($Section12APIBody,$_POST['Section12APIBody'],file_get_contents($file)));
    }
    return;
  }

}

?>
