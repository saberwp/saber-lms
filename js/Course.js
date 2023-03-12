class Course {

	init() {

		const registerButtonEl = document.getElementById('course-register-button')
		registerButtonEl.addEventListener('click', (e) => {

			const courseId = e.currentTarget.getAttribute('course-id')

			const username = 'admin';
			const password = 'iZ5y 5bGG FGAo kRrL 1EYg svgp';
			const credentials = `${username}:${password}`;
			const encodedCredentials = btoa(credentials);

			fetch('/wp-json/saberlms/v1/course/' + courseId + '/register', {
		    method: 'POST',
		    headers: {
	        'Content-Type': 'application/json',
					'Authorization': `Basic ${encodedCredentials}`,
	        'X-WP-Nonce': saberLmsData.nonce,
		    },
				credentials: 'include',
		    body: JSON.stringify({}),
			})
			.then(response => {
		    if (!response.ok) {
		    	throw new Error(response.statusText);
		    }
		    return response.json();
			})
			.then(data => {
		    console.log(data);
			})
			.catch(error => {
		    console.error(error);
			});

		})

	}

}

// Setup if element found.
const registerButtonEl = document.getElementById('course-register-button')
if( registerButtonEl ) {
	var course = new Course()
	course.init()
}
