<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this -> renderSection("pageTitle"); ?></title>
    <?php echo link_tag("style.css"); ?>

    <?php echo script_tag("script.js") ?>
</head>
<body>
    <header>Header information</header>

    <!-- base url method -->
    <img src="<?php echo base_url("image.png") ?>" alt="" style="height:300px; width:500px">

    <!-- Html method -->
     <?php echo img("image.png", false, array(
        "alt" => "This is my image",
        "height" => "300px",
        "width" => "500px"
        )); ?>

    <section>
        <?= $this -> renderSection("pageBody"); ?>
    </section>

    <footer>Footer information</footer>

</body>
</html>