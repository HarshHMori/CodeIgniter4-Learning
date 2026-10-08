<style>
    ul.pagination{
        display: flex;
        list-style: none;
    }

    ul.pagination li{
        padding: 10;
        background: orange;
        margin-right: 6px;
        border-radius: 8px;
    }
    ul.pagination a{
        text-decoration: none;
    }

</style>

<h1>Managers</h1>

<ul>
<?php
    
    foreach($managers as $manager){

    ?>

    <li>
        <strong>Name: </strong><?php echo $manager->name ?>,
        <strong>Email: </strong><?php echo $manager->email ?>
    </li>

    <?php
    }
    
?>
</ul>

<div>
    <?php echo $pagination->links(); ?>
</div>