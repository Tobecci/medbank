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

			<v-layout align-center justify-center>
				
				<v-card>
					<v-layout justify-center>
					<v-flex sm4>
					<v-card-title class="" font-weigth-bold>MEDBANK</v-card-title>
					
					</v-flex>
					</v-layout>
					<v-form action="<?php echo base_url('hospital/login'); ?>" method="post" v-model="valid" class="mt-2">
						<v-text-field name="username" class="ml-5 mr-5" v-model="username" :rules="usernameRules" :counter="10" label="Username" required></v-text-field>
						<v-text-field name="password" class="ml-5 mr-5" v-model="password" :rules="confirmRules" :type="'password'" required label="Password"></v-text-field>
						<v-btn class="mb-3 ml-5" :type="'submit'" color="primary" id="load"> Login</v-btn>
						<v-card-text class="ma-3">Don't have an account? <a href="<?php echo base_url('hospital/register'); ?>">Create account</a></v-card-text>
					</v-form>
				</v-card>
			</v-layout>
		</v-app>
	</div>

	<script src="<?php echo base_url('static/'); ?>vue.js"></script>
	<script src="<?php echo base_url('static/'); ?>vuetify.js"></script>
	<script src="<?php echo base_url('static/'); ?>jquery.js"></script>
	<script src="<?php echo base_url('static/'); ?>add_patient.js"></script>
</body>

</html>
