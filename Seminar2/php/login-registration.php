<!--Start Login modal-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <h4>Prijava</h4>
      </div>
        <!--Start Login Form -->
        <form id="login-form">
          <div class="modal-body">
            <div class="form-group">
              <label for="login-username">Username:</label>
              <input id="login-username" name="login-username" class="form-control" type="text" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="login-password">Password:</label>
              <input id="login-password" name="login-password" class="form-control" type="password" placeholder="Password" required>
            </div>
          </div>
          <div class="modal-footer">
            <div>
                <button type="reset" class="btn btn-info" data-dismiss="modal">Odustani</button>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
        <!-- End  Login Form -->
    </div>
  </div>
</div>
<!-- End Login Modal -->

<!--Start Register Modal-->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
        <h4>Registracija</h4>
      </div>
        <!-- Start Register Form -->
        <form id="register-form">
          <div class="modal-body">
            <div class="form-group">
              <label for="register-name">Ime i prezime:</label>
              <input id="register-name" name="register-name" class="form-control" type="text" placeholder="Ime i prezime" required>
            </div>
            <div class="form-group">
              <label for="register-username">Username:</label>
              <input id="register-username" name="register-username" class="form-control" type="text" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="register-mail">Email:</label>
              <input id="register-mail" name="register-mail" class="form-control" type="text" placeholder="E-Mail" required>
            </div>
            <div class="form-group">
              <label for="register-password">Password:</label>
              <input id="register-password" name="register-password" class="form-control" type="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="register-conf-password">Ponovite password:</label>
              <input id="register-conf-password" name="register-conf-password" class="form-control" type="password" placeholder="Password" required>
            </div>
          </div>
          <div class="modal-footer">
            <div>
                <button type="reset" class="btn btn-info" data-dismiss="modal">Odustani</button>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
        <!-- End Register Form -->
    </div>
  </div>
</div>
<!-- End  Register Modal -->
