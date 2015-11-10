<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax</title>
    <script type="text/javascript">
        function load(thediv, thefile) {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById(thediv).innerHTML = xmlhttp.responseText;
                }
            }
            
            xmlhttp.open('GET', thefile, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <input type="submit" onclick="load('div', 'include.inc.php');">
    
    <div id="div"></div>
</body>
</html>