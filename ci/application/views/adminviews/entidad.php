        <li class="breadcrumb-item"><a href="javascript:;">Admin. Catálogos</a></li>
        <li class="breadcrumb-item active">Entidad</li>
      </ol>      
      <!--Search Section-->
      <div class="row">
        <div class="col-md-5">
          <div id="custom-search-input">
            <div class="input-group col-md-12">
              <input type="text" class="form-control input-lg" placeholder="Buscar" />
              <span class="input-group-btn">
                <button class="btn btn-info btn-lg" type="button">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </span>
            </div>
          </div>

          <!--Counter Section-->
          <section id="counter" class="counter">
            <div class="main_counter_area">
              <div class="overlay p-y-2">
                <div class="container-fluid">
                  <div class="row">
                    <div class="main_counter_content text-center white-text wow fadeInUp">
                      <a href="javascript:;">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <h5 class="statistic-counter">15</h5>
                            <p>Facultades</p>
                          </div>
                        </div>
                      </a>
                      <a href="javascript:;">  
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <h5 class="statistic-counter">312</h5>
                            <p>Escuelas</p>
                          </div>
                        </div>
                      </a>
                      <a href="javascript:;">  
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <h5 class="statistic-counter">400</h5>
                            <p>Colegios</p>
                          </div>
                        </div>
                      </a>
                      <a href="javascript:;">  
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <h5 class="statistic-counter">480</h5>
                            <p>Institutos</p>
                          </div>
                        </div>
                      </div>
                      </a>
                      <a href="javascript:;">
                      <div class="main_counter_content text-center white-text wow fadeInUp">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                            <h5 class="statistic-counter">100</h5>
                            <p>Centros</p>
                          </div>
                        </div>
                      </a>
                      <a href="javascript:;">  
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h5 class="statistic-counter">400</h5>
                            <p>Dependencias</p>
                          </div>
                        </div>
                      </a>
                      <a href="javascript:;">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                            <h5 class="statistic-counter">312</h5>
                            <p>FES</p>
                          </div>
                        </div>
                      </a>
                      <a href="javascript:;">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                          <div class="single_counter p-y-2 m-t-1">
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <h5 class="statistic-counter">480</h5>
                            <p>ENES</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- End of counter Section -->
        </div>

        <div class=" col-md-7">
          <div class="row">
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"></div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="controles">
              <a href="<?=site_url('admin/entidadNueva');?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="controles">
              <a href="javascript:;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="controles">
              <a href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </div>
          </div>
          <table class="table table-striped table-bordered table-hover" id="table">
            <thead>
              <tr class="bg-primary">
                <th>#</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Nombre Corto</th>
                <th>Nombre del Repositorio</th>
                <th>Imágen</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>42401</td>
                <td>Facultad de Arquitectura</td>
                <td>FARQUITECT</td>
                <td>farquitect</td>
                <td></td>
              </tr>
              <tr>
                <td>2</td>
                <td>42501</td>
                <td>Facultad de Artes y Diseño</td>
                <td>FAD</td>
                <td>fad</td>
                <td></td>
              </tr>
              <tr>
                <td>3</td>
                <td>41101</td>
                <td>Facultad de Ciencias</td>
                <td>FCIENCIAS</td>
                <td>fciencias</td>
                <td></td>
              </tr>
              <tr>
                <td>4</td>
                <td>41201</td>
                <td>Facultad de Ciencias Políticas y Sociales</td>
                <td>FCPOLISOCI</td>
                <td>fcpolisoci</td>
                <td></td>
              </tr>
              <tr>
                <td>5</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>6</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>7</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>8</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>9</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>10</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>11</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>12</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>13</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>14</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
              <tr>
                <td>15</td>
                <td>41301</td>
                <td>Facultad de Contaduría y Administración</td>
                <td>FCONTAADMI</td>
                <td>fcontaadmi</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

      <!--Table Section-->
