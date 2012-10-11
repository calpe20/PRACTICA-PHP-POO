<?
/*  DESCRIPCION:
    CREAR UNA APLICACION PHP Q RECIBA LOS PROMEDIOS FINALES DE 4 CURSOS
    CALCULE LA BONIFICACION CORRESPONDIENTE A LAS ASIGNATURAS DE UN ALUMNO
    Y LUEGO DE PROCESARLAS QUE SE NOS PERMITA INGRESAR LAS NOTAS DE RECUPERACION
    DE LAS ASIGNATURAS DESAPROBADAS, PROCESE NUEVAMENTE EL FORMULARIO Y MUESTRE
    EL PROMEDIO FINAL DEL ALUMNO, EN EL CASO DE NO HABER ASIGNATURAS DESAPROBADAS
    SE DEBE VISUALIZAR DIRECTAMENTE EL PROMEDIO FINAL. USAR UNA SOLA PAGINA PHP
    (NOTA: LAS NOTAS DE RECUPERACION, SUSTITUYEN A LAS NOTAS FINALES DE CURSO
    SIEMPRE Y CUANDO ESTAS NOTAS SEAN FAVORABLES PARA EL ALUMNO)
    
    AUTOR:  
    CURSO:  LENGUAJE DE PROGRAMACION
    TEMA:   DESARROLLO WEB PHP
    FECHA:  11/10/2012 - PUCALLPA 
 */
    if(empty($_POST['alumno'])){ $mensaje[0]=' Ingrese nombre del Alumno.';}
    if(!empty($_POST['curso1'])){
        if(intval($_POST['curso1'])<11){
            $mensaje[1]=' Nota desaprobatoria [ INGRESAR SUSTITUTORIA ]';   
        }else{
            $mensaje[1]='';
        }
    }
    if(!empty($_POST['curso2'])){
        if(intval($_POST['curso2'])<11){
            $mensaje[2]=' Nota desaprobatoria [ INGRESAR SUSTITUTORIA ]';   
        }else{
            $mensaje[2]='';
        }
    }
    if(!empty($_POST['curso3'])){
        if(intval($_POST['curso3'])<11){
            $mensaje[3]=' Nota desaprobatoria [ INGRESAR SUSTITUTORIA ]';   
        }else{
            $mensaje[3]='';
        }
    }
    if(!empty($_POST['curso4'])){
        if(intval($_POST['curso4'])<11){
            $mensaje[4]=' Nota desaprobatoria [ INGRESAR SUSTITUTORIA ]';   
        }else{
            $mensaje[4]='';
        }
    }
    $promedio = ($curso1+$curso2+$curso3+$curso4)/4;
    if(intval($promedio)<11){
        $mensaje[5]=' Desaprobado [ Tomar Sustituria de cursos desaprobados ]';
    }else{
        $mensaje[5]=' Aprobado';
    }
?>
<html>
    <head>
        <title></title>
        <style>
            body{
                font-family: arial;
                font-size: 12px;
            }
            input{
                font-family: arial;
                font-size: 12px;
                border: 1px solid #c1c1c1;
            }
            #mensaje{
                color: red;
            }
        </style>
    </head>
    <body>
        <hr>
            <b>Ingresar datos del Alumno</b>
        <hr>
        <form method=POST>
            <label>Alumno :</label>
            <input type=text value='<?=$_POST['alumno'];?>' id='alumno' name='alumno' size=50 maxlength=50>
            <label id='mensaje'><?echo $mensaje[0];?></label><br>
            <label>Curso 1 : </label>
            <input type=text value='<?=$_POST['curso1'];?>' id='curso1' name='curso1' size=2 maxlength=2>
            <label id='mensaje'><?echo $mensaje[1];?></label><br>
            <label>Curso 2 : </label>
            <input type=text value='<?=$_POST['curso2'];?>' id='curso2' name='curso2' size=2 maxlength=2>
            <label id='mensaje'><?echo $mensaje[2];?></label><br>
            <label>Curso 3 : </label>
            <input type=text value='<?=$_POST['curso3'];?>' id='curso3' name='curso3' size=2 maxlength=2>
            <label id='mensaje'><?echo $mensaje[3];?></label><br>
            <label>Curso 4 : </label>
            <input type=text value='<?=$_POST['curso4'];?>' id='curso4' name='curso4' size=2 maxlength=2>
            <label id='mensaje'><?echo $mensaje[4];?></label><br>
            <hr>
        <? if(!empty($_POST['promedio'])){ ?>
            <label>Promedio :</label>
            <input type=text value='<?=$promedio;?>' id='promedio' name='promedio' size=4 maxlength=4>
            <label id='mensaje'><?echo $mensaje[5];?></label><br>
            <hr>
        <? } ?>
            <input type="submit" value="Procesar"/>
        </form>        
    </body>
</html>
