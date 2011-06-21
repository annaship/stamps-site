$.YQL = function(query, callback) {
	if (!query || !callback) {
		throw new Error('$.YQL(): Parameters may be undefined');
	}
	var encodedQuery = encodeURIComponent(query),
	url = 'http://query.yahooapis.com/v1/public/yql?q=' + encodedQuery + '&format=json&callback=?';
	$.getJSON(url, callback);
};



// http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col1%20like%20%22building%25%22&format=json&diagnostics=true&callback=cbfunc
// http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets0.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22%20and%20col1%20like%20%22building%25%22&diagnostics=true

// $.YQL = function(query, callback) {
//  if (!query || !callback) {
//    throw new Error('$.YQL(): Parameters may be undefined');
//  }
//  var encodedQuery = encodeURIComponent(query),
//  url = 'http://query.yahooapis.com/v1/public/yql?q=' + encodedQuery + '&format=json&callback=?';
//  $.getJSON(url, callback);
// };

