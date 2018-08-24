function myFunction() {
    var x = document.getElementById("psw");
    if (x.type === "password" ) {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function myOtherFunction(){
    var y = document.getElementById("confpsw");
    if (y.type === "password" ) {
        y.type = "text";
    } else {
        y.type = "password";
    }
    
}