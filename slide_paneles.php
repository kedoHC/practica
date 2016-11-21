<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#next1").click(function(){
        $("#panel2").slideToggle("slow");
        $("#panel1").hide("slow");
    });
    $("#next2").click(function(){
        $("#panel3").slideToggle("slow");
        $("#panel1, #panel2").hide("slow");
    });
    $("#back2").click(function(){
        $("#panel1").slideToggle("slow");
        $("#panel2").hide("slow");
    });
    $("#next3").click(function(){
        $("#panel4").slideToggle("slow");
        $("#panel2, #panel3").hide("slow");
    });
    $("#back3").click(function(){
        $("#panel2").slideToggle("slow");
        $("#panel3").hide("slow");
    });
    $("#next4").click(function(){
        $("#panel5").slideToggle("slow");
        $("#panel3, #panel4").hide("slow");
    });
    $("#back4").click(function(){
        $("#panel3").slideToggle("slow");
        $("#panel4").hide("slow");
    });
    $("#back5").click(function(){
        $("#panel4").slideToggle("slow");
        $("#panel5").hide("slow");
    });
});
</script>
<style>
#panel1, #panel2, #panel3, #panel4, #panel5{
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
    height: 600px;  
}
#panel2, #panel3, #panel4, #panel5 {
    display: none;
}
#pie{
	margin-top: 0px;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-12" id="panel1">
			<p>PANEL 1</p>
			<button id="saltar">Luego</button>
			<button id="next1">Next</button>
		</div>	
	</div>
</div>
	<div id="panel2">
		<p>PANEL 2</p>
		<button id="back2">Back</button>
		<button id="next2">Next</button>
	</div>
	<div id="panel3">
		<p>PANEL 3</p>
		<button id="back3">Back</button>
		<button id="next3">Next</button>
	</div>
	<div id="panel4">
		<p>PANEL 4</p>
		<button id="back4">Back</button>
		<button id="next4">Next</button>
	</div>
	<div id="panel5">
		<p>PANEL 5</p>
		<button id="back5">Back</button>
		<button id="terminar">Terminar</button>
	</div>
</body>
</html>