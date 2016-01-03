<section class="content-header"><h1>
            Conceptos
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="/atributes">Conceptos</a> </li>
            <li class="active">Editar</li>
          </ol>


        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Agregar Conceptos</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="conceptoCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>
                      <div class="col-md-5">
                   <div class="form-group" ng-class="{true: 'has-error'}[ conceptoCreateForm.nombre.$error.required && conceptoCreateForm.$submitted || conceptoCreateForm.nombre.$dirty && conceptoCreateForm.nombre.$invalid]">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" name="nombre" ng-blur="validanomStacion()"placeholder="Nombre" ng-model="concepto.nombre" required>
                      <label ng-show="conceptoCreateForm.$submitted || conceptoCreateForm.nombre.$dirty && conceptoCreateForm.nombre.$invalid">
                        <span ng-show="conceptoCreateForm.nombre.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                          </div>
                      <div class="col-md-5">
                    <div class="form-group" ng-class="{true: 'has-error'}[ conceptoCreateForm.shortname.$error.required && conceptoCreateForm.$submitted || conceptoCreateForm.shortname.$dirty && conceptoCreateForm.shortname.$invalid]">
                      <label for="shortname">Precio Unitario</label>
                      <input type="number" class="form-control" name="shortname" placeholder="" ng-model="concepto.precioUnit" required min="0">
                      <label ng-show="conceptoCreateForm.$submitted || conceptoCreateForm.shortname.$dirty && conceptoCreateForm.shortname.$invalid">
                        <span ng-show="conceptoCreateForm.shortname.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                          </div>
                      <div class="col-md-5">
                      <div class="form-group" >
                          <label for="notas">Mostrable?</label>
                          <select class="form-control" name="estado" ng-model="concepto.mostrable" ng-options="item.key as item.value for item in estados"></select>
                      </div>
                      </div>
                      <div class="col-md-5">
                    <div class="form-group" >
                      <label for="notas">Descripcion</label>
                      <textarea type="notas" class="form-control" name="notas" placeholder="Descripcion"
                      ng-model="concepto.descripcion" rows="4" cols="50"></textarea>
                     </div>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="createConcepto()">Crear</button>
                    <a href="/conceptos" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->