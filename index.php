<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avni Foundation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

</head>

<body>


    <div class="loader-container">
        <div class="loader-icon">
            <div class="inside-loader-icon">

            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', () => {
            const loaderContainer = document.querySelector('.loader-container');
            loaderContainer.classList.add('hidden');
        });
    </script>




    <div class="modal-wrapper" id="modal">
        <div class="modal">
            <div class="title-bar">
                <div class="title">Join the Campaign</div>
                <div class="close-btn" id="close-modal"><i class="fa fa-times"></i></div>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name">
                </div>
                <div class="input-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email">
                </div>
                <div class="input-group">
                    <label for="phone">Your Phone:</label>
                    <input type="tel" id="phone">
                </div>
            </div>
            <div class="status-bar">
                <div class="buttons">
                    <button type="submit">Join</button>
                </div>
            </div>
        </div>
    </div>
    <main>
        <header>
            <div class="menu">
                <nav>
                    <ul>
                        <a href="#">
                            <li>Home</li>
                        </a>
                        <a href="#">
                            <li>About</li>
                        </a>
                        <a href="#">
                            <li>Explore</li>
                        </a>
                        <a href="#">
                            <li>Research</li>
                        </a>
                        <a href="#">
                            <li>Expedition</li>
                        </a>
                    </ul>
                </nav>
            </div>
            <div class="project-name">
                <a href=".">
                    <div class="logo">
                        <img src="images/logo.png" alt="Logo">
                    </div>
                    <h3 class="name">
                        Avni Foundation
                    </h3>
                </a>
            </div>
            <div class="contacts">
                <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </header>
        <section class="home-body">
            <div class="content-box">
                <p>
                    No aquarium, no tank in a marine land, however spacious it may be, can begin to duplicate the conditions of the sea. And no dolphin who inhabits one of those aquariums or one of those marine lands can be considered normal.
                </p>
                <p>- Jacques Yves Cousteau</p>
            </div>
            <div class="content-box">
                <p class="highlight-text">
                    It's time to save the aquatic life!
                </p>
                <button class="campaign-button" id="campaign-button">Join the Campaign</button>
            </div>
        </section>
        <footer>
            <div class="links">
                <ul>
                    <a href="#">
                        <li>Community</li>
                    </a><a href="#">
                        <li>Campaign</li>
                    </a><a href="#">
                        <li>Terms</li>
                    </a><a href="#">
                        <li>Policy</li>
                    </a>
                </ul>
            </div>
            <div class="foundation">Copyright &copy; Avni Foundation <?= date('Y') ?></div>
        </footer>
    </main>
    <script src="script.js"></script>
</body>

</html>