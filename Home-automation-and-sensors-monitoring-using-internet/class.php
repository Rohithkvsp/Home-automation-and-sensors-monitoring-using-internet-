<html>
<title>class room control</title>
<style>
h1.center {
    text-align: center;
    color: red;
}

body { 
 background-color:#C7F0F1;
}

#b1,#b2,#b3,#b4,#b5,#b6,#b7,#b8,#b9,#b10{
 padding:1px;
 margin:2px;
 width: 80px;
 height: 35px;
 font-size: 28px Arial,Helvetica,sans-serif;
 color:white;
 top:50%; 
  left:50%;
}

</style>
</head>

<body>
<h1 class="center">Control</h1>
<?php
$xml=simplexml_load_file("test.xml") or die("Error:Cannot create object");
$status=Array();
for($i=0;$i<10;$i++) {
 $status[$i]= $xml->device[$i]->state;
}
$xml->asXML("test.xml");
?>

<div id="mydiv" align='center' ></div>
<script>

var devicestate1="<?php echo $status[0]; ?>"
var devicestate2="<?php echo $status[1]; ?>"
var devicestate3="<?php echo $status[2]; ?>"
var devicestate4="<?php echo $status[3]; ?>"
var devicestate5="<?php echo $status[4]; ?>"
var devicestate6="<?php echo $status[5]; ?>"
var devicestate7="<?php echo $status[6]; ?>"
var devicestate8="<?php echo $status[7]; ?>"
var devicestate9="<?php echo $status[8]; ?>"
var devicestate10="<?php echo $status[9]; ?>"

var button1=document.createElement("BUTTON");
button1.setAttribute("id","b1");

if(devicestate1=="ON")
{
var newstate1="OFF";
button1.style.backgroundColor="red";
var buttontext1=document.createTextNode(newstate1);
}
else
{
var newstate1="ON";
button1.style.backgroundColor="green";
var buttontext1=document.createTextNode(newstate1);
}
button1.appendChild(buttontext1);
document.getElementById("mydiv").appendChild(button1);
var break1=document.createElement("br");
document.getElementById("mydiv").appendChild(break1);



var button2=document.createElement("BUTTON");
button2.setAttribute("id","b2");
if(devicestate2=="ON")
{
var newstate2="OFF";
button2.style.backgroundColor="red";
var buttontext2=document.createTextNode(newstate2);
}
else
{
var newstate2="ON";
button2.style.backgroundColor="green";
var buttontext2=document.createTextNode(newstate2);
}
button2.appendChild(buttontext2);
document.getElementById("mydiv").appendChild(button2);
var break2=document.createElement("br");
document.getElementById("mydiv").appendChild(break2);


var button3=document.createElement("BUTTON");
button3.setAttribute("id","b3");
if(devicestate3=="ON")
{
var newstate3="OFF";
button3.style.backgroundColor="red";
var buttontext3=document.createTextNode(newstate3);
}
else
{
var newstate3="ON";
button3.style.backgroundColor="green";
var buttontext3=document.createTextNode(newstate3);
}
button3.appendChild(buttontext3);
document.getElementById("mydiv").appendChild(button3);
var break3=document.createElement("br");
document.getElementById("mydiv").appendChild(break3);


var button4=document.createElement("BUTTON");
button4.setAttribute("id","b4");
if(devicestate4=="ON")
{
var newstate4="OFF";
button4.style.backgroundColor="red";
var buttontext4=document.createTextNode(newstate4);
}
else
{
var newstate4="ON";
button4.style.backgroundColor="green";
var buttontext4=document.createTextNode(newstate4);
}
button4.appendChild(buttontext4);
document.getElementById("mydiv").appendChild(button4);
var break4=document.createElement("br");
document.getElementById("mydiv").appendChild(break4);


var button5=document.createElement("BUTTON");
button5.setAttribute("id","b5");
if(devicestate5=="ON")
{
var newstate5="OFF";
button5.style.backgroundColor="red";
var buttontext5=document.createTextNode(newstate5);
}
else
{
var newstate5="ON";
button5.style.backgroundColor="green";
var buttontext5=document.createTextNode(newstate5);
}
button5.appendChild(buttontext5);
document.getElementById("mydiv").appendChild(button5);
var break5=document.createElement("br");
document.getElementById("mydiv").appendChild(break5);


var button6=document.createElement("BUTTON");
button6.setAttribute("id","b6");
if(devicestate6=="ON")
{
var newstate6="OFF";
button6.style.backgroundColor="red";
var buttontext6=document.createTextNode(newstate6);
}
else
{
var newstate6="ON";
button6.style.backgroundColor="green";
var buttontext6=document.createTextNode(newstate6);
}
button6.appendChild(buttontext6);
document.getElementById("mydiv").appendChild(button6);
var break6=document.createElement("br");
document.getElementById("mydiv").appendChild(break6);


var button7=document.createElement("BUTTON");
button7.setAttribute("id","b7");
if(devicestate7=="ON")
{
var newstate7="OFF";
button7.style.backgroundColor="red";
var buttontext7=document.createTextNode(newstate7);
}
else
{
var newstate7="ON";
button7.style.backgroundColor="green";
var buttontext7=document.createTextNode(newstate7);
}
button7.appendChild(buttontext7);
document.getElementById("mydiv").appendChild(button7);
var break7=document.createElement("br");
document.getElementById("mydiv").appendChild(break7);



var button8=document.createElement("BUTTON");
button8.setAttribute("id","b8");
if(devicestate8=="ON")
{
var newstate8="OFF";
button8.style.backgroundColor="red";
var buttontext8=document.createTextNode(newstate8);
}
else
{
var newstate8="ON";
button8.style.backgroundColor="green";
var buttontext8=document.createTextNode(newstate8);
}
button8.appendChild(buttontext8);
document.getElementById("mydiv").appendChild(button8);
var break8=document.createElement("br");
document.getElementById("mydiv").appendChild(break8);



var button9=document.createElement("BUTTON");
button9.setAttribute("id","b9");
if(devicestate9=="ON")
{
var newstate9="OFF";
button9.style.backgroundColor="red";
var buttontext9=document.createTextNode(newstate9);
}
else
{
var newstate9="ON";
button9.style.backgroundColor="green";
var buttontext9=document.createTextNode(newstate9);
}
button9.appendChild(buttontext9);
document.getElementById("mydiv").appendChild(button9);
var break9=document.createElement("br");
document.getElementById("mydiv").appendChild(break9);



var button10=document.createElement("BUTTON");
button10.setAttribute("id","b10");
if(devicestate10=="ON")
{
var newstate10="OFF";
button10.style.backgroundColor="red";
var buttontext10=document.createTextNode(newstate10);
}
else
{
var newstate10="ON";
button10.style.backgroundColor="green";
var buttontext10=document.createTextNode(newstate10);
}
button10.appendChild(buttontext10);
document.getElementById("mydiv").appendChild(button10);
var break10=document.createElement("br");
document.getElementById("mydiv").appendChild(break10);
</script>


<script>

button1.addEventListener("click",button1click);
function button1click()
{
var c=document.getElementById("b1")
var x=c.textContent;
if(x=="OFF")
{
button1.innerText="ON";
button1.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=0";
}
else if(x=="ON")
{
button1.innerText="OFF";
button1.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=0";
}
}

button2.addEventListener("click",button2click);
function button2click()
{
var c=document.getElementById("b2")
var x=c.textContent;
if(x=="OFF")
{
button2.innerText="ON";
button2.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=1";
}
else if(x=="ON")
{
button2.innerText="OFF";
button2.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=1";
}
}

button3.addEventListener("click",button3click);
function button3click()
{
var c=document.getElementById("b3")
var x=c.textContent;
if(x=="OFF")
{
button3.innerText="ON";
button3.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=2";
}
else if(x=="ON")
{
button3.innerText="OFF";
button3.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=2";
}
}

button4.addEventListener("click",button4click);
function button4click()
{
var c=document.getElementById("b4")
var x=c.textContent;
if(x=="OFF")
{
button4.innerText="ON";
button4.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=3";
}
else if(x=="ON")
{
button4.innerText="OFF";
button4.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=3";
}
}

button5.addEventListener("click",button5click);
function button5click()
{
var c=document.getElementById("b5")
var x=c.textContent;
if(x=="OFF")
{
button5.innerText="ON";
button5.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=4";
}
else if(x=="ON")
{
button5.innerText="OFF";
button5.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=4";
}
}

button6.addEventListener("click",button6click);
function button6click()
{
var c=document.getElementById("b6")
var x=c.textContent;
if(x=="OFF")
{
button6.innerText="ON";
button6.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=5";
}
else if(x=="ON")
{
button6.innerText="OFF";
button6.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=5";
}
}

button7.addEventListener("click",button7click);
function button7click()
{
var c=document.getElementById("b7")
var x=c.textContent;
if(x=="OFF")
{
button7.innerText="ON";
button7.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=6";
}
else if(x=="ON")
{
button7.innerText="OFF";
button7.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=6";
}
}

button8.addEventListener("click",button8click);
function button8click()
{
var c=document.getElementById("b8")
var x=c.textContent;
if(x=="OFF")
{
button8.innerText="ON";
button8.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=7";
}
else if(x=="ON")
{
button8.innerText="OFF";
button8.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=7";
}
}

button9.addEventListener("click",button9click);
function button9click()
{
var c=document.getElementById("b9")
var x=c.textContent;
if(x=="OFF")
{
button9.innerText="ON";
button9.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=8";
}
else if(x=="ON")
{
button9.innerText="OFF";
button9.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=8";
}
}

button10.addEventListener("click",button10click);
function button10click()
{
var c=document.getElementById("b10")
var x=c.textContent;
if(x=="OFF")
{
button10.innerText="ON";
button10.style.backgroundColor="green";
window.location="xmlupdate.php?state=OFF&number=9";
}
else if(x=="ON")
{
button10.innerText="OFF";
button10.style.backgroundColor="red";
window.location="xmlupdate.php?state=ON&number=9";
}
}



</script>
</body>
</html>
