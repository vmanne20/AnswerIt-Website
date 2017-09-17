<!DOCTYPE html>
<html>
<head>
  <title>AnswerIt - <?php echo $_GET["firstname"]; ?> <?php echo $_GET["lastname"]; ?></title>
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
.button
{
 background-color: #E6EBE6;
}
body
{
 color: black;
 background-color:#E6EBE6;
}
h1
{
  text-align: center;
  color:blue; 
  font-family: "Comic Sans";
}
h2
{
  text-align: center;
  color:blue; 
  font-family: "Comic Sans";
  border-bottom: 1px solid black;
}
h3
{
 text-align: left;
 color: black;
 font-size: 150%;
}
h4
{
 text-align: center;
 color: black;
 font-size: 120%;
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
p.hid1
{
 display: none;
}
p.hid2
{
 display: none;
}
p.hid3
{
 display: none;
}
.floating-box {
  display: inline-block;
  background-color:white;
  width: 968px;
  margin: 10px;
  border: 3px solid #8AC007;  
  text-align: center;
  padding: 20px;
}
div.scroll
{
 overflow-y: auto;
 width: 80%;
 height: 700px;
}
div.qastatus
{
 display:none;
 overflow-y: auto;
 width: 80%;
 height: 700px;
}
div.edit
{
 display:none;
 overflow-y: auto;
 width: 80%;
 height: 700px;
}
div.behind
{
 float:left;
 background-color:white;
 width:20%;
 height: 700px;
 border: 3px solid #8AC007;
}
div.nav
{
 border: 3px solid #8AC007;  
 float: left;
 position: absolute;
 background-color: white;
 color: black;
 width: 20%;
 height: 875px;
 text-align: center;
 z-index: 0;
}
#nav2
{
 display:none;
}
div.left
{
 background-color:white;
 display: inline-block;
 float: left;
 width: 615px;
 margin: 10px;
 border: 3px solid #8AC007;  
 text-align: left;
 padding: 20px;
}
div.right
{
 background-color:#E6EBE6;
 display: inline-block;
 float: right;
 width:80%;
 text-align: left;
 padding: 20px;
}
div.container
{
 background-color: black;
 text-align: center;
 padding:5px;
 width: 100%;
 z-index: 5;
}
div.top
{
 background-color: black;
 text-align: center;
 padding:5px;

}
footer
{
  background-color:black;
  color:white;
  clear:both;
  text-align:center;
  padding:20px;	 	 
}
.sticky 
{
  position: fixed;
  width: 100%;
  left: 0;
  top: 0;
  z-index: 100;
  border-top: 0;
}
#scroll
{
  -webkit-transition: all 0.5s ease;
}
</style>

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
})
</script>

<script>
$(document).ready(function() {
  var stickyNavTop = $('.nav').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $('.nav').addClass('sticky');
    } else {
      $('.nav').removeClass('sticky'); 
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
});
</script>

<script>
$(document).ready(function(){

  $("#math").click(function(){
    $("#hid1").show();
    $("#hid2").hide();
    $("#hid3").hide();
  });
  $("#science").click(function(){
    $("#hid1").hide();
    $("#hid2").show();
    $("#hid3").hide();
  });
  $("#history").click(function(){
    $("#hid1").hide();
    $("#hid2").hide();
    $("#hid3").show();
  });

  $("#ans").click(function(){
    $("#scroll").show();
    $("#qastatus").hide();
    $("#edit").hide();
  });
  $("#qd").click(function(){
    $("#scroll").hide();
    $("#qastatus").show();
    $("#edit").hide();
  });
  $("#editinfo").click(function(){
    $("#scroll").hide();
    $("#qastatus").hide();
    $("#edit").show();
  });

});
</script>

<script type="text/javascript">
$(document).ready(function() {
 $('#top').localScroll({duration:800});
});
</script>



<script>
function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
    minutes = parseInt(timer / 60, 10)
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + ":" + seconds;

    if (--timer < 0) {
      timer = duration;
    }
  }, 1000);
}

window.onload = function () {
  var fiveMinutes = 60 * 5,
  display = document.querySelector('#time');
  startTimer(fiveMinutes, display);
};
</script>


</head>


<div name="home" id="header">
  <h1>
    <img src="answerit.jpg" alt="Mountain View" style="width:250px;height:150px;"></h1><br>

  </div>

  <div id="nav1" class="container">
    <div class="btn-group btn-group-justified">
      <a id="ans" href="#sl" class="btn btn-primary btn-lg" > Answer A Question</a>
      <a id="qd" href="#intro" class="btn btn-primary btn-lg" > Question Database </a>
      <a id="editinfo" href="#mission" class="btn btn-primary btn-lg" > Edit Personal Info </a>
      <a id="log" href="index.php" class="btn btn-primary btn-lg" > Log Out </a>

    </div> 
  </div>

<!-- <div id="top" class="container">
<div class="btn-group btn-group-justified">
<a href="#home" class="btn btn-info" ><span class="glyphicon glyphicon-home"></span>  Home</a>
<a href="#sub" class="btn btn-info" > Subject/Topic</a>
<a href="#que" class="btn btn-info" > Question Box </a>
<a href="#key" class="btn btn-info" > Key Variables </a>
<a href="#add" class="btn btn-info" > Additional Info </a>

 </div> 
</div> -->


<aside>
  <div class="nav"><br>
    <h2>WELCOME, <br><span style="color:green"> 
     <?php
     $cookie_name = "name";
     if(isset($_COOKIE[$cookie_name]))
       echo $_COOKIE[$cookie_name] . "!";
     ?>
   </span></h2>
   <div class="btn-group btn-group-justified">
    <div class="btn-group">
      <button type="button" class="btn btn-info btn-large" data-toggle="collapse" data-target="#c1">Stats</button>
      <br>
      <div id="c1" class="collapse">
        Panel Content
      </div>
      <br>
    </div>
  </div>

  <div class="btn-group btn-group-justified">
   <div class="btn-group">
    <button type="button" class="btn btn-info btn-large" data-toggle="collapse" data-target="#c2">History</button>
    <br>
    <div id="c2" class="collapse">
      Panel Content
    </div>
    <br>
  </div>
</div>

<div class="btn-group btn-group-justified">
  <div class="btn-group">
    <button type="button" class="btn btn-info btn-large" data-toggle="collapse" data-target="#c3">Personal Info</button>
    <br>
    <div id="c3" class="collapse">
      Panel Content
    </div>
  </div>
</div>

</aside>


<div class = "behind">
</div>




<div class="top" id="top">
  <div  name="sub" class = "scroll" id="scroll">

   <div class = "floating-box">
    <h1> Answer Box </h1><br>
    <p> Hello! Please enter your answer in the text area below. Please show all steps taken to arrive at the answer so as to give the student his/her best chance to understand the solution. 
      <br></p> 
      <form role="form">
        <div class="form-group">
          <label for="comment">Question:</label>
          <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
      </form>
    </div>
    <div class = "floating-box">
      <h1> Key Variables </h1><br>
      <p> In this box, please define any variables that may be required to solve the problem. 
        <br></p> 
        <form role="form">
          <div class="form-group">
            <label for="comment">Variables:</label>     
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
        </form>
      </div>
      <div class = "floating-box">
        <h1> Additional Information </h1><br>
        <p> In this box, please provide any additional information that may be required to solve the problem. 
          <br></p> 
          <form role="form">
            <div class="form-group">
              <label for="comment">Additional Information:</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
$server_name = "68.178.217.40";
$db_username = "answeritdevl";
$db_password = "Compsci@123";
$db_name = "answeritdevl";
$category = $_POST["subject"];
$var = mysqli_query($con, "SELECT * FROM `question` WHERE scid='".$category."';");

if(mysqli_connect_errno())
{
  die("Failed to connect to answerit database: " . mysqli_connect_error());
}

while ($row = mysql_fetch_assoc($var)) 
{
  echo $row['qname'];
  echo $row['qbox'];
  echo $row['keyvars'];
  echo $row['addinfo'];
  echo $row['work'];
}
?>


</div>

<div class="top" id="top">
  <div class="edit" id="edit">
    <div class = "floating-box">
      <h1> Edit your personal info. </h1>
      <form role="form">
       <div class="form-group">
        <label for="usr">First Name:</label>
        <input type="text" class="form-control" id="usr" placeholder="<?php echo $_GET["firstname"]; ?>" name="firstname">
      </div>
      <div class="form-group">
        <label for="usr">Last Name:</label>
        <input type="text" class="form-control" id="usr" placeholder="<?php echo $_GET["lastname"]; ?>" name="lastname">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter new phone number" name="phone">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="pwd" placeholder="Enter new email address" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter new password" name="password">
      </div>
      <button type="submit" class="btn btn-default">Edit Info</button>
    </form>
  </div>
</div>
</div>
<footer>
  Copyright @ teckmind.com/vamsi <br>
  Created by CompSciPrep &copy;
</footer>
</body>
</html>