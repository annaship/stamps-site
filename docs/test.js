var yqlURL = 'http://query.yahooapis.com/v1/public/yql?q=%20SELECT%20*%20FROM%20csv%20WHERE%20url%3D%22https%3A%2F%2Fspreadsheets.google.com%2Fspreadsheet%2Fpub%3Fhl%3Den_US%26hl%3Den_US%26key%3D0AucLmbn95V37dFFaR1lhd2NOaUFEVEpyNkdBTmNzYkE%26single%3Dtrue%26gid%3D0%26output%3Dcsv%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=cbfunc';

$.getJSON(yqlURL,function(msg){

	var dl = $('<dl>');

	// Looping through all the entries in the CSV file:
	$.each(msg.query.results.row,function(){

$('#container').html('text can include <b>html code</b>');


df.onsubmit=function(){return conDelOrder()};


function pageinit()
{
  alert('HI!1');
    if (document.getElementById)
    {
        var df = document.getElementById('dform');
        df.onsubmit = function(){return conDelOrder(); alert('HI!')};
    }
}
window.onload=pageinit;

<form id="dform" action="" method="post">
 <input type="hidden" name="act" value="d" />
 <input type="hidden" name="orderid" value="" />
 <input type="hidden" name="transid" value="" />
 <input id="dsub" type="submit" value="DELETE" />
</form>
