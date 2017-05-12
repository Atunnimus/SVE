				<li class="breadcrumb-item"><a href="javascript:;">Admin. Catálogos</a></li>
        <li class="breadcrumb-item active">Nivel</li>
      </ol>
			<div class="row">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"></div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="controles">
          <a href="<?=site_url('admin/NivelNuevo');?>"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="controles">
          <a href="javascript:;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
       	</div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" id="controles">
          <a href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i></a>
        </div>
			</div>
			<div class="row">
        <div class="col-md-5">
          <div id="custom-search-input">
            <div class="input-group col-md-12">
              <input type="text" class="form-control input-lg" placeholder="Buscar Nivel" />
              <span class="input-group-btn">
                <button class="btn btn-info btn-lg" type="button">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
				<div class="col-md-7">
					<table class="table table-striped table-bordered table-hover" id="table">
            <thead>
              <tr class="bg-primary">
                <th>#</th>
                <th>Nombre</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Área</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Área Académica</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Área Ciencias Experimentales</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Área de conocimiento</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Área de Especialidad</td>
              </tr>
            </tbody>
          </table>
				</div>
			</div>