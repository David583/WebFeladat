<!DOCTYPE html>
<html>
    <head>
        <title>Élni jó!</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="resources/global/global.css">
        <script src = "resources/global/global.js"></script>
    </head>
    <body onload = "setPageUrl('')" >  
        <div id = "mainDiv">
            <div id = "sideDiv">
                <ul>
                    <li onclick = "setPageUrl('')">FŐOLDAL</li>
                    <li onclick = "setPageUrl('courses')">KURZUSOK</li>
                    <li onclick = "setPageUrl('contacts')">KAPCSOLATOK</li>
                    <li onclick = "setPageUrl('about')">RÓLUNK</li>
                </ul>
            </div>
            <div id = "contentDiv">
            </div>
        </div>
    </body>
</html>