<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQEAYAAABPYyMiAAAABmJLR0T///////8JWPfcAAAACXBIWXMAAABIAAAASABGyWs+AAAAF0lEQVRIx2NgGAWjYBSMglEwCkbBSAcACBAAAeaR9cIAAAAASUVORK5CYII=" rel="icon" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Добро пожаловать!</title>

</head>

<body>
    <?php include'header.php'?>
    <?php include'news.php'?>
    <?php include'subscription.php'?>
    <?php include'footer.php'?>
    <script>
    var userLang = navigator.language || navigator.userLanguage;
    var userLang_detected = userLang.toLowerCase();
    if (userLang_detected != 'ru-ru' && userLang_detected != 'ru') {
        document.title = 'Welcome!';
        document.getElementById('t1').innerHTML = 'Welcome!';
        document.getElementById('t2').innerHTML = 'Open Server Panel is running ;-)';
        document.getElementById('t3').innerHTML = 'User\'s manual <i class="right"></i>';
    }
    </script>
    <script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
</body>

</html>