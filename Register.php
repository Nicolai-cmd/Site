<?php include 'header.php';?>
    <div class="container">
      <div class="row mt-3">
        <div class="col-sm-12 font"><c><h2>Registration</h2></div>
        </div>
      <div class="col-sm-12">
        <form name= "form1" method="post" action="create.php">
        <div class="form-row mt-4">
          <div class="form-group col-md-6">
            <label for="inputEmail4">First name</label>
            <input type="First name" class="form-control" id="inputFirst name" placeholder="Erik"name="fname">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Last name</label>
            <input type="Last name" class="form-control" id="inputLast name" placeholder="Švedovski"name="lname">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Email</label>
          <input type="email" class="form-control" id="inputemail" placeholder="email@gmail.com" name="email">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Password</label>
          <input type="text" class="form-control" id="inputpassword1" placeholder="Your password" name="password1">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Repeat password</label>
            <input type="text" class="form-control" id="inputpassword2" placeholder="Repeat your password" name="password2">
        </div>
        <button type="submit" class="button1">Register</button>
       </form>
      </div>
   </div>
   <?php include 'footer.php';?>