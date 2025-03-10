<!DOCTYPE html>
<html>

<head>
    <title>Se connecter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <style>
    
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #8ECAE6 !important;
        }

        .user_card {
            height: 400px;
            width: 350px;
            margin-top: auto;
            margin-bottom: auto;
            background:#023047;
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 5px;

        }

        .brand_logo_container {
            position: absolute;
            height: 170px;
            width: 170px;
            top: -75px;
            border-radius: 50%;
            background: #04A6C2;;
            padding: 10px;
            text-align: center;
        }

        .brand_logo {
            height: 150px;
            width: 150px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .form_container {
            margin-top: 100px;
        }

        .login_btn {
            width: 100%;
            background: #04A6C2 !important;
            color: white !important;
        }

        .login_btn:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        .login_container {
            padding: 0 2rem;
        }

        .input-group-text {
            background: #04A6C2 !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }

        .input_user,
        .input_pass:focus {
            box-shadow: none !important;
            outline: 0px !important;
        }

        /* Alert Styling */

        .alert-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .alert {
            width: 100%;
            max-width: 350px;
            padding: 1rem;
            border-radius: 0.25rem;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
            font-size: 14px;
            position: relative;
        }

        .alert strong {
            font-weight: bold;
        }

        .alert .close {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            font-size: 1.2rem;
            font-weight: bold;
            color: #721c24;
            cursor: pointer;
        }
        a {
    color: #fff; /* Couleur du texte */
    text-decoration: none; /* Supprimer le soulignement */
}

a:hover {
    color: #F77F00; /* Couleur du texte au survol */
    text-decoration: underline; /* Soulignement au survol */
}
p{
    color: #8ECAE6;
}

    </style>
</head>

<body>
@if (session('PPR'))
  <script>window.location.href = "{{ route('index') }}";</script>
  @endif

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="assets\img\MS-Maroc.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form action="{{ route('signIn') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" value=""
                                placeholder="E-mail">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass" value=""
                                placeholder="Password">
                        </div>
                        
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="button" class="btn login_btn">Se connecter</button>
                        </div>
						
						<!-- Alert -->
@if (session()->has('status'))
<div id="alert-container" class="alert-container">
	<div id="alert" class="alert alert-danger" role="alert">
		<strong>Error:</strong> {{ session('status') }}
		<span id="close-alert" class="close">&times;</span>
		<script>
        document.getElementById('mt-4').style.display = 'none';

		</script>
	</div>
</div>
@endif

                    </form>
                </div>
            </div>
        </div>
    </div>


<script>
    // Close alert when close button is clicked
    document.getElementById('close-alert').addEventListener('click', function() {
        document.getElementById('alert-container').style.display = 'none';
		document.getElementById('mt-4').style.display = 'block';

    });
</script>

</script>

</body>

</html>
