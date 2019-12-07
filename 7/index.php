<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles.css">
<script>
var a;
var b;
var ats=0;

var error=false;
var sameNumber=false;
var action='+';

function areaUpdate(value){
  document.getElementById("ats").innerHTML = value;
}
function isNumber(sth){
  return sth===parseInt(sth, 10);
}
function press(but){
  if(but=="ce"){
    error=false;
	action='+';
	a=0;
	b=0;
	ats=0;
  }
  else if(but=="c"){
    error=false;
	action='+';
	a=0;
	b=0;
	ats=0;
  }
  else if(error){}  
  else if(but=="x") ats=ats / 10 | 0;
  else if(but=="+-") ats*=-1;
  else if(but=="!"){
	a=ats;
	ats=1;
	for(i = 1; i <= a; i++){
	  ats*=i;
	}
	sameNumber=false;
  }
  else if(but==','){}
  else if(isNumber(but)){//ivedamas skaicius
    if(!sameNumber){//nebuvo atliktas veiksmas
	  ats=but;
	  sameNumber=true;
	}else{
	  ats=(ats*10)+but;
	}
  }
  else if(but=="="){
    b=ats;
	switch(action){
	  case "+":
	    ats=a+b;
		break;
	  case "-":
	    ats=a-b;
		break;
	  case "*":
	    ats=a*b;
		break;
	  case "/":
	    if(b==0){
		  error=true;
		  ats="ERROR";
		  break;
		}
	    ats=a/b;
		break;
	  default:
	    error=true;
	    ats="ERROR";
	}
	if(!error){
		document.getElementsByName("rezultatas")[0].value = ats;
		document.getElementsByName("veiksmas")[0].value = action;
		document.getElementById('f').submit();
	}
	sameNumber=false;
    areaUpdate(ats);
  }else{
    a=ats;
	action=but;
	sameNumber=false;
  }
  areaUpdate(ats);
}
</script>
</head>
<body>
<form id="f" method="POST">
<input type="hidden" name="rezultatas" value="">
<input type="hidden" name="veiksmas" value="">
</form>
<?php
$servername = "127.0.0.1";
$username = "PG4339LA";
$password = "jkm_PG4339LA";
$dbname = "PG4339LA";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['rezultatas'])){
	$rezultatas=$_POST['rezultatas'];
	$veiksmas=$_POST['veiksmas'];
}else{
	$rezultatas=0;
}

$sql = "INSERT INTO veiksmai (rezultatas, veiksmas)
VALUES ($rezultatas, \"$veiksmas\")";
if(isset($veiksmas)){
	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
?>
<div>
  <div id="calculator">
	<textarea id="ats" rows="2" ><?php echo $rezultatas?></textarea>
	<div>
		<button type="button" id="" class="special" onclick="press('!')">!</button>
		<button type="button" id="" class="special" onclick="press('!')">!</button>
		<button type="button" id="" class="special" onclick="press('!')">!</button>
		<button type="button" id="" class="special" onclick="press('!')">!</button>
	</div>
	<div>
		<button type="button" id="" class="clear" onclick="press('ce')">ce</button>
		<button type="button" id="" class="clear" onclick="press('c')">c</button>
		<button type="button" id="" class="clear" onclick="press('x')">x</button>
		<button type="button" id="" class="operation" onclick="press('/')">/</button>
	</div>
	<div>
		<button type="button" id="" class="digit" onclick="press(7)">7</button>
		<button type="button" id="" class="digit" onclick="press(8)">8</button>
		<button type="button" id="" class="digit" onclick="press(9)">9</button>
		<button type="button" id="" class="operation" onclick="press('*')">*</button>
	</div>
	<div>
		<button type="button" id="" class="digit" onclick="press(4)">4</button>
		<button type="button" id="" class="digit" onclick="press(5)">5</button>
		<button type="button" id="" class="digit" onclick="press(6)">6</button>
		<button type="button" id="" class="operation" onclick="press('-')">-</button>
	</div>
	<div>
		<button type="button" id="" class="digit" onclick="press(1)">1</button>
		<button type="button" id="" class="digit" onclick="press(2)">2</button>
		<button type="button" id="" class="digit" onclick="press(3)">3</button>
		<button type="button" id="" class="operation" onclick="press('+')">+</button>
	</div>
	<div>
		<button type="button" id="invert" class="" onclick="press('+-')">+/-</button>
		<button type="button" id="" class="digit" onclick="press(0)">0</button>
		<button type="button" id="comma" class="" onclick="press(',')">,</button>
		<button type="button" id="answer" class="" onclick="press('=')">=</button>
	</div>
  </div>
</div>
</body>
</html>