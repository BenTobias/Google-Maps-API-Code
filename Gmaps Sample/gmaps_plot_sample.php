<html>
  <head>
      <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key={YOUR_API_KEY}&sensor=true">
      </script>
      <link rel="stylesheet" type="text/css" media="all" href="bootstrap/css/bootstrap.min.css">
      <style>
      	#page_title{
      		padding: 1em 0;
      		font-size: 30px;
      		font-weight: bold;
      	}
      	#input_form_title{
      		padding-bottom: 1em;
      		font-size: 20px;
      		font-weight: bold;
      	}
      	#options{
      		margin-bottom: 1em;
      	}

      </style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div id="page_title" class="span12">GMaps.js with QI API Sample</div>
		</div>

		<div class="row">
			<div id="input_form_title" class="span12">Input Form</div>
		</div>

		<form method="post" id="geocoding_form" class="form-inline">
			<fieldset>
		        <div class="input">
		        	<label class="checkbox">
		        		<input type="checkbox" class="route_type" value="cheapest" />Cheapest
		        	</label>
		        	<label class="checkbox">
						<input type="checkbox" class="route_type" value="traffic" />Traffic
					</label>
					<label class="checkbox">
						<input type="checkbox" class="route_type" value="shortest" />Shortest
					</label>
					<label class="checkbox">
						<input type="checkbox" class="route_type" value="fastest" />Fastest
					</label>
					<br/>
					<label class="text">
						Destination Address
		            	<input type="text" id="address" name="address" />
		            </label>
		            <input type="submit" class="btn btn-primary" value="Search" />
		        </div>
	    	</fieldset>
	    </form>

		<div id="title" style="padding-top:1em; padding-bottom: 1em;"></div>
		<div id="options">
			<div class="cheapest" style="display:none"><input type="button" class="btn btn-info" value="Cheapest" /></div>
			<div class="traffic" style="display:none"><input type="button" class="btn btn-info" value="Traffic" /></div>
			<div class="shortest" style="display:none"><input type="button" class="btn btn-info" value="Shortest" /></div>
			<div class="fastest" style="display:none"><input type="button" class="btn btn-info" value="Fastest" /></div>
		</div>
		<div id="mapbody">
			<div id="map_canvas" style="width:70%; height:90%; float: left;"></div>
			<div id="waypoints"></div>
			<div id="directions" style="width:25%; height:90%; float:right;"></div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="gmaps.js"></script>
	<script type="text/javascript" src="SVY21toLLConverter.js"></script>
	<script type="text/javascript" src="nav_gmaps_sample.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>