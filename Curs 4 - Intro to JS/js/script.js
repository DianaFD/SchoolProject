console.log("JS is loaded");
//console.log(confirm("Are you sure?"));
//console.log(prompt("What is your name?"));

//this is the short comment
/* This is the long comment
on multiple line*/

var firstVar;
console.log(firstVar);
firstVar=3;
console.log(firstVar);
firstVar=5
console.log(firstVar);

var secondVar=10;
var result = firstVar+secondVar;
console.log("Rezultatul adunarii este:"+result);

function addNumbers(){
    var x1=5;
    var x2=7;
    console.log(x1+x2);
}

addNumbers();

/*function addNumnersWithParams(x1,x2){
    var result= x1+x2;
    console.log("The result is: "+result);
}
addNumnersWithParams(1,2);
addNumnersWithParams(2,9);
addNumnersWithParams(11,18);
addNumnersWithParams(20,3);

function addNumberWithReturn(x1,x2){
    return x1+x2; /*nu se mai executa cod dupa linia asta*/


function buildStrings(s1,s2){
    return s1+" "+s2;
}
var fullName = buildStrings("Diana","Daroczi");
console.log("My name is "+fullName);

var arr=["first elem", 2, 3.99,["orange","apple"]];
console.log(arr[1]);
console.log(arr[0]);
console.log(arr[3][1]);

for (var i=0;i<arr.length;i++){
    console.log(arr[i]);
}

var arr2 = [2,5,6,8,9]
var prod = 1
for (var i=0;i<arr2.length;i++){
prod=prod * arr2[i];
}
console.log(prod);
 /* Homework*/
 function calculator(op,elements){
     //TBD
 }
 
 calculator("add", (234,5))
 
 //the homework starts below
 function sum(a,b){
    console.log(a+b);
}
sum(2,5);

//Car
//model:String
//diver:Array
//km:Integer
//method:drive(KM)
//stopEngine()
//startEngine()

var car= {
    model:
}