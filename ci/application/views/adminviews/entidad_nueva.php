        <li class="breadcrumb-item"><a href="javascript:;">Admin. Catálogos</a></li>
        <li class="breadcrumb-item active">Entidad</li>
      </ol>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="form-horizontal">
              <fieldset>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="clave">Clave</label>  
                  <div class="col-md-4">
                  <input id="clave" name="clave" placeholder="Clave de la Entidad" class="form-control input-md" required="" type="text">
                  <span class="help-block">Cinco caracteres numéricos</span>  
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                  <div class="col-md-4">
                  <input id="nombre" name="nombre" placeholder="Nombre de la Entidad" class="form-control input-md" required="" type="text">
                  <span class="help-block">Hasta 150 caracteres (punto, espacio y alfabéticos)</span>  
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="corto">Nombre corto</label>  
                  <div class="col-md-4">
                  <input id="corto" name="corto" placeholder="Nombre corto de la Entidad" class="form-control input-md" required="" type="text">
                  <span class="help-block">Hasta 10 caracteres alfabéticos sin acentos</span>  
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="repositorio">Nombre del repositorio</label>  
                  <div class="col-md-4">
                  <input id="repositorio" name="repositorio" placeholder="Nombre del repositorio" class="form-control input-md" required="" type="text">
                  <span class="help-block">Hasta 20 caracteres alfabéticos sin acentos</span>  
                  </div>
                </div>

                <!-- Prepended checkbox -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="conjuntas">Conjuntas</label>
                  <div class="col-md-4">
                    <div class="input-group">
                      <span class="input-group-addon">     
                          <input type="checkbox">     
                      </span>
                      <input id="conjuntas" name="conjuntas" class="form-control" placeholder="¿Conjuntas?" type="text">
                    </div>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="econjunta">Entidad Conjunta</label>
                  <div class="col-md-4">
                    <select id="econjunta" name="econjunta" class="form-control">
                      <option value="1">Entidad conjunta</option>
                      <option value="2">Option one</option>
                      <option value="">Option two</option>
                    </select>
                  </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                  <label class="col-md-4 control-label" for="imagen">Imágen</label>
                  <div class="col-md-4">
                    <input id="imagen" name="imagen" class="input-file" type="file">
                  </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="aceptar"></label>
                  <div class="col-md-8">
                    <button id="aceptar" name="aceptar" class="btn btn-success">Aceptar</button>
                    <button id="limpiar" name="limpiar" class="btn btn-danger">Limpiar</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>