@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container" style="margin-top: 10px;">
            <button type="button" class="btn btn-primary" style="margin-right:85%;" id="addChildBtnId" onclick="showForm()">Add Child</button>
            <div class="d-none" id="addChildId">
                <form id="form" method="POST" action="{{route('admin.children.create')}}" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>
                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="birth_date" class="col-md-4 col-form-label text-md-end">{{ __('Birth Date') }}</label>
                        <div class="col-md-6">
                            <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date">
                            @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>
                        <div class="col-md-6">
                            <div>
                                <input id="male" type="radio" name="gender" value="Male">
                                <label for="male">Male</label>
                            </div>
                            <div>
                                <input id="female" type="radio" name="gender" value="Female">
                                <label for="female">Female</label>
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="parent_id" class="col-md-4 col-form-label text-md-end">{{ __('Parent') }}</label>
                        <div class="col-md-6">
{{--                            <input id="parent_id" type="number" class="form-control @error('parent_id') is-invalid @enderror" name="parent_id" value="{{ old('parent_id') }}" required autocomplete="parent_id" autofocus>--}}
{{--                            @error('parent_id')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
                            <select class="form-control col-md-12" name="parent_id" id="parent_id" @error('parent_id') is-invalid @enderror required autocomplete="parent_id">
                                <option></option>
                                @foreach($parents as $parent)
                                    <option value="{{$parent->id}}">{{$parent->name}}  {{$parent->surname}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="group_id" class="col-md-4 col-form-label text-md-end">{{ __('Group') }}</label>
                        <div class="col-md-6">
{{--                            <input id="group_id" type="number" class="form-control @error('group_id') is-invalid @enderror" name="group_id" value="{{ old('group_id') }}" required autocomplete="group_id">--}}
{{--                            @error('group_id')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
                            <select class="form-control col-md-12" name="group_id" id="group_id" @error('group_id') is-invalid @enderror required autocomplete="group_id">
                                <option></option>
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="photo" class="col-md-4 col-form-label text-md-end">{{ __("Child's Photo") }}</label>
                        <div class="col-md-6">
                            <input id="photo" type="file" accept="image/png, image/gif, image/jpeg" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}">
                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="birth_certificate" class="col-md-4 col-form-label text-md-end">{{ __("Birth Certificate") }}</label>
                        <div class="col-md-6">
                            <input id="birth_certificate" type="file" accept="image/png, image/gif, image/jpeg" class="form-control @error('birth_certificate') is-invalid @enderror" name="birth_certificate" value="{{ old('birth_certificate') }}">
                            @error('birth_certificate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="med_certificate" class="col-md-4 col-form-label text-md-end">{{ __("Medical Certificate") }}</label>
                        <div class="col-md-6">
                            <input id="med_certificate" type="file" accept="image/png, image/gif, image/jpeg" class="form-control @error('med_certificate') is-invalid @enderror" name="med_certificate" value="{{ old('med_certificate') }}">
                            @error('med_certificate')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="med_disability" class="col-md-4 col-form-label text-md-end">{{ __("Medical Disability Certificate") }}</label>
                        <div class="col-md-6">
                            <input id="med_disability" type="file" accept="image/png, image/gif, image/jpeg" class="form-control @error('med_disability') is-invalid @enderror" name="med_disability" value="{{ old('med_disability') }}">
                            @error('med_disability')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="payment" class="col-md-4 col-form-label text-md-end">{{ __("Payment") }}</label>
                        <div class="col-md-6">
                            <input id="payment" type="number" class="form-control @error('payment') is-invalid @enderror" name="payment" value="{{ old('payment') }}">
                            @error('payment')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-secondary" style="margin-left: 65%;" onclick="cancelForm()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="demo-html" style="width: 70%;display: block; margin-left: auto; margin-right: auto;">
            <div class="card-header text-center" >
                <h3>Children Table</h3>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div id="example_wrapper" class="">
                <table id="example" class="table table-bordered border-primary" aria-describedby="example_info">
                    <thead>
                    <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 10%;">
                            id
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">
                            Name
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">
                            Surname
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 20%;">
                            Group
                        </th>
                        <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">
                            Action
                        </th>
                        {{-- <th width="2px"></th> --}}
                    </tr>
                    </thead>
                    <tbody id="childTable">
                    @foreach ($children as $child)
                        <tr class="odd">
                            <td class="sorting_1">{{$child->id}}</td>
                            <td>{{$child->name}}</td>
                            <td>{{$child->surname}}</td>
                            <td>{{$child->group->name}}</td>
                            <td>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <a href="{{route('admin.children.show', $child)}}"><i class="fas fa-eye"></i></a>
                                </div>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <a href="{{route('admin.children.edit', $child)}}" class="text-success"><i class="fas fa-pen"></i></a>
                                </div>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <form action="{{route('admin.children.delete', $child->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button title="delete" class="border-0 bg-transparent" onclick="return confirm('Do you really want to delete this user?')">
                                            <i title="delete" class="fas fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </div>


                            </td>
                            {{-- td>rfed</td> --}}
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <script>
            function showForm(){
                document.getElementById("addChildBtnId").className = "d-none";
                document.getElementById("addChildId").className = "col-6";
            }
            function cancelForm(){
                document.getElementById("addChildBtnId").className = "btn btn-primary";
                document.getElementById("addChildId").className = "d-none";
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
