
<?php include("session.php");
 


  //$_SESSION['answer1']  = $_POST['answer1'] ;

  //$db = mysqli_connect('localhost', 'phpmyadmin' , 'some_pass' , 'audit_course');

  //$query  = "UPDATE user_respnse SET q1 = '$a1' WHERE username = '$u'";
    //     mysqli_query($db, $query);

// UPDATE Customers
//SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
//WHERE CustomerID = 1;


?>


<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Critical Thinking</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  body{
    /*background-image: url("img/download9.jpg");*/
    margin-left:5%;
    margin-right:5%;
    background-color:#333333;
  }
  
  .header {
    text-align: center;
    background-color:#000000;
    color: #ffffff;
  
  

   
}

  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #ffffff;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

button{
  border: none;
    color: white;
    float:left;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0%;

}

img{
  /*object-fit: cover;*/
  outline :none;
  border:none;
}

#btn1{
  width:19%; height:26%;color:#000000; 
  background-image: url("img/img11.png");
  background-size:100%;

}
</style>
  </head>

<body>
  <form action="question2.php" method="post" >
  <div class="header">
  <h1>CRITICAL THINKING</h1>
  
  
</div>

<h3 class="timeline-header no-border"><a href="#"><?php echo $_SESSION["username"] ;?></a></h3>

<div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> Topics</h3>
        </div>
        <div class="box-body">
          <div class="row">

<!-- ---------------------------------button1---------------------------------------------------------------- -->
            <div class="col-sm-4 col-md-2 col-md-offset-1">
              <div>
         <div id="myBtn1" style="width:100%; height:25%;color:#000000;background-image: url('img/img11.png');background-size:100%; " onclick="show_mod1()" ></div>
               </div>
<!-- The Modal -->
<div id="myModal1" class="modal">
        <!-- Modal content -->
       <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p> What would you choose?
</p>
        
        
  <input type="radio" name="answer1" value="A" onclick="handler()"> Toss a coin. If it comes up heads you win $100, and if it comes up tails you win nothing. 

<br>
  <input type="radio" name="answer1" value="B" onclick="handler()"> Get $46 for sure.
<br>
  

               </div>
               
            </div>
          </div>
              
            </div>

<!--------------------------------------------button2--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn2" style=" width:100%; height:25%;background-image: url('img/img12.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal2" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p>What would you choose?</p>
        
        
  <input type="radio" name="answer2" value="A" onclick="handler()">  Accept a gamble that offers a 10%
chance to win $95 and a 90% chance to lose $5?
<br>
  <input type="radio" name="answer2" value="B" onclick="handler()"> Pay $5 to participate in a lottery that
offers a 10% chance to win $100 and a 90% chance to win
nothing?
<br>


               </div>
               
            </div>

</div>
            </div>
<!--------------------------------------------button3--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn3" style=" width:100%; height:25%;background-image: url('img/img13.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal3" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body" text-align="center" style=" margin-bottom:-3%">Which of the following teapots has more capacity?<br>
                <img style="width:60%; height:40%;" src="img/q13.png"><br>
        
        
  <input type="radio" name="answer3" value="A" onclick="handler()"> A<br>
  <input type="radio" name="answer3" value="B" onclick="handler()"> B<br>


               </div>
               
            </div>

</div>
            </div>
<!--------------------------------------------button4--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn4" style=" width:100%; height:25%;background-image: url('img/img14.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal4" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p>Which of the following scenarios would you choose?</p>
        
        
  <input type="radio" name="answer4" value="A" onclick="handler()"> you have decided to see a play
and paid the admission price of $10 per ticket. As you enter the
theater, you discover that you have lost the ticket. The seat was
not marked, and the ticket cannot be recovered. Would you pay $10 for another ticket?
<br>
  <input type="radio" name="answer4" value="B" onclick="handler()"> you have decided to see a play where admission is $10 per ticket. As you enter the theater, you
discover that you have lost a $10 bill. Would you still pay $10 for a ticket for the play?
<br>


               </div>
               
            </div>

</div>
            </div>
<!------------------------------ button5 ----------------------------------------------------------------------------->
  <!--------------------------------------------button3--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn5" style=" width:100%; height:25%;background-image: url('img/img15.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal5" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p>You are offered a gamble on the toss of a coin.<br>
If the coin shows tails, you lose $100.<br>
If the coin shows heads, you win $150.<br>
Is this gamble attractive? Would you accept it?
</p>
        
        
  <input type="radio" name="answer5" value="A" onclick="handler()"> Yes<br>
  <input type="radio" name="answer5" value="B" onclick="handler()"> No<br>


               </div>
               
            </div>

</div>
            </div>
          </div>
        </div>
<!--------------------------------------------button6--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="row">
            <div class="col-sm-4 col-md-2 col-md-offset-1">
            <div id="myBtn6" style=" width:100%; height:25%;background-image: url('img/img16.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal6" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p>Who of the two will experience greater regret over the episode? <br><br>

Mr. Brown almost never picks up hitchhikers. Yesterday he gave a man a ride and was robbed.<br>
Mr. Smith frequently picks up hitchhikers. Yesterday he gave a man a ride and was robbed.</p>
        
        
  <input type="radio" name="answer6" value="A" onclick="handler()">Mr. Brown
<br>
  <input type="radio" name="answer6" value="B" onclick="handler()"> Mr. Smith<br>


               </div>
               
            </div>

</div>
            </div>    

<!--------------------------------------------button7--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn7" style=" width:100%; height:25%;background-image: url('img/img17.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal7" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p>You see a person reading The New York Times on the New York subway. Which of
the following is a better bet about the reading stranger?
</p>
        
        
  <input type="radio" name="answer7" value="A" onclick="handler()">She has a PhD<br>
  <input type="radio" name="answer7" value="B" onclick="handler()"> She does not have a college degree.
<br>


               </div>
               
            </div>

</div>
            </div> 
<!--------------------------------------------button8-------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn8" style=" width:100%; height:25%;background-image: url('img/img18.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal8" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p> A hardware store has been selling snow shovels for $15. The morning after a large snowstorm, the store raises the price to $20.<br>Please rate this action as:

</p>
        
        
  <input type="radio" name="answer8" value="A" onclick="handler()"> Completely Fair and acceptable<br>
  <input type="radio" name="answer8" value="B" onclick="handler()"> Unfair
<br>


               </div>
               
            </div>

</div>
            </div> 
<!--------------------------------------------button9--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn9" style=" width:100%; height:25%;background-image: url('img/img19.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal9" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p>Linda is thirty-one years old, single, outspoken, and very bright. She majored in philosophy. As a student, she was deeply concerned with issues of discrimination and social justice, and also participated in anti-nuclear demonstrations.
<br>Which alternative is more probable?
</p>
        
        
  <input type="radio" name="answer9" value="A" onclick="handler()">Linda is a bank teller.<br>
  <input type="radio" name="answer9" value="B" onclick="handler()">Linda is a bank teller and is active in the feminist movement.
<br>


               </div>
               
            </div>

</div>
            </div>   

<!--------------------------------------------button10--------------------------------------------------------------- -->
            <!-- /.col -->
            <div class="col-sm-4 col-md-2">
            <div id="myBtn10" style=" width:100%; height:25%;background-image: url('img/img20.png');background-size:100%;  "></div>
<!-- The Modal -->

<div id="myModal10" class="modal">

  <!-- Modal content -->"
  <div class="modal-content">
        <div class="modal-header">
                
                <h4 class="modal-title">Question</h4>
                </div>
               <div class="modal-body">
                <p>Which alternative you can confidently answer?
</p>
        
        
  <input type="radio" name="answer10" value="A" onclick="handler()">Are you a good driver?
<br>
  <input type="radio" name="answer10" value="B" onclick="handler()">Are you better than average as a driver?<br>


               </div>
               
            </div>

</div>
            
            <!-- /.col -->
            
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>


<td>
                    <button type="submit" class="btn btn-block btn-success btn-lg">Submit</button>
                  </form>
                  </td>




<script>
  var modal1 = document.getElementById('myModal1');
  var modal2 = document.getElementById('myModal2');
  var modal3 = document.getElementById('myModal3');
  var modal4 = document.getElementById('myModal4');
  var modal5 = document.getElementById('myModal5');
  var modal6 = document.getElementById('myModal6');
  var modal7 = document.getElementById('myModal7');
  var modal8 = document.getElementById('myModal8');
  var modal9 = document.getElementById('myModal9');
  var modal10 = document.getElementById('myModal10');
  
// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");
var btn9 = document.getElementById("myBtn9");
var btn10 = document.getElementById("myBtn10");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
function show_mod1(){
    btn1.style.display="none";
    modal1.style.display = "block";
    setTimeout(function(){modal1.style.display = "none";},25000);

}
btn2.onclick = function() {
  btn2.style.display="none";
    modal2.style.display = "block";
    setTimeout(function(){modal1.style.display = "none";},25000);
}
btn3.onclick = function() {
  btn3.style.display="none";
    modal3.style.display = "block";
    setTimeout(function(){modal3.style.display = "none";},25000);
}
btn4.onclick = function() {
  btn4.style.display="none";
    modal4.style.display = "block";
    setTimeout(function(){modal4.style.display = "none";},25000);
}
btn5.onclick = function() {
  btn5.style.display="none";
    modal5.style.display = "block";
    setTimeout(function(){modal5.style.display = "none";},25000);
}
btn6.onclick = function() {
  btn6.style.display="none";
    modal6.style.display = "block";
    setTimeout(function(){modal6.style.display = "none";},25000);
}
btn7.onclick = function() {
  btn7.style.display="none";
    modal7.style.display = "block";
    setTimeout(function(){modal7.style.display = "none";},25000);
}
btn8.onclick = function() {
  btn8.style.display="none";
    modal8.style.display = "block";
    setTimeout(function(){modal8.style.display = "none";},25000);
}
btn9.onclick = function() {
  btn9.style.display="none";
    modal9.style.display = "block";
    setTimeout(function(){modal9.style.display = "none";},25000);
}
btn10.onclick = function() {
  btn10.style.display="none";
    modal10.style.display = "block";
    setTimeout(function(){modal10.style.display = "none";},25000);
}

//var span1 = document.getElementsByClassName("close1")[0];
/*
// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}
*/
// When the user clicks anywhere outside of the modal, close it
function handler(){
   modal1.style.display="none";
   modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
    modal5.style.display = "none";
    modal6.style.display = "none";
    modal7.style.display = "none";
    modal8.style.display = "none";
    modal9.style.display = "none";
    modal10.style.display = "none";
}

/*window.onclick = function(event) {
    if (event.target == modal1 || event.target == modal2 || event.target == modal3 || event.target == modal4 || event.target == modal5 || event.target == modal6 || event.target == modal7 || event.target == modal8 || event.target == modal9 || event.target == modal10  || event.target == modal11 || event.target == modal12 ) {
        modal1.style.display = "none";
        
    modal11.style.display = "none";
    modal12.style.display = "none";
    }
}
*/

/*function myFunction() {
    window.location.href = "q4-3.php";
}*/
</script>
</script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>

</div>
</html>