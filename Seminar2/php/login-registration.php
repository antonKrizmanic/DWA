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
      
      <div id="div-forms">      
        <!--Start Login Form -->
        <form id="login-form">
          <div class="modal-body">            
            <div class="form-group">
              <label for="">Username:</label>
              <input id="login_username" class="form-control" type="text" placeholder="Username" required>  
            </div>
            <div class="form-group">
              <label for="">Password:</label>
              <input id="login_password" class="form-control" type="password" placeholder="Password" required>            
            </div>           
          </div>
          <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </div>              
          </div>
        </form>
        <!-- End  Login Form -->                    
      </div>      
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
      <div id="div-forms">                                    
        <!-- Start Register Form -->
        <form id="register-form">
          <div class="modal-body">            
            <div class="form-group">
              <label for="">Ime i prezime:</label>
              <input id="register_name" class="form-control" type="text" placeholder="Ime i prezime" required>
            </div>
            <div class="form-group">
              <label for="">Username:</label>
              <input id="register_username" class="form-control" type="text" placeholder="Username" required>
            </div>
            <div class="form-group">
              <label for="">Email:</label>
              <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
            </div>
            <div class="form-group">
              <label for="">Password:</label>
              <input id="register_password" class="form-control" type="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label for="">Ponovite password:</label>
              <input id="register_password" class="form-control" type="password" placeholder="Password" required>
            </div>
          </div>
          <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
            </div>                   
          </div>
        </form>
        <!-- End Register Form -->                    
      </div>      
    </div>
  </div>
</div>
<!-- End  Register Modal -->