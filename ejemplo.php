<!DOCTYPE html>
<html>
<head>
<title>Prueba Magneto</title>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script>
	$(document).ready(function(){
		$.ajax({
			method: "POST",
			url: "index.php",
			data: { name: "Erick", dna : ["ATGCGA","CAGTGC","TTATGT","AGAAGG","CCCCTA","TCACTG"]}
			// data: { name: "Erick", dna : ["ATGCGA","CAGTGC","TTATTT","AGACGG","GCGTCA","TCACTG"]}
			})
			.done(function( msg ) {
			alert( msg );
		});
	});
</script>
</head>
<body>
</body>
</html>