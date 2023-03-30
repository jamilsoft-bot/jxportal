<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamilx - PHP Framework for Building Sass Programs</title>
    <link rel="stylesheet" href="lib/w3/w3.css">
    <link rel="stylesheet" href="lib/bs5/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/font/css/all.css">
    <link rel="shortcut icon" href="jslogobird.png" type="image/x-icon">
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            font-family: serif;
        }
        .w3-threequarter{
            text-align: left;
        }
        .sub-main{
            margin-left: 4vw;
        }
        @media screen and (max-width:600px) {
            .footer
            .footer1
            .footer2
            .footer3{
                text-align: left;
            }
            .sub-main{
                margin-left: none;
            }
            .w3-threequarter{
                text-align: center;
            }
            .w3-mobile{
                display: block;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="w3-container w3-header w3-bar">
        <span class="w3-text-blue w3-bar-item w3-xlarge w3-mobile">Jamil<span style="font-weight: bolder;" >X</span> </span>
        <nav class="nav w3-bar-item w3-right w3-mobile">
            <a href="#" class="w3-button w3-hover-white w3-border-bottom w3-border-white w3-hover-border-blue w3-text-blue w3-large w3-mobile">News</a>
            <a href="#" class="w3-button w3-hover-white w3-border-bottom w3-border-white w3-hover-border-blue w3-text-blue w3-large w3-mobile">Discuss</a>
            <a href="#" class="w3-button w3-hover-white w3-border-bottom w3-border-white w3-hover-border-blue w3-text-blue w3-large w3-mobile">Contribute</a>
            <a href="https://jamilgrow.jamilsoft.com.ng" class="w3-button w3-hover-white w3-border-bottom w3-border-white w3-hover-border-blue w3-text-blue w3-large w3-mobile">Learn</a>
            <a href="https://github.com/jamilsoft-bot/jamilX" class="w3-button w3-hover-white w3-border-bottom w3-border-white w3-hover-border-blue w3-blue w3-round w3-mobile">Download</a>
        </nav>
    </header>
    <div class="hero" style="background-color: whitesmoke;">
        <br>
        <br>
        <br>
        <div class="w3-container w3-mobile w3-center">
            <h1 class="w3-text-blue w3-jumbo w3-mobile">JamilX</h1>
            <br>
            <h3 class="w3-wide">Transform Your Development Process with Jamilx</h3>
            <p class="w3-large">
                The PHP Framework for RAD and Saas Applications. Build Faster, Code Smarter, and Deliver Exceptional User Experiences.
            </p>
            <a href="https://github.com/jamilsoft-bot/JamilX" class="w3-button w3-border-bottom w3-hover-white w3-hover-border-blue w3-blue w3-mobile w3-round" style="width:16.66%">Get Started Today!</a>
            <br>
            <br>
            <span class="w3-bar">
                <a href="#" class="w3-btn w3-border-bottom w3-hover-white w3-hover-border-blue"> <i class="fab fa-github"> star 20113</i></a>
                <a href="#" class="w3-btn w3-border-bottom w3-hover-white w3-hover-border-blue"> <i class="fab fa-github"> fork 20113</i></a>
            </span>
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>
    <div class="main w3-container w3-mobile w3-center">
        <h1 class="w3-text-blue">Why Jamilx?</h1>
        <div class="w3-container p-2 m-4 w3-large">
            <p>
                Jamilx stands out among its competitors due to its unique features such as the Prototype-Container-Service architecture, reusable actions, easy command-line tools, secure default settings, extensibility, and customization. With a focus on rapid application development and SaaS applications, Jamilx provides businesses with a flexible and secure framework that can be easily customized to meet their unique needs.
            </p>
        </div>

            <div class="w3-row">
                <div class="w3-half">
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <i class="fas fa-cube w3-jumbo w3-text-blue"></i>
                        </div>
                        <div class="w3-threequarter w3-mobile">
                            <h4 style="font-weight: bolder;">Rapid application development</h4>
                            <p class="w3-large">
                                Jamilx is specifically designed for rapid application development (RAD) and Software as a Service (SaaS) applications. It provides a MVC architecture that helps developers to quickly build and deploy applications.
                            </p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <i class="fas fa-cubes w3-jumbo w3-text-blue"></i>
                        </div>
                        <div class="w3-threequarter">
                            <h4 style="font-weight: bolder;">Reusable components</h4>
                            <p class="w3-large">
                                Jamilx comes with reusable components called "actions" that can be accessed by any service. These actions help to save time and effort in coding and accelerate the development process.
                            </p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <i class="fab fa-php w3-jumbo w3-text-blue"></i>
                        </div>
                        <div class="w3-threequarter">
                            <h4 style="font-weight: bolder;">Flexibility</h4>
                            <p class="w3-large">
                                Jamilx supports MySQL as a default database, but developers can easily use a different database if required. Additionally, the framework is modular and allows developers to easily add or remove components as needed.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w3-half">
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <i class="fab fa-laravel w3-jumbo w3-text-blue"></i>
                        </div>
                        <div class="w3-threequarter">
                            <h4 style="font-weight: bolder;">Command line tools</h4>
                            <p class="w3-large">
                                Jamilx comes with a set of command line tools that can be used to perform tasks such as code generation, database operations, and more. These tools help to streamline the development process and make it more efficient.
                            </p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <i class="fas  w3-jumbo w3-text-blue"></i>
                        </div>
                        <div class="w3-threequarter">
                            <h4 style="font-weight: bolder;">Strong security features</h4>
                            <p class="w3-large">
                                Jamilx includes several built-in security features such as input validation and sanitization, authentication and authorization, secure communications, and error handling and logging. This helps to ensure that applications built with Jamilx are secure and protect user data.
                            </p>
                        </div>
                    </div>
                    <div class="w3-row">
                        <div class="w3-quarter">
                            <i class="fa fa-users w3-jumbo w3-text-blue"></i>
                        </div>
                        <div class="w3-threequarter">
                            <h4 style="font-weight: bolder;">Active community</h4>
                            <p class="w3-large">
                                Jamilx has an active and supportive community of developers who contribute to the framework's development and offer support to others. This helps to ensure that the framework remains up-to-date and continues to improve over time.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-3 p-2">
                    <div class="w3-card p-2">
                        <h3>Download page</h3>
                        <a href="https://github.com/jamilsoft-bot/jamilX" class="w3-btn w3-text-blue">Find all the Releases</a>
                        <br>
                        <i class="fas fa-cloud w3-xxlarge"></i>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="w3-card p-2">
                        <h3>Clear documentation</h3>
                        <a href="#" class="w3-btn w3-text-blue">Read the manual</a>
                        <br>
                        <i class="fas fa-cloud w3-xxlarge"></i>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="w3-card p-2">
                        <h3>Get support</h3>
                        <a href="#" class="w3-btn w3-text-blue">View the forum</a>
                        <br>
                        <i class="fas fa-cloud w3-xxlarge"></i>
                    </div>
                </div>
                <div class="col-md-3 p-2">
                    <div class="w3-card p-2">
                        <h3>Add features</h3>
                        <a href="#" class="w3-btn w3-text-blue">On github</a>
                        <br>
                        <i class="fas fa-cloud w3-xxlarge"></i>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
<div class="w3-container mt-4 w3-center w3-text-blue">
    <h1>JamilX Apps List</h1>
</div>
<div class="w3-container m-3">
    <div class="row">
        <div class="col-md-3">
            <div class="w3-container">
                <h2>JamilPress</h2>
                <p>A Bloging/CMS Platform build using Jamilx</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="w3-container">
                <h2>Jcommerce</h2>
                <p>A full featured Multivendor E-commerce platform to anything online</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="w3-container">
                <h2>KamalERP</h2>
                <p>A complete school management System/ERP</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="w3-container">
                <h2>Ruqee webmail</h2>
                <p>An Email cleint  Platform build using Jamilx</p>
            </div>
        </div>
    </div>
</div>

    <footer class="w3-blue footer">
        <div class="w3-bar w3-card-2 w3-container w3-text-white">
            <div class="w3-bar-item footer1">
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile">Policies</a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile">The fine prind</a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile">Security Discolures</a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile">News</a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile">Discuss</a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile">Contributes</a>
            </div>
            <div class="w3-bar-item w3-right footer2">
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile"><i class="fab fa-github"></i></a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile"><i class="fab fa-github"></i></a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile"><i class="far fa-messenger"></i></a>
                <a href="#" class="w3-button w3-bar-item w3-hover-blue w3-large w3-mobile"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="w3-center w3-margin w3-padding footer3">
                <p class="w3-xlarge w3-text-white">&copy; 2023 Prof. Iya Abubkar Commuity Resource center Bauchi</p>
                <!-- <span class="w3-center w3-mobile w3-xxlarge w3-text-white"><i class="fab fa-laravel"></i></span> -->
        </div>
        
    </footer>

    <!-- <p>abdullahi &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; musa</p> -->

</body>
</html>