<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax | Auto suggest application</title>
    <script type="text/javascript">
        function findmatch() {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }
            
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('results').innerHTML = xmlhttp.responseText;
                }
            }
            
            xmlhttp.open('GET', 'search.inc.php', true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
    <form id="search" name=search>
        Type a name: <br> 
        <input type="text" name="search_text" onkeydown="findmatch()" />
    </form>
    
    <div id="resutls"></div>
</body>
</html>