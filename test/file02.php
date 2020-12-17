<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <img src="" alt="" id="preview" onclick="file_field.click()" style="width: 300px; height: 300px; background-color: #ccc;">

    <input type="file" id="file_field" accept="image/*" onchange="fileChange()" style="display: none">





    <script>
        const file_field = document.querySelector('#file_field');
        const preview = document.querySelector('#preview');
        const reader = new FileReader();

        reader.addEventListener('load', function(event) {
            preview.src = reader.result;
            preview.style.height = 'auto';
        });



        function fileChange() {
            reader.readAsDataURL(file_field.files[0]);
            console.log(file_field.files.length);
            console.log(file_field.files[0]);



        }
    </script>

</body>

</html>