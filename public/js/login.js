let registerFormE1 = document.getElementById("registerForm1");
let registerFormE2 = document.getElementById("registerForm2");

function nextForm() {
    registerFormE1.style.display = "none";
    registerFormE2.style.display = "block";
}

function prevForm() {
    registerFormE2.style.display = "none";
    registerFormE1.style.display = "block";
}
