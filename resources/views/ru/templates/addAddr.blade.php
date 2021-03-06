<form class="form-inline" method="POST" action="{{route('addAddress')}}" id="address_adder">
    <input type="hidden" name="_token" value="{{csrf_token()}}" id="_token">
    <h2>Добавление новой системы в базу данных</h2>
    <h3>Координаты</h3>
    <div class="form-group" id="off_normal" style="display: none;">
        <label for="one_name">Название системы:</label>
        <input type="text" class="form_add_1" id="one_name" name="one_name" placeholder="Monocerotis 20">
    </div>
    <div class="form-group" id="if_normal_1">
        <label for="region_add">Регион:</label>
        <input type="text" class="form_add_1" id="region_add" name="region" placeholder="Plaa Trua" list="regions" autocomplete="on">
        <datalist id="regions">
        </datalist>
    </div>
    <div class="form-group" id="if_normal_2">
        <label for="code_name">Код:</label>
        <input type="text" class="form_add_1" id="code_name" name="code_name" placeholder="EG-Y D76">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" id="spec">Именная система</button>
    </div>
    <div>
        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Добавить</button>
    </div>
</form>
<script>
    $('#spec').click(function(e){
        e.preventDefault();
        $('#if_normal_2').toggle();
        $('#if_normal_1').toggle();
        $('#off_normal').toggle();
        $('#address_adder').trigger( 'reset' );
        if ($('#off_normal').is(':visible') )
        {
            $('#spec').html('Обычная система');
        }
        else
            $('#spec').html('Именная система');
    });
</script>
<script type="text/javascript" src="/js/regionTracker.js"></script>