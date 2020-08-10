<?php

class ContactModels extends Model{

  public function Index(){

    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    if ($post['submit']) {
        //insert post into post table
        $this->query('INSERT INTO message (MessName, MessEmail, MessSubject, MessContent, MessPhone, MessCompany) VALUES (:MessName, :MessEmail, :MessSubject, :MessContent, :MessPhone, :MessCompany) ');
        $this->bind(':MessName', $post['name']);
        $this->bind(':MessEmail', $post['email']);
        $this->bind(':MessSubject', $post['subject']);
        $this->bind(':MessContent', $post['message']);
        $this->bind(':MessPhone', $post['phone']);
        $this->bind(':MessCompany', $post['company']);
        $this->execute();
        //verify
        if ($this->lastInsertId()) {
         // Echo to verify
         $_SESSION['is_Send_message_Success'] = true;
       }else {
         $_SESSION['is_Send_message_Failed'] = true;
       }

     }
    return;
  }
}

?>
