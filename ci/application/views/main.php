      <div class="row">
        <div class="col-sm-12 col-md-6" id="login">
          <div class="panel panel-default">
            <div class="panel-body">
              <h3>Para votar necesitas:</h3>
              <ul>
                <li>Haber sido incluido en el padrón de electores</li>
                <li>Contar con tu NIP (Número de Identificación Personal)</li>
                <ul>
                  <li>Tutor o Académicos NIP DGAE-SIAE (hasta 10 posiciones)</li>
                  <li>Alumnos Posgrado NIP SAEP (hasta 15 posiciones)</li>
                </ul>
                <li>Elegir la entidad en la que participarás</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6" id="login">
          <div class="panel panel-default">
            <div class="panel-body">
              <form accept-charset="UTF-8" role="form" action="<?=site_url('admin/index');?>">
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                      <input type="text" class="form-control" placeholder="RFC o número de cuenta" aria-describedby="sizing-addon1">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      <input type="password" class="form-control" placeholder="Contraseña SIAE" aria-describedby="sizing-addon1">
                    </div>
                  </div>
                  <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>