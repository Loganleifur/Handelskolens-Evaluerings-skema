<div>
<h1>Information om Lærer</h1>
<h2>Til <?php echo $_SESSION['l_users'] ?></h2>
          <form action="Inc/infokodeA.php" method="post" autocomplete="off">
          
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
          <label>Køn:</label><br>
          <input type="radio" name="gender" value="male" checked> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          </div>
          <div class="new">
          <label>Telefon-number:</label>
            <input class="not_login" type="number"  name="tel"/>
          </div>
          <button  class="but not_login" name="admin" >Godkend</button>
		  
				</form> 
</div>