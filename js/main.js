setTimeout(() => {
    document.location.reload();
}, 1000)


//laureatsCounter
//awardsCounter
//teachersCounter
//studentsCounter

const setCounter = (id, current, max, aug) => {
    var ele = document.getElementById(id);
    ele.innerHTML = (current + aug) + "+";
    if (current + aug < max) setTimeout(() => {
        setCounter(id, current + aug, max, aug)
    }, 100)
    else {
        ele.innerHTML = max + "+";
    }
}
setCounter("laureatsCounter", 0, 4999, 100);
setCounter("awardsCounter", 0, 25, 1);
setCounter("studentsCounter", 0, 5000, 100);
setCounter("teachersCounter", 0, 200, 5);