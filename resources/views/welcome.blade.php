<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Wishing Application</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #1a1a1a;
            color: #fff;
            background-image:url('/assets/img/bg.png');
            background-size: cover;
            /* Remove overflow: hidden; to enable scrolling */
        }

        header {
            /* padding: 5px; */
            text-align: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(180deg, rgba(255,0,0,0.8562018557422969) 1%, rgba(255,0,0,1) 49%, rgba(255,0,0,0.8449973739495799) 92%, rgba(0,0,0,0.3660057773109243) 100%);
            display:flex;
            justify-content: space-between;
            padding:10px 0 0 20px;
        }

        .logo {
            display: inline-block;
            position: relative;
            margin-right: 10px;
        }

        .hat {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50px;
            height: 50px;
            background-color: #e74c3c;
            transform: translateX(-50%);
            border-radius: 50% 50% 0 0;
        }

        .hat::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 50%;
            background-color: #e74c3c;
            border-radius: 0 0 50% 50%;
        }

        section {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: center;
    text-align: center;
    position: relative;
    overflow: hidden;
}

        .content {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .cta-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .cta-button {
            display: inline-block;
            margin: 10px;
            padding: 15px 30px;
            background-color: #fff;
            color: #1a1a1a;
            font-size: 1.2em;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #1a1a1a;
            color: #fff;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            transform-origin: bottom center;
            animation: wave-animation 2s infinite linear;
        }

        .snowfall-container {
            position: fixed;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        /* Snowfall animation */
        .snowflake {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #fff;
            border-radius: 50%;
            animation: snowfall linear infinite, spin 3s linear infinite, moveDown linear 5s;
            pointer-events: none;
            opacity: 0;
            animation-delay: 0s;
            animation-duration: 5s;
            animation-fill-mode: forwards;
        }
        footer{
            bottom: 0;
            position: absolute;
            color: black;
            margin-left:2rem;
        }
        ul{
            list-style: none;
        }
        @keyframes snowfall {
            0%, 100% {
                transform: translateY(-100vh);
            }

            50% {
                transform: translateY(100vh);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes moveDown {
            0% {
                opacity: 0;
                transform: translateY(-100vh);
            }

            100% {
                opacity: 1;
                transform: translateY(100vh);
            }
        }

        /* Additional animation for header and background color change */
        @keyframes changeBackgroundColor {
            0% {
                background-color: #1a1a1a;
            }

            50% {
                background-color: #3a3a3a;
            }

            100% {
                background-color: #1a1a1a;
            }
        }

        @keyframes wave-animation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Rolling animation to remove stored flurries */
        @keyframes rollDown {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-100vh);
            }
        }
            /* Mobile Styles */
            @media only screen and (max-width: 600px) {
            section{
                min-height:90vh;
                background-color: #000;
                opacity: .9;
            }
                header {
                padding: 10px;
            }

            .logo img,
            .hat {
                height: 3rem;
            }

            h1 {
                font-size: 2em;
            }

            p {
                font-size: 1em;
                margin-bottom: 20px;
            }

            .cta-button {
                padding: 10px 20px;
                font-size: 1em;
            }

            footer {
                margin-left: 1rem;
                color:#fff;
            }
        }

        /* Tablet Styles (adjust the max-width as needed) */
        @media only screen and (min-width: 601px) and (max-width: 1024px) {
            section {
    min-height: 90vh;
    background-color: #000;
                opacity: .8;}
            header {
                padding: 15px;
            }

            .logo img,
            .hat {
                height: 3.5rem;
            }

            h1 {
                font-size: 2.5em;
            }

            p {
                font-size: 1.2em;
            }

            .cta-button {
                padding: 15px 30px;
                font-size: 1.2em;
            }

            footer {
                margin-left: 1rem;
                color:#fff;
            }
        }
    </style>
</head>

<body>
    <header>
        <img style = "height:4rem;" src="{{ URL::to('/assets/img/logo.png') }}">
        <h1>Christmas Wishing App</h1>
        <img style = "height:4rem;" src="{{ URL::to('/assets/img/mountain.png') }}">
        <!-- <div class="wave"></div> -->
    </header>

    <section>
        <div class="content">
            <h1>Create Your Christmas Wishlist!</h1>
            <p>Spread joy and happiness this Christmas by creating and sharing your wishlist with friends and family. The Christmas Wishing Application allows you to:</p>
            <ul>
                <li>Build and customize your Christmas wishlist</li>
            </ul>
            <div class="cta-buttons">
                <a href="/register" class="cta-button">Register</a>
                <a href="/login" class="cta-button">Login</a>
            </div>
        </div>

        <!-- Snowfall container -->
        <div class="snowfall-container" id="snowfall-container"></div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Christmas Wishing Application. All rights reserved.</p>
    </footer>

    <script>
        // JavaScript for snowfall effect
        const snowfallContainer = document.getElementById('snowfall-container');

        // Function to create a snowflake
        function createSnowflake() {
            const snowflake = document.createElement('div');
            snowflake.className = 'snowflake';
            snowflake.style.left = `${Math.random() * 100}vw`;
            snowflake.style.animationDelay = `${Math.random() * 5}s`;
            snowfallContainer.appendChild(snowflake);

            // Remove snowflake from the DOM after falling
            snowflake.addEventListener('animationiteration', () => {
                snowflake.remove();
            });
        }

        // Generate snowflakes at intervals
        setInterval(createSnowflake, 200);

        // Change background color at intervals
        setInterval(() => {
            document.body.style.animation = 'changeBackgroundColor 10s';
        }, 10000);

        // Function to clear stored flurries at the bottom
        function clearStoredFlurries() {
            const storedFlurries = document.querySelectorAll('.snowflake');
            storedFlurries.forEach((snowflake) => {
                snowflake.style.animation = 'rollDown 5s forwards';
            });
        }

        // Clear stored flurries after a delay
        // setTimeout(clearStoredFlurries, 15000);
    </script>
</body>

</html>
