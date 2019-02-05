<!DOCTYPE html>
<html>
  <head>
    <title>
      Matcha
    </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {box-sizing: border-box}

    /* Set height of body and the document to 100% */
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Style tab links */
    .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 25%;
    }

    .tablink:hover {
        background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
        color: white;
        display: none;
        padding: 100px 20px;
        height: 100%;
    }

    #Home {background-color: grey;}
    #Signup {background-color: grey;}
    #Signin {background-color: grey;}
    #Forgot {background-color: grey;}

    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #f44336;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
    </style>
  </head>
  <body>

    <button class="tablink" onclick="openPage('Home', this, 'grey')">Home</button>
    <button class="tablink" onclick="openPage('Signup', this, 'grey')" id="defaultOpen">Signup</button>
    <button class="tablink" onclick="openPage('Signin', this, 'grey')">Signin</button>
    <button class="tablink" onclick="openPage('Forgot', this, 'grey')">Forgot</button>

    <div id="Home" class="tabcontent">
      <!-- Slide Show -->
      <section>
        <img class="mySlides" src="https://images.wallpaperscraft.com/image/hands_couple_love_124601_1280x720.jpg" style="width:100%">
        <img class="mySlides" src="https://images.wallpaperscraft.com/image/couple_silhouettes_kiss_hugs_119269_1280x720.jpg" style="width:100%">
        <img class="mySlides" src="https://pexels-library.com/images/easy-cupid-drawing/easy-cupid-drawing-23.jpg" style="width:100%">
      </section>
    </div>

    <div id="Signup" class="tabcontent">
      <form action="/action_page.php">
        <div class="imgcontainer">
          <img src="https://www.w3schools.com/w3images/avatar6.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" pattern=".{6,}" title="Six or more characters" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#">Forgot Password?</a></span>
        </div>
      </form> 
    </div>

    <div id="Signin" class="tabcontent">
      <form action="/action_page.php">
        <div class="container">
          <label for="uname"><b>First Name</b></label>
          <input type="text" placeholder="Enter Name" name="uname" required>

          <label for="uname"><b>Last Name</b></label>
          <input type="text" placeholder="Enter Name" name="uname" required>

          <label for="uname"><b>User Name</b></label>
          <input type="text" placeholder="Enter Name" name="uname" pattern=".{6,}" title="Six or more characters" required>

          <label for="uname"><b>Email Address</b></label>
          <input type="text" placeholder="Enter Email" name="uname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters followed by an @ sign, followed by more characters, and then a '.'" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

          <label for="psw"><b>Repeat Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember Me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#">Forgot Password?</a></span>
        </div>
      </form>
    </div>

    <div id="Forgot" class="tabcontent">

      <form action="/action_page.php">
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" pattern=".{6,}" title="Six or more characters" required>

          <label for="uname"><b>Email Address</b></label>
          <input type="text" placeholder="Enter Email" name="uname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="characters followed by an @ sign, followed by more characters, and then a '.'" required>
              
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember Me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#">Forgot Password?</a></span>
        </div>
      </form>
    </div>

    <script>
    function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
    <script>
      // Automatic Slideshow - change image every 3 seconds
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000);
      }
      </script>
     
  </body>
</html>
