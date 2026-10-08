
<?php
    if($displaymessage){
        ?>
        <h3>Hello Developers - Welcome to the Page</h3>
        
        <?php
    }
    else{
        echo "<h3>This is else message</h3>";
    }
?>

<?php
    foreach($students as $student){
        echo $student;
        echo "<br>";
    }
  
    for($i = 1; $i <= 10; $i++){
        if($i == 5){
            continue;
        }
        echo $i;
        echo "<br>";
    }
?>