<?php include APPROOT . '/resources/views/incl/header.blade.php'; ?>
<div class="row mt-4 mb-4">
  <div class="col-md-6 mx-auto">
    <h3 class="text-center">Welcome to Cheese Admin</h3>
    <p class="text-center">Login Now!</p>
    <form action="<?php echo URLROOT;?>/admin/login" method="post">
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email Address" class="form-control <?php echo !empty($data['email_err']) ? "is-invalid" : ""; ?>" value="<?php echo $data['email'];?>">
        <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" class="form-control <?php echo !empty($data['pwd_err']) ? "is-invalid" : ""; ?>" value="<?php echo $data['pwd'];?>">
        <span class="invalid-feedback"><?php echo $data['pwd_err'];?></span>
      </div>
      <div class="form-group">
        <input type="submit" name="login" value="Login" class="btn btn-success btn-block">
      </div>
    </form>
  </div>
</div>
<?php include APPROOT . '/resources/views/incl/footer.blade.php'; ?>
