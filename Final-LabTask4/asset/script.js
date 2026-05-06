function searchEmployee(){
    let keyword = document.getElementById('keyword').value;
    let xhttp   = new XMLHttpRequest();

    let data = {
        'keyword' : keyword
    };

    let employee = JSON.stringify(data);

    xhttp.open('post', '../controller/employeeController.php?action=search', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('employee=' + employee);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let employees = JSON.parse(this.responseText);
            let output = "";

            for(let i = 0; i < employees.length; i++){
                output += "<tr>";
                output += "<td>" + employees[i].id + "</td>";
                output += "<td>" + employees[i].employee_name + "</td>";
                output += "<td>" + employees[i].contact_no + "</td>";
                output += "<td>" + employees[i].username + "</td>";
                output += "<td>" + employees[i].password + "</td>";
                output += "<td>";
                output += "<a href='update.php?id=" + employees[i].id + "'>Update</a>";
                output += "&nbsp;|&nbsp;";
                output += "<a href='../controller/employeeController.php?action=delete&id=" + employees[i].id + "' onclick=\"return confirm('Are you sure you want to delete this employee?')\">Delete</a>";
                output += "</td>";
                output += "</tr>";
            }

            if(output == ""){
                output = "<tr><td colspan='6'>No employee found.</td></tr>";
            }

            document.getElementById('employeeTable').innerHTML = output;
        }
    }
}
