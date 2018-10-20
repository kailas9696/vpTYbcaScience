<html>
<head>
<script type="text/javascript">
function loadXMLDoc() {
req=new XMLHttpRequest();
req.onreadystatechange=function() {
if (req.readyState==4 && req.status==200) {
document.getElementById("div1").innerHTML=req.responseText;
}
}
req.open("GET","myinfo.txt",true);
req.send();
}
</script>
</head>
<body>
<div id="div1">my first ajax program</div>
<input type="button" id="button1" value="click me!" onclick="loadXMLDoc()"/>
</body>
</html>
