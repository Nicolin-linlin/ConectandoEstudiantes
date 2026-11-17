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
        }  
        #be{
            background-color: #faf7ed;
            grid-area: uno;
        }
        #ce{
            background-color: rgb(78, 55, 21);
            grid-area: dos;
        }
        #Nos {
            position: relative;
            margin-left: 1000px;
            margin-bottom: 50px;
        }
        #MS {
            position: relative;
            margin-left: 100px;
            margin-bottom: 50px;
        }
        #Act {
            position: relative;
            margin-left: 100px;
            margin-bottom: 50px;
        }
        #Info {
            position: relative;
            margin-left: 100px;
            margin-bottom: 50px;
        }
        #QP {
            text-align: center;
            float:right;
            width: 130px;    
            height: 42px;           
            padding-top: 8px;
            background-color: rgb(78, 55, 21);
            margin-right: 40px;
            border-radius: 30px;
        }
        #QP a {
            color: white; 
            padding-top: 8px;
        }
        #H1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 80px;
            color: #4A2C22; 
            position: relative;
            bottom: 150px;
            margin-left: 20px;
        }
        #H2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: #78675B;
            position:relative;
            bottom: 200px; 
            margin-left: 30px;
        }
        #P1 {
             font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            color: #78675B;
            position:relative;
            bottom: 200px; 
            margin-left: 30px;   
        }
        body {
            display:grid ;
            grid-template-rows: 150px 600px 170px;
            grid-template-columns: 50% 50%;
            grid-template-areas: 
            "menu menu"
            "uno uno"
            "dos dos" ;
        } 
    </style>
</head>
<body>
    <nav> <a href="" id="Nos">Nosotras</a> 
    <a href="" id="MS">Mision y Vision </a>
    <a href="" id="Act">Actividades</a> 
    <a href="" id="Info">informate</a> 
    <div  id="QP"><a href="">Quiero participar</a></div></nav>
    <section id="be"> 
        <p id="H1">Hagamos del colegio <br> un espacio para <br> todos</p>
    <p id="H2">Conectando Estudiantes</p>
    <p id="P1">Promovemos la inclusion escolar a traves de juegos, charlas y actividades que <br> fomnentan el respeto, la igualdad y la integracion. Por que nadie debe sentirse <br> excluido.</p></section>
    <section id="ce"></section>
</body>
</html>

