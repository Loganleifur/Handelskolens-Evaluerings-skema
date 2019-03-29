<div>
<h1>Infomation om Eleven</h1>
<h2>Til <?php echo $_SESSION['users'] ?></h2>
          <form action="Inc/infokodeE.php" method="post" autocomplete="off">
          
		<div class="new">
            <label>Fornavn:</label>
            <input class="not_login" type="text" required autocomplete="off" name="first"/>
          </div>
          <div class="new">
          <label>Efternavn:</label>
            <input class="not_login" type="text" required autocomplete="off" name="last"/>
          </div>
          <div class="new">
          <label>Intialer:</label>
            <input class="not_login" type="text" required autocomplete="off" name="int"/>
          </div>
          <div class="new">
          <label>Email:</label>
            <input class="not_login" type="email"  name="email"/>
          </div>
          <div class="new">
          <label>Klasse/Hold:</label>
          <?php 
                     $stmt = $conn->query("SELECT * FROM class;");
                    $result = mysqli_num_rows($stmt);
                    $select= '<select class="not_login" name="select">';
                        while ($row = mysqli_fetch_array($stmt)) {
                            $select.='<option name="class" value="' .  $row['class'] . '">' . $row['class'] . '</option>';
                    }
                    $select.='</select>';
                    echo $select;
                    ?>
          </div>

          <div class="new">
          <label>Køn:</label><br>
          <input type="radio" name="gender" value="male" checked> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          </div>

          <div class="new">
          <label>Fødselsdag:</label>
            <input class="not_login" type="date"  name="birth"/>
          </div>
          <div class="new">
          <label>Telefon-number:</label>
            <input class="not_login" type="number"  name="tel"/>
          </div>
          <h3>Fag</h3>
          <div class="new">
          <label>Matematik:</label>
          <input type="radio" name="matematik" value="nej" checked> Nej
          <input type="radio" name="matematik" value="ja"> Ja<br>
          </div>
          <div class="new">
          <label>Dansk:</label>
          <input type="radio" name="dansk" value="nej" checked> Nej
          <input type="radio" name="dansk" value="ja"> Ja<br>
          </div>

          <div class="new">
          <label>Erhvervsøkonomi:</label>
          <input type="radio" name="erhvervsoekonomi" value="nej" checked> Nej  
          <input type="radio" name="erhvervsoekonomi" value="ja"> Ja<br>
          </div>

          <div class="new">
          <label>Engelsk:</label>
          <input type="radio" name="engelsk" value="nej" checked> Nej  
          <input type="radio" name="engelsk" value="ja"> Ja<br>
          </div>

          <div class="new">
          <label>Organisation:</label>
          <input type="radio" name="organisation" value="nej" checked> Nej  
          <input type="radio" name="organisation" value="ja"> Ja<br>
          </div>

          <div class="new">
          <label>Samfundsfag:</label>
          <input type="radio" name="samfundsfag" value="nej" checked> Nej  
          <input type="radio" name="samfundsfag" value="ja"> Ja<br>
          </div>
          <button  class="but not_login" name="elev" >Godkend</button>
		  
				</form> 
</div>