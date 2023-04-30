<?php  
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'But Books', 'Please buy books from Store', current_timestamp());
include 'conn2.php';


// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if (isset( $_POST['snoEdit'])){
  // Update the record
    $sno = $_POST["snoEdit"];
    $title = $_POST["titleEdit"];
    $description = $_POST["descriptionEdit"];

  // Sql query to be executed
  $sql = "UPDATE `notes` SET `title` = '$title' , `description` = '$description' WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $update = true;
}
else{
    echo "We could not update the record successfully";
}
}
else{
    $title = $_POST["title"];
    $description = $_POST["description"];

  // Sql query to be executed
  $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $sql);

   
  if($result){ 
      $insert = true;
  }
  else{
      echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
  } 
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Fjalla+One&family=Roboto&family=Teko:wght@500&display=swap" rel="stylesheet">

<link rel="shortcut icon" type="x-icon" href="./imsgrs/—Pngtree—coding on screen glyph black_3755344.png">
    <title>notes</title>
    <style>
        body {
            font-family: 'Anton', sans-serif;
            font-family: 'Fjalla One', sans-serif;
            font-family: 'Roboto', sans-serif;
            font-family: 'Teko', sans-serif;
        }
        
        .dropdown-menu {
            --bs-dropdown-min-width: 16rem;
        }
        
        .navbar-nav {
            margin: auto;
        }
        
        .navbar {
            background-color: white;
            height: 80px;
            margin-top: 0%;
            border-bottom: 1px solid grey;
        }
        
        .nav-link {
            margin: 0px 30px 10px 10px;
            color: black;
        }
        
        .nav-link:hover {
            font-size: 20px;
            color: rgb(117, 109, 109)
        }
        
        .dropdown-item {
            color: black;
        }
        
        #h {
            margin-top: 70px;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        .hi {
            height: 100px;
        }
        
        .box {
            height: 50px;
            width: 50px;
        }
        
        #com {
            height: 100px;
            width: 100px;
            background-color: white;
        }
        
        #imi {
            border-radius: 380px;
        }
        
        #btn4 {
            height: 50px;
            width: 50px;
        }
        
        p#cod {
            font-size: 30px;
        }
        
        #para2 {
            font-size: 30px;
        }
        
        @media only screen and (max-width: 575px) {
            .hi {
                width: 250px;
                margin-bottom: 30px;
                ;
            }
            .box {
                width: 250px;
                margin: auto;
            }
            p#cod {
                font-size: 15px;
            }
            #para2 {
                font-size: 15px;
            }
            .box {
                margin: auto;
            }
            .section22 {
                width: 100%;
                margin: auto;
                margin-top: 100px;
            }
            .body {
                background-color: aqua;
            }
            ul {
                background-color: white;
                opacity: 0.95;
            }
        }
        
        .modal-backdrop {
            z-index: -1;
        }
        
        .body {
            font-size: 30px;
        }
        
        .section22 {
            width: 80%;
            margin: auto;
            margin-top: 100px;
        }
    .contain{
        height:160px;
    }
    </style>
</head>

<body>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
                </div>
                <form action="/portfolio/note.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="form-group">
                            <label for="title">Note Title</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="desc">Note Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-xl  fixed-top" id="navi">
        <div class="container-fluid">
            <img class="navbar-brand" width="60px" height="60px" src="./imsgrs/pngwing.com.png" alt="logo">
            <button type="button" class="navbar-toggler z-3" data-bs-toggle="collapse" data-bs-target="#navbarid"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarid">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="blogs.php">BLOGS</a></li>
                    <li class="nav-item"><a class="nav-link" href="note.php">NOTE</a></li>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             PROJECTS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://github.com/AnkitTisawar/Web_Designing/tree/main/Blogs_web" target="_blank">website1</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="https://github.com/AnkitTisawar/Web_Designing/tree/main/Food_Odering_website" target="_blank">website2</a></li>



                        </ul>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex m-1" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="nav-item mx-3 mt-1">
                        <div class="container-fliud">

                            <div class="dropdown">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
          LOGIN
        </button>
                                <form class="dropdown-menu p-4">
                                    <div class="mb-3">
                                        <label for="exampleDropdownFormEmail2" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                            <label class="form-check-label" for="dropdownCheck2">
                Remember me
              </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </li>




                    <li class="nav-item mt-1 mx-3">



                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Sign up
                          </button>

                        <!-- Modal -->

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sing in</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="index.php" method="post">
                                            <div class="mb-3">
                                                <label for="Formname" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" id="Formname" placeholder="Enter Your Name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="Formnumber" class="form-label">Number</label>
                                                <input type="number" class="form-control" id="Formnumber" name="number" placeholder="Enter Your Number">
                                            </div>
                                            <div class="mb-3">
                                                <label for="FormEmail2" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="FormEmail2" name="email" placeholder="email@example.com">
                                            </div>
                                            <div class="mb-3">
                                                <label for="FormPassword2" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="FormPassword2" name="pass" placeholder="Password">
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="Check2">
                                                    <label class="form-check-label" for="Check2">
                                                            rember me
                        </label>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
        <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
            <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
               <div class="contain"></div>
                <div class="container my-4 mt-5">
                
                    <h1>Add a Note To Save</h1>
                    <form action="/portfolio/note.php" method="POST">
                        <div class="form-group">
                            <label for="title">Note Title</label>
                            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <label for="desc">Note Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Note</button>
                    </form>
                </div>

                <div class="container my-4">


                    <table class="table" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
          $sql = "SELECT * FROM `notes`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)){
            $sno = $sno + 1;
            echo "<tr>
            <th scope='row'>". $sno . "</th>
            <td>". $row['title'] . "</td>
            <td>". $row['description'] . "</td>
            <td> <button class='edit btn btn-sm btn-success' id=".$row['sno'].">Edit</button> <button class='delete btn btn-sm btn-danger' id=d".$row['sno'].">Delete</button>  </td>
          </tr>";
        } 
          ?>


                        </tbody>
                    </table>
                </div>


                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#myTable').DataTable();

                    });
                </script>
                <script>
                    edits = document.getElementsByClassName('edit');
                    Array.from(edits).forEach((element) => {
                        element.addEventListener("click", (e) => {
                            console.log("edit ");
                            tr = e.target.parentNode.parentNode;
                            title = tr.getElementsByTagName("td")[0].innerText;
                            description = tr.getElementsByTagName("td")[1].innerText;
                            console.log(title, description);
                            titleEdit.value = title;
                            descriptionEdit.value = description;
                            snoEdit.value = e.target.id;
                            console.log(e.target.id)
                            $('#editModal').modal('toggle');
                        })
                    })

                    deletes = document.getElementsByClassName('delete');
                    Array.from(deletes).forEach((element) => {
                        element.addEventListener("click", (e) => {
                            console.log("edit ");
                            sno = e.target.id.substr(1);

                            if (confirm("Are you sure you want to delete this note!")) {
                                console.log("yes");
                                window.location = `/portfolio/note.php?delete=${sno}`;
                                // TODO: Create a form and use post request to submit a form
                            } else {
                                console.log("no");
                            }
                        })
                    })
                </script>

                <hr>
                <footer class=" text-center" >
                    @copyrightwww.ankittisawar.com
                </footer>
</body>

</html>