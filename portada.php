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
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            margin-left: 1000px;
            margin-bottom: 50px;
            top: 8px;
        }
        #MS {
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            margin-left: 100px;
            margin-bottom: 50px;
            top: 8px;
        }
        #Act {
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            margin-left: 100px;
            margin-bottom: 50px;
            top: 8px;
        }
        #Info {
            font-family: Arial, Helvetica, sans-serif;
            position: relative;
            margin-left: 100px;
            margin-bottom: 50px;
            top: 8px;
        }
        #QP {
            text-align: center;
            float:right;
            width: 150px;    
            height: 42px;           
            background-color: rgb(78, 55, 21);
            margin-right: 40px;
            border-radius: 30px;
            transition: all 0.5s;
        }
        #QP:hover{
            transform: scale(1.1,1.1);
        }
        #QP a {
            font-family: Arial, Helvetica, sans-serif;
            color: white; 
            position: relative;
            top: 8px;
        }
        #H1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 80px;
            color: #4A2C22; 
            position: relative;
            bottom: 50px;
            margin-left: 40px;
        }
        #H2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            color: #6d5162;
            position:relative;
            bottom: 110px; 
            margin-left: 50px;
        }
        #P1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            color: #78675B;
            position:relative;
            bottom: 100px; 
            margin-left: 50px;  
        }
        #p1 {
            font-family: Arial, Helvetica, sans-serif;
            color: #faf7ed;
            position:relative; 
            top: 60px;
            margin-left: 300px;
        }
        #p2 {
            font-family: Arial, Helvetica, sans-serif;
            color: #faf7ed;
            position:relative;
            top: 30px;
            margin-left: 900px;
        }
        #p3 {
            font-family: Arial, Helvetica, sans-serif;
            color: #faf7ed;
            position:relative;
            margin-left: 1500px;
            bottom: 5px;
        }
        #CP {
            background-color: rgb(78, 55, 21);
            width: 150px;
            height: 50px;
            text-align: center;
            position:relative;
            bottom: 260px;
            margin-left: 50px;
            border-radius: 10px;
            transition: all 0.5s;
        }
        #CP:hover{
            transform: scale(1.1,1.1);
        }
        #c {
            font-family: Arial, Helvetica, sans-serif;
            color: #faf7ed;;
        }
        #imag {
            background-color: #D6B8AF;
            background-imagen: url(images.jpe);
            width: 700px;
            height: 600px;
            border-radius: 45% 45% 15px 15px;
            position: absolute;
            bottom: 260px;
            margin-left: 1040px;
        }
        #imagen {
            position: absolute; 
            bottom: 305px;
            margin-left: 1090px;
        }
        #ff {
            width: 600px;
            height: 500px; 
            border-radius: 45% 45% 15px 15px;
        }
        body {
            display:grid ;
            grid-template-rows: 160px 600px 180px;
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
    <a href="" id="Info">Informate</a> 
    <div  id="QP"><a href="">Quiero participar ↗</a></div></nav>
    <section id="be"> 
        <p id="H1"><b>Hagamos del colegio <br> un espacio para <br> todos</b></p>
    <p id="H2">Conectando Estudiantes</p>
    <p id="P1">Promovemos la inclusion escolar a traves de juegos, charlas y actividades que <br> fomnentan el respeto, la igualdad y la integracion. Por que nadie debe sentirse <br> excluido.</p></section>
    <div id="CP"><p id="c">Conoce el proyecto</p></div>
    <div id="imag"></div>
    <div id="imagen"><img src="images.jpe" alt="" id="ff"></div>
    <section id="ce">
        <p id="p1">RESPETO</p>
        <P id="p2">EMPATIA</P>
        <p id="p3">IGUALDAD</p>
    </section>
</body>
</html>
