<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">add</button>

  <div id="id01" class="w3-modal">
	<div class="w3-modal-content w3-animate-top" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      </div>

      <form class="w3-container" method= "POST" action="addpat_confirm.php">
        <div class="w3-section">
          <label><b>Firstname</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter firstname" name="fname" required>
		   <label><b>Lastname</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter lastname" name="lname" required>
		   <label><b>Birthday</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="Enter birthday" name="bday" required>
		   <label><b>age</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Enter age" name="age" required>
		   <label><b>Bloodtype</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter bloodtype" name="bloodtype" required>
		   <label><b>Description</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Description" name="description" required>
		   <label><b>Contact Number</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Enter contact number" name="contact" required>
		   <label><b>Email</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="email" required>
         <td><br><input type="Submit" name="submit" value="add">
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      </div>

    </div>
  </div>
</div>
            
</body>
</html>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
