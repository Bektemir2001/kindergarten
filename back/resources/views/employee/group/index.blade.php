@extends('layouts.employee_layout')

@section('content')
    <div class="content-wrapper">
        <div class="content-wrapper">
            <div class="content-header row">
                    <div class="btn-group float-md-right"><a class="btn white" style="background-color: #5f1dea; border-radius: 2rem; " href="#">ДОБАВИТЬ РЕБЕНКА</a></div>
            </div>
            <br>
            <div class="position-relative table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:40%">
                            <div class="d-inline">Ф.И.О</div>
                        </th>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer">
                            <div class="d-inline">День рождение</div>
                        </th>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:20%">
                            <div class="d-inline">Имя родителя</div>
                        </th>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:1%">
                            <div class="d-inline"></div>
                        </th>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:1%">
                            <div class="d-inline">Функции</div>
                        </th>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:1%">
                            <div class="d-inline"></div>
                        </th>
                    </tr>
                    <tr class="table-sm">
                        <th class=""><input class="form-control form-control-sm" value="" oninput="searchByName(this.value)"></th>
                        <th class=""><input class="form-control form-control-sm" value="" oninput="searchByBD(this.value)"></th>
                        <th class=""><input class="form-control form-control-sm" value="" oninput="searchByParent(this.value)"></th>
                    </tr>
                    </thead>
                    <tbody id="TableId">
                    <tr class="">
                        <td class="">John Doe</td>
                        <td class="">2018/01/01</td>
                        <td class="">Guest</td>
                        <td class="py-1 px-1"><a href="#" class="mb-0 btn-sm btn btn-outline-info round">Редактировать</a></td>
                        <td class="py-1 px-1"><a href="#" class="mb-0 btn-sm btn btn-outline-success round">Посмотреть</a></td>
                        <td class="py-1 px-1"><a href="#" class="mb-0 btn-sm btn btn-outline-danger round">Удалить</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    <script>
        function searchByName(value){
            let table = document.getElementById('TableId');
            let rows = table.rows;
            let n = rows.length;
            for(let i = 0; i < n; i++){
                if(rows[i].cells[0].innerHTML.indexOf(value) === -1){
                    rows[i].className = 'd-none';
                }
                else{
                    rows[i].className = '';
                }
            }
        }
        function searchByBD(value){
            let table = document.getElementById('TableId');
            let rows = table.rows;
            let n = rows.length;
            for(let i = 0; i < n; i++){
                if(rows[i].cells[1].innerHTML.indexOf(value) === -1){
                    rows[i].className = 'd-none';
                }
                else{
                    rows[i].className = '';
                }
            }
        }
        function searchByParent(value){
            let table = document.getElementById('TableId');
            let rows = table.rows;
            let n = rows.length;
            for(let i = 0; i < n; i++){
                if(rows[i].cells[2].innerHTML.indexOf(value) === -1){
                    rows[i].className = 'd-none';
                }
                else{
                    rows[i].className = '';
                }
            }
        }
    </script>
    </div>
@endsection