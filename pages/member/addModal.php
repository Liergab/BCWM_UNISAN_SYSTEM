<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD MEMBER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form class="row g-3 needs-validation" novalidate action="createmember.php" method="post">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="Last name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Gender</label>
                    <div class="input-group has-validation">
                    
                    <input type="text" class="form-control" id="validationCustomUsername" name="gender" aria-describedby="inputGroupPrepend"  placeholder="Gender" required>
                    
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">BIRTH DAY</label>
                    <input type="date" class="form-control" name="bdate" id="validationCustom03" required>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">AGE</label>
                    <input type="number" class="form-control" name="age" id="validationCustom03" required>
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">ADDRESS</label>
                    <select class="form-select" name="address" id="validationCustom04"  required>
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
                    <select class="form-select" name="position" id="validationCustom04" required>
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
                    <select class="form-select" name="bapt" id="validationCustom04" required>
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
                    <select class="form-select" name="acl" id="validationCustom04" required>
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
                    <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                </div>
        </form>

                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<script>

(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>