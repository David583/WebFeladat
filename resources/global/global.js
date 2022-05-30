addEventListener('popstate', event => { getPageFromUrl()});

function getPageFromUrl() {
    var fullURL = window.location.href;
    var splitted = fullURL.split('/');
    var script = document.createElement('script');
    document.getElementById("contentDiv").innerHTML = "";
    document.getElementById("contentDiv").appendChild(script);
    if (splitted[3] == "")
        script.src = "resources/welcome/page.js";
    else
        script.src = "resources/" + splitted[3] + "/page.js";
    script.addEventListener('load', function() {
        document.getElementById("contentDiv").innerHTML += generatePage();
    });
}

function setPageUrl(path) {
    if (path === "")
        window.history.replaceState("", "", "./");
    else
        window.history.pushState("", "", path);
    document.title = "Élni jó! " + path;
    getPageFromUrl();
}

