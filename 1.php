<!DOCTYPE html>
<html>
<head>
	<title>HTMl DOM To do not insepect, copy text</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body id="demo">
	<div>
		Hello good morning
	</div>
	<center><h1>It is used to block select text , copy , cut , paste and inspect element</h1></center>
	<form action="#" method="post" accept-charset="" align="center">
		<label for="">Name</label>
		<textarea name="address" cols="20" rows="5"></textarea>
		<br>
		<input type="submit" name="submit" id="submit" value="Submit">
	</form>
	<script>
		$(document).ready(function() 
		{
			//to prevent user to select text on page
			document.getElementById("demo").style.userSelect = "none";

			//key events
			$(document).keydown(function(event)
			{
			    //to block inspect element
			    // f12
			    if(event.keyCode==123)
			    {
			        return false;
			    }

			    //ctrl+shift+i
			    if (event.ctrlKey && event.shiftKey && event.keyCode==73)
			    {        
			        return false;
			    }

			    //to block copy text of document ctrl+c
			    if(event.ctrlKey && event.keyCode==67)
			    {
			    	return false;
			    }

			    //to block paste text of document ctrl+v
			    if(event.ctrlKey && event.keyCode==86)
			    {
			    	return false;
			    }

			    //to block cut text of document ctrl+x
			    if(event.ctrlKey && event.keyCode==88)
			    {
			    	return false;
			    }

			    //to print page ctrl+p
			    if(event.ctrlKey && event.keyCode==80)
			    {
			    	return false;
			    }

			    //to prevent view page source ctrl+u
			    if(event.ctrlKey && event.keyCode==85)
			    {
			    	return false;
			    }

			    //to prevent console  ctrl+shift+j
			    if (event.ctrlKey && event.shiftKey && event.keyCode==74)
			    {        
			        return false;
			    }
			});

			function preventInsepectElement(event)
			{
				
			}
			$(document).on("contextmenu",function(e){        
			   	e.preventDefault();
			});
		});
	</script>
</body>
</html>