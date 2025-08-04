<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ApnaBCA</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="favicon.ico">
 <!--style cdn -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- cdn animation  -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
  <!-- cdn JQUARY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
</head>
<body >
  <header>
    <div class="navbar">
      <div class="logo">ApnaBCA</div>
      <nav>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Notes</a></li>
          <!-- <li><a href="#">Portfolios</a></li> -->
   
          
        </ul>
      </nav>
      <!-- User login/logout section -->
      <div class="user-login">
      <img src="Logo (2).png" id="Photo" alt="User Image"  class="user-image" onclick="loginkro()">
      <!-- &nbsp;&nbsp;<button >Login/Signup</button> -->
      </div>
    </div>
  </header>

  <main>
    <section class="hero">
      <h2>Hey👋</h2><h2 id="username"> </h2>
      <h1>Welcome to the ApnaBCA </h1>
      <p>A single page  space</p>
      <p>For accessing BCA all semester notes !</p>
    </section>



 <!-- whatsapp Popup -->
 <div class="popup " id="popup">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-logo">
    <div class="message"><h3>For Lab Assignment Help ?</h3>
    <h3>1.Word, Excel</h3>
    <h3>2.C language</h3>
    <h3>3.Webtechnology</h3>
    <h3>4.DSA using C++</h3>
    <h3>5.DBMS</h3>
    <h3>6.PHP </h3> 
  </div>
    <a href="https://wa.me/919155726625?text=Hey%2C%20can%20you%20Please%20share%20the%20Assignment" target="_blank"><button class="btn">Chat Now</button></a>
    <button onclick="closePopup()" class="btn" style="background-color: rgb(227, 86, 86);">Close   </button>
  </div>

    <!--..................................................................................... signup-box -->
    <div class="signup-box animate__animated animate__fadeInDownBig" id="sbox">
        <h2>Register</h2>
        <form>
          <input type="text" name="Fullname" placeholder="Full Name" id="name" required >
         
          <input type="email" name="Email" placeholder="Email" id="uemail" required > 
          <!-- <p id="alter">Already registred!</p> -->
          <input type="password" name="Password" placeholder="Password" id="upass" required >
          <!-- Photo📩<input type="file" name="Pfile" id="DP" onchange="check(this)" alt="Profilepicture"> -->
          <input type="submit" value="Register" id="signup">
        </form>
        <p>Already have an account? <a  onclick="loginOpen()">Login</a></p>
        <script>
  $(document).ready(function () {
    $("#signup").click(function (e) {
      e.preventDefault(); // Prevent default form submission if any

      var email = $("#uemail").val().trim();
      var pass = $("#upass").val().trim();
      var name= $("#name").val().trim();

      if (email === "" || pass === "") {
        alert("All filled is required.");
        return;
      }

      $.ajax({
        type: "POST",
        url: "signup.php",
        data: {
          Fullname:name,
          Email: email,
          Password: pass
        },
        success: function (response) {
          $("#username").html(response);
          $("#sbox").attr("style", "display: none;");
        },
      });
    });
  });
</script>

<!--........................................................................................lOGIN  -->
           <div class="Login-box animate__animated animate__fadeInLeft">
          <h2>Login</h2>
          <form  method="POST">
            <input type="email" name="Email" placeholder="Email" id="luemail" required >
            <input type="password" name="Password" placeholder="Password" id="lupass" required >
            <input type="submit" value="Login" id="login">
          </form>
         

<script>
  $(document).ready(function () {
    $("#login").click(function (e) {
      e.preventDefault(); // Prevent default form submission if any
      var email = $("#luemail").val().trim();
      var pass = $("#lupass").val().trim();
      $.ajax({
        type: "POST",
        url: "login.php",
        data: {
          Email: email,
          Password: pass
        },
        success: function (response) {
          $("#username").html(response);
          $("#sbox").attr("style", "display: none;");
          $("a").attr("onclick", "return true;");

        },
      });
    });
  });
</script>


          <p>Don't have account? <a  onclick="signupOpen()">Register</a></p>
        </div>
      
      </div>

    <section class="semesters content" id="mainContent">
      <h2>Semester-wise Resources</h2>
      <div class="cards">
        <div class="card">
          <h3>Semester 1</h3>
          <a href="https://drive.google.com/drive/folders/1PpWMQbQbMDLd-TCc2tjrbU6Z0LuG42ZN?usp=drive_link" id="S1" onclick="return false;">View Resources</a>
        </div>
        <div class="card">
          <h3>Semester 2</h3>
          <a href="https://drive.google.com/drive/folders/1prubTcPTqHe5bnJDNbhGcHgkOMbjHLMI?usp=drive_link" onclick="return false;">View Resources</a>
        </div>
        <div class="card">
          <h3>Semester 3</h3>
          <a href="https://drive.google.com/drive/folders/1KqPv-nkDtKQPwpMYIXA8xdgvqrMh87sS?usp=drive_link" onclick="return false;">View Resources</a>
        </div>
        <div class="card">
          <h3>Semester 4</h3>
          <a href="https://drive.google.com/drive/folders/1iE6KOuO3NwDHr2LbNTvP-78U0D5uMAX9?usp=drive_link" onclick="return false;">View Resources</a>
        </div>
        <div class="card">
          <h3>Semester 5</h3>
          <a href="https://drive.google.com/drive/folders/1ugec7EDBq8yYk3Lp-r1dP7qlm2Yp_TDA?usp=drive_link" onclick="return false;">View Resources</a>
        </div>
        <div class="card">
          <h3>Semester 6</h3>
          <a href="https://drive.google.com/drive/folders/1Zaibhx7T01daIkhvOzTZ0t2vw0XzbyR_?usp=drive_link" onclick="return false;">View Resources</a>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2025 ApnaBCA. All rights reserved.</p>
  </footer>
 <script src="script.js"></script>
</body>
</html>
