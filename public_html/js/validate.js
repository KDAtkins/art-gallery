Dropzone.options.uploads = {

	maxFilesize: 20,
	acceptedFiles: ".png, .jpeg, .jpg, .bmp",
	success: function(file, response) {
		if(file.status === 'success'){
			handleResponse.handleSuccess(response);
		} else {
			handleResponse.handleError(response);
		}
	}
};

var handleResponse = {
	handleError: function(response) {
		console.log(response);
	},

	handleSuccess: function(response) {
		var msg = document.getElementById('msg');
		msg.innerHTML = 'Upload Successful';
	}
};