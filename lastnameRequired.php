<!DOCTYPE html>
<html>
<head>
  <title>AnswerIt - Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js"></script>
  <script src="//cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>
  <script type="text/javascript">

</script><iframe src="http://tpc.googlesyndication.com/safeframe/1-0-2/html/container.html" style="visibility: hidden; display: none;"></iframe>

<style>
table, th, td {
  border: 5px solid white;
  border-collapse: collapse;
  background-color:gainsboro;
}
body
{
  color: black;
  background-color:#E6F0E6;
}
h1
{
  text-align: center;
  color:blue; 
  font-family: "Times New Roman";
}

p    
{ 
  color:black;
}
#header
{
  background-color:#33CC33;
  color:white;
  text-align:center;
  padding:2px;
}
#intro
{
  display: hidden;
}
.floating-box {
  display: inline-block;
  background-color:white;
  width: 100%;
  margin: 10px;
  border: 2px solid #8AC007;  
  text-align: center;
  padding: 20px;
}
div.left
{
  background-color:white;
  display: inline-block;
  float: left;
  width: 605px;
  height: 1000px;
  margin: 10px;
  border: 2px solid #8AC007;  
  text-align: left;
  padding: 20px;
}
div.right
{
  background-color:white;
  float: right;
  display: inline-block;
  margin: 10px;
  border: 2px solid #8AC007;  
  text-align: left;
  width: 605px;
  height: 1000px;
  padding: 20px;
}
div.container
{
  background-color: black;
  text-align: center;
  padding:5px;
  width: 100%;
}
div.background
{
  background-color:black;
}
footer
{
  background-color:black;
  color:white;
  clear:both;
  text-align:center;
  padding:20px;	 	 
}
.sticky {
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
  z-index: 100;
  border-top: 0;
}
#nav
{
  -webkit-transition: all 0.5s ease;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
  $('#nav').localScroll({duration:800});
});
</script>

<script>
$(document).ready(function() {
  var stickyNavTop = $('.container').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $('.container').addClass('sticky');
    } else {
      $('.container').removeClass('sticky'); 
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
});
</script>




</head>

<div name="home" id="header">
  <h1>
    <img src="answerit.jpg" alt="Mountain View" style="width:250px;height:150px;"></h1><br>

  </div>

  <div id="nav" class="container">
    <div class="btn-group btn-group-justified">
      <a href="#home" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-home"></span> Home </a>
      <a href="#sl" class="btn btn-primary btn-lg" > Sign Up / Log In </a>
      <a href="#intro" class="btn btn-primary btn-lg" > Intro </a>
      <a href="#mission" class="btn btn-primary btn-lg" > Mission </a>
      <a href="#future" class="btn btn-primary btn-lg" > Future </a>

    </div> 
  </div>

  <div class="background" id="background"> 
    <aside>
      <div name="sl" class="left">
        <h1>Get answers to your questions by signing up now.</h1>
        <h1><img id="pot" src="http://cinemaperaestudiants.cat/activitats/Activitats2011/thesocialnetwork/Connected_World_Foto.63154832_std.jpg">
        </h1>
        <form role="form" action="addCustomer.php" method="post">
          <div class="form-group">
            <label for="usr">First Name:</label>
            <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="firstname">
          </div>
          <div class="form-group">
            <label for="usr">Last Name:</label>
            <span style="color:red; text-align:right"> * Last name is required. </span>
            <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lastname">
          </div>
          <div class="form-group">
            <label for="pwd">Phone Number:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
          </div>
          <div class="form-group">
            <label for="email">Email (This will be your username):</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
          </div>
          <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" id="checkpwd" placeholder="Re-enter password" name="checkpwd">
          </div>
          <input type="radio" name="customer" value="1"> Asker
          <input type="radio" name="customer" value="2"> Tutor
          <br><br>
          <button type="submit" class="btn btn-default">Sign Up</button>
        </form>
      </div>
    </aside>


    <aside>
      <div class = "right">
        <h1 style="color:red; font-size:25px; text-align:center"> Your password did not match the one for the username. </h1>
        <h1> Already have an account?<br> Log in. </h1>
        <h1>
          <img id="pot" src="http://freemytv.ca/wp-content/uploads/2015/01/qa.jpg"></h1>
          <form role="form" action="login.php" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password: <a href="forgotpass.php"> Forgot Password? </a></label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">     
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Log In</button>
          </form>
        </div>
      </aside>


      <div class = "intro">
        <div name="intro" class = "floating-box">
          <h1> What Is AnswerIt? </h1><br>
          <p> AnswerIt is an exclusive website that provides its members the opportunity to ask questions that you need help with on any subject. Our special group of "answerers" will quickly help you with the problem with detailed and comprehensible solutions as well as explanations. Hurry and sign up today to get the answers to your questions in a timely fashion.
            <br></p>
          </div>



          <div name="mission" class = "floating-box">
            <h1> Our Mission </h1><br>

            <p> When we started this website, we set out with a goal to facilitate the educational experience that students go through every day. As students ourselves, we have suffered through the pain of not getting help when we needed it or not knowing the answers to the questions coming out from our curious minds. No worries, because we are here to help you succeed. 
              <br></p> 
            </div>


            <div name="future" class = "floating-box">
              <h1> Future </h1><br>
              <p> 
                <br></p> 
              </div>
            </div>

            <footer>
              Copyright @ teckmind.com <br>
              Created by CompSciPrep &copy;
            </footer>


          </body>
          </html>