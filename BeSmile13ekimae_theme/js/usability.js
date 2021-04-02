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
    currentSize = document.getElementById("body").style.fontSize;
    // m = escape("ただいまの文字サイズは" + currentSize + "（標準：100%）です。元に戻しますか？");
    // r = confirm(unescape(m));
    // if (r) {
        currentSize = "";
        document.getElementById("body").style.fontSize = currentSize;
    // }
    setCookie(currentSize);
}

function changeCSS(cssfile) {
    document.getElementById("css").href = "css/" + cssfile;
}