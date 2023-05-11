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
        @if (session('status'))
            <div class="alert alert-dismissible white" style="background-color: #9b73f2">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status') }}
            </div>
        @endif
        <div class="position-relative">
            <form method="POST" action="{{route('employee.attendance.archive')}}">
                @csrf
                <div class="position-relative table-responsive"><h4>Выберите месяц</h4></div>
                <div class="row">
                    <div class="col-sm-2">
                        <input id="date" type="month" class="@error('date') is-invalid @enderror" name="date" value="{{date('Y-m')}}" style="margin: 20px 20px;" required autocomplete="date">
                        @error('date')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-sm-2" style="flex: 50%; padding: 10px;width: 300px;">
                        <button type="submit" class="btn btn-gradient-primary" style="margin-right:85%;">Показать</button>
                    </div>
                </div>
            </form>
        </div>
            <br>
            <br>
            <br>
            <br>
        <div class="position-relative table-responsive">
            <h4>Посещаемость детей за месяц {{\Carbon\Carbon::parse($attendance[0]->date)->format('F')}}</h4>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer;width:40%">
                        <div class="d-inline" style="font-size: 15px">Ф.И.О</div>
                    </th>
                    @foreach($attendance as $at)
                        <th class="position-relative pr-4" style="vertical-align:middle;overflow:hidden;cursor:pointer">
                            <div class="d-inline" style="font-size: 15px">{{\Carbon\Carbon::parse($at->date)->format('m/d')}}</div>
                        </th>
                    @endforeach
                </tr>
                <tr class="table-sm">
                    <th class=""><input class="form-control form-control-sm" value="" oninput="searchByName(this.value)"></th>
                    @foreach($attendance as $at)
                        <th class="">
                            <label class="container" style="right: 7px;">
                                <input type="checkbox">
                                <div class="checkmark"></div>
                            </label>
                        </th>
                    @endforeach
                </tr>
                </thead>
                <tbody id="TableId">
                @foreach($children as $child)
                    <tr class="" data-child="{{$child->id}}" data-group_id="{{$child->group_id}}">
                        <td class="" style="font-size:20px">{{$child->name}} {{$child->surname}}</td>
                        @foreach($attendance as $at)
                            @php
                                $data = json_decode($at->children, true);
//                            @endphp
                            @if(array_key_exists($child->id, $data))
                                @if($data[$child->id])
                                    <td class="py-1 px-2">
                                        <label class="container">
                                            <input type="checkbox" checked="checked" disabled>
                                            <div class="checkmark"></div>
                                        </label>
                                    </td>
                                @else
                                    <td class="py-1 px-2">
                                        <label class="container">
                                            <input type="checkbox" disabled>
                                            <div class="checkmark"></div>
                                        </label>
                                    </td>
                                @endif
                            @else
                                <td class="py-1 px-2"><label class="container"></label></td>
                            @endif


                        @endforeach
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
            <div style="text-align: right">
                <a href="{{route('employee.attendance.index')}}">
                    <button type="button" class="btn btn-gradient-primary" >Назад</button>
                </a>
            </div>
        <script>
            function showForm(){
                document.getElementById("addChildBtnId").className = "d-none";
                document.getElementById("attendance").className = "";
            }
            function cancelForm(){
                document.getElementById("addChildBtnId").className = "btn btn-gradient-primary";
                document.getElementById("attendance").className = "d-none";
            }
            let all_children = {};
            let group_id = 0;
            let rows = document.getElementById('TableId').rows;
            let n = rows.length;
            for(let i = 0; i < n; i++)
            {
                all_children[rows[i].dataset.child] = false;
                group_id = rows[i].dataset.group_id;
            }
            console.log(all_children);
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

            function selectChild(id, value){
                all_children[id] = value.checked;
                console.log(all_children);
            }
            function selectAll(value)
            {
                Object.keys(all_children).forEach(key => {
                    selectChild(key, value)
                    document.getElementById('check'+key).checked = value.checked;
                });
            }

            function sendData(){
                let date = document.getElementById('date').value;
                let url = "{{route('employee.attendance.create')}}";
                let data = new FormData();
                data.append("group_id", group_id);
                data.append("date", date);
                data.append("children", JSON.stringify(all_children));
                fetch(url, {
                    method:"POST",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    body:data,
                })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        alert("Вы успешно отметили детей")
                        location.reload();
                    })
                    .catch(error => {
                        alert('Вы уже отметили этот день, пожалуйста выберите правильную дату');
                    });
            }
        </script>
    </div>
@endsection
