<div>
	<h1>Information om Klassen</h1>
	<h2>Til <?php echo ($_SESSION['l_class']) ?></h2>
	<br>
	<form class='admin' action='Inc/godkend.php' method='POST'>
	<div class="colunn">
		<div>
			<h3>Lærene til fagende</h3>
			<div class="new">
					  <label>Matematik Lærer:</label>
					  <?php 
					  $class = $_SESSION['l_class'];
					  $sql = "INSERT INTO class (class) VALUES ('$class');";
					  mysqli_query($conn, $sql);

								$stmt = $conn->query("SELECT teacher.* FROM teacher;");
								$result = mysqli_num_rows($stmt);
								$select= '<select class="input-place" name="ML">';
									while ($row = mysqli_fetch_array($stmt)) {
										$select.='<option name="class" value="' .  $row['intialer'] . '">' . $row['intialer'] . '</option>';
								}
								$select.='</select>';
								echo $select;
								?>
					  </div>
			<div class="new">
							<label>Afsætning Lærer:</label>
							<?php 
								  $stmt = $conn->query("SELECT * FROM teacher;");
									$result = mysqli_num_rows($stmt);
									$select= '<select class="input-place" name="AL">';
										while ($row = mysqli_fetch_array($stmt)) {
											$select.='<option name="class" value="' .  $row['intialer'] . '">' . $row['intialer'] . '</option>';
									}
									$select.='</select>';
									echo $select;
									?>
							  </div>
			<div class="new">
					  <label>Erhvervsøkonomi Lærer:</label>
					  <?php 
							  $stmt = $conn->query("SELECT * FROM teacher;");
								$result = mysqli_num_rows($stmt);
								$select= '<select class="input-place" name="EL">';
									while ($row = mysqli_fetch_array($stmt)) {
										$select.='<option name="class" value="' .  $row['intialer'] . '">' . $row['intialer'] . '</option>';
								}
								$select.='</select>';
								echo $select;
								?>
					  </div>
			<div class="new">
					  <label>Informationsteknologi Lærer:</label>
					  <?php 
								 $stmt = $conn->query("SELECT * FROM teacher;");
								$result = mysqli_num_rows($stmt);
								$select= '<select class="input-place" name="IL">';
									while ($row = mysqli_fetch_array($stmt)) {
										$select.='<option name="class" value="' .  $row['intialer'] . '">' . $row['intialer'] . '</option>';
								}
								$select.='</select>';
								echo $select;
								?>
					  </div>
			<div class="new">
					  <label>Organisation Lærer	:</label>
					  <?php 
								   $stmt = $conn->query("SELECT * FROM teacher;");
								$result = mysqli_num_rows($stmt);
								$select= '<select class="input-place" name="OL">';
									while ($row = mysqli_fetch_array($stmt)) {
										$select.='<option name="class" value="' .  $row['intialer'] . '">' . $row['intialer'] . '</option>';
								}
								$select.='</select>';
								echo $select;
								?>
					  </div>
			<div class="new">
					  <label>Samfundsfag Lærer:</label>
					  <?php 
								   $stmt = $conn->query("SELECT * FROM teacher;");
								$result = mysqli_num_rows($stmt);
								$select= '<select class="input-place" name="SL">';
									while ($row = mysqli_fetch_array($stmt)) {
										$select.='<option name="class" value="' .  $row['intialer'] . '">' . $row['intialer'] . '</option>';
								}
								$select.='</select>';
								echo $select;
								?>
					  </div>
		</div>
<div>
					<h3>Evaluering</h3>
					<div class="new">
							<label>1 til 4 uger:</label>
							<input class="input-place" type="week" name="1_4">
						</div>
					<div class="new">
						<label>1 til 7 uger:</label>
						<input class="input-place" type="week" name="1_7">
					 </div>
					<div class="new">
						<label>1 til 10 uger:</label>
						<input class="input-place" type="week" name="1_10">
					  </div>
	</div>    
		</div>
<br>
<?php
		$conn->close();
			?> 
					<button type="submit" class="but not_login" method="post">Opret</button>
				</form>
			</div>


		</div>