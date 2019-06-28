<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
	<link href="<?php echo base_url('static/'); ?>vuetify.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>

<body>
	<div id="app">
		<v-app>
			<v-toolbar color="red darken-2">
				<v-toolbar-side-icon></v-toolbar-side-icon>
				<v-toolbar-title>DASHBOARD</v-toolbar-title>
				<v-spacer></v-spacer>
				<v-btn flat href="https://www.google.com">Find a Hospital</v-btn>
				<v-btn flat href="<?php echo $add_url; ?>">Register patient</v-btn>
				<v-btn flat href="<?php echo $logout_url; ?>">Logout</v-btn>
			</v-toolbar>

			<v-content>

				<v-layout row wrap justify-center align-center >
<!-- 
					<v-flex ma-3>
						<v-card min-height="500px">
							<v-card-title>Patients</v-card-title>
							<v-card-text></v-card-text>
						</v-card>

					</v-flex>

					<v-flex ma-3>
						<v-card min-height="500px">
							<v-card-title>Patients</v-card-title>
						</v-card>
					</v-flex>

					<v-flex ma-3>
						<v-card min-height="500px">
							<v-card-title>Patients</v-card-title>
						</v-card>
					</v-flex>

					<v-flex ma-3>
						<v-card min-height="500px">
							<v-card-title>Patients</v-card-title>
						</v-card>
					</v-flex> -->

					<v-flex sm3 mt-5>
					<h1 display-4>UNDER DEVELOPMENT</h1>
					</v-flex>
					
				</v-layout>
			</v-content>
		</v-app>
	</div>

	<script src="<?php echo base_url('static/'); ?>vue.js"></script>
	<script src="<?php echo base_url('static/'); ?>vuetify.js"></script>
	<script src="<?php echo base_url('static/'); ?>jquery.js"></script>
	<script src="<?php echo base_url('static/'); ?>dashboard.js"></script>
</body>

</html>
