<!DOCTYPE html>
<html>
  <head>
    <title>
      Matcha
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
      margin: 0 auto;
      max-width: 800px;
      padding: 0 20px;
    }

    .container {
      border: 2px solid #dedede;
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 10px;
      margin: 10px 0;
    }

    .darker {
      border-color: #ccc;
      background-color: #ddd;
    }

    .container::after {
      content: "";
      clear: both;
      display: table;
    }

    .container img {
      float: left;
      max-width: 60px;
      width: 100%;
      margin-right: 20px;
      border-radius: 50%;
    }

    .container img.right {
      float: right;
      margin-left: 20px;
      margin-right:0;
    }

    .time-right {
      float: right;
      color: #aaa;
    }

    .time-left {
      float: left;
      color: #999;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #f44336;
      color: white;
    }
    </style>
  </head>
  <body>

    <h2>Chat Messages</h2>

    <div class="topnav">
      <a class="active" href="chat.php">Chat</a>
      <a href="wall.html">Home</a>
      <a href="chats.html">Chats</a>
      <a href="#contact">Profile</a>
      <a href="#about">Signout</a>
    </div>

    <div class="container">
      <img src="profile.jpeg" alt="Avatar" style="width:100%;">
      <p align="right">Sithembile</p>
      <p align="right">Hello. How are you today?</p>
      <span class="time-right">11:00</span>
    </div>

    <div class="container darker">
      <img src="user.jpeg" alt="Avatar" class="right" style="width:100%;">
      <p>Mabunda</p>
      <p>Hey! I'm fine. Thanks for asking!</p>
      <span class="time-left">11:01</span>
    </div>

    <div class="container">
      <img src="profile.jpeg" alt="Avatar" style="width:100%;">
      <p align="right">Sithembile</p>
      <p align="right">Sweet! So, what do you wanna do today?</p>
      <span class="time-right">11:02</span>
    </div>

    <div class="container darker">
      <img src="profile.jpeg" alt="Avatar" style="width:100%;">
      <p align="right">Sithembile</p>
      <p align="right">Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
      <span class="time-left">11:05</span>
    </div>

  </body>
</html>