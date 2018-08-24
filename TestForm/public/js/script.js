function myFunction() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function myOtherFunction() {
    var y = document.getElementById("confpsw");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }

}

function formcheck() {
    var fields = $(".require")
        .find("select, textarea, input").serializeArray();

    $.each(fields, function(i, field) {
        if (!field.value)
            alert(field.name + ' is required');
    });
}
