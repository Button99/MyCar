<div class="form-group">
    {{Form::label($name, null, ['class' => 'control-label'])}}
    <br>
    {{Form::year($name, $value, array_merge(['class' => 'form-control'], $attributes))}}
</div>