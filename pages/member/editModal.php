<!-- Modal -->
<?php
include 'update.php';

$id = $_GET['id'];

$queryEdit = "SELECT * FROM tbl_member WHERE id=$id";
$sqlEdit =$con->query($queryEdit);
while($res = mysqli_fetch_array($sqlEdit)){
  $fname = $res['fname'];
  $lname = $res['lname'];
  $gender = $res['gender'];
  $bdate = $res['bdate'];
  $age = $res['age'];
  $address = $res['address'];
  $position = $res['position'];
  $bapt = $res['bapt'];
  $acl = $res['acl'];

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<div class="container">
<form class="row g-3 needs-validation" novalidate action="update.php" method="post">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" value=<?php echo $fname ?> required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="lname"  value=<?php echo $lname ?> placeholder="Last name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Gender</label>
                    <div class="input-group has-validation">
                    
                    <input type="text" class="form-control" id="validationCustomUsername" name="gender" aria-describedby="inputGroupPrepend"  value=<?php echo $gender ?>  placeholder="Gender" required>
                    
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">BIRTH DAY</label>
                    <input type="date" class="form-control" name="bdate" id="validationCustom03"  value=<?php echo $bdate ?> required>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">AGE</label>
                    <input type="number" class="form-control" name="age" id="validationCustom03"  value=<?php echo $age ?> required>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">ADDRESS</label>
                    <select class="form-select" name="address" id="validationCustom04"  value=<?php echo $address ?>  required>
                    <option selected disabled value="">Choose...</option>
                    <option>Brgy. Malvar</option>
                    <option>Brgy. Muliguin</option>
                    <option>Brgy. Punta</option>
                    <option>Brgy. Poctol</option>
                    <option>Brgy. F Dejesus</option>
                    <option>Brgy. Malvar</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">POSITION</label>
                    <select class="form-select" name="position" id="validationCustom04"  value=<?php echo $position ?> required>
                    <option selected disabled value="">Choose...</option>
                    <option>Member</option>
                    <option>Leader</option>
                    <option>Pastor</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom04" class="form-label">BAPT in BCWM</label>
                    <select class="form-select" name="bapt" id="validationCustom04"  value=<?php echo $bapt ?> required>
                    <option selected disabled value="">Choose...</option>
                    <option>Yes</option>
                    <option>No</option>
                    <option>Willing</option>
                  
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">AGE IN CHRISTIAN LIVING</label>
                    <select class="form-select" name="acl" id="validationCustom04"   value=<?php echo $acl ?>required>
                    <option selected disabled value="">Choose...</option>
                    <option>1-3 Years</option>
                    <option>4-6 Years</option>
                    <option>7-10 Years</option>
                    <option>11-20 Years</option>
                  
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                </div>
                
                <div class="col-12">
                    
                </div>
                <div class="col-12">
                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                    <button class="btn btn-primary" name="update" type="submit">Submit form</button>
                    <a href="member.php"  class="btn btn-danger">Cancel</a>
                </div>
        </form>

</div>


  
</body>
</html>
           