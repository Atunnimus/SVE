        <li class="breadcrumb-item"><a href="javascript:;">Admin. Catálogos</a></li>
        <li class="breadcrumb-item active">Figura</li>
      </ol>     
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal">
              <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                  <div class="col-md-4">
                  <input id="nombre" name="nombre" placeholder="Nombre de la figura" class="form-control input-md" required="" type="text">
                  <span class="help-block">Hasta 100 caracteres (punto, espacio y alfabéticos)</span>  
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="corto">Nombre corto</label>  
                  <div class="col-md-4">
                  <input id="corto" name="corto" placeholder="Nombre corto de la figura" class="form-control input-md" required="" type="text">
                  <span class="help-block">Hasta 10 caracteres alfabéticos sin acentos</span>  
                  </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="aceptar"></label>
                  <div class="col-md-8">
                    <button id="aceptar" name="aceptar" class="btn btn-success">Aceptar</button>
                    <button id="limpiar" name="limpiar" class="btn btn-danger" type="reset">Limpiar</button>
                  </div>
                </div>

              </fieldset>
            </form>
          </div>
        </div>
      </div>