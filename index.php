<?php include("header.php"); ?>

<body style=" background:url(img/); background-size:cover;">
  <div class="">>
  <br><br><br><h1><center><b>Water Billing System of KhaoDin<br><h3>ระบบเก็บค่าน้ำประปาหมู่บ้านเขาดิน ตำบลเขาเจ็ดลูก  อำเภอทับคล้อ  จังหวัดพิจิตร</h3></b></center></h1>
        </div>
  <br><div class="container">    
        <div id="loginbox"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                      
            <div class="panel panel-info"  style=" background:url(img/); background-size:cover;">
                    <div class="panel-heading">
                        <div class="panel-title"><center><h4>ลงชื่อเข้าใช้ระบบ<br>user : admin <br>pass : admin</h4></center></div>
                      
                    </div>     

                    <div style="padding-top:30px;" class="panel-body" >

                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="process.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="username" value="" placeholder="username"> 
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;">
                            </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

                                    </div>
                                </div>
							</form>
                         </div>
					</div>
                    
				</div> 
			</div> <!-- /container -->

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>



</div>

<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>



<div class="footer">
<p>&copy; 2021 Water Billing System of KhaoDin</p>
</div>

</body>



</html>