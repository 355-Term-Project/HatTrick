 <?php

include_once 'connection.php'; 

    
    $id= $_POST['id'];
    $SUBJECT= $_POST['SUBJECT'];
    $content= $_POST['content'];
    $DATE= $_POST['DATE'];



    $sql = "INSERT INTO post (id, SUBJECT, content, DATE)
    VALUES('$id', '$SUBJECT', '$content', '$DATE')";
     mysqli_query($conn,$sql);

    header("Location: Mainpage.php?signup=success");
    

?>
