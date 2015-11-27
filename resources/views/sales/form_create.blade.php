<section class="noPrintx">
 <section class="content-header">
          <h1>
            Venta
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="/stores">Venta</li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content"> 
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear Venta</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="storeCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                    <ul>
                      <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                    </ul>
                  </div> 






            <div class="nav-tabs-custom" id="myTabs">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Venta</a></li>
                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false" ng-click="actualizarCaja()">Caja Venta</a></li>
                  <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Opciones</a></li>
                  <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Reporte</a></li>
                  <li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false" ng-click="">Consultas</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">


                    <div class="row">
                        <div class="col-md-1 col-md-offset-2 ">
                            <div class="form-group">
                            <label for="">OPCIÓN:</label>
                            </div>

                        </div>
                      <div class="col-md-3 " >


                          <div class="form-group">


                              <div class="form-group">
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="optionsRadios" id="optionsRadios1" ng-model="ticket.concepto" value="ingreso" ng-change="selectConcepto()" >
                                          INGRESO
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="optionsRadios" ng-model="ticket.concepto" value="bote" ng-change="selectConcepto()">
                                          BOTE
                                      </label>
                                  </div>
                                  <div class="radio">
                                      <label>
                                          <input type="radio" name="optionsRadios" ng-model="ticket.concepto" value="otro" ng-change="selectConcepto()">
                                          OTRO
                                      </label>
                                  </div>
                              </div>

                          </div>



                        </div>


                    </div>

                      <div class="row" ng-show="setVisibleOtro">
                          <div class="col-md-1 col-md-offset-2 ">
                              <div class="form-group">
                                  <label for="" class="control-label">OTRO:</label>
                              </div>

                          </div>
                          <div class="col-md-3 " >


                              <div class="form-group">


                                  <select  class="form-control" name="name" placeholder="##" ng-model="ticket.nombreConcepto"  ng-change="agrega()">
                                      <option value="agregar">-- Agregar --</option>
                                      <option value="1">CAMPING</option>
                                      <option value="2">PRECIO ESPECIAL A COLEGIO</option>
                                      <option value="3">PRECIO ESPECIAL A IGLESIA</option>
                                      <option value="4">EVENTO</option>

                                      </select>

                              </div>



                          </div>

                          <div class="col-md-6" ng-show="setVisibleNuevoConcepto">
                              <div class="row">
                                  <div class="col-md-2">
                                      <label for="">Nuevo Concepto:</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" class="form-control" placeholder="..." ng-model="yvgy">
                                  </div>
                                  <div class="col-md-2">
                              <button class="btn btn-default pull-right">Agregar</button>
                                  </div>
                              </div>
                          </div>


                      </div>

                      <div class="row">
                          <div class="col-md-1 col-md-offset-2 ">
                              <div class="form-group">
                                  <label for="" class="control-label">PRECIO:</label>
                              </div>

                          </div>
                          <div class="col-md-3 " >


                              <div class="form-group">


                                  <input type="number" class="form-control" name="name" placeholder="##" ng-model="ticket.precioUnitFinal" required ng-disabled="!setVisibleOtro">

                              </div>



                          </div>


                      </div>

                      <div class="row">
                          <div class="col-md-1 col-md-offset-2 ">
                              <div class="form-group">
                                  <label for="" class="control-label">CANTIDAD:</label>
                              </div>

                          </div>
                          <div class="col-md-3 " >


                              <div class="form-group">


                                  <input type="number" class="form-control" name="name" placeholder="##" ng-model="ticket.cantidad" required>

                              </div>



                          </div>


                      </div>
                      <div class="row">
                          <div class="col-md-1 col-md-offset-2 ">
                              <div class="form-group">
                                  <label for="" class="control-label">TOTAL:</label>
                              </div>

                          </div>
                          <div class="col-md-3 " >


                              <div class="form-group">


                                  <input type="number" class="form-control" name="name" placeholder="##" ng-model="ticket.montoFinal" required ng-disabled="true">

                              </div>



                          </div>


                      </div>
                      <div class="row">
                          <div class="col-md-1 col-md-offset-3 ">
                                <button type="" class="btn btn-info pull-right">GENERAR</button>
                          </div>
                          <div class="col-md-1 col-md-offset-1 ">
                              <button type="" class="btn btn-warning pull-right">LIMPIAR</button>
                          </div>


                      </div>



                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="tab_2">
                    <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Tipo</th>
                      
                      <th>S/.Tarjeta</th>
                      <th>S/.Efectivo</th>
                      
                      <th>Ver Venta</th>
                    </tr>
                    
                    <tr ng-repeat="row in detCashes">
                      <td>@{{$index + 1}}</td>
                      <td>@{{row.fecha}}</td>
                      <td>@{{row.hora}}</td>
                      <td>@{{row.cash_motive.nombre}}</td>
                      
                      <td>@{{row.montoMovimientoTarjeta}}</td>
                      <td>@{{row.montoMovimientoEfectivo}}</td>
                      
                      <td ng-if="row.cashMotive_id==1 || row.cashMotive_id==14"><a href="/sales/edit/@{{row.observacion}}" target="_blank">ver venta</a></td>
                      <td ng-if="row.cashMotive_id!=1 && row.cashMotive_id!=14">@{{row.observacion}}</td>
                    </tr>                   
                  </table>
                  <div class="box-footer clearfix">
                    <pagination total-items="totalItems1" ng-model="currentPage1" max-size="maxSize1" 
                    class="pagination-sm no-margin pull-right" items-per-page="itemsperPage1" boundary-links="true" rotate="false" 
                    num-pages="numPages1" ng-change="pageChanged1()"></pagination>
                  </div>                    

                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="tab_3">
                  <div class="row">
                    <div class="col-md-4">
                     <div class="form-group" >
                        <label for="year">Empresa</label>
                        <select ng-click="mostrarAlmacenCaja()" class="form-control" name="" ng-model="store.id" ng-options="item.id as item.nombreTienda for item in stores">
                          <option value="">--Elije Empresa--</option>
                        </select>
                      </div>
                    </div>




                    <div class="col-md-4">
                        <div class="form-group" >
                          <label for="month">Caja</label>

                          <select class="form-control" name="" ng-model="cash1.cashHeader_id" ng-options="item.id as item.nombre for item in cashHeaders">
                          <option value="">--Elije Caja--</option>
                          </select>
                        </div>
                      </div>

                    </div>


                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4">
                  <div class="row">
                    <div class="col-md-4">
                    <div class="form-group" ng-class="{true: 'has-error'}[ customerCreateForm.fechaInicio.$error.required && customerCreateForm.$submitted || customerCreateForm.fechaInicio.$dirty && customerCreateForm.fechaInicio.$invalid]">
                    <label for="fechaInicio">Fecha de Inicio</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                      <input type="date" class="form-control" name="fechaInicio" ng-model="reporte.fechaInicio">
                      
                      </div>
                     </div>
                     </div>


                     <div class="col-md-4">
                    <div class="form-group" ng-class="{true: 'has-error'}[ customerCreateForm.fechaFin.$error.required && customerCreateForm.$submitted || customerCreateForm.fechaFin.$dirty && customerCreateForm.fechaFin.$invalid]">
                    <label for="fechaFin">Fecha de Fin</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                      <input type="date" class="form-control" name="fechaFin" ng-model="reporte.fechaFin">
                      
                      </div>
                     </div>
                     </div>

                     <a class="btn btn-default ng-binding" ng-click="reporteCliente()" style="margin-top:25px">Generar Reporte</a>

                     </div>

                  </div>



                </div><!-- /.tab-content -->
              </div>
               <script type="text/javascript">$('#myTabs a').click(function (e) {
                          e.preventDefault()
                          $(this).tab('show')})
              </script>



                  



                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
            
              </section><!-- /.content -->



<script type="text/ng-template" id="myPopoverTemplate5.html">
      <div class="form-group">
          <label>@{{dynamicPopover5.title}}</label>
        </div>

        <div>
        <label>Stock : </label>
        <label>@{{compras[$index].Stock}}</label>
        </div>

        <div>
        <label>Pedidos : </label>
        <label>@{{compras[$index].stockPedidos}}</label>
        </div>

        <div>
        <label>Separados : </label>
        <label>@{{compras[$index].stockSeparados}}</label>
        </div>

        <div>
        <label>precio : </label>
        <label>@{{compras[$index].precioProducto}}</label>
        </div>
          
                 
    </script>







<script type="text/ng-template" id="myPopoverTemplate6.html">
        <div class="form-group">
          <label>@{{dynamicPopover6.title}}</label>
          <div class="row" >
          <div class="col-md-12">
            <textarea  ng-model="sale.notas" type="text"  class="form-control"/>
           </div> 
          </div>
        </div>
    </script>




    <script type="text/ng-template" id="myPopoverTemplate.html">
        <div class="form-group">
          <label>@{{dynamicPopover.title}}</label>
          <div class="row" >
          <div class="col-md-9">
            <input type="number" min="0" ng-model="compras[$index].cantidad" ng-change="calcularmontos($index)" class="form-control">
            </div>
            <button type="button" class="btn btn-xs" ng-click="aumentarCantidad($index)">
            <span type="button" class="glyphicon glyphicon-plus"></span></button>
            <button type="button" class="btn btn-xs" ng-click="disminuirCantidad($index)">
            <span type="button" class="glyphicon glyphicon-minus"></span></button>

          </div>
        </div>
    </script>
    <hr />
    <script type="text/ng-template" id="myPopoverTemplate1.html">
        
      <tabset justified="true">

      <tab heading="Descuento">
        <label>@{{dynamicPopover1.title1}}</label>
            <div class="row" >
            <div class="col-md-9">
            <input type="number" ng-model="compras[$index].descuento" ng-change="keyUpDescuento($index)"class="form-control">
          </div>
         <button type="button" class="btn btn-xs" ng-click="aumentarDescuento($index)">
          <span type="button" class="glyphicon glyphicon-plus"></span></button>
         <button type="button" class="btn btn-xs" ng-click="disminuirDescuento($index)">
         <span type="button" class="glyphicon glyphicon-minus"></span></button>

        </div>
        </div>

      </tab>
      <tab heading="Precio Unidad"><div class="form-group">
            <label>@{{dynamicPopover1.title}}</label>
            <div class="row" >
            <div class="col-md-9">
            <input type="number" min="0" ng-change="calcularmontos($index)" ng-model="compras[$index].precioVenta" class="form-control">
          </div>
         <button type="button" class="btn btn-xs" ng-click="aumentarPrecio($index)">
          <span type="button" class="glyphicon glyphicon-plus"></span></button>
         <button type="button" class="btn btn-xs" ng-click="disminuirPrecio($index)">
         <span type="button" class="glyphicon glyphicon-minus"></span></button>

        </div>
        </div> 

        </tab>
      </tabset>
              
    </script>
    <hr />
    <script type="text/ng-template" id="myPopoverTemplate2.html">
        
      <tabset justified="true">

      <tab heading="Descuento">
        <label>@{{dynamicPopover2.title1}}</label>
            <div class="row" >
            <div class="col-md-8">
            <input type="number" ng-model="sale.descuento" ng-change="keyUpDescuentoPedido()" class="form-control"></input>
          </div>
         <button type="button" class="btn btn-xs" ng-click="aumentarDescuentoPedido()">
          <span type="button" class="glyphicon glyphicon-plus"></span></button>
         <button type="button" class="btn btn-xs" ng-click="disminuirDescuentoPedido()">
         <span type="button" class="glyphicon glyphicon-minus"></span></button>

        </div>
        </div>

      </tab>
      <tab heading="Total"><div class="form-group">
            <label>@{{dynamicPopover2.title}}</label>
            <div class="row" >
            <div class="col-md-8">
            <input type="number" min="0" ng-model="sale.montoTotal" ng-change="keyUpTotalPedido()" class="form-control">
          </div>
         <button type="button" class="btn btn-xs" ng-click="aumentarTotalPedido()">
          <span type="button" class="glyphicon glyphicon-plus"></span></button>
         <button type="button" class="btn btn-xs" ng-click="disminuirTotalPedido()">
         <span type="button" class="glyphicon glyphicon-minus"></span></button>

        </div>
        </div> 

        </tab>
      </tabset>
              
    </script>

    <!-- =========================================Ventana Agregar Año=================================-->
         <div class="container"  style="margin-top: 60px;">
           <div  class="modal fade" id="miventana2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="ngenabled">
             <div  class="modal-dialog">
                  <div style="border-radius: 5px" class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="ngenabled"> &times; </button>
                          <h4 class="modal-title">Opciones Año</h4>
                        </div>
                        <form name="customerCreateForm" role="form" novalidate> 
                        <!--=================cueropo========================-->
                        <div class="modal-body">
                   <div class="row" >
                    <div class="col-md-6">
                      <div class="form-group" ng-class="{true: 'has-error'}[ customerCreateForm.nombres.$error.required && customerCreateForm.$submitted || customerCreateForm.nombres.$dirty && customerCreateForm.nombres.$invalid]">
                      <label for="nombres">Nombres</label>
                      <input type="text" class="form-control" name="nombres" placeholder="Nombres" ng-model="customer.nombres" required>
                      <label ng-show="customerCreateForm.$submitted || customerCreateForm.nombres.$dirty && customerCreateForm.nombres.$invalid">
                        <span ng-show="customerCreateForm.nombres.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group" ng-class="{true: 'has-error'}[ customerCreateForm.apellidos.$error.required && customerCreateForm.$submitted || customerCreateForm.apellidos.$dirty && customerCreateForm.apellidos.$invalid]">
                      <label for="apellidos">Apellidos</label>
                      <input type="text" class="form-control" name="apellidos" placeholder="Apellidos"
                      ng-model="customer.apellidos" required>
                      <label ng-show="customerCreateForm.$submitted || customerCreateForm.apellidos.$dirty && customerCreateForm.apellidos.$invalid">

                        <span ng-show="customerCreateForm.apellidos.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                       </label>
                    </div>
                    </div>
                    </div>

                    <div class="row" >
                    <div class="col-md-6">
                    <div class="form-group" >
                      <label for="apellidos">Empresa / Razón Social</label>
                      <input type="text" class="form-control" name="empresa" placeholder="empresa"
                      ng-model="customer.empresa">
                     </div>
                     </div>
                     <div class="col-md-6">
                    <div class="form-group" >
                      <label for="direccFiscal">Dirección Fiscal</label>
                      <input type="text" class="form-control" name="direccFiscal" placeholder="dirección fiscal"
                      ng-model="customer.direccFiscal">
                     </div>
                     </div>
                     </div>

                    <div class="row" >
                    <div class="col-md-6"> 
                    <div class="form-group" >
                      <label for="ruc">RUC</label>
                      <input type="text" class="form-control" name="ruc" placeholder="ruc"
                      ng-model="customer.ruc">
                     </div>
                     </div>
                     <div class="col-md-3"> 
                        <div class="form-group" >
                                      <label for="codigo">Código de Cliente</label>
                                      <input type="text" class="form-control" name="codigo" placeholder="codigo de cliente"
                                             ng-model="customer.codigo" ng-disabled="customer.autogenerado" ng-required="!customer.autogenerado">
                                      <span style="color:#dd4b39;" ng-show="customerCreateForm.codigo.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                                  </div>
                      </div>

                        <div class="col-md-3">
                                  <div class="form-group">
                                      <label for="apellidos">Autogenerado</label><br>
                                      <input type="checkbox" ng-model="customer.autogenerado"> Cód. gen.
                                  </div>
                              </div>
                    </div>
                    <div class="row" >
                    <div class="col-md-5"> 
                    <div class="form-group" ng-class="{true: 'has-error'}[ customerCreateForm.fechaNac.$error.required && customerCreateForm.$submitted || customerCreateForm.fechaNac.$dirty && customerCreateForm.fechaNac.$invalid]">
                    <label for="fechaNac">Fecha de Nac.</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                      <input type="date" class="form-control" name="fechaNac" ng-model="customer.fechaNac">
                      <label ng-show="customerCreateForm.$submitted || customerCreateForm.fechaNac.$dirty && customerCreateForm.fechaNac.$invalid">
                                              <span ng-show="customerCreateForm.fechaNac.$invalid"><i class="fa fa-times-circle-o"></i>Fecha Inválida.</span>
                                            </label>
                      </div>
                     </div>
                     </div>
                     <div class="col-md-3"> 
                      <div class="form-group">
                                            <label>Género</label>
                                            <select name="genero" class="form-control" ng-model="customer.genero">
                                             <option value="">-- elige género --</option>
                                             <option value="M">Masculino</option>
                                             <option value="F">Femenino</option>

                                            </select>
                      </div>
                      </div>
                      <div class="col-md-4">
            <div class="form-group" >
                <label for="dni">DNI</label>
                <input type="text" class="form-control" name="dni" placeholder="8 dígitos"
                       ng-model="customer.dni">
            </div>
        </div>
                     </div>


                     <div class="">
                          <hr>
                          <button type="button" class="btn btn-default" ng-click="toggle()">Mostrar Formulario de Contacto</button>
                          <hr>
                      </div>

                <div ng-show="show" >
                     <div class="row" >
                     

                    <div class="col-md-4">  
                    <div class="form-group" >
                      <label for="fijo">Teléfono fijo</label>
                      <input type="text" class="form-control" name="fijo" placeholder="###"
                      ng-model="customer.fijo">
                     </div>
                     </div>

                     <div class="col-md-4"> 
                    <div class="form-group" >
                      <label for="movil">Teléfono movil</label>
                      <input type="text" class="form-control" name="movil" placeholder="###"
                      ng-model="customer.movil">
                     </div>
                     </div>
                     </div>

                    <div class="row" >
                     <div class="col-md-4">  
                    <div class="form-group" >
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="###"
                      ng-model="customer.email">
                     </div>
                     </div>
                     <div class="col-md-4">  
                    <div class="form-group" >
                      <label for="website">Página Web</label>
                      <input type="text" class="form-control" name="website" placeholder="###"
                      ng-model="customer.website">
                     </div>
                     </div>
                     <div class="col-md-4">  
                    <div class="form-group" >
                      <label for="direccContac">Dirección de Contacto</label>
                      <input type="text" class="form-control" name="direccContac" placeholder="###"
                      ng-model="customer.direccContac">
                     </div>
                     </div>
                     </div>

                    <div class="row" >
                     <div class="col-md-3"> 
                    <div class="form-group" >
                      <label for="distrito">Distrito</label>
                      <input type="text" class="form-control" name="distrito" placeholder="Chiclayo"
                      ng-model="customer.distrito">
                     </div>
                     </div>
                     <div class="col-md-3"> 
                    <div class="form-group" >
                      <label for="provincia">Provincia</label>
                      <input type="text" class="form-control" name="provincia" placeholder="Chiclayo"
                      ng-model="customer.provincia">
                     </div>
                     </div>
                     <div class="col-md-3"> 
                    <div class="form-group" >
                      <label for="departamento">Departamento</label>
                      <input type="text" class="form-control" name="departamento" placeholder="Lambayeque"
                      ng-model="customer.departamento">
                     </div>
                     </div>
                     <div class="col-md-3"> 
                    <div class="form-group" >
                      <label for="pais">País</label>
                      <input type="text" class="form-control" name="pais" placeholder="Perú"
                      ng-model="customer.pais">
                     </div>
                     </div>
                     </div>
                    <div class="form-group" >
                      <label for="notas">Notas</label>
                      <input type="notas" class="form-control" name="notas" placeholder="..."
                      ng-model="customer.notas"></input>
                     </div>
                      </div>
                  </div>
                        <!--================================================-->
                        <div class="modal-footer" >
                          <button type="submit" class="btn btn-primary" ng-click="createCustomer()">Crear</button>
                          <a  class="btn btn-danger" data-dismiss="modal" aria-hidden="ngenabled">Salir</a>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>


          <!-- =========================================Ventana Agregar Año=================================-->
         <div class="container"  style="margin-top: 60px;">
           <div  class="modal fade" id="miventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="ngenabled">
             <div  class="modal-dialog">
                  <div style="border-radius: 5px" class="modal-content">
                        <div class="modal-header" style="background-color: #0673B3; border-radius: 5px; color: #E2E2EC;">
                    
                          <h4 class="modal-title">Realizar Pago</h4>
                        </div>
                        <!--=================cueropo========================-->
                <div class="modal-body">
              <div class="row" >
                <div class="col-md-5"> 
                  <table class="table table-bordered">
                    <tr>
                      <td>Cash</td>
                      <td>
                        <input type="number" class="form-control" name="cash" placeholder="" min="0.00"
                          ng-model="pago.cash" ng-change="calcularVuelto()"></input>
                      </td>                    
                    </tr>
                    <tr>

                      <td>Tarjeta</td>
                      <td><input type="number" class="form-control" name="tarjeta" placeholder="" min="0.00"
                          ng-model="pago.tarjeta" ng-change="calcularVuelto()"></input>
                      </td>
                    </tr>
                    <tr> 
                      <td>
                          <a class="btn btn-success btn-xs" ng-click="limpiartipoTarjeta()">Clear</a> 
                      </td>
                      <td>
                        <div class="btn-group">
                          <label class="btn btn-primary" ng-model="radioModel" btn-radio="'2'">Visa</label>
                          <label class="btn btn-primary" ng-model="radioModel" btn-radio="'3'">MasterCard</label>
                        </div>  
                      </td>                    
                    </tr>                                    
                    <tr>
                      <td></td>
                      <td>
                        <div class="form-group">
                          <input type="checkbox" name="estado" ng-model="acuenta" ng-checked="acuenta" class="ng-valid ng-dirty ng-valid-parse ng-touched" ng-click="baseestado()">
                          <label for="estado">Acuenta</label>
                        </div> 
                      </td>
                    </tr>
                  </table>
                </div>
                  <div class="col-md-7">
                    <table class="table table-bordered">
                      <tr>
                        <td>Sub Total</td>
                        <td style="font-size:150%;">S/. @{{sale.montoBruto | number:2}}</td>                    
                      </tr>
                      <tr> 
                        <td>IGV</td>
                        <td style="font-size:150%;">S/. @{{sale.igv | number:2}}</td>                    
                      </tr>
                      <tr style="border-bottom: solid; border-width: medium;">
                        <td>Descuento</td>
                        <td style="font-size:150%;">S/. @{{sale.descuento | number:2}}</td>
                      </tr>  
                      <tr>
                        <td><b>Total Pagar</b></td>
                        <td><b  style="font-size:150%;">S/. @{{sale.montoTotal | number:2}}</b></td>                    
                      </tr> 
                      <tr>
                        <td><b>Vuelto</b></td>
                        <td><b style="font-size:150%;">S/. @{{sale.vuelto | number:2}}</b></td>                    
                      </tr>                                   
                    </table>

                </div>

                </div>
                  <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="checkbox" name="estado" ng-model="sale.comprobante" ng-checked="sale.comprobante" class="ng-valid ng-dirty ng-valid-parse ng-touched" ng-click="validaDocumento()">
                          <label for="estado">Comprobante:</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div ng-show="sale.comprobante" class="form-group">
                        <label  for="orderPurchase.tipoDoc">Tipo documento</label>
                        <select  class="form-control" ng-model="sale.tipoDoc" ng-change="cambioNumeracion()">
                              <option value="F">Factura</option>
                              <option value="B">Boleta</option>
                        </select>
                        </div> 
                      </div>
                      <div ng-show="sale.comprobante" class="col-md-4">
                      <h2>N°.- @{{numActual}}</h2>
                      </div>
                  </div>
                   
                </div>

                        <!--================================================-->
                        <div class="modal-footer" >
                          <button type="submit" class="btn btn-primary" ng-click="realizarPago()">Cobrar</button>
                          <a  class="btn btn-danger" data-dismiss="modal" aria-hidden="ngenabled">Salir</a>
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>




          <script type="text/ng-template" id="myModalContent.html">
        <div class="modal-header">
            <h3 class="modal-title">Presentaciones</h3>
        </div>
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nombre</th>
                      <th>Precio</th>
                      <th>Presentacion</th>
                      <th>Equivalencia</th>
                      <th>Producto Base</th>

                      <th style="width: 40px">Enviar</th>
                    </tr>
                    
                    <tr ng-repeat="row in presentations">
                      <td>@{{$index + 1}}</td>
                      <td ng-hide="true">@{{row.iddetalleP}}</td>
                      <td >@{{row.NombreAtributos}}</td>
                      <td>@{{row.precioProducto}}</td> 
                      <td>@{{row.Presentacion}}</td>  
                      <td>@{{row.equivalencia}} @{{row.nomBase}}</td>
                      <td ng-if="row.base==0"><span class="badge bg-red">NO</span></td> 
                      <td ng-if="row.base!=0"><span class="badge bg-green">SI</span></td> 
                      <td><a ng-click="AsignarCompra(row)" class="btn btn-warning btn-xs" data-dismiss="modal">Enviar</a></td>

                    </tr>                                       
                  </table>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" ng-click="ok()">OK</button>
            <button class="btn btn-warning" type="button" ng-click="cancel()">Cancel</button>
        </div>
    </script>
</section>


<div id="printx" style="display:none;">
<body >
    <div class="logotipo">
      <h1 class="log">KALUZ.EIRL</h1>
      <label>av. Pedro Ruiz #1020 - Chiclayo</label>
    </div>
    <div class="cuadroNume">
      <label>R.U.C.:12548963002</label>
      <h1 ng-if="headVoice.tipoDoc=='F'" class="fac">FACTURA</h1>
      <h1 ng-if="headVoice.tipoDoc=='B'" class="fac">BOLETA DE VENTA</h1>
      <label>N° @{{numCaja}}-@{{numeroDocumento}}</label>
    </div>
    <div class="headfac">
        <br>
      <label class="fech">Chiclayo @{{diaFactura}} de @{{mesActual}} del @{{anoFactura}}</label><br>
    <table class="tbhead" >
      <tr>
        <td><label>Señor(a):</label></td>
        <td><input style="width:400px;" type="text" value="@{{headVoice.cliente}}"></td>
        <td><label ng-if="headVoice.tipoDoc=='F'">RUC:</label><label ng-if="headVoice.tipoDoc=='B'">N° Doc:</label></td>
        <td><input style="width:250px;" type="text" value="@{{headVoice.ruc}}"></td>
      </tr>

      <tr>
        <td><label>Direccion:</label></td>
        <td ><input style="width:400px;" type="text" value="@{{headVoice.direccion}}"></td>
        <td><label>G. Remicion:</label></td>
        <td><input style="width:250px;" type="text"></td>
      </tr>
    </table>
      
    </div>
    <div class="tbcontent">
      <table class="table table-bordered">
        <thead>
          <th>CANTIDAD</th>
          <th style="width: 400px;">DESCRIPCION</th>
          <th>PRECIO<br>UNITARIO</th>
          <th>VALOR DE<br>VENTA</th>
        </thead>
        <tbody>
          <tr ng-repeat="row in detVoices">
            <td>@{{row.cantidad}}</td>
            <td>@{{row.descripcion}}</td>
            <td>S/.@{{row.PrecioUnit}}</td>
            <td>S/.@{{row.PrecioVent}}</td>
          </tr>
          <tr ng-if="headVoice.tipoDoc=='F'">
               <td colspan='2'><label>Son:</label><input class="descrResult" type="text" value="@{{DecripcionTotal}}"></td>
               <td></td>
               <td></td>
          </tr>
        </tbody>
      </table>
      
       </div>
      <div class="firma">
          <label>______________</label><br>
          <label>
            CANCELADO
          </label>
        </div>
      <div class="result">
        
        <table class="tbre">
        
          <tr ng-if="headVoice.tipoDoc=='F'">
             <td><label>Sub Total:</label></td>
             <td><input type="text"  value="S/.@{{headVoice.subTotal}}"></td>
          </tr>
          <tr ng-if="headVoice.tipoDoc=='F'">
              <td><label >IGV.18%:</label></td>
              <td><input type="text"  value="S/.@{{headVoice.igv}}"></td>
          </tr>
          <tr>
              <td><label >Total:</label></td>
              <td><input type="text"  value="S/.@{{headVoice.Total}}"></td>
          </tr> 
        
         </table>
      </div>
    
</body>
</div>







    
    













              
               