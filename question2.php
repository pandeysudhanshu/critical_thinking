<?php 

          
            include('session.php');


        
          $db = mysqli_connect('localhost', 'phpmyadmin' , 'some_pass' , 'audit_course');


          
          

          $u = $_SESSION['username'];
          $a1 = $_POST['answer1'];
          $a2 = $_POST['answer2'];
          $a3 = $_POST['answer3'];
          $a4 = $_POST['answer4'];
          $a5 = $_POST['answer5'];
          $a6 = $_POST['answer6'];
          $a7 = $_POST['answer7'];
          $a8 = $_POST['answer8'];
          $a9 = $_POST['answer9'];
          $a10 = $_POST['answer10'];



            $query ="INSERT INTO user_response (username,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) 
                      VALUES('$u','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";

//,$_SESSION['answer1'],$_SESSION['answer2'],$_SESSION['answer3'],$_SESSION['answer4'],$_SESSION['answer5'],$_SESSION['answer6'],$_SESSION['answer7'],$_SESSION['answer8'], $_SESSION['answer9'],$_SESSION['answer10']


       mysqli_query($db, $query);









?>

<!DOCTYPE html>
<html>
<style>
.row:after {
    content: "";
    display: table;
    clear: both;
}

.column1 {
    float: left;
    width: 25.00%;
    padding: 10px;
   
}
.column2 {
    float: left;
    width: 50.00%;
   
   
}
.div3 {
    width: 600px;
     box-sizing:content-box;    
    padding: 20px;
    border: 3px solid green;
}
.div2 {
    width: 600px;
    box-sizing:content-box;  
    padding: 20px;
    border: 3px solid red;
}
.div1 {
    width: 150px;
    height: 30px;    
    padding: 20px;
    border: 2px solid green;
  font-size:20px
}
</style>


<?PHP   
    $row = mysqli_fetch_array($sql_result_query); ?>
<body>



<h2>Survey Results!:)</h2>
<p><?php echo $_SESSION["username"] ;?></p>
<p>Here are the questions</p>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img11.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q1)Choose one of the two options:
<br>A. Toss a coin. If it comes up heads you win $100, and if it comes
up tails you win nothing. 

<br>B. Get $46 for sure.

</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a1 ;?></b></div></div>

<br>
<div class ="column2">    
<div class ="div3">
Explanation:
It is observed that most of the people would agree to case B as Surity of getting a gain is
rated over a gamble where you would gain nothing in the worst case. This is inspired by the fundamental of <b>"Rational Agent Model"</b>, where rationality prevails and affects Critical thinking to make decisions.
</div>
</div>
</div>
<br>  
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img12.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q2)Choose one of the two options:
<br>Problem1: Would you accept a gamble that offers a 10%
chance to win $95 and a 90% chance to lose $5?

<br>Problem2: Would you pay $5 to participate in a lottery that
offers a 10% chance to win $100 and a 90% chance to win
nothing?

</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a2 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation:
Both the situations in the above question are same.
Yet, one prefers the first situation because of <b>Cost-Loss discrepancy</b> and the <b>Power of
framing,</b> and the answer is subjected to Intution and Realisation which form the basis of Critical Thinking.

</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img13.png" width="200" height="200"></p></div>
<br>
<div class ="column2">
<div class ="div2">
Q3) Answer according to the image given below:

</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a3 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation:
Most of the subjects miss out on the position of the spout in both the cases. Hence, the teapot in case B will hold lesser Tea as it would overflow before the one in the first case. 
<b>Analytical thinking and Observation</b> that form the part of how Critical thinking influences decisions is checked in  
</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img4.png" width="200" height="250"></p></div>

<div class ="column2">
<div class ="div2">
Q4)Consider the two scenarios:<br>A.Imagine that you have decided to see a play
and paid the admission price of $10 per ticket. <br>As you enter the
theater, you discover that you have lost the ticket.<br> The seat was
not marked, and the ticket cannot be recovered. Would you pay $10 for another ticket?

<br>B.Imagine that you have decided to see a play where admission is $10 per ticket. As you enter the theater, you
discover that you have lost a $10 bill. Would you still pay $10 for a ticket for the play?


</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a4 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation:

The willingness to replace a lost ticket increased significantly when that problem followed the lost-cash
version. In contrast, the willingness to buy a ticket after losing cash was not
affected by prior presentation of the other problem. The juxtaposition of the two problems apparent clemositionly enabled the subjects to realize that it makes sense to think of the lost ticket as lost cash, but not vice versa.
The normative status of the effects of <b>Mental accounting</b> is questionable. The answers are based on principles of <b>Topical Organisation</b>.



</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img20.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q5)You are offered a gamble on the toss of a coin.
<br>If the coin shows tails, you lose $100.
<br>If the coin shows heads, you win $150.
<br>Is this gamble attractive? Would you accept it?
<br>A.Yes
<br>B.No
</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a5 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation:
For most people, the fear of losing $100 is more intense than the hope
of gaining $150. We conclude from many such observations that “losses
loom larger than gains” and that people are loss averse. So, the decision made here is
based on an important principle of <b>"LOSS AVERSION"</b> in critical thinking. 

</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img16.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q6) Who of the two will experience greater regret over the episode? 

<br>Mr. Brown almost never picks up hitchhikers. Yesterday he gave a man a ride and was robbed.
<br>Mr. Smith frequently picks up hitchhikers. Yesterday he gave a man a ride and was robbed.

<br>A.Mr.Brown
<br>B.Mr.Smith

</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a6 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation: 
The principle used to come to the correct answer is <b>Keeping Scores: Regret and Blame</b>
Regret and blame are both evoked by a comparison to a norm, but the relevant norms are different. The emotions experienced by Mr. Brown and Mr. Smith are dominated by what they usually do about hitchhikers. Taking a hitchhiker is an abnormal event for Mr. Brown, and most people therefore expect him to experience more intense regret. A judgmental observer, however, will compare both men to conventional norms of reasonable behavior and is likely to blame Mr. Smith for habitually taking reasonable risks. We are tempted to say that Mr. Smith deserved his fate and that Mr.Brown was unlucky. But Mr. Brown is the one who is more likely to be kicking himself, because he acted out of character in this one instance.
</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img17.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q7) You see a person reading The New York Times on the New York subway. Which of
the following is a better bet about the reading stranger?

<br>A.She has a PhD.
<br>B.She does not have a college degree.


</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a7 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation: 
The principle used to correctly guess the solution is <b>The Sins of Representativeness</b>
Judging probability bias representativeness has important virtues: the intuitive impressions that it produces are often—indeed, usually—more accurate than chance guesses would be. For example, on most occasions, people who act friendly are in fact friendly. In all these cases and in many others, there is some truth to the stereotypes that govern judgments of representativeness, and predictions that follow this heuristic may be accurate. In other situations, the stereotypes are false and the representativeness heuristic will mislead, especially if it causes people to neglect base-rate information that points in another direction. Even when the heuristic has some validity, exclusive reliance on it is associated with grave sins against statistical logic. Representativeness would tell you to bet on the PhD, but this is not necessarily wise. You should seriously consider the second alternative, because many more non-graduates than PhDs ride in New York subways.
</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img18.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q8) A hardware store has been selling snow shovels for $15. The morning after a large snowstorm, the store raises the price to $20.
Please rate this action as:

<br>A.Completely Fair and acceptable
<br>B.Unfair


</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a8 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation:
The principle used to deduce the practical opinion is <b>Loss Aversion in the Law</b>. The hardware store behaves appropriately (fairly) according to the standard economic model: it responds to increased demand by raising its price.  The reasoning of viewing the pre-blizzard price as a reference point and the raised price as a loss that the store imposes on its customers, not because it must but simply because it can is fallacious. A basic rule of fairness is that the exploitation of market power to impose losses on others is unacceptable. 
</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img19.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q9) Linda is thirty-one years old, single, outspoken, and very bright. She majored in philosophy. As a student, she was deeply concerned with issues of discrimination and social justice, and also participated in anti-nuclear demonstrations.

<br>Which alternative is more probable?
<br>A.Linda is a bank teller.
<br>B.Linda is a bank teller and is active in the feminist movement.


</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a9 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation:
The principle used to come to the correct inference is Less is More. The stereotypical bank teller is not a feminist activist, and adding that detail to the bank teller is not a feminist activist, and adding that detail to the description makes for a more coherent story. The twist comes in the judgments of likelihood, because there is a logical relation between the two scenarios. Think in terms of Venn diagrams. The set of feminist bank tellers is wholly included in the set of bank tellers, as every feminist bank teller is a bank teller. Therefore the probability that Linda is a feminist bank teller must be lower than the probability of her being a bank teller. When you specify a possible event in greater detail you can only lower its probability. The problem therefore sets up a conflict between the intuition of representativeness and the logic of probability.

</div>
</div>
</div>
<br>
<br>
<div class="row">

<div class="column1"><p><img style="padding: 0 15px; float: left;" src="img/img20.png" width="200" height="200"></p></div>

<div class ="column2">
<div class ="div2">
Q10)  Which alternative you can confidently answer?
<br>A.Are you a good driver?
<br>B.Are you better than average as a driver?

</div>
</div>
<br>
<div class="column2"><div class="div1"> Your answer is <b><?php echo $a10 ;?></b></div></div>

<br>
<div class ="column2">
<div class ="div3">
Explanation:
The principle used to come to the logically correct answer is <b>The Engine of Capitalism</b>.
The first question is easy and the answer comes quickly: most drivers say yes. The second question (correct) is much harder and for most respondents almost impossible to answer seriously and correctly, because it requires an assessment of the average quality of drivers. People compare themselves to the average without ever thinking about the average. The evidence for the cognitive interpretation of the above-average effect is that when people are asked about a task they find difficult (for many of us this could be “Are you better than average in starting conversations with strangers?”), they readily rate themselves as below average. The upshot is that people tend to be overly optimistic about their relative standing on any activity in which they do moderately well.

</div>
</div>
</div>
<br>
<br>

</body>
</html>
