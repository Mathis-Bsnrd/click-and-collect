$(document).ready(function () {
    document.getElementById("admin").onclick = function () {
        location.href = "/click-and-collect/connexion_admin.php";
    };

    document.getElementById("creation").onclick = function () {
        location.href = "/click-and-collect/inscription.php";
    };
});