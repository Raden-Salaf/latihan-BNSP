<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background: url('/img/.jpg') center center fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            margin-top: 150px;
        }

        .form-container {
            background-color: rgba(141, 141, 141, 0.3);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(141, 141, 141, 0.3)
        }

        .form-container h2 {
            text-align: center;
            border-bottom: 20px;
            color: #333
        }

        .form-container label {
            color: #333
        }

        .form-container input[type="email"],
        .form-container input[type="text"],
        .form-container input[type="password"],
        {
        background-color: #f7f7f7 border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        }

        .form-container button[type="submit"] {
            background-color: #007bff border: none;
            border-radius: 5px;
            padding: 10px;
            color: #333 cursor:pointer;
        }

        .form-container button [type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-container p {
            text-align: center;
            margin-top: 20px;
            color: white
        }

        .form-container a {
            color: rgb(0, 153, 255)
        }
    </style>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    <link href="/img/bv.png" rel="icon">
    <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>

<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-container">
                <h2 class="fw-bold">Form Register</h2>
                <hr>
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <form action="{{ route('actionregister') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>
                            <li class="fa fa-envelope"></li>Email
                        </label>
                        <input type="text" name="email" class="form-control" placeholder="Username" required="">

                        <div class="form-group">
                            <label>
                                <li class="fa fa-user">Username</li>
                            </label>
                            <input type="text" name="username" class="form-control" placeholder="username"
                                required="">

                            <div class="form-group">
                                <label>
                                    <li class="fa fa-user">Password</li>
                                </label>
                                <input type="password" name="password" class="form-control" placeholder="password"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label><i class="fa fa-address-book"></i> Role</label>
                                <select name="role" class="form-control">
                                    <option value="siswa">siswa</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block"><i
                                    class="fa fa-user">Register</i></button>
                            <hr>
                            <p>Sudah punya akun? <a href="/">Login nang kene!!</a></p>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
