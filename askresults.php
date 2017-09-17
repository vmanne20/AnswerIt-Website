<!DOCTYPE html>
<html>
<head>
  <title>AnswerIt - <?php echo $_POSt["firstname"]; ?> <?php echo $_POST["lastname"]; ?></title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.0/jquery.scrollTo.min.js"></script>
 <script src="//cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>
 <script type="text/javascript"> -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
 </script><iframe src="http://tpc.googlesyndication.com/safeframe/1-0-2/html/container.html" style="visibility: hidden; display: none;"></iframe>

 <style>
 table, th, td 
 {
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
div.collapse
{
 border: 3px solid #8AC007; 
 padding: 20px;
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
#collapse1
{
 display:none;
}
#collapse2
{
 display:none;
}
#collapse3
{
 display:none;
}
#collapse4
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
ul.nav-pills {
  top: 20px;
  position: fixed;
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

  $("#ask").click(function(){
    $("#scroll").show();
    $("#qastatus").hide();
    $("#edit").hide();
  });
  $("#status").click(function(){
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
      <a id="ask" href="#sl" class="btn btn-primary btn-lg" > Ask A Question</a>
      <a id="status" href="#intro" class="btn btn-primary btn-lg" > Q/A Status </a>
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
</div>
</aside>

<div class = "behind">
</div>




<div  name="sub" class = "scroll" id="scroll">
  <form role="form" action="submit.php" method="post">
    <div class="top" id="top">


      <div class = "floating-box">

        <h1> Subject/Topic </h1>
        <p> Choose the subject of the question and enter the topic/lesson/chapter it falls under. </p>
      </p>
      <button id="math" name="math" type="button" class="btn btn-primary">Math</button>
      <button id="science" name="science" type="button" class="btn btn-primary">Science</button>
      <button id="history" name="history" type="button" class="btn btn-primary">History/Govt</button>
    </p>
    <br>

      
    <p id="hid1" class="hid1">
      <input type="radio" name="subject" value="1">Elementary Math</button>
      <input type="radio" name="subject" value="2">Pre-Algebra</button>
      <input type="radio" name="subject" value="3">Algebra I</button>
      <input type="radio" name="subject" value="4">Geometry</button>
      <input type="radio" name="subject" value="5">Algebra II</button>
      <input type="radio" name="subject" value="6">Precalculus</button>
      <input type="radio" name="subject" value="7">Calculus AB/BC</button>
      <input type="radio" name="subject" value="8">Statistics</button>
      </p>

      <p id="hid2" class="hid2">
       <input type="radio" name="subject" value="9">Biology</button>
        <input type="radio" name="subject" value="10">Chemistry</button>
       <input type="radio" name="subject" value="11">Physics</button>
        <input type="radio" name="subject" value="12">Geosystems</button>
      </p>

      <p id="hid3" class="hid3">
        <input type="radio" name="subject" value="13">U.S. History</button>
        <input type="radio" name="subject" value="14">World History</button>
        <input type="radio" name="subject" value="15">Government</button>
      </p>



      <h1> Question Name </h1><br>
      <p> Please give a maximum of 5 words question name for your question. For example a question about ratios would have the name "Ratios". 
        <br></p> 
        
          <div class="form-group">
            <label for="comment">Question Name:</label>
            <textarea type="text" name="qname" class="form-control" rows="1" cols="100" id="qname"></textarea>
          </div>
 

        <h1> Question Box </h1><br>
        <p> Hello! Please enter your question in the text area below. We will do our best to get to our tutors and get back to you with an easy to understand answer as soon as possible. 
          <br></p> 
          
            <div class="form-group">
              <label for="comment">Question:</label>
              <textarea type="text" name="qbox" class="form-control" rows="5" cols="100" id="qbox"></textarea>
            </div>
       


          <h1> Key Variables </h1><br>
          <p>In this box, please define any variables that may be required to solve the problem. 
            <br></p> 
       
              <div class="form-group">
                <label for="comment">Variables:</label>
                <textarea type="text" name="keyvars" class="form-control" rows="5" cols="100" id="keyvars"></textarea>
              </div>
    


            <h1> Work Already Done </h1>
            <p> Enter all the work that you have done or the steps you have completed so far if it is a math or science problem? </p>
   
              <div class="form-group">
                <label for="comment">Enter Work Already Done:</label>
                <textarea type="text" name="work" class="form-control" rows="5" cols="100" id="work"></textarea>
              </div>  
   


            <h1> Additional Information </h1><br>
            <p> In this box, please provide any additional information that may be required to solve the problem. 
              <br></p> 

                <div class="form-group">
                  <label for="comment">Additional Information:</label>
                  <textarea type="text" name="addinfo" class="form-control" rows="5" cols="100" id="addinfo"></textarea>
                </div>  
        



              <h1> Set a time window. </h1>
              <div class="form-group">
                <label for="sel1">Select number of day(s):</label>
                <select class="form-control" id="sel1" name="days">
                 <option>0</option>
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>5</option>  
               </select>
             </div>
             <div class="form-group">
              <label for="sel1">Select number of hour(s):</label>
              <select class="form-control" id="sel1" name="hours">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>    
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
              </select>
            </div>
            <div class="form-group">
              <label for="sel1">Select number of minute(s):</label>
              <select class="form-control" id="sel1" name="minutes">
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>    
                <option>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
                <option>32</option>
                <option>33</option>
                <option>34</option>
                <option>35</option>
                <option>36</option>
                <option>37</option>
                <option>38</option>
                <option>39</option>
                <option>40</option>
                <option>41</option>
                <option>42</option>
                <option>43</option>
                <option>44</option>
                <option>45</option>
                <option>46</option>
                <option>47</option>
                <option>48</option>
                <option>49</option>
                <option>50</option>
                <option>51</option>
                <option>52</option>
                <option>53</option>
                <option>54</option>
                <option>55</option>
                <option>56</option>
                <option>57</option>
                <option>58</option>
                <option>59</option>
                <option>60</option>
              </select>
            </div>     

            <button type="submit" class="btn btn-info"> Submit Question </button>

          </div>
        </div>
      </div>
    </form>


    <div class="top" id="top">
      <div class="qastatus" id="qastatus">

        <div class = "floating-box">
          <h1> Status of Posted Questions </h1>
          <p> <?php
          putenv('TZ=America/New_York');
          echo date("Y-m-d h:i:sa", time());
          ?> </p>
          <p>Registration closes in <span id="time">05:00</span> minutes!</p>
          <form role="form" action="askresults.php" method="post">
          <button type="submit" class="btn btn-primary"> See Questions </button><br>
          </form>
         
             <?php
$server_name = "68.178.217.40";
$db_username = "answeritdevl";
$db_password = "Compsci@123";
$db_name = "answeritdevl";
$con = mysqli_connect($server_name, $db_username, $db_password, $db_name);
$query = "SELECT * FROM question";
$result = mysqli_query($con, $query) or die('error');
$rows = mysqli_fetch_assoc($result);
echo "<table>";
echo "<tr><th> Subject </th><th> Topic </th><th> Question </th></tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
 $subject = $row['scid'];
 $qName = $row['qname'];
 $qBox = $row['qbox'];
 $keyVars = $row['keyvars'];
 $addInfo = $row['addinfo'];
 $work = $row['work'];
 echo "<tr><td>";
/* if($subject = '1')
  echo 'Elementary Math';
 else if($subject = '2')
  echo 'Pre-Algebra';
 else if($subject = '3')
  echo 'Algebra I';
 else if($subject = '4')
  echo 'Geometry';
  else if($subject = '5')
  echo 'Algebra II';
  else if($subject = '6')
  echo 'Precalculus';
  else if($subject = '7')
  echo 'Calculus AB/BC';
  else if($subject = '8')
  echo 'Statistics';
  else if($subject = '9')
  echo 'Biology';
  else if($subject = '10')
  echo 'Chemistry';
  else if($subject = '11')
  echo 'Physics';
  else if($subject = '12')
  echo 'Geosystems';
  else if($subject = '13')
  echo 'U.S. History';
  else if($subject = '14')
  echo 'World History';
  else if($subject = '15')
  echo 'Government'; */
  echo $subject;
 echo "</td><td>";
  echo $qName;
 echo "</td><td>";
  echo $qBox;
 echo "</td></tr>";
  
}

echo "</table>";
?> 
       
        </div>
      </div>
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
