var t;

function manageBtn() {
    if(t) {
        document.getElementById('side-menu').style.width = '0';
        document.getElementById('btn').style.transform = 'rotate(0deg)';
    }
    else {
        document.getElementById('side-menu').style.width = '250px';
        document.getElementById('btn').style.transform = 'rotate(90deg)';
    }
    t = !t;
}