//display abstract from id on a new modal box
function displayAbstract (abstractId) {
    let abstractBox = document.getElementById(abstractId);
    abstractBox.style.display = "block";
}

function closeModal(abstractId) {
    let abstractBox = document.getElementById(abstractId);
    abstractBox.style.display = "none";
}

function toggleDisplay(elemId) {
    let card = document.getElementById(elemId);
    let fullInfo = card.querySelector('.info-full');

    if (card.style.width == "100%") {
        card.style.width = "max(10%, 105px)";
        card.style.borderRadius = "5px 0  0 5px";
        fullInfo.style.display = "none";
    }
    else {
        card.style.width = "100%";
        card.style.borderRadius = "5px";
        fullInfo.style.display = "grid";
    }
}