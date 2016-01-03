<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Concepto
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="/conceptos">Concepto</a> </li>
            <li class="active">Editar</li>
          </ol>


        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar Concepto</h3>
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
                    <div class="form-group" >
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre"
                      ng-model="concepto.nombre">
                     </div>
                          </div>
                      <div class="col-md-5">
                    <div class="form-group" >
                      <label for="pais">ShortName</label>
                      <input type="number" class="form-control" name="pais" placeholder="ShortName"
                      ng-model="concepto.precioUnit" min="0" string-to-number>
                     </div>
                          </div>
                      <div class="col-md-5">
                    <div class="form-group" >
                      <label for="notas">Descripcion</label>
                      <textarea type="notas" class="form-control" name="notas" placeholder="Descripcion"
                      ng-model="concepto.descripcion" rows="4" cols="50"></textarea>
                     </div>
                      </div>
                      <div class="col-md-5">
                      <div class="form-group">
                          <label for="notas">Mostrable?</label>
                          <select class="form-control" name="estado" ng-model="concepto.mostrable" ng-options="item.key as item.value for item in estados"></select>
                      </div>
                        </div>
                </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="updateConcepto()">Modificar</button>
                    <a href="/conceptos" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->