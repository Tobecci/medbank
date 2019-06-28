var app = new Vue({
    el:"#app",
    data: {
		valid: false,
		username: '',
		password: '',
		usernameRules: [
			v => v.length <= 10 || 'username is too long',
      v => !!v || 'username is required'
		],
		passwordRules: [
			v => v.length >= 4 || 'password is too short',
      v => !!v || 'password is required'
		],
    },
    methods: {       
    },
});
