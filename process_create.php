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

    //var dec.
    $filtered=array(
    'title'=>mysqli_real_escape_string($link, $_POST['title']),
    'description'=>mysqli_real_escape_string($link, $_POST['description'])
    );
    

    //run sql query
    $sql="INSERT INTO topic(title, description, date) VALUES('{$filtered['title']}', '{$filtered['description']}', NOW())";
    $result=mysqli_query($link, $sql);
    if(!$result){
        echo "관리자에게 문의하세요!!";
    }else{
        echo "처리되었습니다. <a href='index.php'>Back to the main page.</a>";
    }
?>