<!DOCTYPE html>
<html lang="en">
	<head>
	<meta content="utf-8" http-equiv="encoding">
		<title>Motorcycles</title>
		<link rel="stylesheet" href="css/main.css">
		<script type='text/javascript' src="jquery.min.js"></script>		<!--<script type="text/javascript" src="scripts/jquery.validate.js"></script>-->
		<script src="scripts/index.js"></script>
		<script type="text/javascript">
    
    function AddExternals(){
  if (!window.jQuery){
    var jq = document.createElement("script");
    jq.type = "text/javascript";
    jq.src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js";
    document.getElementsByTagName("head")[0].appendChild(jq);
    console.log("Added jQuery!");
  } else {
    console.log("jQuery already exists.")
  }
}

AddExternals();  
    </script>
	</head>
	
	<header>
		<script>onLoad()</script>

		<video width="320" height="240" controls>
  			<source src="images/wheelie.webm" type="video/mp4">
		</video>
		<hr>
		<h1 class="heading">Mat's Motorcycles</h1>
		<hr>
		<ul>
			<li><a href="#home" onclick="loadHOME()">Home</a></li>
			<li><a href="#CB500F" onclick="loadCB500F()" >2015 CB500F</a></li>
			<li><a href="#ZX6R" onclick="loadZX6R()">2007 ZX6R</a></li>
			<li><a href="#STREETTRIPLE" onclick="loadSTREETTRIPLE()">2015 Street Triple Rx</a></li>
			<li><a href="#S1000R" onclick="loadS1000R()">2018 S1000R</a></li>
			<li><a href="#Questionnaire" onclick="loadQuestionnaire()">Questionnaire</a></li>
		</ul>
		
		
	</header>
	
	<body>
	

		 
		<div id="dynamic"></div>
		   







		<div id="questionnaire_form">


<form id="questionnaireFormID" method="POST" action="">
  <fieldset id="one">
	<div class="input-box">
	  <label for="name" id="name_label">Name</label>
	  <input
		type="text"
		name="name"
		id="name"
		minlength="3"
		placeholder="Benjamin"
		class="text-input"
		required
	  />
	</div>

	<div class="input-box">
	  <label for="email" id="email_label">Email</label>
	  <input
		type="email"
		name="email"
		id="email"
		placeholder="ex@ex.com"
		class="text-input"
	  />
	</div>
	<div class="input-box">
	  <label for="Age" id="age_label">Age</label>
	  <input
		type="number"
		name="age"
		id="age"
		placeholder="29"
		class="text-input"
	  />
	</div>
	<div class="input-box">
	  <label for="Ever_Ridden" id="Ever_Ridden_label">Have you ever ridden a motorcycle?</label>
	  <input
		type="radio"
		name="Ever_Ridden"
		id="Ever_Ridden"
		class="text-input"
		value="Yes"
		required>Yes</input>
		<input
		type="radio"
		name="Ever_Ridden"
		id="Ever_Ridden"
		class="text-input"
		value="No"
		required>No</input>
	</div>   



	<div class="input-box">
	  <label for="Lane_Splitting" id="Lane_Splitting_label">Opinion on lane splitting?</label>
	  <input
		type="radio"
		name="Lane_Splitting"
		id="Lane_Splitting"
		class="text-input"
		value="For"
		required>For</input>
		<input
		type="radio"
		name="Lane_Splitting"
		id="Lane_Splitting"
		class="text-input"
		value="Against"
		required>Against</input>
	</div>      


	<textarea type="text" name="comments" class="text-input" cols="50" rows="5">Additional comments...</textarea>
	<br>
  </fieldset>
  <input type="submit" value="Send">

</form>
</div>
















		   
	</body>
	
	<footer>
		<p>Author: Mat Williams</p>
		<p><a href="mailto:mwillia5@unca.edu">mwillia5@unca.edu</a></p>
	</footer>
	
</html>