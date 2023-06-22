let inputTelefono = document.getElementById("telefono");
// let exter = document.getElementById("external");
// let exterHover = document.getElementById("externalHover");
// let externalA = document.getElementById("externalA");
let datos = document.getElementsByClassName("datosPersona");
let form = document.getElementById("personalData");
let number = 0;


function clean() {
    form.reset();
}

function socialLink(red) {
    let link = "";
    switch (red) {
        case "ninguna":
            link = ""; // si
            break;
        case "youtube":
            link = "https://www.youtube.com/channel/@"; // si
            break;
        case "reddit":
            link = "https://www.reddit.com/user/"; // si
            break;
        case "twitter":
            link = "https://twitter.com/"; // si
            break;
        case "twitch":
            link = "https://www.twitch.tv/"; // si
            break;
        case "steam":
            link = "https://steamcommunity.com/id/"; // si
            break;
        case "github":
            link = "https://github.com/"; // si
            break;
        case "discord":
            link = "Discord: xxxxx#xxxx"; // si
            break;
        case "facebook":
            link = "https://www.facebook.com/"; // si
            break;
        case "instagram":
            link = "https://www.instagram.com/"; // si
            break;
        case "snapchat":
            link = "https://www.snapchat.com/add/"; // si
            break;
        case "tiktok":
            link = "https://www.tiktok.com/@"; // si
            break;
        case "otro":
            link = "Pon aquí tu link";
            break;
        default:
            link = "";
            break;
    }
    document.getElementById("social").value = link;
}

inputTelefono.addEventListener("input", function (event) {
    if (event.target.value.startsWith("+")) {
        number = event.target.value.replace(/[^\d+]/g, "").substring(0, 13);
        event.target.value = number;
    } else {
        number = event.target.value.replace(/\D/g, "").substring(0, 10);
        event.target.value = number;
    }
});





// CSSPropertyRule("input[type=tel]::-webkit-outer-spin-button", "display: none;");

/*

for (let i = 0; i < datos.length; i++) {
    datosPersona[i].addEventListener("input", function (event) {
        if (event.target.value.length > 0) {
            
        } else {
            
        }
    });
}

*/

// function onlyPhoneLength(value) {
//     if (value.startsWith("+")) {
//         if (value.length > 13) {
//             inputTelefono.value = inputTelefono.value.slice(0, 13);
//             console.log("tiene mas de 13");
//         }
//     } else {
//         if (value.length > 10) {
//             inputTelefono.value = value.slice(0, 10);
//             console.log("tiene mas de 10");
//         }
//     }
// }


// inputTelefono.addEventListener("input", function (event) {
//     const phoneNumber = event.target.value.replace(/\D/g, "").substring(0, 10);
//     event.target.value = phoneNumber;
// });

// function mouseHover() {
//     exter.style.stroke = "#199696";
// }

// function mouseOut() {
//     exter.style.stroke = "#33a2a2";
// }

// function externalOpen() {
//   window.top.location.href = "add.html";
// }

// externalA.href = "https://api.whatsapp.com/send?phone=+52" + inputTelefono.value;

// if (window.self !== window.top) {
//     externalA.style.display = "block";
// } else {
//     externalA.style.display = "none";
// }