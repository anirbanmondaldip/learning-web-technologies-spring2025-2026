function validateProfile() {
    var id = document.getElementById("u_nid").value;
    var pic = document.getElementById("picture").value;

    if (id == "" || id <= 0) {
        alert("User ID must be positive number");
        return false;
    }

    if (pic == "") {
        alert("Picture cannot be empty");
        return false;
    }

    alert("Valid");
    return true;
}