@extends('layouts.employee_layout')

@section('content')
    <style>
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .container {
            display: block;
            position: relative;
            cursor: pointer;
            font-size: 20px;
            user-select: none;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: relative;
            top: 0;
            left: 0;
            height: 1.5em;
            width: 1.5em;
            background-color: #ccc;
            border-radius: 50%;
            transition: .4s;
        }

        .checkmark:hover {
            box-shadow: inset 17px 17px 16px #b3b3b3,
            inset -17px -17px 16px #ffffff;
        }

        /* When the checkbox is checked, add a blue background */
        .container input:checked ~ .checkmark {
            box-shadow: none;
            background-color: limegreen;
            transform: rotateX(360deg);
        }

        .container input:checked ~ .checkmark:hover {
            box-shadow: 3px 3px 3px rgba(0,0,0,0.2);
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .container .checkmark:after {
            left: 0.7em;
            top: 0.4em;
            width: 0.25em;
            height: 0.5em;
            border: solid white;
            border-width: 0 0.15em 0.15em 0;
            box-shadow: 0.1em 0.1em 0em 0 rgba(0,0,0,0.3);
            transform: rotate(45deg);
        }
    </style>
    <div class="content-wrapper">
        <div class="content-wrapper">
            <div class="position-relative table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:40%">
                            <div class="d-inline" style="font-size: 20px">Ф.И.О</div>
                        </th>

                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:1%">
                            <div class="d-inline"></div>
                        </th>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:1%">
                            <div class="d-inline" style="font-size: 20px">Функции</div>
                        </th>
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:1%">
                            <div class="d-inline"></div>
                        </th>
                    </tr>
                    <tr class="table-sm">
                        <th class=""><input class="form-control form-control-sm" value="" oninput="searchByName(this.value)"></th>
                    </tr>
                    </thead>
                    <tbody id="TableId">
                    @foreach($children as $child)
                        <tr class="">
                            <td class="" style="font-size:20px">{{$child->name}} {{$child->surname}}</td>
                            <td class="py-1 px-1"></td>
                            <td class="py-1 px-3">
                                <label class="container">
                                    <input type="checkbox" >
                                    <div class="checkmark"></div>
                                </label>
                            </td>
                            <td class="py-1 px-1">
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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

            document.getElementById('form').addEventListener("submit", function (event) {
                event.preventDefault()
                let url = "{{route('admin.children.create')}}";
                let name = document.getElementById("name").value;
                let surname = document.getElementById("surname").value;
                let birth_date = document.getElementById("birth_date").value;
                let gender = document.querySelector('input[name="gender"]:checked').value;
                let parent_id = document.getElementById("parent_id").value;
                let group_id = document.getElementById("group_id").value;
                let photo = document.getElementById("photo").files[0];
                let birth_certificate = document.getElementById("birth_certificate").files[0];
                let med_certificate = document.getElementById("med_certificate").files[0];
                let med_disability = document.getElementById("med_disability").files[0];
                let payment = document.getElementById("payment").value;
                let data = new FormData();
                data.append("name", name);
                data.append("surname", surname);
                data.append("birth_date", birth_date);
                data.append("gender", gender);
                data.append("parent_id", parent_id);
                data.append("group_id", group_id);
                data.append("photo", photo);
                data.append("birth_certificate", birth_certificate);
                data.append("med_certificate", med_certificate);
                data.append("med_disability", med_disability);
                data.append("payment", payment);
                fetch(url, {
                    method: 'POST',
                    body: data
                })
                    .then(res => res.json())
                    .then(data => {
                        cancelForm();
                        let table = document.getElementById('childTable');
                        let i = table.rows.length;
                        let row = table.insertRow(i);
                        row.insertCell(0).innerHTML = data.id;
                        row.insertCell(1).innerHTML = data.name;
                        row.insertCell(2).innerHTML = data.surname;
                        row.insertCell(3).innerHTML = data.group_id;
                        row.insertCell(4).innerHTML = `<div style="float: left; display: block; width: 30%;" class="text-center">` +
                            `<a href="`+ "children/show/" + data.id + `"><i class="fas fa-eye"></i></a> </div>` +
                            `<div style="float: left; display: block; width: 30%;" class="text-center">` +
                            `<a href="`+ "admin/children/edit/" + data.id + `" class="text-success"><i class="fas fa-pen"></i></a> </div>` +
                            `<div style="float: left; display: block; width: 30%;" class="text-center">` +
                            `<form action="`+ "admin/children/delete/" + data.id + `" method="POST"> @method("DELETE") @csrf` +
                            `<button title="delete" class="border-0 bg-transparent">`+
                            `<i title="delete" class="fas fa-trash text-danger" role="button"></i> </button> </form> </div>`;
                    })
                    .catch(error => console.log(error))
            })
        </script>
    </div>
@endsection
