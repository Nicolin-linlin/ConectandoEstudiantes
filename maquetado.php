<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: #faf7ed;
            grid-area: menu;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        #be{
            background-color: #faf7ed;;
            grid-area: uno;
        }
        #ce{
            background-color: rgb(78, 55, 21);
            grid-area: dos;
        }
        body {
            display:grid ;
            grid-template-rows: 25px 100px 50px;
            grid-template-columns: 50% 50%;
            grid-template-areas: 
            "menu menu"
            "uno uno"
            "dos dos" 
            gap: 10px;
        }
    </style>
</head>
<body>
    <nav>Nosotras Mision y Vision  actividades informaye quiero participar</nav>
    <section id="be"></section>
    <section id="ce"></section>
    <section></section>
    <section></section>
    <section></section>
    <footer></footer>
</body>
</html>

