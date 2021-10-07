<html lang="es">
<head>
    <style>
        body{
            background-color: ;
        }
        input{
            font-size: 3em;
            line-height: 1.5em;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            background: #fff;
            background: rgba(255, 255, 255, .6);
            box-sizing: border-box;
            display: block;
            height: 1.5em;
            margin-top: 1em;
            padding: 0;
            text-align: center;
            text-transform: none;
            max-width: 700px;
            margin-right: auto;
            margin-left: auto;
            width: 100%;
        }
    </style>
</head>
<body>
<form method="get" action="secure_password.php">
    <label>
        Nivel de seguridad de contraseña:
        <input type="text" name="num">
    </label>
    <input type="submit">
</form>
</body>
</html>

<?php
