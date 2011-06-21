// function pageinit()
// {
//   $("input").autocomplete({
//     source: ["a", "b", "c"]
//   });
//       if (document.getElementById)
//     {
//         var df = document.getElementById('dform');
//         df.onsubmit = function(){
//           alert('HI!')
//           return conDelOrder(); 
//         };
//     }
// }

$(document).ready(function(){	
   // $.YQL('SELECT * FROM csv WHERE url="https://spreadsheets0.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE&single=true&gid=0&output=csv" and col4 = "ug/m^3"', function(data){
     $.YQL('SELECT * FROM csv WHERE url="https://spreadsheets0.google.com/spreadsheet/pub?hl=en_US&hl=en_US&key=0AucLmbn95V37dHh3NFAwTzEzSWplMUpTUW5salgtRkE&single=true&gid=0&output=csv" and col5 like "Concentration%"', function(data){
    var res   = data.query.results;
    var total = res.row.length;
    $('#metadata_res').append("<p>Total rows: " + total + "</p><table id='res_table'>");
      $('#res_table').append("<tr><th>environment</th> <th>section</th> <th>structured comment</th> <th>item</th> <th>units</th> <th>description</th> </tr>");
    
    for (var i = 0; i < total; i++) {
      $('#res_table').append("<tr><td>"+res.row[i].col0+"</td> <td>"+res.row[i].col1+"</td> <td>"+res.row[i].col2+"</td> <td>"+res.row[i].col3+"</td> <td>"+res.row[i].col4+"</td> <td>"+res.row[i].col5+"</td> </tr>");
    }
    $('#res_table').append("</table>");
	});
	
  // bind 'myForm' and provide a simple callback function 
  // $('#myForm').ajaxForm(function() { 
  //     alert("Thank you for your comment!"); 
  // }); 
  
  // pageinit();
});

// TODO: http://api.jquery.com/jQuery.getJSON/

