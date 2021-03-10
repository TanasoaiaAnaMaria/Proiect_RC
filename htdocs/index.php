<html>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/style.css"> 


<script src="js/jquery-3.1.1.js"></script>
<script src="js/smooth-scroll.polyfills.min.js"></script>


<style type="text/css">

/* id-uri pt text ascuns */
	
#more1, #more2, #more3, #more4, #more5, #more6, #more7, #more8, #more9, #more10, #more11, #more12 {
	display: none;
}

button{
	cursor:pointer;
}

button:hover{
	box-shadow: 0 4px 2px -2px gray;
	color: blue;
}


h1{
	width:50%;
	border: 5px solid black;
	box-shadow: 12px -10px 10px 0px red;
}

</style>

</head>
<body>
	
	<section class="destinations-area section-gap">
		<div class="container">
						<center><h1>Puzzlemania</h1></center>
						
						<br><br><br>
						
						<?php
							
							$connect = new mysqli('localhost','root','','puzzle');
							$row_cnt = 0;
							if($connect->connect_error){
								echo "$connect->connect_error";
								die("Conexiunea nu a avut loc: ". $connect->connect_error);
							} 
							else {
								
								$sql = "SELECT firma, nume, piese, pret, path FROM puzzle_t";
								$result = $connect->query($sql);
								$i = 0; # count for max 3 coll per row.
								$nr = 0; # count for every puzzle
								$nr_row = 0; #  count for divs row for id="infoX" at scroll effect
								
								if ( $result->num_rows > 0) 
								{
								
									while($row = $result->fetch_assoc())
									{
										
										if($i == 0)
										{
											$nr_row++;
											echo "
							<div class='row'>
												<div id='info".$nr_row."'></div> ";
											$i++;
										}
										if ($i <= 3 && $i != 0)
										{
											$i++;
											$nr++;
											echo "
											<script>
												function myFunction".$nr."() 
												{
													var dots".$nr." = document.getElementById('dots".$nr."');
													var moreText".$nr." = document.getElementById('more".$nr."');
													var btnText".$nr." = document.getElementById('myBtn".$nr."');
													

													if (dots".$nr.".style.display === 'none') {
														dots".$nr.".style.display = 'inline';
														btnText".$nr.".innerHTML = 'Info'; 
														btnText".$nr.".style.color = 'black';
														btnText".$nr.".style.boxShadow = 'none';
														moreText".$nr.".style.display = 'none';
													} 
													else {
														dots".$nr.".style.display = 'none';
														btnText".$nr.".innerHTML = 'Info'; 
														btnText".$nr.".style.color = 'red';
														btnText".$nr.".style.boxShadow = '0 4px 2px -2px red';
														moreText".$nr.".style.display = 'inline';
														}
												}
											</script>
												<div class='col-lg-4'>
													<div class='single-destinations'>
													
														<div class='thumb'>
														
															<span class='unselectable' unselectable='on'><img src='".$row['path']."' alt='".$row['nume']."' style='width:250px; height:180px; margin-left:25px; margin-top:15px'></span>
															
														</div>
														
														<div class='details'>
															
															<h4 class='d-flex justify-content-between'>
																<span>
																	" .$row['nume']. "
																
																	<a data-easing='easeInQuad' href='#info".$nr_row."'>
																		
																		<span class='unselectable' unselectable='on'><button onclick='myFunction".$nr."()' style='float:right; margin-left: 150px;'  id='myBtn".$nr."'>Info</button></span>	
																	
																	</a>
																	
																</span> 

																	
															</h4>
															
															<span id='dots".$nr."' class='unselectable' unselectable='on'><i>Detalii puzzle</i></span>
															
																<span id='more".$nr."'>
																
																	<ul class='package-list'>
																		<li class='d-flex justify-content-between align-items-center'>
																			<span>Nume firmă</span>
																			<span>" . $row['firma'] . "</span>
																		</li>
																		<li class='d-flex justify-content-between align-items-center'>
																			<span>Nume puzzle</span>
																			<span>" . $row['nume'] . "</span>
																		</li>
																		<li class='d-flex justify-content-between align-items-center'>
																			<span>Număr piese</span>
																			<span>" . $row['piese'] . "</span>
																		</li>
																		<li class='d-flex justify-content-between align-items-center'>
																			<span>Preț</span>
																			<span>" . $row['pret'] . " RON</span>
																		</li>												
																	</ul>
																	
																</span>
															
														</div>
														
													</div>
												</div>";
										}
										if ( $i > 3 )
										{
											echo "
							</div>";
											$i=0;
											
										}
									
									}
									
								}
								else 
								{
									echo "<br><br><br>Nu avem puzzle<br><br><br>";
									
								}
								$connect->close();
							}
							
						?>
		</div>
	</section>
	
	
	<!-- Animatie scroll down -->
<script>
	// Instantiate Scrolls
	var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');

	var linear = new SmoothScroll('[data-easing="linear"]', {easing: 'linear'});

	var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
	
	// Log scroll events
	var logScrollEvent = function (event) {
		console.log('type:', event.type);
		console.log('anchor:', event.detail.anchor);
		console.log('toggle:', event.detail.toggle);
	};
	document.addEventListener('scrollStart', logScrollEvent, false);
	document.addEventListener('scrollStop', logScrollEvent, false);
	document.addEventListener('scrollCancel', logScrollEvent, false);
</script>

</body>
</html>