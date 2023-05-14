@extends('layouts.app')
@section('content')
    <div class="container">
        <button type="button" class="btn btn-primary m-3" id="childInfoBtn" onclick="showChildInfo()">Данные моего ребенка</button>
        <div class="d-none" id="childInfo">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Анкета вашего ребенка</h5>
                        <form id="form" action="{{route('children.update', $child->id)}}" method="post" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img
                                        src="{{asset($child->photo)}}"
                                        alt="user-avatar"
                                        class="d-block rounded img-fluid"
                                        height="100"
                                        width="100"
                                        id="uploadedAvatar"
                                    />
                                    <div class="">
                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                            <input
                                                type="file"
                                                id="photo"
                                                name="photo"
                                                class="account-file-input form-control"
                                            />
                                        </label>
                                        <p class="text-muted mb-0">Обновить фотографию профиля. Можно загрузить JPG, GIF or PNG.</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <h6 for="name"  class="form-label"><b>Имя:</b></h6>
                                        <div class="text-secondary">{{$child->name}}</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <h6 for="surname" class="form-label"><b>Фамилия:</b></h6>
                                        <div class="text-secondary">{{$child->surname}}</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <h6 for="email" class="form-label"><b>День рождения:</b></h6>
                                        <div class="text-secondary">{{$child->birth_date}}</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <h6 class="form-label" for="phone_number"><b>Название группы:</b></h6>
                                        <div class="text-secondary">{{$child->group->name}}</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <h6 for="address" class="form-label"><b>Имя родителя:</b></h6>
                                        <div class="text-secondary">{{$child->parent->name}} {{$child->parent->surname}}</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <h6 for="address" class="form-label"><b>Пол:</b></h6>
                                        <div class="text-secondary">{{$child->gender}}</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <h6 for="birth_certificate" class="form-label"><b>Свидетельство о рождении:</b></h6>
                                        <input type="file" class="form-control" id="birth_certificate" name="birth_certificate" placeholder="" value="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <h6 for="med_certificate" class="form-label"><b>Медицинская справка</b></h6>
                                        <input type="file" class="form-control" id="med_certificate" name="med_certificate">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <img class="img-fluid" src="{{asset($child->birth_certificate)}}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <img class="img-fluid" src="{{asset($child->med_certificate)}}">
                                    </div>
                                    @if($child->med_disability != null)
                                        <div class="mb-3 col-md-6">
                                            <h6 for="med_disability" class="form-label"><b>Медицинская справка о инвалидности:</b></h6>
                                            <input type="file" class="form-control" id="med_disability" name="med_disability" placeholder="" value="">
                                        </div>
                                        <div class="mb-3 col-md-6"></div>
                                        <div class="mb-3 col-md-6">
                                            <img class="img-fluid" src="{{asset($child->med_disability)}}">
                                        </div>
                                    @endif
                                </div>
                                <div class="mt-auto">
                                    <button type="submit" class="btn btn-primary ms-auto float-end">Сохранить изменения</button>
                                    <button type="button" class="btn btn-secondary ms-auto float-end mx-3" onclick="hideChildInfo()">Закрыть</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <h5 class="card-header text-center">Моменты из детского сада</h5>
            <div class="card-body">
                @foreach($galleries as $gallery)
                    @if($gallery->video === null)
                <div class="card-header rounded-top" style="background-color: #cdb9f8; color: #000000">{{$gallery->created_at}}</div>
                <div class="card-body" style="background-color: #eee8fd; display: flex; align-items: center; justify-content: center">
                    <img class="img-fluid"  src="{{asset($gallery->image)}}">
                </div>
                <div class="card-body rounded-bottom" style="background-color: #eee8fd">
                    <h6>{{$gallery->info}}</h6>
                </div>
                    <br>
                    @else
                        <div class="card-header rounded-top" style="background-color: #cdb9f8; color: #000000">{{$gallery->created_at}}</div>
                        <div class="card-body embed-responsive embed-responsive-21by9" style="background-color: #eee8fd; display: flex; align-items: center; justify-content: center">
                            <iframe class="embed-responsive-item"  src="{{asset($gallery->video)}}"></iframe>
                        </div>
                        <div class="card-body rounded-bottom" style="background-color: #eee8fd">
                            <h6>{{$gallery->info}}</h6>
                        </div>
                        <br>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <script>
        function showChildInfo(){
            document.getElementById("childInfo").className = "container-xxl flex-grow-1 container-p-y";
            document.getElementById("childInfoBtn").className = "d-none";
        }
        function hideChildInfo(){
            document.getElementById("childInfo").className = "d-none";
            document.getElementById("childInfoBtn").className = "btn btn-primary m-3";
        }
    </script>
@endsection
