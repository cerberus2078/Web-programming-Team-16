function openPopup() {
    let popup = document.getElementById("popup");
    popup.classList.add("open-popup");
}
function closePopup() {
    let popup = document.getElementById("popup");
    popup.classList.remove("open-popup");
}
function openErrorPopup(error) {
    let popup = document.getElementById("popup-error");
    popup.classList.add("open-popup");
    let PTag = document.getElementById("error-massage");
    PTag.innerHTML = error;
}
function closeErrorPopup() {
    let popup = document.getElementById("popup-error");
    popup.classList.remove("open-popup");
}

function requiredValidate(event) {

    let input = event.target;

    if (input.value.length === 0) {
        alert("This field is required.");
    }
}