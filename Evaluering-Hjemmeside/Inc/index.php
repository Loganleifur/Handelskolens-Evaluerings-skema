<?php 
require 'DB.php';
?>
<link rel="stylesheet" type="text/css" href="Inc/loginStyle.css" />
<div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#laere">Lære Login</a></li>
        <li class="tab active"><a href="#elev">Elev Login</a></li>
      </ul>
	   <div class="tab-content">
	  
	  <div id="elev">   
          <h1>Elev Login</h1>
          
        <form action="Inc/loginE.php" method="post" autocomplete="off">
          
		 <div class="field-wrap">
            <label>
               Brugernavn<span class="req">*</span>
            </label >
            <input type="text" required autocomplete="off" name="user"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Adgangskode<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="pas"/>
          </div>
          
          <!--<p class="forgot"><a href="http://localhost/Webshop/Forgot-password.php">Forgot Password?</a></p>-->
          
          <button class="button button-block" name="elev" >Login</button>
		  
		</form>
	 </div>
	  
	  <div id="laere">   
          <h1>Lære Login</h1>
          
          <form action="Inc/loginL.php" method="post">
          
         <!-- <div class="top-row">-->
		  <div class="field-wrap">
            <label>
              Brugernavn<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name='users'/>
          </div>
		  
          <div class="field-wrap">
            <label>
              Adgangskode<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='pass' />
          </div>
		  
          <button type="submit" class="button button-block" name="laere">Login</button>
          <!--</div>-->
		  </form>
	  </div>
	  </div> <!-- tab-content -->
	
</div> <!-- /form -->

<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<script src="Inc/Login.js"></script>