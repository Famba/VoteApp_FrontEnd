
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Page: VoteApp.ZA</title>
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
          <a class="brand" href="#">VoteApp.ZA</a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Confirm Your Votes</h1>
        </div>
        <div class="row">
          <div class="span11 offset2">
            <h2>Here are your votes, listed per position:</h2>
						<ul>
							<li>President:
								<ul>
									<li>Ayakha CPUT Jesus <small><a href="presidential.php">(change)</a></small></li>
								</ul>
							</li>
							<li>Deputy President:
								<ul>
									<li>Propa Ganda Faku <small><a href="congressional.php">(change)</a></small></li>
								</ul>
							</li>
							<li>Ithaca, NY Mayor:
								<ul>
									<li>Svante Myrick <small><a href="mayoral.php">(change)</a></small></li>
								</ul>
							</li>
						</ul>
          </div> <!-- /.span11.offset2 -->
          <div class="span8 offset3">
						<a class="btn danger" href="overview.html">No, let me change my vote.</a>
						<a class="btn success" href="submit.php">Yes, submit my vote!</a>
          </div> <!-- /.span8.offset3 -->
        </div>
      </div>

      <footer>
        <p>&copy;For the Fallists by the Supreme Leader, CPUT. 2017</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
