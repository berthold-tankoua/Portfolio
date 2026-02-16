<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login Bootstrap 5</title>
</head>
<style>
    html, body, .container{
  height: 100%;
}

.login-form {
  width: 45%;
  padding: 2rem 1rem 1rem;
}

form {
  padding: 1rem;
}
</style>
<body>
    <div class="container">
        <div class="wrapper d-flex align-items-center justify-content-center h-100">
            <div class="card login-form">
                <div class="card-body">

                    <form action="{{ route('user.check') }}" method="POST" class="theme-form">

                        @if(session('fail'))
                            <div class="alert alert-danger">
                                {{ Session('fail') }}
                            </div>
                        @endif

                      @csrf

                        <h4 style="text-align: center;">Se connecter a votre compte</h4>
                        <p style="text-align: center;">Entrer votre Email & Mot de passe</p>

                        <div class="form-group mb-3">
                          <label class="col-form-label">Adresse Email </label>
                          <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">

                          <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group mb-3">
                          <label class="col-form-label">Mot de passe</label>
                          <div class="form-input position-relative">
                            <input class="form-control" id="password" type="password" name="password" required="" placeholder="*********">
                            <div class="show-hide" onclick="showpassword()" style="cursor: pointer;">Afficher</div>
                          </div>
                          <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                        <div class="sign-up mt-4">
                            Don't have an account? <a href="#">Create One</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
            function showpassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
