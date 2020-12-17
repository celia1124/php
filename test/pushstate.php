<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="info"></div>

    <input type="text" id="kk" placeholder="key">
    <input type="text" id="vv" placeholder="value">
    <button id="btn" onclick="myPushState()">push it</button>


    <script>
        const kk = document.querySelector('#kk');
        const vv = document.querySelector('#vv');


        function myPushState() {
            let obj = {};
            obj[kk.value] = vv.value;

            const url = new URL(window.location);
            url.searchParams.set(kk.value, vv.value);

            history.pushState(obj, '', url);
        }

        window.onpopstate = function(event) {

            console.log(event.state);
        }
    </script>                               
</body>




</html>