<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DVD Screensaver</title>
    <script defer>
        // window.onload=console.log(window.innerHeight, window.innerWidth)
        function move_icon(){
            let img = document.getElementById('dvd');

        img.style.position='absolute';


            for (let i = 1; i < window.innerWidth -100; i++) {
                setTimeout(() => {
                    console.log(i + 'px');
                    img.style.left = i + 'px'
                    console.log('hola')
                }, i * 2);

            }
        }
        document.addEventListener('DOMContentLoaded', move_icon);
    </script>
</head>
<body>
<img  id="dvd" width="100px" src="DVD_logo.svg" alt="DVD moving logo">
</body>
</html>
