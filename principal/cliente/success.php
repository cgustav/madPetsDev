<div class="container pets-scroll text-md-center text-xs-center">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 col-md-offset-3 img-responsive" style="margin-top:20px;">
                        <img src="../../images/rd-catdog-client.png" class="img-responsive" alt="mascota-profile">
                        
                        
                </div>
                <div class="col-md-4">
                </div>
            </div>
            <div class="row" style="margin-top:30px;">
                <div class="container pets-scroll-content col-md-3">
                    
                </div>
                <div class="container pets-scroll-content col-md-6" >    
                    
                
                <!-- dropdown de buttons -->
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle btn-lg" type="button" id="dropdownMascotas"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="buscarMascota(1)">
                            Seleccionar mascota
                        </button>
                        <div id="pruebas"class="dropdown-menu" aria-labelledby="dropdownMenu2">
                           
                        </div>
                    </div>
                </div>        
                <div class="container pets-scroll-content col-md-3 text-md-left">
                    <!--<button id="buscar-mascota"class="btn btn-success">Mostrar datos</button>-->
                </div>
            </div>
            <div class="row text-md-center text-xs-center" style="margin-top:30px;">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 text-sm-left">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="color: green; font-weight: bold;">Ficha de mascota</h3>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="outNombre">Nombre</label>
                                        <input type="text" id="outNombre" class="form-control" placeholder="Cachupin" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="outEspecie">Especie</label>
                                        <input type="text" id="outEspecie" class="form-control" placeholder="Canis Lupus" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="outRaza">Raza</label>
                                        <input type="text" id="outRaza" class="form-control" placeholder="Pastor Alemán" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="outSexo">Sexo</label>
                                        <input type="text" id="outSexo" class="form-control" placeholder="Macho" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="outDescripcion">Descripción</label>
                                        <textarea class="form-control" id="outDescripcion" rows="2" placeholder="Pelaje fino color marrón y grisaceo"disabled="disabled"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="outNacimiento">Nacimiento</label>
                                        <input type="text" id="outNacimiento" class="form-control" placeholder="06-diciembre-2016" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="outVacunas">Vacunaciones</label>
                                        <input type="text" id="outVacunas" class="form-control" placeholder="Al día" disabled="disabled">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="outEsteril">Estéril</label>
                                        <input type="text" id="outEsteril" class="form-control" placeholder="Si" disabled="disabled">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="outDescripcion">Afecciones</label>
                                        <textarea class="form-control" id="outAfecciones" rows="3" placeholder="Problemas sanguíneos" disabled="disabled"></textarea>
                                    </div>
                                </div>
                                
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-sm-10 text-sm-left text-md-left">
                                        <a href="#" class="btn btn-warning">Imprimir</a>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-sm-10 text-sm-left text-md-left">
                                        <a href="vacunas-mascota.php" class="btn btn-success">Ver vacunas</a>
                                    </div>
                                </div>
                                
                                
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                </div>
                </div>
        </div>