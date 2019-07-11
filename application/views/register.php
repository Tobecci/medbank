<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
	<link href="<?php echo base_url('static/'); ?>vuetify.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>

<body>
	<div id="app">
	<v-app style="background-image: url(<?php echo base_url('img/bg1.jpg') ; ?>); background-size:cover">
			<!-- <v-toolbar
			color="primary"
			>
			<v-toolbar-title class="white--text">MEDBANK</v-toolbar-title>
			</v-toolbar> -->
			<v-layout justify-center mt-5>
				<v-card min-width="600px" height="650px">
					<v-layout justify-center>
					<v-flex sm4 display-1 mt-2>
					<v-card-title class="">MEDBANK</v-card-title>
					</v-flex>
					</v-layout>
					<v-form  action="<?php echo base_url('hospital/register'); ?>" method="post" v-model="valid" id="registration-form" class="mt-2 ml-4 mr-4">
						<v-text-field name="username" class="ml-5 mr-5" v-model="username" :rules="usernameRules" :counter="10" label="Username" required></v-text-field>
						<v-text-field name="password" class="ml-5 mr-5" v-model="password" :rules="passwordRules" :counter="15" :type="'password'" required label="Password"></v-text-field>
						<v-text-field name="password" class="ml-5 mr-5" v-model="passwordConfirm" :rules="passwordRules" :counter="15" :type="'password'" required label="confirm Password"></v-text-field>
						<v-text-field name="hospital_name" class="ml-5 mr-5" v-model="hospitalName" :rules="nameRules"  label="Hospital name" required></v-text-field>
						<v-text-field name="type" class="ml-5 mr-5" v-model="type" :rules="nameRules"  label="Type e.g optometric" required></v-text-field>
						<v-text-field name="location" class="ml-5 mr-5" v-model="location" :rules="nameRules"  label="location" required></v-text-field>
						
						<v-btn class="mb-3 ml-5 " :type="'submit'" color="primary"> Register</v-btn>
						<v-card-text class="ml-4 mb-0 red--text"><?php echo $error; ?></v-card-text>
						<v-card-text class="ma-3">Have an account? <a href="<?php echo base_url('hospital/login'); ?>">Login</a></v-card-text>
					</v-form>
				</v-card>
			</v-layout>
		</v-app>
	</div>

	<script src="<?php echo base_url('static/'); ?>vue.js"></script>
	<script src="<?php echo base_url('static/'); ?>vuetify.js"></script>
	<script src="<?php echo base_url('static/'); ?>jquery.js"></script>
	<script src="<?php echo base_url('static/'); ?>register.js"></script>
</body>

</html>
