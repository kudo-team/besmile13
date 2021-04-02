function textSizeUp() {
    currentSize = document.getElementById("body").style.fontSize;
    selectSize = "";
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
    const normalSize = "100%";
    document.getElementById("body").style.fontSize = normalSize;
    setCookie(normalSize);
}

function changeCSS(cssfile) {
    document.getElementById("css").href = "css/" + cssfile;
}