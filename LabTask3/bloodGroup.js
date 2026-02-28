function validateBlood() {
    var b = document.getElementById("blood").value;

    if (b == "") {
        alert("Please select blood group");
        return false;
    }

    alert("Blood group selected");
    return true;
}