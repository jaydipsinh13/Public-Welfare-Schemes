<?php
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="edit.css">

</head>
<body>
    <div class="modal-body">
        <table class="table table-bordered table-hover data-tables">
        
        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM forms WHERE id='$user_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                



        <form action="code.php" method="POST">
        <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                   
          <tbody>
        <tr> 
         <th>Remark :</th>
         <td>
          <textarea type="text" class="form-control wd-450" name="remark" value="<?=$user['remark'];?>" ></textarea>
        </tr> 
          
        <tr>
         <th>Status :</th>
         <td>
         <select id="fstatus"  name="fstatus" class="form-control wd-450" value="<?=$user['fstatus'];?>">
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Cancelled">Cancelled</option>
         </select>

        <script>
            document.getElementById("fstatus").value = "<?php echo $user['fstatus']; ?>";
        </script>
          <!-- <input type="text" name="fstatus" value="<?=$user['fstatus'];?>" > -->
    
        </td>
        </tr>
        </tbody>
        
        </table>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
        </form>
        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
        </div></body>
</html>