<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Validate</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container form-validate">
    <form method="post" action="{{route('store.form')}}">
        <input class="form-control" type="text" placeholder="Form Validate" readonly>
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter your name">
            @if ($errors->has('name'))
                <small id="nameHelp" class="form-text text-error">{{ $errors->first('name') }}</small>
            @endif

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" id="exampleInputPhone" aria-describedby="phone_numberHelp" placeholder="Enter your phone number">
            @if ($errors->has('phone_number'))
                <small id="phoneNumberHelp" class="form-text text-error">{{ $errors->first('phone_number') }}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
            @if ($errors->has('email'))
                <small id="emailHelp" class="form-text text-error">{{ $errors->first('email') }}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            @if ($errors->has('password'))
                <small id="passwordHelp" class="form-text text-error">{{ $errors->first('password') }}</small>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select class="form-control" id="exampleFormControlSelect1" name="status">
                <option value="">--Chọn trạng thái---</option>
                <option value="2">Waiting</option>
                <option value="1">Public</option>
                <option value="0">Private</option>
            </select>
            @if ($errors->has('status'))
                <small id="statusHelp" class="form-text text-error">{{ $errors->first('status') }}</small>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<style>
    .text-error{
        color:red;
    }

    .form-validate{
        margin-top: 30px;
    }

</style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

