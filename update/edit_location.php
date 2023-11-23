<?php
include "../db.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $sql = "UPDATE `location` SET `name`='$name' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: ../db_editor.php?msg=Data updated successfully");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP CRUD Application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" 
    style="background-color: #00ff5573;">
        PHP Complete CRUD Opperations
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit information about location</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `location` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name"
                        value="<?php echo $row['name'] ?>">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success"
                        name="submit">Update</button>
                        <a href="index.php" class="btn btn-danger">Cancel</a>
                    </div>



                </div>
            
        
            </form>

        </div>
    </div>



    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>