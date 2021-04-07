window.addEventListener('load', function() {
    getCookiesAndSetUp();
});
function setColor() {
    if(document.cookie != null) {
        var cookies = document.cookie;
        var cookiesArray = cookies.split(';');
        for (var c of cookiesArray) {
            var cArray = c.split('=');
            if (cArray[0] == 'color') {
                colorFile = cArray[1];
                changeCSS(colorFile);
            }
        }
    } else {
        changeCSS('color01.css');
    }
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
        document.getElementById("fontZoom").style.opacity = '1';
        selectSize = "110%";
    } else if (currentSize == "110%") {
        selectSize = "120%";
    } else if (currentSize == "120%") {
        selectSize = "130%";
        document.getElementById("fontZoom").style.opacity = '0.2';
    } else if (currentSize == "130%") {
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
    document.getElementById("fontZoom").style.opacity = '1';
    setCookie(currentSize);
}

function changeCSS(cssfile) {
    document.getElementById("css").href = "https://13-sunplace-osaka.com/wp/wp-content/themes/BeSmile13ekimae_theme/css/" + cssfile;
    document.cookie = "color=" + cssfile + ";path=/; expires=" + new Date(2030, 1).toUTCString();
}

function setCookie(percent) {
    document.cookie = "fontSize=" + percent + ";path=/; expires=" + new Date(2030, 1).toUTCString();
}

function getCookiesAndSetUp() {
    if(document.cookie != null) {
        var cookies = document.cookie;
        var cookiesArray = cookies.split(';');

        for (var c of cookiesArray) {
            var cArray = c.split('=');
            if (cArray[0] == 'fontSize') {
                cookieFontSize = cArray[1];
                currentSize = cookieFontSize;
                selectSize = cookieFontSize;
                document.getElementById("body").style.fontSize = selectSize;
                if(currentSize == '130%') {
                    document.getElementById("fontZoom").style.opacity = '0.2';
                }
                // alert(cArray[0]);
            }
            if (cArray[0] == 'color') {
                cookieColorFile = cArray[1];
                changeCSS(cookieColorFile);
                // alert(cArray[0]);
            }
        }
    }
}