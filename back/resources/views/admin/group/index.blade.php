@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container" style="margin-top: 10px;">
            <button type="button" class="btn btn-primary btn-sm" style="margin-right:85%;" id="addGroupBtnId" onclick="showForm()">Add Group</button>
            <div class="d-none" id="addGroupId">
                <form id="form" enctype="multipart/form-data">
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
                        <label for="limit" class="col-md-4 col-form-label text-md-end">{{ __('Limit') }}</label>

                        <div class="col-md-6">
                            <input id="limit" type="text" class="form-control @error('limit') is-invalid @enderror" name="limit" value="{{ old('limit') }}" required autocomplete="limit" autofocus>

                            @error('limit')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Group Image') }}</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required>

                            @error('image')
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
                <h3>Groups Table</h3>
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
                            Limit
                        </th>
                        <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">
                            Action
                        </th>
                        {{-- <th width="2px"></th> --}}
                    </tr>
                    </thead>
                    <tbody id="groupTable">
                    @foreach ($groups as $group)
                        <tr class="odd">
                            <td class="sorting_1">{{$group->id}}</td>
                            <td>{{$group->name}}</td>
                            <td>{{$group->limit}}</td>
                            <td>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <a href="{{route('admin.group.show', $group)}}"><i class="fas fa-eye"></i></a>
                                </div>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <a href="{{route('admin.group.edit', $group)}}" class="text-success"><i class="fas fa-pen"></i></a>
                                </div>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <form action="{{route('admin.group.delete', $group->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button title="submit" class="border-0 bg-transparent">
                                            <i title="submit" class="fas fa-trash text-danger" role="button"></i>
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
                document.getElementById("addGroupBtnId").className = "d-none";
                document.getElementById("addGroupId").className = "col-6";
            }
            function cancelForm(){
                document.getElementById("addGroupBtnId").className = "btn btn-primary btn-sm";
                document.getElementById("addGroupId").className = "d-none";
            }
            document.getElementById('form').addEventListener("submit", function (event) {
                event.preventDefault()
                let url = "{{route('admin.group.create')}}";
                let name = document.getElementById("name").value;
                let limit = document.getElementById("limit").value;
                let description = document.getElementById("description").value;
                let image = document.getElementById("image").files[0];
                let data = new FormData();
                data.append("name", name);
                data.append("limit", limit);
                data.append("description", description);
                data.append("image", image);
                fetch(url, {
                    method: 'POST',
                    body: data
                })
                    .then(res => res.json())
                    .then(data => {
                        cancelForm();
                        let table = document.getElementById('groupTable');
                        let i = table.rows.length;
                        let row = table.insertRow(i);
                        row.insertCell(0).innerHTML = data.id;
                        row.insertCell(1).innerHTML = data.name;
                        row.insertCell(2).innerHTML = data.limit;
                        row.insertCell(3).innerHTML = `<div style="float: left; display: block; width: 30%;" class="text-center"> ` +
                            `<a href="` + location.host + "/admin/group/show/" + data.id + `"><i class="fas fa-eye"></i></a>  </div> ` +
                        `<div style="float: left; display: block; width: 30%;" class="text-center"> ` +
                        `<a href="` + location.host + "/admin/group/edit/" + data.id + `" class="text-success"><i class="fas fa-pen"></i></a> ` +
                        `</div> <div style="float: left; display: block; width: 30%;" class="text-center"> ` +
                            `<form action="` + location.host + "/admin/group/delete/" + data.id + `" method="POST"> @method('DELETE') @csrf` +
                            `<button title="submit" class="border-0 bg-transparent"> ` +
                            `<i title="submit" class="fas fa-trash text-danger" role="button"></i> </button> </form> </div>`;


                    })
                    .catch(error => console.log(error))
            })
        </script>
    </div>
@endsection
