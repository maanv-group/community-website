<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head") ?>
    <title>Document</title>
</head>

<body>
    <?php $this->load->view("components/basenav"); ?>
  <main class="pt-3">
    <div class="row m-0 justify-content-center">
      <div class="col-lg-5 col-md-7 col-10">
        <form method="post" action="<?= base_url() ?>Actions/login">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="mb-3">
            <input type="submit" value="Login" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-secondary mx-3">
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php $this->load->view("components/footer") ?>
</body>

</html>
</body>

</html>

</html>

</html>

</html>