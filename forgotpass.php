<!DOCTYPE html>
<html>
<head>
<title>AnswerIt - Find Account</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js"></script>
 <script src="//cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>
 <script type="text/javascript">
$(document).ready(function() {
   $('#intro').localScroll({duration:800});
});
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
h1.uppercase
{
 text-transform: uppercase;
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
    width: 1255px;
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
 height: 753px;
 padding: 20px;
}
div.container
{
 background-color: black;
 text-align: center;
 padding:5px;
 width: 100%;
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
<div class="btn-group">
<a href="index.php" class="btn btn-primary btn-lg"> <span class="glyphicon glyphicon-home"></span> Home </a>
 </div> 
   </div>
 </div>
</div>

<div class="floating-box">
<h1> Find your account </h1>
<form role="form" action="confirmcode.php" method="get">
<div class="form-group">
      <label for="email">Email:</label>
      <span class="glyphicon glyphicon-envelope"></span> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
     <button type="submit" class="btn btn-default">Search</button>
</form>
</div>

<footer>
Copyright @ teckmind.com <br>
Created by CompSciPrep &copy;
</footer>


</body>
</html>