function validateGender() {
    var g = document.getElementsByName("gender");

    for (var i = 0; i < g.length; i++) {
        if (g[i].checked) {
            alert("Gender selected");
            return true;
        }
    }

    alert("Please select gender");
    return false;
}