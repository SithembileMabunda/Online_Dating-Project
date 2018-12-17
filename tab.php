<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
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
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, 'grey')">Home</button>
<button class="tablink" onclick="openPage('Signup', this, 'grey')" id="defaultOpen">Signup</button>
<button class="tablink" onclick="openPage('Signin', this, 'grey')">Signin</button>
<button class="tablink" onclick="openPage('Forgot', this, 'grey')">Forgot</button>

<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="Signup" class="tabcontent">
  <h3>Signup</h3>
  <p>Signing Up!</p> 
</div>

<div id="Signin" class="tabcontent">
  <h3>Signin</h3>
  <p>Signing In!</p>
</div>

<div id="Forgot" class="tabcontent">
  <h3>Forgot</h3>
  <p>Forgotting!</p>
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
