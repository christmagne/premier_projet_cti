<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="classes-table">
            <thead>
            <tr>
                <th>Cours</th>
                <th>Niveau</th>
                <th>Enseignant</th>
                <th>Tranche Horaire</th>
                <th>Jour Cours</th>
                <th>Salle</th>
                <th>Cout Formation</th>
                <th>Cout Inscription</th>
                <th>Cout Documentation</th>
                <th>Date Debut</th>
                <th>Date Fin</th>
                <th>Date Test Ligne</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($classes as $classe)
                <tr>
                    <td>{{ $classe->cours }}</td>
                    <td>{{ $classe->niveau }}</td>
                    <td>{{ $classe->enseignant }}</td>
                    <td>{{ $classe->tranche_horaire }}</td>
                    <td>{{ $classe->jour_cours }}</td>
                    <td>{{ $classe->salle }}</td>
                    <td>{{ $classe->cout_formation }}</td>
                    <td>{{ $classe->cout_inscription }}</td>
                    <td>{{ $classe->cout_documentation }}</td>
                    <td>{{ $classe->date_debut }}</td>
                    <td>{{ $classe->date_fin }}</td>
                    <td>{{ $classe->date_test_ligne }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['classes.destroy', $classe->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('classes.show', [$classe->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('classes.edit', [$classe->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $classes])
        </div>
    </div>
</div>
