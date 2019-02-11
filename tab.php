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

    * {
        padding: 0;
        margin: 0;
    }

    .space {
        width: 100vw;
        height: 100vh;
        background-color: rgb(43, 43, 43);
        position: relative;
    }

    .stars {
        width: 100%;
        height: 100%;
        background: url(http://www.script-tutorials.com/demos/360/images/stars.png);
        animation: shine 1s infinite 0s alternate;
    }

    .earth {
        z-index: 2;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: #0077be;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(10deg);
        overflow: hidden;

        &__shadow {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            position: absolute;
            top: -25px;
            left: -65px;
            background-image: linear-gradient(rgb(230, 230, 230) 15%, #0097f1 15%, #0097f1 85%, rgb(230, 230, 230) 85%);
        }

        &__land {

            &--1 {
                width: 50px;
                height: 20px;
                background-color: aquamarine;
                border-radius: 10px;
                position: absolute;
                left: 0px;
                top: 20px;

                animation: landMotion 10s linear 0s infinite;

            }

            &--2 {
                width: 100px;
                height: 20px;
                background-color: aquamarine;
                border-radius: 10px;
                position: absolute;
                left: 50px;
                top: 90px;
                animation: landMotion 10s linear 0s infinite;

            }

            &--join {
                width: 20px;
                height: 20px;
                background-color: aquamarine;
                position: absolute;
                left: 110px;
                top: 100px;
                animation: landMotion 10s linear 0s infinite;

            }

            &--3 {
                width: 70px;
                height: 20px;
                background-color: aquamarine;
                border-radius: 10px;
                position: absolute;
                left: 100px;
                top: 115px;
                animation: landMotion 10s linear 0s infinite;

            }

            &--4 {
                width: 70px;
                height: 20px;
                background-color: aquamarine;
                border-radius: 10px;
                position: absolute;
                left: 60px;
                top: 50px;
                animation: landMotion 10s linear 0s infinite;

            }

            &--5 {
                width: 60px;
                height: 20px;
                background-color: aquamarine;
                border-radius: 10px;
                position: absolute;
                left: 120px;
                top: 150px;
                animation: landMotion 10s linear 0s infinite;

            }
        }

        &__cloud {

            &--1 {
                z-index: 5;
                width: 50px;
                height: 13px;
                background-color: white;
                position: absolute;
                top: 50px;
                left: 20px;
                border-radius: 15px;
                animation: landMotion 7s linear 0s infinite reverse;

            }

            &--2 {
                z-index: 5;
                width: 30px;
                height: 13px;
                background-color: white;
                position: absolute;
                top: 150px;
                left: 120px;
                border-radius: 15px;
                animation: landMotion 8s linear 0s infinite reverse;

            }

            &--3 {
                z-index: 5;
                width: 45px;
                height: 13px;
                background-color: white;
                position: absolute;
                top: 50%;
                left: 40px;
                border-radius: 15px;
                animation: landMotion 7s linear 0s infinite reverse;

            }
        }
    }

    .moon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: rgb(183, 186, 167) ;
        position: absolute;
        top: 50%;
        left: 50%;
        overflow: hidden;
        animation: moonRotation 5s linear 0s infinite forwards;

        

        &__shadow {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #E6E8D2;
            position: absolute;
            top: -5px;
            left: -17px;
        }

        &__maria {

            &--1 {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                position: absolute;
                top: 5px;
                left: 20px;
                background-color: rgb(203, 206, 182) ;
            }  

            &--2 {
                width: 15px;
                height: 15px;
                border-radius: 50%;
                position: absolute;
                top: 25px;
                left: 35px;
                background-color: rgb(203, 206, 182) ;
            }   

            &--3 {
                width: 18px;
                height: 18px;
                border-radius: 50%;
                position: absolute;
                top: 50px;
                left: 17px;
                background-color: rgb(203, 206, 182);
            }   
        }
    }

    @keyframes moonRotation {
        0% {
            transform: translate(-300px, -50%) rotate(10deg) scale(1);
            z-index: 1;
        }

        25% {
            transform: translate(-40px, -50%) rotate(10deg) scale(.9);
        }

        50% {
            transform: translate(260px, -50%) rotate(10deg) scale(1);
            z-index: 1;
        }

        51% {
            z-index: 6;
        }

        75% {
            transform: translate(-40px, -50%) rotate(10deg) scale(1.15);
        }

        100% {
            transform: translate(-300px, -50%) rotate(10deg) scale(1);
            z-index: 1;
        }
    }

    @keyframes landMotion {
        0% {
            transform: translateX(-200px);
        }

        100% {
            transform: translateX(200px);
        }
    }

    @keyframes shine {
        0% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
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
             <div class="container">
            <div class="space">
                <div class="stars">&nbsp;</div>
                <div class="earth">
                    <div class="earth__shadow">&nbsp;</div>
                    <div class="earth__land--1">&nbsp;</div>
                    <div class="earth__land--2">&nbsp;</div>
                    <div class="earth__land--join">&nbsp;</div>
                    <div class="earth__land--3">&nbsp;</div>
                    <div class="earth__land--4">&nbsp;</div>
                    <div class="earth__land--5">&nbsp;</div>
                    <div class="earth__cloud--1">&nbsp;</div>
                    <div class="earth__cloud--2">&nbsp;</div>
                    <div class="earth__cloud--3">&nbsp;</div>
                </div>
                <div class="moon">
                    <div class="moon__shadow">&nbsp;</div>
                    <div class="moon__maria--1">&nbsp;</div>
                    <div class="moon__maria--2">&nbsp;</div>
                    <div class="moon__maria--3">&nbsp;</div>
                </div>
            </div>
       </div>
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
     
  </body>
</html>
