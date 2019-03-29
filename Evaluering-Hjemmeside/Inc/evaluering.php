<div class="layout2">
<form action="Inc/evaluerSystem.php" method="post">
<h1> Evaluering i uge <?php echo $_SESSION['uge'] ?> <h1>
<h2>Klassenavn: <?php echo $_SESSION['c_class'] ?></h2>
<br>
<h3>Fag: <select id="change" onchange="pagechange()" class="fag" name="fag">
 <option value='matematik'>	Matematik</option>
 <option value='afsaetning'>Afsætning</option>
 <option value='erhvervsoekonomi'>Erhvervsøkonomi</option>
 <option value='informationsteknologi'>Informationsteknologi</option>
 <option value='organisation'>Organisation</option>
 <option value='samfundsfag'>Samfundsfag</option>
</select>
</h3>

<div class="grid">
<div>
Navn:
</div>
<div>
Faglidt niveau
</div>
<div>
Arbejdsindsats
</div>
<div>
Bemærkninger
</div>
<?php 
			$user = $_SESSION['e_user'];
            $class = $_SESSION['c_class'];
			
			//Den vælger en specifik klasse istædet for vælge selve eleven som bliver trykket på
			$sql = "SELECT * FROM elev INNER JOIN class ON class.class=elev.classID  WHERE elev.classID = 'I16' ORDER BY `elev`.`firstname` ASC";
					
                    $result = mysqli_query($conn, $sql);
                    $resultcheck = mysqli_num_rows($result);
                     if($resultcheck > 0) {
                      //echo "<div class=''>"; where classID = .$_SESSION['c_class'] 
                      while ($row = mysqli_fetch_array($result)) {
                        echo "<div><p class='Type'>" . $row['firstname'] . " " . $row['lastname'] . "</p>
								<input type='hidden' name='firstname' value='" . $row['firstname'] . "'>
								<input name='lastname' type='hidden' value='" . $row['lastname'] . "'>
							</div>
								<div><select name='faglidt'>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
									<option value='6'>6</option>
									<option value='7'>7</option>
									<option value='8'>8</option>
									<option value='9'>9</option>
							</select>
						</div>
							<div>
								<select name='arbejdsindsats'>
									<option value='1'>1</option>
									<option value='2'>2</option>
									<option value='3'>3</option>
									<option value='4'>4</option>
									<option value='5'>5</option>
									<option value='6'>6</option>
									<option value='7'>7</option>
									<option value='8'>8</option>
									<option value='9'>9</option>
							</select>
						</div>
							 <div>
								<textarea name='bemaerkning'></textarea>
							</select>
						</div>";
                      }
                  } else {
                      //echo "0 results";
                  }
?>
</div>
<br>
<br>

<button type="submit" class="but">Gem</button>
</form>
</div>
<script>



