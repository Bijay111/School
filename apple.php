<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<body>

<button id="show">show</button>
<button id="hide">hide</button>

<h7>my name is bijay</h7>

</body>

<script>
$(document).ready(function(){
	$("#hide").click(function(){
  	$("h7").hide(1000);
  	});
  	$("#show").click(function(){
  	$("h7").show(1000);
  	});
});
</script>



</head>

</html>
