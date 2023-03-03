class CourseList {

	constructor() {

		// Get all elements in the page with tag name 'CourseList'
		const courseLists = document.getElementsByTagName('CourseList');

		// Check if any elements were found
		if (courseLists.length > 0) {
		  // The <CourseList> tag exists on the page
		  console.log('CourseList tag found!');
		} else {
		  // The <CourseList> tag does not exist on the page
		  console.log('CourseList tag not found.');
		}

	}

	load() {

		var Course = Backbone.Model.extend({
		  urlRoot: '/wp-json/wp/v2/posts'
		});

		var Courses = Backbone.Collection.extend({
		  model: Course,
		  url: '/wp-json/wp/v2/course'
		});

		var courses = new Courses();
		courses.fetch({
		  data: {},
		  success: function() {
				const coursesJson = courses.toJSON()
		    console.log(coursesJson);

				// Add to chat.
				const courseListEl = document.getElementById('course-list');

				// Generate menu.
				const containerEl = document.createElement('ul')
				coursesJson.forEach((course) => {
					const el = document.createElement('li')
					el.innerHTML = course.title.rendered
					containerEl.appendChild(el)
				})
				courseListEl.appendChild(containerEl)

		  },
		  error: function() {
		    console.log('Error fetching courses.');
		  }
		});
	}

}

const courseList = new CourseList()
courseList.load()
