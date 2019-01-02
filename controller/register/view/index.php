<?php include 'include/header.php';  ?>
<main role="main">
        <div class="container">
          <div class="row">
            <h2>  Register Form</h2>
          </div>
          <div class="row">
              <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card mb-12 box-shadow">
                <div class="card-body">
                  <form id="regis_frm">
                      <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd">
                      </div>
                      <div class="form-group">
                        <label for="pwdagain">Password Again:</label>
                        <input type="password" class="form-control" id="pwdagain" name="pwdagain">
                      </div>
                      <button type="button" class="btn btn-primary" onclick="submit_frm()">Register Now</button>
                </form>
                </div>
              </div>
            </div>
              <div class="col-md-4"></div>
          </div>
        </div>
    </main>
<?php include 'include/footer.php';  ?>
<script type="text/javascript">
  function submit_frm() {
 var username  = $('#username').val();
 var pwd  = $('#pwd').val();
 var pwdagain  = $('#pwdagain').val();
 if(username==''){
alert('Username Empty');
}else if (pwd=='') {
alert('Password Empty');
}else if (pwd!=pwdagain) {
alert('Password No Match');
}else {
 $.ajax({
 url: 'register/add',
 type: 'POST',
 data: { username,pwd },
 success:function(data){
   alert('Register Success');
setTimeout(function(){ window.location.href="index"; }, 1200);
 }
})
}
  }
</script>
