<!-- Cours Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cours', 'Cours:') !!}
    {!! Form::text('cours', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Niveau Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveau', 'Niveau:') !!}
    {!! Form::text('niveau', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Enseignant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enseignant', 'Enseignant:') !!}
    {!! Form::text('enseignant', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Tranche Horaire Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tranche_horaire', 'Tranche Horaire:') !!}
    {!! Form::text('tranche_horaire', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Jour Cours Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jour_cours', 'Jour Cours:') !!}
    {!! Form::text('jour_cours', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Salle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salle', 'Salle:') !!}
    {!! Form::text('salle', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Cout Formation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cout_formation', 'Cout Formation:') !!}
    {!! Form::number('cout_formation', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Cout Inscription Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cout_inscription', 'Cout Inscription:') !!}
    {!! Form::number('cout_inscription', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Cout Documentation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cout_documentation', 'Cout Documentation:') !!}
    {!! Form::number('cout_documentation', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Debut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_debut', 'Date Debut:') !!}
    {!! Form::date('date_debut', null, ['class' => 'form-control','id'=>'date_debut']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_debut').datepicker()
    </script>
@endpush

<!-- Date Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_fin', 'Date Fin:') !!}
    {!! Form::date('date_fin', null, ['class' => 'form-control','id'=>'date_fin']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_fin').datepicker()
    </script>
@endpush

<!-- Date Test Ligne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_test_ligne', 'Date Test Ligne:') !!}
    {!! Form::date('date_test_ligne', null, ['class' => 'form-control','id'=>'date_test_ligne']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_test_ligne').datepicker()
    </script>
@endpush