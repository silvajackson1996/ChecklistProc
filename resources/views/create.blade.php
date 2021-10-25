@include('header')
<div class="col-md-12">
			<div class="card">
				<form method="post" action="{{ route('checklist-store') }}" class="form-horizontal">
                    {{ csrf_field() }}
					<div class="card-header card-header-text" data-background-color="green">
						<h4 class="card-title">Inserir Incidente</h4>
					</div>
					<div class="card-content">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Incidente" name="incident" required>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Sistema afetado" name="system_affected">
										</div>
									</div>

									<div class="col-md-5">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Rotina afetada" name="affected_routine">
										</div>
									</div>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Entidade(s)" name="entity">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Gerou log de erro?" name="error_log">
										</div>
									</div>

									<div class="col-md-5">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Realizado contato externo?" name="external_contact">
										</div>
									</div>
								</div>
							</div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Equipe responsável" name="responsible_team">
										</div>
									</div>

									<div class="col-md-4">
										<!-- <div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Tipo de erro">
										</div> -->
                                        <select class="selectpicker" data-style="select-with-transition" title="Tipo de erro" style="width: 100%;" data-size="7" name="error_type">
										<option disabled> Tipo de erro</option>
										<option value="2">Paris </option>
										<option value="3">Bucharest</option>
										<option value="4">Rome</option>
										<option value="5">New York</option>
										<option value="6">Miami </option>
										<option value="7">Piatra Neamt</option>
										<option value="8">Paris </option>
										<option value="9">Bucharest</option>
										<option value="10">Rome</option>
										<option value="11">New York</option>
										<option value="12">Miami </option>
										<option value="13">Piatra Neamt</option>
										<option value="14">Paris </option>
										<option value="15">Bucharest</option>
										<option value="16">Rome</option>
										<option value="17">New York</option>
										<option value="18">Miami </option>
										<option value="19">Piatra Neamt</option>
									</select>
									</div>

									<div class="col-md-5">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Impacto" name="impact">
										</div>
									</div>
								</div>
							</div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Hora de abertura do Incidente" name="incident_opening">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Hora de inicio do atendimento" name="service_start">
										</div>
									</div>
								</div>
							</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" placeholder="Descrição e solução de erro apresentada" name="description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
								<div class="form-group form-button">
	                            	<button type="submit" class="btn btn-fill btn-success">Inserir</button>
	                        	</div>
	                    	</div>
                        </div>
					</div>
				</form>
			</div>
		</div>
        @include('footer')