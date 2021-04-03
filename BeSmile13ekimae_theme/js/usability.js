window.addEventListener('load', function() {
    setTextSize();
});
function setTextSize() {
    cookieFontSize = '100%';
    if(document.cookie != null) {
        var cookies = document.cookie;
        var cookiesArray = cookies.split(';');

        for (var c of cookiesArray) {
            var cArray = c.split('=');
            if (cArray[0] == 'fontSize') {
                cookieFontSize = cArray[1];  // [key,value]
            }
        }
    }
    if(cookieFontSize != '100%') {
        currentSize = cookieFontSize;
        selectSize = cookieFontSize;
    } else {
        currentSize = document.getElementById("body").style.fontSize;
        selectSize = '100%';
    }
    document.getElementById("body").style.fontSize = selectSize;
    setCookie(selectSize);
}
function textSizeUp() {
    cookieFontSize = '100%';
    if(document.cookie != null) {
        var cookies = document.cookie;
        var cookiesArray = cookies.split(';');

        for (var c of cookiesArray) {
            var cArray = c.split('=');
            if (cArray[0] == 'fontSize') {
                cookieFontSize = cArray[1];  // [key,value]
            }
        }
    }
    if(cookieFontSize != '100%') {
        currentSize = cookieFontSize;
        selectSize = cookieFontSize;
    } else {
        currentSize = document.getElementById("body").style.fontSize;
        selectSize = "";
    }
    if (currentSize == "100%") {
        selectSize = "110%";
    } else if (currentSize == "110%") {
        selectSize = "120%";
    } else if (currentSize == "120%") {
        selectSize = "130%";
    } else if (currentSize == "130%") {
        m = escape("これ以上文字のサイズを大きくできません。");
        alert(unescape(m));
        selectSize = "130%";
    } else {
        selectSize = "110%";
    }
    document.getElementById("body").style.fontSize = selectSize;
    setCookie(selectSize);
}

function textSizeReset() {
    currentSize = document.getElementById("body").style.fontSize;
    currentSize = "";
    document.getElementById("body").style.fontSize = currentSize;
    setCookie(currentSize);
}

function changeCSS(cssfile) {
    document.getElementById("css").href = "https://13-sunplace-osaka.com/wp/wp-content/themes/BeSmile13ekimae_theme/css/" + cssfile;
}

function setCookie(percent) {
    document.cookie = "fontSize=" + percent;
}