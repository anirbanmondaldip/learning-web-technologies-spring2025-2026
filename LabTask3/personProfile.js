function validatePersonProfile() {

    /* NAME */
    var name = document.getElementById("name").value;

    if (name == "") {
        alert("Name cannot be empty");
        return false;
    }

    if (!isNaN(name[0])) {
        alert("Name must start with a letter");
        return false;
    }

    var words = name.split(" ");
    if (words.length < 2) {
        alert("Name must contain at least two words");
        return false;
    }

    for (var i = 0; i < name.length; i++) {
        var ch = name[i];
        if (!((ch >= 'a' && ch <= 'z') ||
              (ch >= 'A' && ch <= 'Z') ||
              ch == '.' || ch == '-' || ch == ' ')) {
            alert("Invalid character in name");
            return false;
        }
    }

    /* EMAIL */
    var email = document.getElementById("email").value;

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

    /* GENDER */
    var g = document.getElementsByName("gender");
    var genderSelected = false;

    for (var i = 0; i < g.length; i++) {
        if (g[i].checked) {
            genderSelected = true;
        }
    }

    if (!genderSelected) {
        alert("Please select gender");
        return false;
    }

    /* DATE OF BIRTH */
    var d = document.getElementById("dd").value;
    var m = document.getElementById("mm").value;
    var y = document.getElementById("yyyy").value;

    if (d == "" || m == "" || y == "") {
        alert("Date of birth cannot be empty");
        return false;
    }

    if (d < 1 || d > 31 || m < 1 || m > 12 || y < 1900 || y > 2016) {
        alert("Invalid date");
        return false;
    }

    /* BLOOD GROUP */
    var blood = document.getElementById("blood").value;

    if (blood == "") {
        alert("Please select blood group");
        return false;
    }

    /* DEGREE */
    var deg = document.getElementsByName("degree");
    var degreeSelected = false;

    for (var i = 0; i < deg.length; i++) {
        if (deg[i].checked) {
            degreeSelected = true;
        }
    }

    if (!degreeSelected) {
        alert("Select at least one degree");
        return false;
    }

    /* PHOTO */
    var photo = document.getElementById("photo").value;

    if (photo == "") {
        alert("Photo cannot be empty");
        return false;
    }

    alert("All information is valid");
    return true;
}