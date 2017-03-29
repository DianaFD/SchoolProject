var car={
    model:"VW",
    drivers:["john","mike","kevin"],
    km:780000,
    drive:function(kilometers){
    console.log("I'm driving",+kilometers+"km"); 
    },
    stopEngine:function(){
    console.log("I'm stopping the engine now");
    },
    startEngine:function(){
        console.log("I'm starting the engine");
    },
    listDrivers:function(){
        var drivers=this.drivers;
        for (var i=0; i<drivers.length; i++);
        console.log(drivers[i]);
        }
}

function driveCar(){
//function goes here
}

// Santa

function getPresent(typeOfPerson,verdict){
    var p=["doll","car","book","boring socks","stick"];
    if (typeOfPerson=='boys'&& verdict=="good"){
    return p[1];
    }    
    if(typeOfPerson=='boys'&& verdict=="naughty"){
        return p[5];
    }
    if (typeOfPerson=='girls'&& verdict=="good"){
        return p[0]
    }        
    else if(verdict=='naughty'){
        return get.Present(p5);
    }
    if (typeOfPerson=='adults');
        verdict:good
    }
    return get.Present(p3);
    }else if (verdict=='naughty'){
        return get.Present(p4);
    }



//the result should be getPresent("girl","good")-->doll