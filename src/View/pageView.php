<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><span id="nbLikes"><?php echo $getLikes['likes']; ?></span> likes</p>
    <button>J'AIME</button>
    <script>
        document.querySelector('button').addEventListener('click', () => {
            //window.location = 'http://localhost:8888/TP_likes/index.php?action=addLike';
            fetch('http://localhost:8888/TP_likes/index.php?action=addLike&userId=1')
            .then(res => res.json())
            .then(responseServer => {
                console.log(responseServer);
                document.getElementById('nbLikes').textContent = responseServer.likes;
                document.querySelector('button').style.backgroundColor = 'green';
                document.querySelector('button').disabled = true;
            })
        })
    </script> 
</body>
</html>