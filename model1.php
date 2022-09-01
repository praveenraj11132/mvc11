<?php
class model1 extends Database{
    public function insert($Data){

          $Bookname=$Data["bookname"];
          $Bookid=$Data["bookid"]; 
          $Booktitle=$Data["booktitle"];
          $Bookauthor=$Data["bookauthor"];
          $Bookprice=$Data["bookprice"]; 
     

          $this->query("INSERT INTO book1(bookname,bookid,booktitle,bookauthor,bookprice)
          VALUES ('$Bookname', '$Bookid','$Booktitle','$Bookauthor','$Bookprice')");
          
          var_dump($this->resultset());

    }


  


public function display()
{
    $this->query("select * from book1");
    return $this->resultSet();
}
}
