<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Manager Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        #frm-add-manager label.error{
            color: red;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Add Manager</h2>

        <?php if(session()->get("success")){
            ?>
        
        <div class="alert alert-success">
            <strong>Success!</strong> <?php echo session()->get("success"); ?> 
        </div>
        
        <?php } ?>

        <form action="<?php echo base_url('add-manager') ?>" method="post" id="frm-add-manager">

            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" required class="form-control" id="name" placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required class="form-control" id="email" placeholder="Enter email" name="email">
            </div>

            <div class="form-group">
            <label for="designation">Designation:</label>
            <select name="designation" required class="form-control" id="designation">
                <option value="">-- Select --</option>
                <option value="seo">SEO</option>
                <option value="web-developer">Web Developer</option>
                <option value="php">PHP Developer</option>
            </select>
            </div>

            <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.22.1/jquery.validate.min.js"></script>
    <script>

        $(function(){
            $("#frm-add-manager").validate();
        })
    </script>
</body>
</html>
