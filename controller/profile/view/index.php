<?php include 'include/header.php';  ?>
<style media="screen">
  .hidden_div{
    display: none;
  }
</style>
<main role="main">
        <div class="container">
          <div class="row">
            <h2>  Profile </h2>
          </div>
          <div class="row">
              <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card mb-12 box-shadow">
                <div class="card-body">
                  <form action="login/query_login"  method="post">
                      <div class="form-group">
                        <label for="email">username:</label>
                        <input type="text" class="form-control" name="user" id="username" value="<?=$result['user_username']?>">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="pwd" onclick="show_editpass()"  id="pwd" value="<?=$result['user_password']?>" readonly>
                      </div>
                      <div class="form-group hidden_div divx">
                        <label for="pwd">New Password:</label>
                        <input type="password" class="form-control" name="newpwd" id="newpwd">
                      </div>
                      <div class="form-group hidden_div divx">
                        <label for="pwdagain">Password Again:</label>
                        <input type="password" class="form-control" id="pwdagain" name="pwdagain">
                      </div>
                      <input type="hidden"  id="id" name="id" value="<?=$result['user_id']?>">
                      <button type="button" class="btn btn-primary" onclick="submit_frm()">Edit Profile</button>
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
    var id  = $('#id').val();
 var username  = $('#username').val();
 var pwd  = $('#pwd').val();
  var newpwd  = $('#newpwd').val();
 var pwdagain  = $('#pwdagain').val();
 if(username==''){
alert('Username Empty');
}else {

  if(newpwd==''){
    $.ajax({
    url: 'edit_1',
    type: 'POST',
    data: { username,id },
    success:function(data){
      alert('Edit Username Success');
  setTimeout(function(){ window.location.href="profile"; }, 1200);
    }
   })
  }else {
  if (newpwd!=pwdagain) {
alert('Password No Match!');
  }else{
 $.ajax({
 url: 'edit_2',
 type: 'POST',
 data: { username,newpwd,id },
 success:function(data){
   alert('Edit Username & Password Success');
setTimeout(function(){ window.location.href="profile"; }, 1200);
 }
})
}
}

   }
  }

  function show_editpass() {
  $('.divx').toggleClass('hidden_div');
  }
</script>
