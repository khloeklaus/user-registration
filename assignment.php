<?php include "includes/head.html";?>
<h><b><u>Enter your name and your age</u></b></h>
<?php
function displaylnfo($name,$age){
    echo "Name : $name";
echo "Age : $age";

}

?>

    <div class="container">
    <div class="row">
      <form >
        <div class="form-group">
          <input type="text" name="name"placeholder=" Name" class="form control">
        </div>

        <div class="form-group">
          <input type="number"name="age" placeholder="Age" class="form control">
        </div> 

        <button type="submit" class="btn btn-success">Submit</button>
      </form>              
    </div> 
    </div>
  </div>
