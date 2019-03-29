   <ul class="topnav">
                <li class="L"><a class="" href="Admin.php">Forside</a></li>
                <?php //<li><a href="Kalender Clickity clack you are wack.php">Kalender</a></li> ?>
                <li><a href="Valg.php">Evaluering</a></li> 
				<li><a href="Profil.php">Elev besvarelser</a><li>
                <li class="dropdown right">
    <a  class="dropbtn"><?php echo $_SESSION['u_user']?></a>
    <div class="dropdown-content" id="Hide">
      <a href="Inc/Logud.php">Log ud</a>
      <a class="hide" href="Signup_A.php"  id="<?php echo $_SESSION['admin']?>">Opret Lærer</a>
      <a href="Signup_E.php">Opret elever</a>
	  <a href="Signup_K.php">Opret klasse</a>
	  <a href="ElevEval.php">W.I.P Elev ting</a>
	  <a href="Besvarelse.php">HEY LISTEN!</a>
    </div>
  </li>
 </ul>
</div>
</div>
         