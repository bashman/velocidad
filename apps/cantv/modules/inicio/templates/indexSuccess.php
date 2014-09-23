
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <h2>Test de velocidad</h2>
    <p>Esta es una prueba de concepto. Medidor de ancho de banda CANTV.</p>
    <p><a href="#" class="btn btn-danger btn-lg" role="button" id="resultadoBtn">¡Haz la prueba!</a></p>
</div>

<div class="row" id="resultado" style="visibility:hidden">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Resultados</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                          <div class="panel-heading">Tiempo de respuesta PING</div>
                          <div class="panel-body">
                             <span id="loaderP" style="visibility:hidden"><?php echo image_tag('/css/images/loader.gif'); ?> </span>
                             <span id="spanPing"> </span>
                         </div>
                     </div>                        
                 </div>

                 <div class="col-sm-4">
                    <div class="panel panel-success">
                      <div class="panel-heading">Velocidad de descarga DOWNLOAD</div>
                      <div class="panel-body">
                       <span id="loaderD" style="visibility:hidden"><?php echo image_tag('/css/images/loader.gif'); ?> </span>

                       <span id="spanDown"> </span>
                   </div>
               </div>                        
           </div>

           <div class="col-sm-4">
            <div class="panel panel-warning">
              <div class="panel-heading">Velocidad de subida UPLOAD</div>
              <div class="panel-body">
                  <span id="loaderU" style="visibility:hidden"><?php echo image_tag('/css/images/loader.gif'); ?> </span>
                  <span id="spanUp"> </span>
              </div>
          </div>                        
      </div>
  </div>
</div>
</div>
</div>
</div>
