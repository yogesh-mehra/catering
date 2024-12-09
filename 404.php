<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Page Not Found</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set body and html to full height */
        body, html {
            height: 100%;
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Gradient background with a subtle image */
        .error-container {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Styling the error box */
        .error-box {
            text-align: center;
            padding: 40px 60px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 80%;
            transform: scale(1);
            animation: popIn 0.6s ease-out forwards;
        }

        /* Animations for the error box */
        @keyframes popIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Main heading styling */
        .error-box h1 {
            font-size: 100px;
            color: #ff6347;
            margin-bottom: 10px;
            animation: fadeIn 1.5s ease-out;
        }

        /* Subheading styling for 404 code */
        .error-box h2 {
            font-size: 160px;
            font-weight: bold;
            color: #ff6347;
            margin-bottom: 20px;
            animation: fadeIn 2s ease-out;
        }

        /* Text description styling */
        .error-box p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
            animation: fadeIn 2.5s ease-out;
        }

        /* Button styling */
        .home-btn {
            background-color: #2575fc;
            color: white;
            font-size: 16px;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .home-btn:hover {
            background-color: #6a11cb;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Fade-in animation for text */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-box">
            <h1>Oops!</h1>
            <h2>404</h2>
            <p>The page you are looking for might have been moved or doesn't exist.</p>
            <a href="/" class="home-btn">Go Home</a>
        </div>
    </div>
</body>
</html>
