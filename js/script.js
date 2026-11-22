
function validateForm() {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let course = document.getElementById("course").value;

    if (name.trim() === "") {
        alert("Please enter student name");
        return false;
    }

    if (email.trim() === "") {
        alert("Please enter email");
        return false;
    }

    if (course.trim() === "") {
        alert("Please enter course");
        return false;
    }

    return true;
}
