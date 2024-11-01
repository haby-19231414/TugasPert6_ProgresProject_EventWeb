<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko</title>
    <style>
        /* Styling body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Form container */
        form {
            background: #50469b;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }



        /* Label styling */
        label {
            font-weight: bold;
            color: #ffffff;
            display: block;
            margin-top: 10px;
        }

        /* Input styling */
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Error message */
        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        /* Submit button styling */
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Invalid feedback styling */
        .invalid-feedback {
            color: #dc3545;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
            display: block;
        }
    </style>
</head>

<body>


    <!-- error -->
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>{{ session('error')}} </strong>
    </div>
    @endif
    <!-- errorEnd -->

    <form action="{{ route('backend.login') }}" method="post">
        @csrf
        <label>Login User</label>
        <input type="text" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
        @error('email')
        <span class="invalid-feedback alert-danger" role="alert">
            {{$message}}
        </span>
        @enderror

        <label>Password</label>
        <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
        @error('password')
        <span class="invalid-feedback alert-danger" role="alert">
            {{$message}}
        </span>
        @enderror

        <button type="submit">Login</button>
    </form>

</body>

</html>
