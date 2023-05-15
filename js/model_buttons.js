var coca_cola_points = 0;
var sprite_points = 0;
var dr_pepper_points = 0;

var coca_cola_spot = false;
var sprite_spot = false;
var dr_pepper_spot = false;

var coca_cola_point = false;
var sprite_point = false;
var dr_pepper_point = false;

var coca_cola_head = true;
var sprite_head = true;
var dr_pepper_head = true;

function reset(drink) {
    document.getElementById(drink + "__front").setAttribute("set_bind", "false");
    document.getElementById(drink + "__back").setAttribute("set_bind", "false");
    document.getElementById(drink + "__top").setAttribute("set_bind", "false");
    document.getElementById(drink + "__bottom").setAttribute("set_bind", "false");
    document.getElementById(drink + "__left").setAttribute("set_bind", "false");
    document.getElementById(drink + "__right").setAttribute("set_bind", "false");
}

function frontCamera(drink) {
    reset(drink);
    document.getElementById(drink + "__front").setAttribute("set_bind", "true");  
}

 function backCamera(drink) {
    reset(drink);
    document.getElementById(drink + "__back").setAttribute("set_bind", "true")
}

function leftCamera(drink) {
    reset(drink);
    document.getElementById(drink + "__left").setAttribute("set_bind", "true");

}

function rightCamera(drink) {
    reset(drink);
    document.getElementById(drink + "__right").setAttribute("set_bind", "true");
}

function topCamera(drink) {
    reset(drink);
    document.getElementById(drink + "__top").setAttribute("set_bind", "true");
}

function bottomCamera(drink) {
    reset(drink);
        document.getElementById(drink + "__bottom").setAttribute("set_bind", "true");

}

function rotate(drink) {
    if (document.getElementById(drink + "__clock").getAttribute("enabled") == "true") {
        document.getElementById(drink + "__clock").setAttribute("enabled", "false")
    } else { 
        document.getElementById(drink + "__clock").setAttribute("enabled", "true")
    }
}

function toggleSpotlight(drink) {
    eval(drink + "_spot = !" + drink + "_spot");
    document.getElementById(drink + "__spot").setAttribute("on", eval(drink + "_spot").toString())
}

function toggleToplight(drink) {
    eval(drink + "_point = !" + drink + "_point");
    document.getElementById(drink + "__point").setAttribute("on", eval(drink + "_point").toString())
}

function toggleHeadlight(drink) {
    eval(drink + "_head = !" + drink + "_head");
    document.getElementById(drink + "__head").setAttribute("headlight", eval(drink + "_head").toString())
}

function modelNormal(drink) {
    var e = document.getElementById(drink + "-model");
    if (eval(drink + "_points == 1")) {
        e.runtime.togglePoints(true);
    } 
    if (eval(drink + "_points == -1")) {
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
    }
    eval(drink + "_points = 0");
}

function modelDots(drink) {
    var e = document.getElementById(drink + "-model");
    if (eval(drink + "_points == 0")) {
        e.runtime.togglePoints(true);  
    } 
    if (eval(drink + "_points == 1")) {
        e.runtime.togglePoints(true);
        e.runtime.togglePoints(true);
    }
    eval(drink + "_points = -1");
}

function modelWireframe(drink) {
    var e = document.getElementById(drink + "-model");
    if (eval(drink + "_points == 0")) {
        e.runtime.togglePoints(true);  
        e.runtime.togglePoints(true);  
    }
    if (eval(drink + "_points == -1")) {
        e.runtime.togglePoints(true);  
    }
    eval(drink + "_points = 1");
}