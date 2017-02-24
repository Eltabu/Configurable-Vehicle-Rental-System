<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Configurable Vehicle Rental System</title>
        <link rel="stylesheet" type="text/css" href="main.css">
	</head>

	<body>	
        
        <h1>Configurable Vehicle Rental System</h1>
                
        <div class="container">  
          <form id="contact" action="generateWebsite.php" method="post">
            <h3>Website Setting</h3>
            <h4>Customize the Features</h4>
            <label for="temp" class="label">Website Name</label>
            <fieldset>
              <input placeholder="Website Nmae" name="name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <label for="temp" class="label">Choose Template</label>
            <fieldset name="temp">              
              <input type="radio" class="radio" name="temp" id="ex1" value="temp2" checked required />
              <label for="ex1" class="label1">Example 1</label>
              <input type="radio" class="radio" name="temp" id="ex2" value="temp1" required />
              <label for="ex2" class="label2">Example 2</label>
            </fieldset>
            <fieldset>
              <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Create</button>
            </fieldset>
          </form>
        </div>

	</body>

</html>