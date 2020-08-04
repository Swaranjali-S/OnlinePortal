<?php
session_start();
include 'components/db_conn.php';
if(!isset($_SESSION["username"])){
	header("location: login.php");
	exit;
}
$qquery="SELECT * FROM 	questiondb;";
$res1=mysqli_query($conn,$qquery);
$number_of_questions=mysqli_num_rows($res1);
$i=0;
$score=0;
$ans_check1="SELECT * FROM questiondb";
$ans_check=mysqli_query($conn,$ans_check1);
while($row=mysqli_fetch_assoc($ans_check)){
		if($row["correct_answer"]==$_POST[(string)$i]){
			$score+=$row["question_marks"];
		}
	$i+=1;
}
echo "Score:".$score;
#echo $_SESSION["username"];

$store_score_s="INSERT INTO scores(username,score) values(?,?)";
$add=$conn->prepare($store_score_s);
$add->bind_param("si",$_SESSION["username"],$score);
$add->execute();
#prepared__query(,$conn,$store_score_s,[$_SESSION["username"],$score])
#mysqli_query($conn,$store_score_s);
?>