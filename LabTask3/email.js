function validateEmail() {
    var email = document.getElementById("mail").value;

    if (email == "") {
        alert("Email cannot be empty");
        return false;
    }

    var at = email.indexOf("@");
    var dot = email.lastIndexOf(".");

    if (at < 1 || dot < at + 2 || dot + 2 >= email.length) {
        alert("Invalid email address");
        return false;
    }

    alert("Valid Email");
    return true;
}