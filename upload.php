<?php
require 'functions.php';

$selectAll = queryData("SELECT * FROM media WHERE status = 'Upload' ORDER BY id desc");



if(isset($_POST["submit"])){
  if(insertData($_POST)>0){
    echo '<script>
            document.location.href = "take.php?success=1";
          </script>';

  }
}else if(isset($_POST["btn_take"])){
  if(updateData($_POST)>0){
    echo '<script>
            document.location.href = "take.php?update=1";
          </script>';

  }
}else if(isset($_POST["btn_production"])){
  if(updateData($_POST)>0){
    echo '<script>
            document.location.href = "production.php?update=1";
          </script>';

  }
}else if(isset($_POST["btn_upload"])){
  if(updateData($_POST)>0){
    echo '<script>
            document.location.href = "upload.php?update=1";
          </script>';

  }
}else if(isset($_POST["btn_done"])){
  if(updateData($_POST)>0){
    echo '<script>
            document.location.href = "done.php?update=1";
          </script>';

  }
}else if(isset($_POST["btn_edit"])){
  // print_r($_POST);
  if(updateDataType($_POST)>0){
    echo '<script>
            document.location.href = "upload.php?update=1";
            // alert("ok");
          </script>';

  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatatan Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<?php 
require "Nav/nav.php";
?>

      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">ChatatanGroup</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="take.php">Take</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="production.php" >Production</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upload.php">Upload</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="done.php">Done Upload</a>
            </li>
          </ul>
        </div>
      </div>
      <section id="input media" class="container vh-100 ">
        <div class="  mt-5">
          <?php
          if(isset($_GET["success"])){
            echo 
            '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil ditambahkan !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            ';
          }else if(isset($_GET["delete"])){
            echo 
            '
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data berhasil dihapus !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            ';
          }else if(isset($_GET["update"])){
            echo 
            '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data berhasil diedit !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            ';
          }
          ?>

            
        

        <h1>Data Upload</h1>
 
        <div class="table-responsive">

        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Target Upload</th>
              <th scope="col">Divisi</th>
              <th scope="col">Type</th>
              <th scope="col">Caption</th>
              <th scope="col">Story Board</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>

            </tr>
          </thead>
          <tbody>
            <?php
              $i = 1;
              foreach($selectAll as $data): ?>
              <tr>
              <div class="modal fade" id="modal_lihat_<?=$data['id']?>" tabindex="-1" aria-labelledby="modal_lihat_<?=$data['id']?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="modal_lihat_<?=$data['id']?>Label">Konten <?=$data['id']?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-2">
                          <label for="exampleInputEmail1" class="form-label fw-bold">Divisi :  </label>
                          <p><?=$data["divisi"]?></p>
                          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-2">
                          <label for="exampleInputEmail1" class="form-label fw-bold">Type : </label>
                          <p><?=$data["type"]?></p>
                          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-2">
                          <label for="exampleInputEmail1" class="form-label fw-bold"> Caption : </label>
                          <p><?=$data["caption"]?></p>
                          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-2">
                          <label for="exampleInputEmail1" class="form-label fw-bold"> Story Board : </label>
                          <p><?=$data["story"]?></p>
                          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-2">
                          <label for="exampleInputEmail1" class="form-label fw-bold"> Status : </label>
                          <p><?=$data["status"]?></p>
                          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                        <div class="mb-2">
                          <label for="exampleInputEmail1" class="form-label fw-bold">Target Upload : </label>
                          <p><?=$data["target"]?></p>
                          <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                        </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                
                <th scope="row"><?=$i?></th>
                <td><?=$data["target"]?></td>
                <td><?=$data["divisi"]?></td>
                <td><?=$data["type"]?></td>
                <td><?=$data["caption"]?></td>
                <td><?=$data["story"]?></td>
                <td>

                <button name="btn_take" type="submit" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modal_take_<?=$data['id']?>">Take</button>
                  <div class="modal fade" id="modal_take_<?=$data['id']?>" tabindex="-1" aria-labelledby="modal_take_<?=$data['id']?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="modal_take_<?=$data['id']?>Label">Pindah Konten <?=$data['id']?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Konten akan dipindahkan ke Take
                          <form action="" method="post">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <input type="hidden" name="status" value="Take">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="btn_take" type="submit" class="btn btn-success">Save changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <button name="btn_production" type="submit" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_production_<?=$data['id']?>">Production</button>
                  <div class="modal fade" id="modal_production_<?=$data['id']?>" tabindex="-1" aria-labelledby="modal_production_<?=$data['id']?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="modal_production_<?=$data['id']?>Label">Pindah Konten <?=$data['id']?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Konten akan dipindahkan ke Production
                          <form action="" method="post">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <input type="hidden" name="status" value="Production">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="btn_production" type="submit" class="btn btn-success">Save changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                 
                  <button name="btn_done" type="submit" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal_done<?=$data['id']?>">Done</button> 
                  <div class="modal fade" id="modal_done<?=$data['id']?>" tabindex="-1" aria-labelledby="modal_done<?=$data['id']?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="modal_done<?=$data['id']?>Label">Pindah Konten <?=$data['id']?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Konten akan dipindahkan ke Done
                          <form action="" method="post">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <input type="hidden" name="status" value="Done">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="btn_done" type="submit" class="btn btn-success">Save changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_lihat_<?=$data['id']?>" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
</svg></a>
                <a class="btn btn-sm btn-danger" href="delete_content.php?id=<?=$data['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg></a>
                <a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal_edit_<?=$data['id']?>" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
</svg></a>
<div class="modal fade" id="modal_edit_<?=$data['id']?>" tabindex="-1" aria-labelledby="modal_edit_<?=$data['id']?>" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_edit_<?=$data['id']?>">Edit Konten</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" method="post">
                  <input type="hidden" name="status" value="<?=$data['status']?>">
                  <input type="hidden" name="id" value="<?=$data['id']?>">
                      <div class="mb-3">
                        <label for="divisi" class="form-label fw-bold">Divisi :</label>
                        <div class="input-group">
                          <select class="form-select form-select-md" aria-label="Small select example" name="divisi" required>
                            <option selected value="<?=$data['divisi']?>"><?=$data['divisi']?></option>
                            <option value="rupaka">rupaka</option>
                            <option value="CHTTN Basic">CHTTN Basic</option>
                            <option value="Chat Barber">Chat Barber</option>
                            <option value="CST">CST</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="type" class="form-label fw-bold">Type :</label>
                        <div class="input-group">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" <?php echo ($data['type'] == 'socmed') ? ("checked"):("") ?> type="radio" name="type" id="socmed" value="socmed">
                            <label class="form-check-label" for="socmed">Socmed</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" <?php echo ($data['type'] == 'promo') ? ("checked"):("") ?> type="radio" name="type" id="promo" value="promo">
                            <label class="form-check-label" for="promo">Promo</label>
                          </div>
                          
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="Reference" class="form-label fw-bold">Reference :</label>
                        <input type="text" class="form-control" id="Reference" name="reference" value="<?=$data['reference']?>" required>
                      </div>

                      <div class="mb-3">
                        <label for="Caption" class="form-label fw-bold">Caption :</label>
                        <input type="text" class="form-control" id="Caption" name="caption" value="<?=$data['caption']?>" required>
                      </div>

                      <div class="mb-3">
                        <label for="Story" class="form-label fw-bold">Story Board :</label>
                        <input type="text" class="form-control" id="Story" name="story" value="<?=$data['story']?>" required>
                      </div>

                      <div class="mb-3">
                        <label for="Target" class="form-label fw-bold">Target Upload :</label>
                        <input type="date" class="form-control" id="Target" name="target" value="<?=$data['target']?>" required>
                      </div>
                      
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="btn_edit" class="btn btn-primary">Edit</button>
                </form>
                </div>
            </div>
            </div>
        </div>
                </td>
              </tr>
            <?php 
              $i++;
              endforeach?>
          </tbody>
        </table>
        </div>

      </section>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>