<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Datos Generales</title>
        <script src="js/jquery-3.3.1.min.js"></script>
        <!--Estilos-->
        <link rel="stylesheet" type="text/css"  href="{{asset('css/estilo.css')}}">
        <link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">       
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>    
    <body>
        <div class="encabezado">
          
        </div>
        
    <form action="{{ url ('generar-pdf')}}" method="post" enctype="multipart/form-data" id="miFormulario">
        {{csrf_field()}}
        <div id="datosGenerales">
         
            <center><h1 id="datosRemitente">Datos del remitente</h1></center>
            <div class="form-group">
                <label for="">Grado</label>
                <select name="gradoR" class="form-control" id="" required>
                    <option value="">Seleccionar...</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Lic.">Lic.</option>
                    <option value="Ing.">Ing.</option>
                    <option value="C.">C.</option>
                </select>
             </div>
            
            <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombreRemitente" id="" placeholder="Ingrese su nombre" REQUIRED>
            </div>
            
            <div class="form-group">
            <label for="">Puesto</label>
            <input type="text" class="form-control" name="puestoRemitente" id="" placeholder="Por ejemplo: Director General..." REQUIRED>
            </div>
            
            <div class="form-group">
                <label for="exampleSelect1">Departamento</label>
                <select name="oficinaN" class="form-control" id="" required>
                    <option value="">Seleccionar...</option>
                    <option value="DIRECCIÓN GENERAL Y OFICIALÍA CENTRAL DE REGISTRO CIVIL">DIRECCIÓN GENERAL Y OFICIALÍA CENTRAL DE REGISTRO CIVIL</option>                  
                </select>
             </div>

            
            <div class="form-group">
            <label for="">Asunto</label>
            <input type="text" class="form-control" name="asuntoR" id="" placeholder="Asunto..." REQUIRED>
            </div>
            
            
            <div class="form-group" id="datosDeOrigen">
                 <label for="">Lugar de origen</label>
                <select name="selMunicipio" class="form-control mb-2 mr-sm-2 mb-sm-0" id="lugardeOrigen" required>
                    <option value="">Seleccionar...</option>
                    <option value="Cancún">Cancún</option>
                    <option value="Chetumal">Chetumal</option>
                    <option value="Puerto Morelos">Puerto Morelos</option>
                    <option value="Carrillo Puerto">Carrillo Puerto</option>
                </select>
            <label for="">Día</label>
            <input type="number" name="diaR" class="form-control mb-2 mr-sm-2 mb-sm-0" id="dia" placeholder="Número..." REQUIRED min="1" max="31">
                
             <label class="" for="">Mes</label>
                <select name="seleccionarMes" class="form-control mb-2 mr-sm-2 mb-sm-0" id="lugardeOrigen" required>
                    <option value="">Seleccionar...</option>
                    <option value="enero">Enero</option>
                    <option value="febrero">Febrero</option>
                    <option value="marzo">Marzo</option>
                    <option value="abril">Abril</option>
                    <option value="mayo">Mayo</option>
                    <option value="junio">Junio</option>
                    <option value="julio">Julio</option>
                    <option value="agosto">Agosto</option>
                    <option value="septiembre">Septiembre</option>
                    <option value="octubre">Octubre</option>
                    <option value="noviembre">Noviembre</option>
                    <option value="diciembre">Diciembre</option>
                </select>
            </div>
        </div>
        
        <div id="datosDestino">
        <center><h1  id="datosDestinatario">Datos del destinatario</h1></center>
        <div class="form-group">
                <label for="">Grado</label>
                <select name="gradoDestino" class="form-control" id="" required>
                    <option value="">Seleccionar...</option>
                    <option >Dr.</option>
                    <option value="Lic.">Lic.</option>
                    <option value="Ing.">Ing.</option>
                    <option value="C.">C.</option>
                </select>
             </div>
            
            <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombreDestino" class="form-control" name="nombreDestino" id="" placeholder="Ingrese su nombre" REQUIRED>
            </div>
            
            <div class="form-group">
            <label for="">Puesto</label>
            <input type="text" class="form-control" name="puestoDestino" id="" placeholder="Por ejemplo: Director General..." REQUIRED>
            </div>    
            
            <center><h1  id="datosDestinatario">Contenido</h1></center>
            <div class="form-group">
            <textarea style="overflow:auto;resize:none" name="contenidoCarta" class="form-control" rows="9" type="text" REQUIRED maxlength="1000"></textarea>
            </div>
            
            <div class="form-group">
            <label for="">Firma electrónica</label>
            <input type="file" class="form-control" name="firmaE" placeholder="" required>               
            </div>    
        </div>
        
        <center><button type="submit" class="btn btn-primary" id="vistaPreliminar" target="_blank">Vista previa</button></center><br>
     </form>
        
        <div class="form-group" id="botones">
        <center>
        <a  action="{{action('CorreoController@store')}}" class="btn btn-secondary">Enviar</a></center>
        </div>
        <i><center><h6>"2018, Año por la educación inclusiva"</h6></center></i> 
        
      
    </body>
    
</html>