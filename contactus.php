<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="UTF-8">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>Senderov Watches - Contact Us</title>
        
    </head>
    <body>
        <header>
            <img src="images/logo2.jpg" alt="SWT" width="150" height="150">
        	<h1> Welcome to Senderov Watches - Contact Us </h1>
        </header>
        <nav><ul>
<li class ="a"><a href="index.html"> Home Page</a></li>
<li class ="a"><a href="resources.html"> Resources</a></li>
<li class ="a"><a href="deal.html">Today's Deal</a></li>
<li class ="a"><a href="sale.html">Inventory for Sale</a></li>
<li class ="a"><a href="sold.html">Sold Inventory</a></li>
<li class ="a"><a href="sellwatch.html">Sell your Watch</a></li>
<li class ="a"><a href="contactus.php">Contact Us</a></li>
</ul>
</nav>
        <main>
             <p>
             <h2>Contact Us</h2>
             If you have any question regarding particular piece or any other questions. Please feel free to fill out this form.
             
            </p>
             <fieldset>

            <form method="post" enctype="multipart/form-data" action= "form.php" autocomplete="on">
                <h2>Personal Information</h2>
                Name: <input type="text" name="name"  id="name" required>
                <span class="error"> <?php echo $nameErr; ?></span>
                <br><br>
                Last name: <input type="text" name="lname" id="lname" required>
                <span class="error"> <?php echo $lnameErr; ?></span>
                <br><br>
                Email: <input type="text" name="email" id="dob" autocomplete="off" required>
                <br><br>
                Phone number: <input type="text" name="pnumber" id="cborn">
                <span class="error"> <?php echo $pnumberErr; ?></span> <br><br>
                Comments:<br> <textarea name="comm" id="pd" rows="10" cols="30"></textarea>
                <span class="error"> <?php echo $commErr; ?></span>
                <br><br>
                
                <p><b>Please select your country:</b></p>
                
  <input type="radio" id="country1" name="country" value="North America">
  <label for="country1">North America</label><br>
  <input type="radio" id="country2" name="country" value="South America">
  <label for="country2">South America</label><br>  
  <input type="radio" id="country3" name="country" value="United Kingdom">
  <label for="country3">United Kingdom</label><br>
  <input type="radio" id="country4" name="country" value="Other">
  <label for="country1">Other</label><br><br> 
  
  <p><b>Please select your question:</b></p>
  <input type="checkbox" id="q1" name="question" value="Watch">
<label for="q1"> I have a question about a new product</label><br>
<input type="checkbox" id="q2" name="question" value="Shipping">
<label for="q2"> I have a question about shipping</label><br>
<input type="checkbox" id="q3" name="question" value="Price">
<label for="q3"> I have a question about price</label><br><br>

<p><b>How did you hear about us:</b></p>
<label for="survey"></label>
  <select name="survey" id="survey">
    <option value="search">Search engine</option>
    <option value="media">Social media</option>
    <option value="word">Word of mouth</option>
    <option value="adv">Internet Advertisement</option>
    <option value="oth">Other</option>
  </select>
  <br><br>
  <p><b>Enter your four-digit passcode, then click OK:</b></p>
            <input id="id1" type="number" min="1000" max="9999">
            <button onclick="myFunction()">OK</button>
            <p id="passcode"></p>
            <script>
                function myFunction(){
                    var inpObj = document.getElementById("id1");
                    if (inpObj.checkValidity() == false){
                        document.getElementById("passcode").innerHTML = 
                                inpObj.validationMessage;
                    } else {
                        document.getElementById("passcode").innerHTML = "Passcode Valid";
                    }
                }
                </script>
                <input type="reset" value="Reset">
                <input type="submit" value="Submit">
                <br><br>
                <br><br></form>
             </fieldset>
           
             <hr>
        </main>
       
        <footer><p> <a href="index.html"> Home Page</a> | <a href="resources.html"> Resources</a> | <a href="deal.html">Today's Deal</a> | <a href="sale.html">Inventory for Sale</a> | 
        <a href="sale.html">Inventory for Sale</a> | <a href="sold.html">Sold Inventory</a> | <a href="sellwatch.html">Sell your Watch</a> | <a href="sellwatch.html">Sell your Watch</a> | 
        <a href="contactus.php">Contact Us</a></footer>
    </body>
   
</html>
