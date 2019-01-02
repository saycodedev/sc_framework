<?php include 'include/header.php';  ?>
<main role="main">
        <div class="container">
          <div class="row">
            <h2>  Login Form</h2>
          </div>
          <div class="row">
              <div class="col-md-4"></div>
            <div class="col-md-4">
              <div class="card mb-12 box-shadow">
                <div class="card-body">
                  <form action="login/query_login"  method="post">
                      <div class="form-group">
                        <label for="email">username:</label>
                        <input type="text" class="form-control" name="user">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="pwd">
                      </div>
                      <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
              </div>
            </div>
              <div class="col-md-4"></div>
          </div>
        </div>
    </main>
<?php include 'include/footer.php';  ?>
