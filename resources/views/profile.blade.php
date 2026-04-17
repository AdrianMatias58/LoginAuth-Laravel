<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | CyberPanel</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <style>
        /* Estilos adicionales específicos para la vista de datos */
        .user-info {
            color: #fff;
            text-align: center;
            margin-top: 20px;
        }
        .info-item {
            margin-bottom: 25px;
            border-bottom: 1px solid rgba(14, 239, 255, 0.3);
            padding-bottom: 10px;
        }
        .info-item label {
            display: block;
            color: #0ef;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }
        .info-item p {
            font-size: 18px;
            font-weight: 500;
        }
        .logout-btn {
            background: transparent;
            border: 2px solid #ff0055; /* Rojo neón para cerrar sesión */
            box-shadow: 0 0 10px #ff0055;
            color: #fff;
            margin-top: 20px;
            transition: 0.3s;
        }
        .logout-btn:hover {
            background: #ff0055;
            box-shadow: 0 0 20px #ff0055;
            color: #fff;
        }
        .avatar-circle {
            width: 80px;
            height: 80px;
            border: 2px solid #0ef;
            box-shadow: 0 0 15px #0ef;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
            color: #0ef;
            background: rgba(0, 238, 255, 0.1);
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper">
            <div class="user-info">
                <h2>User Profile</h2>

                <div class="avatar-circle">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>

                <div class="info-item">
                    <label>Full Name</label>
                    <p>{{ Auth::user()->name }}</p>
                </div>

                <div class="info-item">
                    <label>Email Address</label>
                    <p>{{ Auth::user()->email }}</p>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-btn">Terminate Session</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
