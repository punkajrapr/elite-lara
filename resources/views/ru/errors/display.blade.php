<div class="alert alert-danger" id="form-error">
    <strong>Упс!</strong> Кажется, возникли проблемы с тем, что вы ввели.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>