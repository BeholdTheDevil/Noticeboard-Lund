function addTextFix(className) {
    let input = document.getElementsByClassName(className);
    let sizefactor = 0.2;
    let emailregex = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;

    for(let i = 0; i < input.length; i++) {
        let distance = window.getComputedStyle(input[i].parentNode.childNodes[1], null).getPropertyValue('font-size');

        if(input[i].value != "") {
            input[i].parentNode.childNodes[1].style.top = 0;
        } else {
            input[i].parentNode.childNodes[1].style.top = distance;
        }
    }

    for(let i = 0; i < input.length; i++) {
        let distance = window.getComputedStyle(input[i].parentNode.childNodes[1], null).getPropertyValue('font-size');

        input[i].addEventListener('focusout', function() {
            if(this.value != "") {
                this.parentNode.childNodes[1].style.top = 0;
                this.parentNode.childNodes[1].style.color = "rgba(0, 0, 0, 0.54)";
            } else {
                this.parentNode.childNodes[1].style.top = distance;
                this.parentNode.childNodes[1].style.color = "#B71C1C";
            }
        }, false);
        input[i].addEventListener('focusin', function() {
            let distance = window.getComputedStyle(input[i].parentNode.childNodes[1], null).getPropertyValue('font-size');
            this.parentNode.childNodes[1].style.top = 0;
        }, false);
    }
}

window.onload = function() {
    addTextFix("inputField");
}
