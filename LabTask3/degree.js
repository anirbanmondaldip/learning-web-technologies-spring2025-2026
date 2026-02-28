function validateDegree() {
    var d = document.getElementsByName("degree");

    for (var i = 0; i < d.length; i++) {
        if (d[i].checked) {
            alert("Degree selected");
            return true;
        }
    }

    alert("Select at least one degree");
    return false;
}