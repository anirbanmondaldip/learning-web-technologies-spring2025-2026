function validateName() {
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

    alert("Valid Name");
    return true;
}