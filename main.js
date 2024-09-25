document.addEventListener('DOMContentLoaded', function() {
    console.log('Laurens Preparatory Academy website loaded');
});

var hidden = true;
var hidden2 = true;
var hidden3 = true;

function switchAll(other1, other2) {
    other1.style.display = "none";
    other2.style.display = "none";
    hidden = true;
    hidden2 = true;
    hidden3 = true;
};

function toggle() {
    var menu = document.getElementById("menu");
    var menu2 = document.getElementById("menu2");
    var menu3 = document.getElementById("menu3");
    if(hidden) {
        switchAll(menu2, menu3);
        menu.style.display = "block";
        hidden = false;
    } else {
        menu.style.display = "none";
        hidden = true;
    };
};

function toggle1() {
    var menu = document.getElementById("menu");
    var menu2 = document.getElementById("menu2");
    var menu3 = document.getElementById("menu3");
    if(hidden2) {
        switchAll(menu, menu3);
        menu2.style.display = "block";
        hidden2 = false;
     } else {
        menu2.style.display = "none";
        hidden2 = true;
    };
};

function toggle2() {
    var menu = document.getElementById("menu");
    var menu2 = document.getElementById("menu2");
    var menu3 = document.getElementById("menu3");
    if(hidden3) {
        switchAll(menu, menu2);
        menu3.style.display = "block";
        hidden3 = false;
    } else {
        menu3.style.display = "none";
        hidden3 = true;
    };
};