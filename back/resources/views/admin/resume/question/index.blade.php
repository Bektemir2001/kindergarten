@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <div class="container" style="margin-top: 10px;">
            <button type="button" class="btn btn-primary" style="margin-right:85%;" id="addQuestionBtnId" onclick="showForm()">Add Question</button>
            <div class="d-none" id="addQuestionId">
                <form id="form">
                    <div class="row mb-3">
                        <label for="question" class="col-md-4 col-form-label text-md-end">{{ __('Question') }}</label>
                        <textarea
                            id="question"
                            name="question"
                            rows="5"
                            cols="50"
                            placeholder="Write a new question..."></textarea>
                    </div>
{{--                    <div class="row mb-3">--}}
{{--                        <label for="question" class="col-md-4 col-form-label text-md-end">{{ __('Question') }}</label>--}}

{{--                        <div class="col-md-6">--}}
{{--                            <input id="question" type="text" class="form-control @error('question') is-invalid @enderror" name="question" required autocomplete="question" autofocus>--}}

{{--                            @error('question')--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <button type="reset" class="btn btn-secondary" style="margin-left: 65%;" onclick="cancelForm()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="demo-html" style="width: 70%;display: block; margin-left: auto; margin-right: auto;">
            <div class="card-header text-center" >
                <h3>Questions Table</h3>
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
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 40%;">
                            Question
                        </th>
                        <th class="sorting text-center" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 25%;">
                            Action
                        </th>
                        {{-- <th width="2px"></th> --}}
                    </tr>
                    </thead>
                    <tbody id="questionTable">
                    @foreach ($questions as $question)
                        <tr class="odd">
                            <td class="sorting_1">{{$question->id}}</td>
                            <td>{{$question->question}}</td>
                            <td>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <a href="{{route('admin.resume.question.show', $question)}}"><i class="fas fa-eye"></i></a>
                                </div>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <a href="{{route('admin.resume.question.edit', $question)}}" class="text-success"><i class="fas fa-pen"></i></a>
                                </div>
                                <div style="float: left;
                                display: block;
                                width: 30%;" class="text-center">
                                    <form onclick="return confirm('Do you really want to delete this question?')" action="{{route('admin.resume.question.delete', $question->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button title="delete" class="border-0 bg-transparent">
                                            <i title="delete" class="fas fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <script>
            function showForm(){
                document.getElementById("addQuestionBtnId").className = "d-none";
                document.getElementById("addQuestionId").className = "col-6";
            }
            function cancelForm(){
                document.getElementById("addQuestionBtnId").className = "btn btn-primary";
                document.getElementById("addQuestionId").className = "d-none";
                //document.getElementById("question").reset();
            }
            document.getElementById('form').addEventListener("submit", function (event) {
                event.preventDefault()
                let url = "{{route('admin.resume.question.create')}}";
                let question = document.getElementById("question").value;
                let data = new FormData();
                data.append("question", question);
                fetch(url, {
                    method: 'POST',
                    body: data
                })
                    .then(res => res.json())
                    .then(data => {
                        cancelForm();
                        let empty = document.getElementsByClassName('dataTables_empty');
                        if(empty.length){
                            empty[0].outerHTML = '';
                        }
                        let table = document.getElementById('questionTable');
                        let i = table.rows.length;
                        let row = table.insertRow(i);
                        row.insertCell(0).innerHTML = data.id;
                        row.insertCell(1).innerHTML = data.question;
                        row.insertCell(2).innerHTML = `<div style="float: left; display: block; width: 30%;" class="text-center"> ` +
                            `<a href="` + "/admin/resume/question/show/" + data.id + `"><i class="fas fa-eye"></i></a>  </div> ` +
                            `<div style="float: left; display: block; width: 30%;" class="text-center"> ` +
                            `<a href="` + "/admin/resume/question/edit/" + data.id + `" class="text-success"><i class="fas fa-pen"></i></a> ` +
                            `</div> <div style="float: left; display: block; width: 30%;" class="text-center"> ` +
                            `<form action="` + "/admin/resume/question/delete/" + data.id + `" method="POST"> @method('DELETE') @csrf` +
                            `<button title="submit" class="border-0 bg-transparent"> ` +
                            `<i title="submit" class="fas fa-trash text-danger" role="button"></i> </button> </form> </div>`;
                    })
                    .catch(error => console.log(error))
                document.getElementById("question").value = '';
                console.log("something")
            })
        </script>
    </div>
@endsection
