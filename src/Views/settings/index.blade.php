@extends('laraveladmin::app')
@section('title', 'Cài đặt chung')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <table class="form_table">
                <tr>
                    <th>Tên website</th>
                    <td>
                        <input type="text" name="settings[site_name]" class="form-control form-control-sm" placeholder="Tên website">
                    </td>
                </tr>
                <tr>
                    <th>Tên website</th>
                    <td>
                        <input type="text" name="settings[site_name]" class="form-control form-control-sm" placeholder="Tên website">
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop
@push('css')

@endpush
@push('js')

@endpush