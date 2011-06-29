function highlightLink()
{var i,menu_tag,thisPage,my_obj;menu_tag='nav';my_obj=document.getElementById(menu_tag).childNodes[1].children;myURI=my_obj[0].baseURI;thisPage=myURI.substring(myURI.lastIndexOf("/")+1,myURI.length)
for(i=0;i<my_obj.length;i++){myHref=my_obj[i].childNodes[0].href;pageLink=myHref.substring(myHref.lastIndexOf("/")+1,myHref.length);if(thisPage==pageLink)
{my_obj[i].childNodes[0].className="current";}}}
window.onload=function(){highlightLink();}