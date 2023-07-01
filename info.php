<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href="info.css">
    

</head>
<body>


    <div id ="navbar">
       
        <a id="logo">kaksha.in</a>
        <a href ="#">Home</a>
        <a href ="#">About Us</a>
        <a href="#">My cart</a>
        <a href ="#">Contact Us</a>
    
            <input placeholder="search material.in">
            <button>Login</button>
          
            </div>

<p>Details</p>
<div id ="contain">
     <div id ="box1">Gallery</div>
     <div id ="box2">Resources</div>
     <div id ="box3">Institutions</div>
     <div id ="box4">Locations</div>
     <div id ="box5">Successes</div>
     <div id ="box6">Bibliography</div>
</div>


<div id ="cont">
     <div id ="box7">Gallery</div>
     <div id ="box8">Resources</div>
     <div id ="box9">Institutions</div>
     <div id ="box10">Locations</div>
     <div id ="box11">Successes</div>
     <div id ="box12">Bibliography</div>
     <div id ="box13">Gallery</div>
     <div id ="box14">Resources</div>
     <div id ="box15">Institutions</div>
     <div id ="box16">Locations</div>
     <div id ="box17">Successes</div>
     <div id ="box18">Bibliography</div>
</div>

    
    <h3>Sign Up Form</h3>
     <form action ="action.php" method="post">
        <div class ="container">
            <label for = "id1"></label><b>Username</b></label>
            <input type ="text" placeholder ="Email id" name ="username" id = "id1" required>
           <br><br>
            <br>
            <label for = "id2"><b>Password</b></label>
            <input type ="text" placeholder ="Create password" name ="password" id = "id2" required>
             <br><br>
             <br>
            <label for = "id3"><b>DOB</b></label>
            <input type ="text" placeholder ="Enter date of birth" name ="dob" id ="id3" required>
<br><br>
<br><br>
</div>
<br>
<br>

<div class ="box">
            <label for = "id4"><b>Gender</b>

            <input type ="radio" value = "m" name = "gender" id ="id4" required>male
        </label>
            <label for = "id5">
            <input type ="radio" value = "f" name = "gender" id ="id5" required>female
        </label>
        <br><br>
                    <h4>Select your area of interest</h4>
        <label for = "id6">
            <input type ="checkbox" value ="Dsa" name ="subject" id ="id6" 
      >Data Science

         
            <br>
            <br>

            <label for = "id7">
                <input type ="checkbox" value ="Maths" name ="subject" id ="id7"
        >Maths
        <br>
        <br>

        <label for = "id8">
            <input type ="checkbox" value ="Physics" name ="subject" id ="id8"
          >Physics
            <br>
            <br>

            <label for = "id9">
                <input type ="checkbox" value ="Sociology" name ="subject" id ="id9"
        >Sociology
        <br>
        <br>

        <label for = "id10">
            <input type ="checkbox" value ="Hacking" name ="subject" id ="id10" 
    >Hacking
            <br>
            <br>
       <h4>Select your nearest city</h4>
            <select name ="city" required>
                <div id="select">
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Banglore">Banglore</option>
                <option value="Pune">Pune</option>
                </div>
            </select>
        </div>
<br>
<br>

<footer>
<div class="submit">
    <input type = "submit" value="signup" id ="submit" name = "signin">
</div>
</footer>


     </form>
        
   
</body>
</html>
