<?php 
    //connecting
    $link=mysqli_connect('localhost', 'port12345', 'ca11com1!');
    if(!$link){
        echo "Not connected".mysqli_error($link);
    }
    //selecting the DB
    $selected_DB=mysqli_select_db($link, 'port12345');
    if(!$selected_DB){
        echo "Not selected the DB".mysqli_error($link);
    }

    settype($id=$_POST['id'], "integer");
    
    //run sql query
    $sql="DELETE FROM topic WHERE id='$id'";
    $result=mysqli_query($link, $sql);
    if(!$result){
        echo "관리자에게 문의하세요!! <a href='index.php'>Back to the main page.</a>";
    }else{
        echo "처리되었습니다. <a href='index.php'>Back to the main page.</a>";
    }
?>