function validateDOB() {
    var d = document.getElementById("dd").value;
    var m = document.getElementById("mm").value;
    var y = document.getElementById("yyyy").value;

    if (d == "" || m == "" || y == "") {
        alert("Date cannot be empty");
        return false;
    }

    if (d < 1 || d > 31 || m < 1 || m > 12 || y < 1900 || y > 2016) {
        alert("Invalid Date");
        return false;
    }

    alert("Valid Date");
    return true;
}