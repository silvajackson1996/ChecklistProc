@include('header')
<div class="col-md-12">
			<div class="card">
				<form method="post" action="{{ route('checklist-update', ['id' => $event->id]) }}" class="form-horizontal">
                    {{ csrf_field() }}
					<div class="card-header card-header-text" data-background-color="green">
						<h4 class="card-title">Atualizar Incidente</h4>
					</div>
					<div class="card-content">
                        <div class="row">
                            <div class="col-sm-12">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Incidente" name="incident" required value="{{ $event->incident }}">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Sistema afetado" name="system_affected" value="{{ $event->system_affected }}">
										</div>
									</div>

									<div class="col-md-5">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Rotina afetada" name="affected_routine" value="{{ $event->affected_routine }}">
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
											<input type="text" class="form-control" placeholder="Entidade(s)" name="entity" value="{{ $event->entity }}">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Gerou log de erro?" name="error_log" value="{{ $event->error_log }}">
										</div>
									</div>

									<div class="col-md-5">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Realizado contato externo?" name="external_contact" value="{{ $event->external_contact }}">
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
											<input type="text" class="form-control" placeholder="Equipe responsável" name="responsible_team" value="{{ $event->responsible_team }}">
										</div>
									</div>

									<div class="col-md-4">
										<!-- <div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Tipo de erro">
										</div> -->
                                        <select class="selectpicker" data-style="select-with-transition" title="Tipo de erro" style="width: 100%;" data-size="7" name="error_type">
										<option disabled> Tipo de erro</option>
										<option value="2" {{ $event->error_type == 2 ? 'selected' : ''}}>Paris </option>
										<option value="3" {{ $event->error_type == 3 ? 'selected' : ''}}>Bucharest</option>
										<option value="4" {{ $event->error_type == 4 ? 'selected' : ''}}>Rome</option>
										<option value="5" {{ $event->error_type == 5 ? 'selected' : ''}}>New York</option>
										<option value="6" {{ $event->error_type == 6 ? 'selected' : ''}}>Miami </option>
										<option value="7" {{ $event->error_type == 7 ? 'selected' : ''}}>Piatra Neamt</option>
										<option value="8" {{ $event->error_type == 8 ? 'selected' : ''}}>Paris </option>
										<option value="9" {{ $event->error_type == 9 ? 'selected' : ''}}>Bucharest</option>
										<option value="10" {{ $event->error_type == 10 ? 'selected' : ''}}>Rome</option>
										<option value="11" {{ $event->error_type == 11 ? 'selected' : ''}}>New York</option>
										<option value="12" {{ $event->error_type == 12 ? 'selected' : ''}}>Miami </option>
										<option value="13" {{ $event->error_type == 13 ? 'selected' : ''}}>Piatra Neamt</option>
										<option value="14" {{ $event->error_type == 14 ? 'selected' : ''}}>Paris </option>
										<option value="15" {{ $event->error_type == 15 ? 'selected' : ''}}>Bucharest</option>
										<option value="16" {{ $event->error_type == 16 ? 'selected' : ''}}>Rome</option>
										<option value="17" {{ $event->error_type == 17 ? 'selected' : ''}}>New York</option>
										<option value="18" {{ $event->error_type == 18 ? 'selected' : ''}}>Miami </option>
										<option value="19" {{ $event->error_type == 19 ? 'selected' : ''}}>Piatra Neamt</option>
									</select>
									</div>

									<div class="col-md-5">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Impacto" name="impact" value="{{ $event->impact }}">
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
											<input type="text" class="form-control" placeholder="Hora de abertura do Incidente" name="incident_opening" value="{{ $event->incident_opening }}">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group label-floating is-empty">
											<label class="control-label"></label>
											<input type="text" class="form-control" placeholder="Hora de inicio do atendimento" name="service_start" value="{{ $event->service_start }}">
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
                                            <input type="text" class="form-control" placeholder="Descrição e solução de erro apresentada" name="description" value="{{ $event->description }}"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
								<div class="form-group form-button">
	                            	<button type="submit" class="btn btn-fill btn-success">Atualizar</button>
	                        	</div>
	                    	</div>
                        </div>
					</div>
				</form>
			</div>
		</div>
        @include('footer')