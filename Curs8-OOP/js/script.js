//constructor function
function Car (options){
    this.brand=options.brand || "";
    this.owners=options.owner || [];
    this.color=options.color || "";
    this.nrOfKm=options.nrOfKm || 0;
}
Car.prototype.drive=function (Km){
    this.nrOfKm += km; // this.nrOfKm= this.nrOfKm + km 
    console.log("I'm driving"+ km + "kilometers on the highway");
}
Car.prototype.startEngine=function (){
    console.log("Starting engine for:"+ this.brand);
    console.log("Current number of km:"+this.nrOfKm);
}
Car.prototype.stopEngine = function(){
    console.log("stopping engine at: " + this.nrOfKm);
}
var car1 = new Car({
   brand:"VW",
   owners: ["John", "Ana"],
   color: "red",
   km:5000
});

var carOptions = {
    brand:"Ford",
    km:10000
}
car2 = new Car(carOptions);
car3 = new Car ({
 brand:"BMW",
 color: "black",
});

function Comment {
    this.content=options.content || "";
    this.author=options.author || "";
    this.timestamp=options.timestamp || "";
}
Comment.prototype.SaveComment= function(){
    console.log("Comment data")
}

var commnent=new Commnent({
    content:"Test Content",
    author:"Name of the Author",
    Timestamp:"15 Jan",
});