@include('header')
@if(Session('success'))
<div class="alert alert-success">
    <span><b> Sucesso </b> {{ Session('success') }}</span>
</div>
@endif
    <div class="wrapper">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon" data-background-color="green">
                                <i class="material-icons">assignment</i>
                            </div>

                            <div class="card-content">
                                <h4 class="card-title">CheckList Processamento</h4>
                                <div class="toolbar">
                                    <!--        Here you can write extra buttons/actions for the toolbar              -->
                                </div>
                                <div class="material-datatables">
                                    <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Incidente</th>
                                                <th>Sistema afetado</th>
                                                <th>Rotina afetada</th>
                                                <th>Entidade(s)</th>
                                                <th>Data</th>
                                                <th class="disabled-sorting text-right">Ações</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Incidente</th>
                                                <th>Sistema afetado</th>
                                                <th>Rotina afetada</th>
                                                <th>Entidade(s)</th>
                                                <th>Data</th>
                                                <th class="text-right">Ações</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($events as $event)
                                            <tr>
                                                <td>{{ $event->incident }}</td>
                                                <td>{{ $event->system_affected }}</td>
                                                <td>{{ $event->affected_routine }}</td>
                                                <td>{{ $event->entity }}</td>
                                                <td>{{ $event->created_at }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('checklist-show', ['id' => $event->id]) }}" class="btn btn-simple btn-warning btn-icon"><i class="material-icons">dvr</i></a>
                                                    <a href="{{ route('checklist-delete', ['id' => $event->id]) }}" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end content-->
                        </div>
                        <!--  end card  -->
                    </div>
                    <!-- end col-md-12 -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </div> 
@include('footer')
