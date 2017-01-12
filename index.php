<?php
include_once 'functions.php';
?>
<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    
    <title>Tutorial de Ajax(ajito)</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    
     <!-- Font awesome CDN -->
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     
     <style>
	 	.btn-col {
			width: 38px;
		}
	 </style>
     
    </head>
    
    <body>
        <div class="container-fluid">
        
        	<header class="row">
                <div class="col-xs-6">
                	<a href="#">Enter Restore Mode</a>
                </div>
                
                <div class="col-xs-6 text-right">
                	Total Time: <span id="tally"></span>
                </div>
                
            </header><!-- End of header row -->
            
            <div class="row">
            	<form id="form-new">
                    <div class="col-xs-10">
                        <input id="name" name="name" class="form-control" placeholder="Enter new task name ..." type="text">
                    </div>
                    
                    <div class="col-xs-2">
                        <button type="submit" class="btn btn-block btn-success"><?php echo i('play'); ?></button>
                    </div>
       			</form>
            </div><!-- End div row -->
            
            <hr>
            
            <table class="table table-bordered">
            
            	<thead>
                	<tr><th>Task</th><th>Start</th><th>End</th><th>Time</th><th colspan="2">Controls</th></tr>
                </thead>
                
                <tbody id="log"></tbody>
            
            </table>
            
        </div><!-- End of fluid container -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>
      <!-- App scripts -->
    <script src="atom.tracker.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>