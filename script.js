$( document ).ready ( function () {
	var url = 'getposts.json';

	$.getJSON( url, function( data ) {
		console.log( data );
		$.each( data.users, function( i, user ) {
			var rows =
				"<tr>"
				+ "<td>" + user.name + "</td>"
				+ "<td><a href='mailto:" + user.url +"''>Send a message</a></td>"
				+ "</tr>";

			$( rows ).appendTo('#data');
		} );
	} );
} );