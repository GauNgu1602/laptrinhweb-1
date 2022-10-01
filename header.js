var searchbar = document.getElementById('search-bar');
var menu = document.getElementById('action-menu');
searchbar.style.visibility = 'hidden';
function showsearchbar(){
    if(searchbar.style.visibility == 'hidden')
		searchbar.style.visibility = 'visible';
        menu.style.visibility = "hidden";
		searchbar.style.right = "0";

}
function hidesearchbar(){
    searchbar.style.visibility = 'hidden';
    menu.style.visibility = "visible";
}
