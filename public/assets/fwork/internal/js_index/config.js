var form_rec_index = document.getElementById("rec_user");
var form_auth_index = document.getElementById("auth_index");

function setVisibleform_auth_index() {
    form_auth_index.style.display = "block";
    form_rec_index.style.display = "none";
}

function setVisibleform_rec_user() {
    form_auth_index.style.display = "none";
    form_rec_index.style.display = "block";
}
