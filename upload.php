
 <?php
     require './Classes/DBConnecter.php';
use Classes\DBConnecter;
      $dbcon = new DBConnecter(); 
    
 
      if(isset($_POST['submit'])){
          $tourid=$_POST["tourid"];
        
        $filename=$_FILES['uploadfile']['name'];
        $file_size =$_FILES['uploadfile']['size'];
        $tempname=$_FILES['uploadfile']['tmp_name'];
        $file_error=$_FILES['uploadfile']['error'];
        $file_type =$_FILES['uploadfile']['type'];
        
        
        if($file_error===0){
           
            if($file_size < 100000){
                $fileNewName= uniqid('',true).".".$filename;
                
                $folder ="files/".$fileNewName;
                move_uploaded_file($tempname,$folder);
        
                     try{
                         $con =$dbcon->getConnection();
                         $query ="UPDATE booking SET file=? WHERE tour_id=?";
        
                         $pstmt = $con->prepare($query);
                         
                         $pstmt->bindValue(1, $filename);
                         $pstmt->bindValue(2, $tourid);
                         $pstmt->execute();
                         if($pstmt->rowCount()>0){
                             header("Location:payment.php?success=1");
                         }
                         
                      }
        
                     catch (PDOException $exc ){
     
                            echo $exc->getMessage();
     
                      }
             }
             else{
                  header("Location:payment.php?error=2");
             }
            
        }
        
        else{
            
            header("Location:payment.php?error=1");
        }
        
    }
   
  ?>