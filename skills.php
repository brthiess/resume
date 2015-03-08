<div class="skills col-sm-12">
	<div class="col-sm-12 text-center">
		<h2>Skills</h2>
	</div>
	<div class=" col-sm-8 col-sm-offset-2">
		<img class="center-block img-responsive" src="images/gray-line.png">	<br><br>
	</div>

	<div class="col-sm-12">
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="javascript-chart" width="150" height="150"></canvas>
				<div class="percentage">
					75%
				</div>
			</div>
			<div class="skill text-center">
			Javascript
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="bootstrap-chart" width="150" height="150"></canvas>
				<div class="percentage">
					90%
				</div>
			</div>
			<div class="skill text-center">
			Bootstrap
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="jquery-chart" width="150" height="150"></canvas>
				<div class="percentage">
					70%
				</div>
			</div>
			<div class="skill text-center">
			jQuery
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="html-css-chart" width="150" height="150"></canvas>
				<div class="percentage">
					80%
				</div>
			</div>
			<div class="skill text-center">
			HTML/CSS
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="php-chart" width="150" height="150"></canvas>
				<div class="percentage">
					70%
				</div>
			</div>
			<div class="skill text-center">
			PHP
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="ajax-chart" width="150" height="150"></canvas>
				<div class="percentage">
					60%
				</div>
			</div>
			<div class="skill text-center">
			AJAX
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="mysql-chart" width="150" height="150"></canvas>
				<div class="percentage">
					75%
				</div>
			</div>
			<div class="skill text-center">
			MySQL
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="chart-holder center-block">
				<canvas id="python-chart" width="150" height="150"></canvas>
				<div class="percentage">
					85%
				</div>
			</div>
			<div class="skill text-center">
			Python
			</div>
		</div>
	</div>
	
	<script> 
	$( document ).ready(function() { insertChart("javascript-chart", 75);});
	$( document ).ready(function() { insertChart("jquery-chart", 70);});
	$( document ).ready(function() { insertChart("html-css-chart", 80);});
	$( document ).ready(function() { insertChart("python-chart", 85);});
	$( document ).ready(function() { insertChart("mysql-chart", 75);});
	$( document ).ready(function() { insertChart("bootstrap-chart", 90);});
	$( document ).ready(function() { insertChart("php-chart", 70);});
	$( document ).ready(function() { insertChart("ajax-chart", 60);});
	</script>
</div>