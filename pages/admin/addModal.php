<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD ADMIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form class="row g-3 needs-validation" novalidate action="createadmin.php" method="post">
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">USERNAME</label>
                    <input type="text" class="form-control" id="validationCustom01" name="username" placeholder="Username" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">PASSWORD</label>
                    <input type="text" class="form-control" id="validationCustom02" name="password" placeholder="PASSWORD" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Name</label>
                    <div class="input-group has-validation">
                    
                    <input type="text" class="form-control" id="validationCustomUsername" name="name" aria-describedby="inputGroupPrepend"  placeholder="Name" required>
                    
                    </div>
               
                <div class="col-12">
                    
                </div>
       

                
      </div>
      <div class="modal-footer">
      <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
      </form>
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