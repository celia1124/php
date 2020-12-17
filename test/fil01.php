<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="file" id="file_field" multiple accept="image/*">
    <!--multiple accept="image/*"接受所有"圖片"格式-->
    <button onclick="checkField()">check</button>

    <script>
        function fileChange() {
            console.log(file_field.files.length);
            console.log(file_field.files[0]);
            console.log(file_field.file);



        }
    </script>

</body>

</html>