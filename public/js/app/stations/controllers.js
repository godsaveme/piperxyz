(function(){
    angular.module('stations.controllers',[])
        .controller('StationController',['$scope', '$routeParams','$location','crudService','socketService' ,'$filter','$route','$log',
            function($scope, $routeParams,$location,crudService,socket,$filter,$route,$log){
                $scope.conceptos = [];
                $scope.concepto = {};
                $scope.errors = null;
                $scope.success;
                $scope.query = '';

                $scope.toggle = function () {
                    $scope.show = !$scope.show;
                };

                $scope.pageChanged = function() {
                    if ($scope.query.length > 0) {
                        crudService.search('conceptos',$scope.query,$scope.currentPage).then(function (data){
                        $scope.conceptos = data.data;
                    });
                    }else{
                        crudService.paginate('conceptos',$scope.currentPage).then(function (data) {
                            $scope.conceptos = data.data;
                        });
                    }
                };


                var id = $routeParams.id;

                if(id)
                {
                    crudService.byId(id,'conceptos').then(function (data) {
                        $scope.concepto = data;
                    });
                }else{
                    crudService.paginate('conceptos',1).then(function (data) {
                        $scope.conceptos = data.data;
                        $scope.maxSize = 5;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                        $scope.itemsperPage = 15;

                    });
                }

                socket.on('station.update', function (data) {
                    $scope.stations=JSON.parse(data);
                });

                $scope.searchConcepto = function(){
                if ($scope.query.length > 0) {
                    crudService.search('conceptos',$scope.query,1).then(function (data){
                        $scope.conceptos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }else{
                    crudService.paginate('conceptos',1).then(function (data) {
                        $scope.conceptos = data.data;
                        $scope.totalItems = data.total;
                        $scope.currentPage = data.current_page;
                    });
                }
                    
                };

                $scope.createConcepto = function(){
                    //$scope.atribut.estado = 1;
                    if ($scope.conceptoCreateForm.$valid) {
                        crudService.create($scope.concepto, 'conceptos').then(function (data) {
                          
                            if (data['estado'] == true) {
                                $scope.success = data['nombres'];
                                alert('grabado correctamente');
                                $location.path('/conceptos');

                            } else {
                                $scope.errors = data;

                            }
                        });
                    }
                }


                $scope.editConcepto = function(row){
                    $location.path('/conceptos/edit/'+row.id);
                };

                $scope.updateConcepto = function(){

                    if ($scope.conceptoCreateForm.$valid) {
                        crudService.update($scope.concepto,'conceptos').then(function(data)
                        {
                            if(data['estado'] == true){
                                $scope.success = data['nombres'];
                                alert('editado correctamente');
                                $location.path('/conceptos');
                            }else{
                                $scope.errors =data;
                            }
                        });
                    }
                };
                 $scope.validanomConcepto=function(texto){
                 alert("hola");
                   if(texto!=undefined){
                        crudService.validar('conceptos',texto).then(function (data){
                        $scope.concepto = data;
                        alert($scope.concepto);
                        if(data!=null){
                           alert("Usted no puede crear dos Conceptos con el mismo nombre");
                           $scope.concepto.nombre='';
                           $scope.concepto.shortname='';
                        }
                    });
                    }
               }
                $scope.deleteConcepto = function(row){
                    
                    $scope.concepto = row;
                }

                $scope.cancelConcepto = function(){
                    $scope.concepto = {};
                }

                $scope.destroyConcepto = function(){
                    crudService.destroy($scope.concepto,'conceptos').then(function(data)
                    {
                        if(data['estado'] == true){
                            $scope.success = data['nombre'];
                            $scope.concepto = {};
                            //alert('hola');
                            $route.reload();

                        }else{
                            $scope.errors = data;
                        }
                    });
                }
            }]);
})();
