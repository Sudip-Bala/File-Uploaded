<?php
    echo $_FILES['image']['name'];
    echo "<br/>";
    echo $_FILES['image']['size'];
    echo "<br/>";
    echo $_FILES['image']['tmp_name'];
    echo "<br/>";
   echo $filename = 'uploads/' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $filename);
?>

<img src="<?php echo $filename; ?>">