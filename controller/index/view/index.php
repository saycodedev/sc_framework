<?php include 'include/header.php';  ?>
<main role="main">
        <div class="container">
          <div class="row">
            <h2> <?php if(isset($_SESSION['id'])==''){ ?> Wellcome! <?php }else { ?>  Hello <?=$_SESSION['username']?> ! <?php } ?></h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-12 box-shadow">
                <div class="card-body">
                  <p class="card-text"> SC Framework is Easy PHP Framework. </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="real_framework_load()"> <i class="fas fa-download"></i> Download</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="github_load()">  <i class="fab fa-github"></i> Github</button>
                    </div>
                    <small class="text-muted">V 1.0 Lasted Version.</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
<?php include 'include/footer.php';  ?>
<script type="text/javascript">
  function real_framework_load() {
 window.open('index/download');
  }
  function github_load() {
    window.open('https://github.com/saycodedev/sc_fw');
  }
</script>
