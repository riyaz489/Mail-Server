function func1() {

    // var a = document.f1.n1.value;
    var a = document.f1.n1.value;
    var b = document.f1.p1.value;
    var el1 = document.getElementById("l1");
    var el2 = document.getElementById("l2");
    if (a == "") {
        el1.innerHTML = "please enter your id";
        el2.innerHTML = "";
        document.f1.n1.focus();
    } else if (b == "") {
        el2.innerHTML = "please enter your password";
        el1.innerHTML = "";
        document.f1.p1.focus();
    } else {
        document.f1.submit();
    }
}



function func2() {
    var a = document.f2.n1.value;
    var b = document.f2.p1.value;
    var c = document.f2.h1.value;
    var el1 = document.getElementById("l2-1");
    var el2 = document.getElementById("l2-2");
    var el3 = document.getElementById("l2-3");
    if (a == "") {
        el1.innerHTML = "please enter your id";
        el2.innerHTML = "";
        el3.innerHTML = "";

        document.f2.n1.focus();

    } else if (b == "") {
        el2.innerHTML = "please enter your password";
        el1.innerHTML = "";
        el3.innerHTML = "";

        document.f2.p1.focus();
    } else if (c == "") {
        el3.innerHTML = "please enter your Hint answer";
        el2.innerHTML = "";
        el1.innerHTML = "";

        document.f2.h1.focus();
    } else {

        document.f2.submit();

    }
}

function func3() {
    var b = document.f2.p1.value;
    var el1 = document.getElementById("l2-1");
    var el2 = document.getElementById("l2-2");
    var el3 = document.getElementById("l2-3");


    if (b.length < 6 || b.length > 15) {
        el2.innerHTML = "password should be less than 15 and greater than 5";
        el1.innerHTML = "";
        el3.innerHTML = "";

        document.f2.p1.focus();

    } else
    if (!(/[a-z]/g.test(b) && /[A-Z]/g.test(b) && /[0-9]/g.test(b) && /[!@#\$%\^&\*]/g.test(b))) {
        el2.innerHTML = "password should containt atleast one upper,one lowercase ,one numeric and one special character";
        el1.innerHTML = "";
        el3.innerHTML = "";
        document.f2.p1.focus();


    } else el2.innerHTML = "";
}