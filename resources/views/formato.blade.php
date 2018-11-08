<!DOCTYPE HTML>
<html>
    <head>
        <meta content="text/html;" http-equiv="content-type" charset="utf-8"> 
        
        <title>Generador PDF</title>
        
        <!--Estilos-->
        <link rel="stylesheet" type="text/css"  href="css/formatito.css">       
        

    </head>
    <body id="contenedor">
        <div id="encabezado">
            <div id="logoizquierdo">
                <img src="images/quintanaroo.png" width="70" height="70">
            </div>
        
            <div id="centro">
                <div id="textoInicial">
                    <center><p>
                            {{$_POST['gradoR']}} {{$_POST['nombreRemitente']}}<br>
                            {{$_POST['puestoRemitente']}}                            
                    </p></center>
                </div>
            </div>
            
            <div id="logoderecho1">
                <img src="images/segob_logo.png" width="250" height="60">
            </div>
        </div>
        
        <div id="formatoRemitente">
                
                    <div id="remitente">
                        <p>                            
                            {{$_POST['oficinaN']}}<br>
                            OFICIO No. SEGOB/SSF/FGDG/3425543<br><br>
                            ASUNTO: {{$_POST['asuntoR']}}<br><br>
                            
                            {{$_POST['selMunicipio']}}, Quintana Roo a {{$_POST['diaR']}} de {{$_POST['seleccionarMes']}} de             
                            2018
                            <i><h6>"2018, Año por la Educación inclusiva"</h6></i>
                        </p>     
                    </div>
                       
        </div>
        
        <div id="formatoDestinatario">
                <div id="destinatario">            
                    <p>
                        {{$_POST['gradoDestino']}} {{$_POST['nombreDestino']}}<br>
                        {{$_POST['puestoDestino']}}<br>
                        PRESENTE.
                    </p> 
                </div>            
        </div>
        
        <div id="contenidoCarta">
              <div id="carta">
                    <p>
                        {{$_POST['contenidoCarta']}}                    
                    </p> 
                </div>   
        </div>
        
        <div id="firmas">
             <div id="firma">
                    <center>
                        
                        <img src="{{$_FILES['firmaE']['tmp_name']}}" id="laimagen"/>
                        <br><br>
                        DJK23ORFHER4TF-P456?4-T5GJL
                        
                    </center>
                </div>   
        </div>
        
        <script>
function myFunction() {
    confirm("¿Estás seguro de enviar?");
}
</script>
    </body>
</html>