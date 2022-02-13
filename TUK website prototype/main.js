function none() {
    document.getElementById("homepage").style.display = "none";
    document.getElementById("contactpage").style.display = "none";
    document.getElementById("admissions").style.display = "none";
    document.getElementById("studentloginpage").style.display = "none";
    document.getElementById("staffloginpage").style.display = "none"; 
}
function menu() {
    document.getElementById("home").className = ("menu");
    document.getElementById("students").className = ("menu");
    document.getElementById("staff").className = ("menu");
    document.getElementById("contacts").className = ("menu");
}
function home() {
    menu();
    document.getElementById("home").className = ("active");
    none();
    document.getElementById("homepage").style.display = "block";
}
function students() {
    menu();
    document.getElementById("students").className = ("active");
}
function staff() {
    menu();
    document.getElementById("staff").className = ("active");
}
function contacts() {
    menu();
    document.getElementById("contacts").className = ("active");
    none();
    document.getElementById("contactpage").style.display = "flex";
}
function studentportal() {
    none();
    document.getElementById("studentloginpage").style.display = "block";
}
function admissions() {
    none();
    document.getElementById("admissions").style.display = "block";
}
function staffportal() {
    none();
    document.getElementById("staffloginpage").style.display = "block";
}
function feedback() {
    alert("Feedback is currently not yet availabe!");
    location.reload();
}