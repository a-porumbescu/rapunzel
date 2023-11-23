<?php include "db.php";
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
        <?php 
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        
        <a href="create/add_new.php" class="btn btn-dark mb-3">Add new</a>

        <table class="table table-hover text-center">
            <h3>Characters</h3>
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `pers`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td>
                            <a href ="update/edit.php?id=<?php echo $row['id'] ?>"
                            class="link-dark"><i class="fa-solid fa-pen-to-square
                            fs-5 me-3"></i></a>
                            <a href ="delete/delete.php?id=<?php echo $row['id'] ?>"
                            class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

        <div class="mt-5">
            <a href="create/add_new_action.php" class="btn btn-dark mb-3">Add new</a>
            <table class="table table-hover text-center">
                <h3>Actions</h3>
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Action name</th>
                        <th scope="col">Character</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT actions.id, actions.action, pers.name AS pers_name, location.name AS location_name 
                    FROM actions 
                    LEFT JOIN pers ON actions.id_pers=pers.id 
                    LEFT JOIN location ON actions.id_location = location.id";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['action']?></td>
                            <td><?php echo $row['pers_name']?></td>
                            <td><?php echo $row['location_name']?></td>
                            <td>
                                <a href ="update/edit_action.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-pen-to-square
                                fs-5 me-3"></i></a>
                                <a href ="delete/delete_action.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>    
        </div>

        <div class="mt-5">
            <a href="create/add_new_char.php" class="btn btn-dark mb-3">Add new</a>
            <table class="table table-hover text-center">
                <h3>Characteristics</h3>
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Personality</th>
                        <th scope="col">Character</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT characteristic.id, characteristic.personality ,pers.name as pers_name FROM `characteristic` 
                    LEFT JOIN pers ON characteristic.id_pers=pers.id";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['personality']?></td>
                            <td><?php echo $row['pers_name']?></td>
                            <td>
                                <a href ="update/edit_char.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-pen-to-square
                                fs-5 me-3"></i></a>
                                <a href ="delete/delete_char.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>    
        </div>
        <div class="mt-5">
            <a href="create/add_new_location.php" class="btn btn-dark mb-3">Add new</a>
            <table class="table table-hover text-center">
                <h3>Locations</h3>
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Location</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `location`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name']?></td>
                            <td>
                                <a href ="update/edit_location.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-pen-to-square
                                fs-5 me-3"></i></a>
                                <a href ="delete/delete_location.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>    
        </div>
        <div class="mt-5">
            <a href="create/add_new_object.php" class="btn btn-dark mb-3">Add new</a>
            <table class="table table-hover text-center">
                <h3>Objects</h3>
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Object</th>
                        <th scope="col">Character</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT objects.id, objects.object, pers.name AS pers_name FROM `objects`
                    LEFT JOIN pers ON objects.id_pers=pers.id";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['object']?></td>
                            <td><?php echo $row['pers_name']?></td>
                            <td>
                                <a href ="update/edit_object.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-pen-to-square
                                fs-5 me-3"></i></a>
                                <a href ="delete/delete_object.php?id=<?php echo $row['id'] ?>"
                                class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>    
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>