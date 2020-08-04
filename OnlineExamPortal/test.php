<?php
include 'components/db_conn.php';
if(isset($_SESSION['username'])){
	header("location: login.php");
	exit;
}
$quess="SELECT * FROM questiondb;";
$result=mysqli_query($conn,$quess);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Test</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <script type="text/javascript">
  	var t;
  	var fs=false;
    function start(){
    	fs=true;
       var x1 = document.getElementById("form");
        <?php
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                echo 'var q = document.createElement("p");
                q.innerHTML="'.$row["question"].'";
                var c1 = document.createElement("input");
                c1.type="radio";
                c1.name='.(string)$i.';
                c1.value="1";
                var c1l = document.createElement("label");
                c1l.innerHTML="'.$row["choice1"].'";
                var c2 = document.createElement("input");
                c2.type="radio";
                c2.name='.(string)$i.';
                c2.value="2";
                var c2l = document.createElement("label");
                c2l.innerHTML="'.$row["choice2"].'";
                var c3 = document.createElement("input");
                c3.type="radio";
                c3.name='.(string)$i.';
                c3.value="3";
                var c3l = document.createElement("label");
                c3l.innerHTML="'.$row["choice3"].'";
                var c4 = document.createElement("input");
                c4.type="radio";
                c4.name='.(string)$i.';
                c4.value="4";
                var c4l = document.createElement("label");
                c4l.innerHTML="'.$row["choice4"].'";
                x1.append(q);
                x1.append(c1);
                x1.append(c1l);
                x1.append(document.createElement("br"));
                x1.append(c2);
                x1.append(c2l);
                x1.append(document.createElement("br"));
                x1.append(c3);
                x1.append(c3l);
                x1.append(document.createElement("br"));
                x1.append(c4);
                x1.append(c4l);
                x1.append(document.createElement("br"));
                ';  
                $i+=1;
            }
        ?>
        t= (<?php echo $i; ?>)*30;
        var sub = document.createElement("input");
        sub.type="submit";
        sub.name="submit";
        sub.value="Submit";
        sub.id="submit";
        x1.append(document.createElement("br"));
        x1.append(document.createElement("br"));
        x1.append(sub);
        document.getElementById("starter").style.display="none";
        document.body.requestFullscreen();
        document.getElementById("timer").innerHTML=t;
        setInterval(()=>{
	    	t-=1;
	    	document.getElementById("timer").innerHTML= t;
	    	if (t==0){
	    		document.getElementById("submit").click();
	    	}
    	},1000);
    }//end of start function
    setInterval(()=>{
      if (fs==true && document.fullscreen==false)
        document.getElementById("submit").click();
    },300);

</script>
  <button style="display: block; align-items: center;" onclick="start()" id="starter">Start test</button>
  <h1 id="scor"></h1>
  <div id="questions" style="display: block;">
    <div id="timer" style="color:red;right:1%;top:1%; position: absolute;"></div>
    <form id="form" action="scorer.php" method="post">
    </form>
  </div>
</body>
</html>