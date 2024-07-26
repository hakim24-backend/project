<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Техническое обслуживание</title>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #ece9e6, #ffffff);
            font-family: 'IBM Plex Sans', sans-serif;
            color: #333;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        img {
            width: 80%;
            /* max-width: 100px; */
            height: auto;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #63bac5;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        /* Spinner CSS */
        .spinner {
            margin: 20px auto;
            width: 50px;
            height: 50px;
            border: 6px solid #f3f3f3;
            border-top: 6px solid #63bac5;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('upload/img/SG_верт_оригин.png')}}" alt="Maintenance Image">
        <div class="spinner"></div>
        <h1>Мы находимся на техническом обслуживании, зайдите позже.</h1>
        <p>Спасибо за ваше доверие!!</p>
    </div>
</body>
</html>