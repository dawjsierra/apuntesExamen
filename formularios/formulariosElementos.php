<!DOCTYPE html>
<html><head>
    <meta charset="UTF-8">
    <title>Elementos de un formulario</title>
</head><body>
    <h2>Formularios & inputs</h2>
    Los tipos básicos de input son: 
    <ul>
        <li>text: texto <br></li>
        <li>password: contraseña <br></li>
        <li>hidden: texto no visible en pantalla <br></li>
        <li>* radio: opción únia<br></li>
        <li>* checkbox: opción múltiple <br></li>
        <li>* select: lista desplegable <br></li>
        <li>submit: botón de envío <br></li>
    </ul>

    <h2>Formularios de ejemplo</h2>

    <h3> Elegir uno entre varios. Uso de elementos "radio" o "select"</h3>
    
    <form method="POST" action="formulariosElementosAction.php">
        <label>Nombre</label><input type="text" value="" name="nombre"> <br>
        <label>Contraseña</label><input type="password" value="" name="apellidos"> <br>

        <!-- radio -->
        Sexo: <br>
        <input type="radio" name="sexo" value="male" > Varón <br>
        <input type="radio" name="sexo" value="female" checked> Mujer<br>

        <!-- select -->
        Elige un color:  <br>
        <select name="color">
         <optgroup label="Grupo de colores">
           <option>rojo</option>
           <option>azul</option>
           <option>verde</option>
           <option selected>amarillo</option>
           <option >blanco</option>
         </optgroup>
       </select>

       <br>
        <input type="submit" value="enviar">
    </form>
    <hr>
    <h3>Elegir varios entre varios: checkboxes. ¿Cómo debemos usarlos?</h3>
    <h4>Opción 1. Bien</h4>
    En un bloque como array. Todos los checkbox tienen el nombre con corchetes.
    Recibiremos $_POST['aficiones'] como un array.
    <pre>
    &lt;input type="checkbox" name="aficiones[]" value="deporte"&gt; Hacer deporte
    </pre> 
    <form method="post" action="formulariosElementosAction.php">
        <!-- checkbox -->
        hobbies:   <br>
        <!--OJO: si ponemos el mismo nombre con corchetes recibiremos la opción
        múltiple como un array. -->
        <input type="checkbox" name="aficiones[]" value="deporte"> Hacer deporte <br>
        <input type="checkbox" name="aficiones[]" value="musica"> Escuchar música  <br>     
        <input type="checkbox" name="aficiones[]" value="lectura"> Lectura  <br>      
        <input type="checkbox" name="aficiones[]" value="cine"> Ir al cine  <br>
        <input type="submit" value="enviar">
    </form>
    <br>

    IMPORTANTE!! Este modo puede usarse en input de tipo texto (o hidden). Recibiremos arrays de tipo texto.

    <pre>        
        &lt;input type="text" name="ideas[]" &gt; 
        &lt;input type="text" name="ideas[]" &gt; 
    </pre>

    <hr>
    <h4>Opcíón 2. MAL</h4>
    En un bloque, todos los checkbox con el  mismo nombre sin corchetes. Sólo recibiremos uno de los datos enviados.
    <pre>
    &lt;input type="checkbox" name="aficion" value="deporte"&gt; Hacer deporte
    </pre> 

    
    Importante, el value de cada input es lo que recibimos en el servidor.
    <form method="post" action="formulariosElementosAction.php">
        NOTA: bloque sin array y mismo nombre (MAL) <br>
        <input type="checkbox" name="hobby" value="musica"> Lectura  <br>      
        <input type="checkbox" name="hobby" value="cine"> Ir al cine  <br>
        <input type="submit" value="enviar">
    </form>
    
    <hr>
    <h4>Opcíón 3. NO TAN MAL</h4>
    Cada checkbox con un nombre distinto. Recibiremos muchas variables y no un array.
    <pre>
    &lt;input type="checkbox" name="hobby1" value="musica"&gt; Lectura 
    &lt;input type="checkbox" name="hobby2" value="musica"&gt; Ir al cine
    </pre> 

    <form method="post" action="formulariosElementosAction.php">
        NOTA: bloque sin array y distinto nombre (BIEN)<br>
        <input type="checkbox" name="hobby1" value="musica"> Lectura  <br>      
        <input type="checkbox" name="hobby2" value="cine"> Ir al cine  <br>
        <input type="submit" value="enviar">
    </form>   
    
    <hr>
    <form method="post" action="formulariosElementosAction.php">
        <label for="cars">Elige un coche:</label>
        <select name="cars[]" id="cars" multiple>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body></html>