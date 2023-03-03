class QuestionList {

	load() {

		var Question = Backbone.Model.extend({
		  urlRoot: '/wp-json/wp/v2/posts'
		});

		var Questions = Backbone.Collection.extend({
		  model: Question,
		  url: '/wp-json/wp/v2/question'
		});

		var questions = new Questions();
		questions.fetch({
		  data: {},
		  success: function() {
				const questionsJson = questions.toJSON()
		    console.log(questionsJson);

				// Add to chat.
				const questionListEl = document.getElementById('question-list');

				// Generate menu.
				const containerEl = document.createElement('ul')
				questionsJson.forEach((question) => {
					const el = document.createElement('li')
					el.innerHTML = question.title.rendered
					containerEl.appendChild(el)
				})
				questionListEl.appendChild(containerEl)

		  },
		  error: function() {
		    console.log('Error fetching questions.');
		  }
		});
	}

}

const questionList = new QuestionList()
questionList.load()
