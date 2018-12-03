<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Rimi's Quiz</title>

    <style>
body
{
 text-align:center;
 width:100%;
 margin:0 auto;
 padding:0px;
 font-family:helvetica;
 animation: back_animate 25s infinite linear;
}
@keyframes back_animate
{
 0%{background-color:#0B2161;}
 10%{background-color:#BE81F7;}
 20%{background-color:#170B3B;}
 30%{background-color:#81F7D8;}
 40%{background-color:#088A68;}
 50%{background-color:#5882FA;}
 60%{background-color:#424242;}
 70%{background-color:#3B240B;}
 80% {background-color:#FF8000;}
 90%{background-color:#ACFA58;}
 100%{background-color:#298A08;}
}
h1
{
 margin-top:200px;
 color:white;
 font-size:44px;
 line-height:5em;
}
</style>
</head>

<body>

	<div id="page-wrap">

		<h1>Score Card </h1>
		<h3>Thank you dear user, for taking up this quiz. I hope you had a beautiful experience with such funny questions !!</h3>
        <h2>Here's what you got-</h2><br><br>
        <?php
            error_reporting(E_ALL ^ E_NOTICE);
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];

            $totalCorrect = 0;

            if ($answer1 == "B")  {$totalCorrect++;}

            if ($answer2 == "A")  {$totalCorrect++;}

            if ($answer3 == "C")  {$totalCorrect++; }

            if ($answer4 == "D")  {$totalCorrect++;}

            if ($answer5 == "D")  {$totalCorrect++; }
        		//print_r($totalCorrect);
				//echo($totalCorrect);
				//echo " correct out of 5";
				echo "<div id = 'results'>$totalCorrect / 5 correct</div>";



        ?><br><br>


	</div><br><br>


</body><br><br>

</html>
