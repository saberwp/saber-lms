class Question {

	load( id ) {

		var Question = Backbone.Model.extend({
		  urlRoot: '/wp-json/wp/v2/question'
		});

		var question = new Question({ id: id });
		question.fetch({
		  success: function() {
		    console.log(question.toJSON());
		  },
		  error: function() {
		    console.log('Failed to fetch question.');
		  }
		});

	}

}
