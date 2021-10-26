const setCounter = (id, current, max, aug) => {
    var ele = document.getElementById(id);
    if (ele == undefined) {

    } else {
        ele.innerHTML = (current + aug) + "+";
        if (current + aug < max) setTimeout(() => {
            setCounter(id, current + aug, max, aug)
        }, 100)
        else {
            ele.innerHTML = max + "+";
        }
    }
}

setCounter("studentsCounter", 0, 5000, 100);
setCounter("teachersCounter", 0, 200, 5);
setCounter("awardsCounter", 0, 3, 1);
setCounter("laureatsCounter", 0, 4999, 100);

function show(src) {
    let ele = document.getElementById("idshowPicture");
    document.getElementById("imagetoshow").src = src;
    ele.className = ele.className.replace(" displayNone", " displayFlex")
}

function cacheimage() {
    let ele = document.getElementById("idshowPicture");
    ele.className = ele.className.replace(" displayFlex", " displayNone")
}

async function sendMail() {
    let fname = document.getElementById("idfname");
    let email = document.getElementById("idemail");
    let sujet = document.getElementById("idsujet");
    let msg = document.getElementById("idmsg");

    document.getElementById("idenvmsg").value = "merci d'attendre une seconde ...";
    if (email.value.length == 0 || msg.value.length == 0 || sujet.value.length == 0) {
        alert("Il faut remplire tout les champs !");
    } else {
        await emailjs.send("service_qf2dzer", "template_ue0xof4", {
            sujet: sujet.value,
            fname: fname.value,
            email: email.value,
            msg: msg.value,
        });

        document.getElementById("idenvmsg").removeAttribute("onclick");
        document.location.href = document.location.href.replace("contact.php", "");

    }

}