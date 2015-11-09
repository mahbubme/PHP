<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posting data using ajax</title>
    <script type="text/javascript">
        function insert() {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }
            
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('message').innerHTML = xmlhttp.responseText;    
                }
            }
            
            var parameters = 'text='+document.getElementById('text').value;
            
            xmlhttp.open('POST', 'update.inc.php', true);
            xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xmlhttp.send(parameters);
        }
    </script>
</head>
<body>
    Insert: <input type="text" id="text"> <input type="button" value="submit" onclick="insert();">
    
    <div id="message"></div>
</body>
</html>