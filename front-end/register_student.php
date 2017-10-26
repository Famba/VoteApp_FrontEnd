
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!---  <script src="ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
	 <!--- <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->

    <title>Register: Vote.Gov</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 820px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-border-radius: 0 0 6px 6px;
           -moz-border-radius: 0 0 6px 6px;
                border-radius: 0 0 6px 6px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
      }

      /* Styles you shouldn't keep as they are for displaying this base example only */
      .content .span10,
      .content .span4 {
        min-height: 500px;
      }
      /* Give a quick and non-cross-browser friendly divider */
      .content .span4 {
        margin-left: 0;
        padding-left: 19px;
        border-left: 1px solid #eee;
      }

      .topbar .btn {
        border: 0;
      }

    </style>
  </head>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Vote.Gov</a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Login</h1>
        </div>
        <div class="row">
          <div class="span14">
						<div>
							<form name = "frmRegStud" onsubmit= "validateForm();" method="post">
								<div class="clearfix">
									<label for="studentnumber">student no.</label>
									<div class="input">
										<input type="text" name="studentnumber" placeholder="000-00-0000" id = "studentnumber">
									</div>
								</div>

                <div class="clearfix">
                  <label for="name">Name</label>
                  <div class="input">
                    <input type="text" name="name" id = "studentname">
                  </div>
                </div>

                <div class="clearfix">
                  <label for="surname">Surname</label>
                  <div class="input">
                    <input type="text" name="Surname" id = "surname">
                  </div>
                </div>


								<div class="clearfix">
									<label for="password">password</label>
									<div class="input">
										<input type="password" name="password" id = "password">
									</div>
								</div>

                <div class="clearfix">
                  <label for="email">Email</label>
                  <div class="input">
                    <input type="email" name="email" id = "email">
                  </div>
                </div>


								<div class="actions">
									<input class="btn" type="reset" value="Cancel" onclick="window.location='index.html';">
									<input class="btn primary" type="Submit" value="Continue &rarr;">
								</div>
							</form>
						</div>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; For the Fallists by the Supreme Leader, CPUT. 2017</p>
      </footer>

    </div>

  </body>
</html>

<script type = "text/javascript">

	function validateForm() {

		//var studentnumber = document.forms["frmRegStud"]["studentnumber"].value;
    var studentnumber = document.getElementById("studentnumber").value;
		var studentname = document.getElementById("studentname").value;
		var surname = document.getElementById("surname").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var id = "CVdfvdf";
    //console.log(validateForm());
    console.log(studentnumber+ " "+ name);
        //http://localhost:8080/wooly/addStudent/01/mawande/21333/matanzima/email@gmail.com/mycorrect
    		var url = "http://localhost:8080/wooly/addStudent/"+ id +"/"+ studentname + "/" + studentnumber + "/" + surname + "/" + password + "/" + email;
    		alert(url);
    		var request = new XMLHttpRequest();


    		request.open("GET", url);
    		request.send();
    	}
    </script>
    <?php
    if(isset($_POST) && array_key_exists("studentnumber", $_POST) && array_key_exists("password", $_POST)){
    	if(empty($_POST["studentnumber"]) || empty($_POST["password"])){
    		unset($_POST);
    	}else{
    		header("Location: overview.html");
    	}
    }
    ?>
