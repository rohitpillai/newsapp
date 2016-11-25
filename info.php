
<!-- saved from url=(0038)file:///C:/Users/Rathore/new/info.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"></head><body><strong> Please provide the following details: </strong>
<form action="submit.php" method="post">
<p>
First Name:
<input type="text" id="firstname" name="firstname" required>
</p>
<p>
Last Name:
<input type="text" id="lastname" name="lastname" required>
</p>
<p>
Email:
<input type="text" id="Email" name="Email" required>
</p>
<p>
Contact no.:
<input type="number" id="Contact" name="contactno" required>
</p>
<p>
Date of Birth:
<input type="date" id="dob" name="dofb" required>	
</p>
<p>
Gender:
<input type="radio" name="Gender" id="gender_male" value="Male" required=""> male  
<input type="radio" name="Gender" id="gender_female" value="Female"> female <br>
</p>
<p>
Nationality:
<input type="text" name="Nationality" required="">
<select name="Nationality" id="Nationality">
	<option value="Indian">Indian</option>
	<option value="American">American</option>
	<option value="Nepali">Nepali</option>
	<option value="Australian">Australian</option>
</select>	
</p>
<p style="
    width: 100px;
">
Address:<br>
House no.  <input type="number" name="house_no" id="house_no" required=""><br>
Area         <input type="text" name="area" id="area" required=""><br>
Nearby    <input type="text" name="nearby" id="nearby"><br>
District  <input type="text" name="district" id="district" required=""><br>
State        <input type="text" name="state" id="state" required=""><br>
Pin           <input type="number" name="pin" id="pin" required=""><br>
</p>
<button type="submit" onclick="thankspage(1)"> Submit </button>
</form>

<script type="text/javascript">
	function thankspage (a){
		var male = document.getElementById('gender_male').checked;
		var female = document.getElementById('gender_female').checked;
		
		var gender = '';

		if(male){
			gender = document.getElementById('gender_male').value;
		} else if(female){
			gender = document.getElementById('gender_female').value;
		}

			
</script></body></html>