<?php
     if(isset($_POST['button1'])) {
    $username = $_POST["text_change"]; 
    $lower_string= strtolower($username);
    }
    if(isset($_POST['button2'])) {
        $username = $_POST["text_change"];
    $upper_string = strtoupper($username);  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .btn{
     background-color: #2158ff;
      color: white;
       padding: 5px;
       font-size: 20px;
        border-radius: 5px;
        
    } 
    input{
        font-size: 30px;
        border-radius: 15px;
    }
    .btn1{
        font-size: 20px;
        padding: 5px;
        border-radius: 5px;
        background-color: #2158ff;
        color: white;
        margin-left: 3.5rem;
    }
</style>
<body>
    <center>
    <form action="" method="POST" >
      <span style="font-size:45px; color: blue;">text area:</span>  <input type="text" name="text_change" value="<?php echo $lower_string; echo $upper_string;?>"; <br><br><br>
       <button type="submit" name="button1" value="Lower case" class="btn1" class="btn">Lower case </button>
        <button type="submit" name="button2" value="Upper case" class="btn">Upper case</button>
        <h2>Summary</h2>
    </form>
    <?php
    $username = $_POST["text_change"]; 
    $str1 = strlen($username);
    $str = str_word_count($username);
    echo $str . " word and ". $str1 . " characters";
    echo "<br>";
?>
    </center>
</body>
</html>