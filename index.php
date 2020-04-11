 <!DOCTYPE html>
 <html>
 <head>
 	<title>Andres Capera</title>
 	<script type="text/javascript" src="librerias/jquery.js"></script>
 </head>

 <body>
 	<h1>Esta es la segunda reunion</h1>
 	<div id="contenerdor">
 		Click Aqui
 	</div>
 </body>
    <script type="text/javascript">
    	$("#contenerdor").click(function() {
    		console.log("Hizo Click");
    	});
    </script>
 </html>