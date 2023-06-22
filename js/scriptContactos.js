// let iframe = document.getElementById("iframeNew");
// let button = document.getElementsByClassName("buttonNew")[0];
// let svgX = document.getElementById("x");
// let svgPlus = document.getElementById("plus");
let copied = document.getElementById("copied");
let right = true;


function copyText(event) {
    let text = event.target.innerText;
    navigator.clipboard.writeText(text);
    copied.style.opacity = "1";
    setTimeout(function () {
        copied.style.opacity = "0";
    }
        , 1000);
}

function confirm() {
    
}


// function search(value) {
//     let contacts = document.getElementsByClassName("datoPersona");
//     for (let i = 0; i < contacts.length; i++) {
//         let arrayContacts = [
//             "contacto"
//         ]

//     }

// }

// function iframeNew() {
//     if (right == true) {
//         document.getElementById("iframeNew").style.right = "0";
//         button.classList.add("buttonMove");
//         svgX.style.display = "block";
//         svgPlus.style.display = "none";
//         right = false;
//     } else {
//         document.getElementById("iframeNew").style.right = "-51%";
//         button.classList.remove("buttonMove");
//         svgX.style.display = "none";
//         svgPlus.style.display = "block";
//         right = true;
//     }

// }