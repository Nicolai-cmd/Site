<?php include 'header.php';?>
    <div class="container">
      <div class="row mt-3">
        <div class="col-sm-12 font"><c><h2>Registration</h2></div>
        </div>
      <div class="col-sm-12">
        <form name= "form1" method="post" action="create.php">
        <div class="form-row mt-4">
          <div class="form-group col-md-6">
            <label for="inputEmail4" class="tytle">First name</label>
            <input type="First name" class="form-control" id="inputFirst name" placeholder="Erik"name="fname">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" class="tytle">Last name</label>
            <input type="Last name" class="form-control" id="inputLast name" placeholder="Švedovski"name="lname">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress" class="tytle">Email</label>
          <input type="email" class="form-control" id="inputemail" placeholder="email@gmail.com" name="email">
        </div>
            <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
        <div class="form-group pure-form">
          <label for="inputAddress2" class="tytle">Password</label>
          <input type="password" class="form-control" id="txtPassword" placeholder="Your password" name="password1">
        </div>
        <div class="form-group pure-form">
            <label for="inputAddress2" class="tytle">Repeat password</label>
            <input type="password" class="form-control" id="txtConfirmPassword" placeholder="Repeat your password" name="password2">
            </div>           
            
        <button class="button button1" type="submit" onclick="return Validate()">Register</button>
       </form>
      </div>
   </div>
   <?php include 'footer.php';?>