<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="contner">
        <h1>All sign in information</h1>
        <div class="center">
            <div  class="table">
                <table>
                    <thead>

                <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>password</th>
                        <th>email</th>
                        <th>phone</th>
                    <th>Operation</th>
                </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        include 'connection_form.php';

 $select_query="select * from sign_form1 ";
    $check= mysqli_query($con,  $select_query);
    // $rows = mysqli_num_rows($check);
    // echo $rows;
    // $result=mysqli_fetch_array($check);
    // echo $result['3'] ; 
    while($result=mysqli_fetch_array($check)){
        ?>
                         <tr>
                            <td> <?php echo $result['id'] ;?></td>
                            <td> <?php echo $result['user'] ;?></td>
                            <td> <?php echo $result['password'] ;?></td>
                            <td> <?php echo $result['email'] ;?></td>
                            <td> <?php echo $result['phone'] ;?></td>
                                
                            <td>  <a href="update.php?id= <?php echo $result['id'] ;?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit"></i></a> </td>
                            <td> <a href="delete.php" data-toggle="tooltip" data-placement="bottom" title="Delete"> <i class="fa fa-trash"></i></a></td>
                        </tr>   
           <?php                 
    }
?>                
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script>
    $(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<script  src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body> 
</html>