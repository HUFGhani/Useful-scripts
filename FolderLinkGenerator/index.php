<!DOCTYPE html>
<html>
<head>
<title>welcome home</title>

<style>
body {
    background-color: lightblue;
    text-align: center;
}

h1{
    color: white;
    text-align: center;
}

</style>

</head>
<body>

<h1>Welcome Home</h1>
<p>
<p id="demo"></p>
</P>

<?php
shell_exec('./FolderLinkGenerator.rb');
$handle = fopen("link.txt", "r");
if ($handle) {
	    while (($line = fgets($handle)) !== false) {
		    // process the line read.
		    echo "<a href=".$line."/>".$line."</a>";
		    echo "<br>"; 
		}
		
	    fclose($handle);

		 } else {
		            // error opening the file
		echo "help";
	  } 
?>

<script>
document.getElementById("demo").innerHTML = Date();
</script>
</body>
</html>
