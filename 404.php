<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anylinksjp 404 Not Found</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Ubuntu&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Noto Sans JP', sans-serif;
            color: #fff;
        }

        body {
            background-color: black;
            background: linear-gradient(-45deg, black, #140a1f, #0c0c27) fixed;
            background-size: 800% 800%;
            animation: GradietionAnimation 9s ease infinite;
        }

        @keyframes GradietionAnimation {
            0% {
                background-position: 0% 0%
            }

            50% {
                background-position: 50% 50%
            }

            100% {
                background-position: 0% 0%
            }
        }

        a {
            text-decoration: none;
            color: #0060BF;
        }

        a:hover {
            text-decoration: underline;
        }

        #message {
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35vh;
            vertical-align: middle;
            text-align: center;
        }

        #message h1 {
            margin: 10px;
            letter-spacing: 2px;
        }
    </style>
    <script>
        window.onload = async () => {
            let linkHome = document.getElementById("link_home");
            linkHome.setAttribute('href', window.location.origin);
        }
    </script>
</head>

<body>
    <div id="message">
        <h1>Sorry...</h1>
        <p>We can't seem to find the page you're looking for.</p>
        <p>You can go back to our <a id="link_home" href="">home</a>.</p>
    </div>
</body>

</html>