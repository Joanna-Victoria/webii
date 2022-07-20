<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

<body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create a new post</h2>
            </div>
        </div>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops!</strong> There is a problem with the data entered: <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" name="nome">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" name="sobrenome">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="User name" name="usuario">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Public Place</label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Logradouro" name="logradouro">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">CEP</label>
                    <input type="number" class="form-control" id="inputCity" name="cep">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>PE</option>
                        <option>JP</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Country</label>
                    <select id="inputState" class="form-control">
                        <option selected>BR</option>
                        <option>USA</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Payment method</label>
                    <select id="inputState" class="form-control">
                        <option selected>Card</option>
                        <option>Pix</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Card Name</label>
                    <input type="text" class="form-control" id="inputAddress" name="nomedocartao">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Card Number</label>
                    <input type="number" class="form-control" id="inputAddress" name="numerodocartao">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Expiration Date</label>
                    <input type="date" class="form-control" id="inputAddress" name="datadeexpiracao">
                </div>
                <div class="form-group">
                    <label for="inputAddress">CVV</label>
                    <input type="number" class="form-control" id="inputAddress" name="cvv">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</body>