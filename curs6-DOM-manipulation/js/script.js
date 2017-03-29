//1 inline function
// window.addEventListener("load", function() {
    // console.log("DOM is fully loaded here");
//  // all JS code should go here
//});

//2 function name
window.addEventListener("load", onHtmlLoaded);

function onHtmlLoaded() {
    console.log ("[onHtmlLoaded]: The page was loaded");
    // all JS code should go here
    //find element by id attribute
    var h2Elem=document.getElementById("page_title");
    //find elements by className attribute
    var p1Elem=document.getElemetsByClassName("content-text");
    //find elements by tagName
var p1ElemByTag = document.getElementsByTagName("p");

console.log(h2Elem);
console.log(p1Elem);
console.log(p1ElemByTag);

//gets the text between open and close HTML tags
var h2Text=h2Elem.innerHTML;
console.log(h2Text);

var p1Text = p1ElemByTag[0].innerHTML;
console.log(p1Text);

//get the value of an HTML attribute
var h2Value=h2Elem.getAttribute("data-value");
console.log(h2Value);

//set text to an HTML node
h2Elem.innerHTML="New title";

//set new value for data-value attribute
h2Elem.setAttribute("data-value", "new data value text");

//set CSS 
h2Elem.style.color="red";

//add/rm css classes
var p1Classes=p1ElemByTag[0].classList;
p1Classes.add("color-green");

p1Classes.remove("p1");

// remove nodes

//first, find the parent for the element you want to remove
var sectionElem=document.getElementById("section_1");
//find the elemnt you want to remove
var toRemoveElem=document.getElementById("to_be_removed");

//remove the element
sectionElem.removeChild(toRemoveElem);

//add DOM node

//create new HTML element
var newElem =document.createElem("nav");
newElem.classList.add("menu");
newElem.innerHTML = "This is the navigation menu";

//find the parent were we want to append the new element
var bodyElem=document.getElemetsByTagName("body")[0];

bodyElem.appendChild(newElem);

//listen to click events
var btnElem=document.getElementById("btn");
btnElem.onclick = function(ev){
    h2Elem.style.color="pink";
    //"this" will refer to the element that was clicked
    this.classList.toggle("color-green");
  }
}
