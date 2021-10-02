setTimeout(() => {
    document.location.reload();
}, 1000)


//laureatsCounter
//awardsCounter
//teachersCounter
//studentsCounter
/*
const setCounter = (id, current, max, vitesse, aug) => {
    var ele = document.getElementById(id);
    ele.innerHTML = (current + aug) + "+";
    if (current + aug < max) setTimeout(() => {
        setCounter(id, current + aug, max, vitesse, aug)
    }, vitesse)
    else {
        ele.innerHTML = max + "+";
    }
}
setCounter("laureatsCounter", 0, 4999, 1, 20);
setCounter("awardsCounter", 0, 25, 40, 1);
setCounter("studentsCounter", 0, 5000, 1, 20);
setCounter("teachersCounter", 0, 100, 10, 1);*/