@extends('layouts.master')

@section('title', 'Accounts - Entries')

@section('jsFooter')
<script>
    const saveApi = '{{ route('api.newAcc') }}';
    const getApi = '{{ route('api.getAcc') }}';
</script>
<script src="js/accounts.js"></script>
@endsection

@section('content')
<div id='app' class='row'>
    <form class='col col-6 row' v-on:submit.prevent="newAcc">
        @csrf
        <div class='card'>
            <div class='card-body'>
                <div class="col col-12 mb-3">
                    <label for="dateAplication" class="form-label">Fecha de aplicacion</label>
                    <input v-model='dateAplication' name='dateAplication' type="date" max='{{ date("Y-m-d",strtotime("next sunday")) }}' class="form-control" id="dateAplication" required>
                    <div id="dateAplication" class="form-text">Fecha en que se va a aplicar el asiento</div>
                </div>
                <div class="col col-12 mb-3">
                    <label for="description" class="form-label">Descripcion</label>
                    <textarea v-model='description' name='description' class="form-control" required></textarea>
                </div>
                <div class="col col-12 mb-3">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input v-model='typeAccount' type="radio" class="btn-check" name="typeAccount" id="typeAccount1" autocomplete="off" value='1'>
                        <label class="btn btn-outline-primary" for="typeAccount1">Entrada</label>

                        <input v-model='typeAccount' type="radio" class="btn-check" name="typeAccount" id="typeAccount2" autocomplete="off" value='2'>
                        <label class="btn btn-outline-primary" for="typeAccount2">Salida</label>
                    </div>
                </div>
                <div class="col col-12 mb-3">
                    <label name='amount' class="form-label">Monto</label>
                    <input placeholder='$0.00' v-model='amount' type='number' min='0' step='0.1' class="form-control" required/>

                </div>
                <div class="col col-12 mb-3">
                    <label class="form-label">Solicitud</label>
                    <input name="requestID" v-model='requestID' placeholder='ID #' type='number' min='0' step='1' class="form-control"/>
                </div>
                <div class="col col-12 mb-3">
                    <label class="form-label">Cuenta contable</label>
                    <select class="form-select" id="floatingSelect" disabled>
                        <option selected disabled>Sin cuentas contables cargadas</option>
                    </select>
                </div>
                <div class='col col-12 text-end'>
                    <a href="#" class="link-danger">Cancelar</a>&nbsp;
                    <button type="submit" class='btn btn-primary'>Guardar</button>
                </div>
            </div>
        </div>

    </form>
    <div class='col col-6'>
        <table class='table'>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Descipcion</th>
                    <th>Monto</th>
                    <th>Solicitud</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for='row in accs'>
                    <td>@{{ row.dateAplication }}</td>
                    <td>@{{ row.description }}</td>
                    <td>@{{ row.amount }}MXN</td>
                    <td>@{{ row.requestID }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop
