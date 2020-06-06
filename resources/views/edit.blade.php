<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <form action="{{route('main.update',$data->id)}}" method="POST" >
            <div class="card">
                <div class="card-header">
            <h2>Edit Data <span style="float:right"><a class="btn btn-md btn-info" href="{{route('main.index')}}">Back</a></span></h2>
                </div>
                <div class="card-body">
             
                @method('PUT')
                @csrf
                <div class="form-group">
                        <div class="row">
                        <label class="col-md-3">Cashier : </label>
                        
                            <select class="form-control col-md-9" name="id_cashier" id="">

                                <option value="" disabled>Choose-Cashier</option>
                                @foreach ($cas as $cs)
                                    <option value="{{$cs->id}}">{{$cs->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <label class="col-md-3">Product : </label>
                        
                            <input class="col-md-9 form-control" type="text" name="name" id="" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <label class="col-md-3">Category : </label>
                        
                            <select class="form-control col-md-9" name="id_category" id="">
                                <option value="" disabled>Choose-Category</option>
                                @foreach ($cat as $ct)
                                    <option value="{{$ct->id}}" >{{$ct->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                        <label class="col-md-3">Price : </label>
                        
                            <input class="form-control col-md-9" type="number" name="price" value="{{$data->price}}" id="">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <input type="submit" class="btn btn-sm btn-primary" value="Edit">
                <input type="reset" class="btn btn-sm btn-secondary" value="Hapus">
                </div></div>
            </form>
            
        </div>
        
    </body>
</html>
