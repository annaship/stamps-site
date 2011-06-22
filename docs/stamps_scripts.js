function highlightLink()
{
  var i, menu_tag, thisPage, my_obj;
  menu_tag = 'nav';

//Get filename from the URL
	// thisPage = document.URL.substring(document.URL.lastIndexOf("/")+1, document.URL.length);
  // for (n=1; n < 3; n++ ) {
    // my_obj = document.getElementById('nav').childNodes[1].childNodes[n].getElementsByTagName('a');
    my_obj = document.getElementById('nav').childNodes[1].children;
    myURI = my_obj[0].baseURI;
    thisPage = myURI.substring(myURI.lastIndexOf("/")+1, myURI.length)
    // window.alert(thisPage);
    for (i=0; i < my_obj.length; i++ ) {
      myHref = my_obj[i].childNodes[0].href;
      pageLink = myHref.substring(myHref.lastIndexOf("/")+1, myHref.length);
       if (thisPage == pageLink)
       {
         my_obj[i].childNodes[0].className = "current";
         // alert(my_obj[i].childNodes[0].className)
       }
    }
  // }
}


window.onload = function() {
  highlightLink();
}

// // window.alert(document.getElementById('nav').childNodes[1].children.length);

//     for (i=0; i < my_obj.length; i++ )
// {
//  //Get only the filename from the href of navigation link attributes
//  pageLink = my_obj[i].href.substring(my_obj[i].href.lastIndexOf("/")+1,
//         my_obj[i].href.length);
//       //   window.alert(n);
//       // window.alert(pageLink);
//         // window.alert(my_obj[0].href);
//  if (thisPage == pageLink)
//  {
//    my_obj[i].className = "current";
//  }
// }