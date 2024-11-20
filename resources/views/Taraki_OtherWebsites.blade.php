<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<title>TaRaKi Other Websites</title>
<link rel="stylesheet" href="{{ asset('css/Taraki_OtherWebsites_Styles.css') }}">
</head>
<body>

    <br>
    
    <! -- THIS IS OTHER WEBSITES -->
    <! -- 1st LINE -->
    <div class="container">
        <div class="row">
            <div class="col-5 text-center">
                <a href="https://georisk.gov.ph/">
                    <img src="{{ asset('images/GeoRiskPH.png') }}" class="col-w t-border zoom-effect" >
                </a>
            </div>

            <div class="col-2 ">
                
            </div>

            <div class="col-5  text-center">
                <a href="https://car.dost.gov.ph/">
                    <img src="{{ asset('images/DOST-CAR.png') }}" class="col-w t-border zoom-effect" >
                </a>
            </div>
        </div>
    </div>

    <br>

    <! -- 2ND LINE -->
    <div class="container">
        <div class="row">
            <div class="col-5  text-center">
                <a href="https://car.dost.gov.ph/">
                    <img src="{{ asset('images/DOST-CAR.png') }}" class="col-w t-border zoom-effect" >
                </a>
            </div>

            <div class="col-2 ">
                
            </div>

            <div class="col-5  text-center">
                <a href="https://car.dost.gov.ph/">
                    <img src="{{ asset('images/DOST-CAR.png') }}" class="col-w t-border zoom-effect" >
                </a>
            </div>
        </div>
    </div>

    <br>

    <! -- 3RD LINE -->
    <div class="container">
        <div class="row">
            <div class="col-5  text-center">
                <a href="https://car.dost.gov.ph/">
                    <img src="{{ asset('images/DOST-CAR.png') }}" class="col-w t-border zoom-effect" >
                </a>
            </div>

            <div class="col-2 ">
                
            </div>

            <div class="col-5  text-center">
                <a href="https://car.dost.gov.ph/">
                    <img src="{{ asset('images/DOST-CAR.png') }}" class="col-w t-border zoom-effect" >
                </a>
            </div>
        </div>
    </div>

    <! -- THIS IS THE BACK BUTTON -->
    <div class="buttons-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="/Taraki_Contents" class="btn btn-primary btn-lg" role="button">BACK</a>
                </div>
            </div>
        </div>
    </div>


    <! -- THIS IS THE FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-3">
                    <img src="{{ asset('images/_OneDOST4U.png') }}" class="footer_onedost">
                </div>

                <div class="col-2 f-margin">
                    <h5> 
                        <a href="https://www.facebook.com/dostcar.gov.ph/">ABOUT US</a>
                    </h5>
                </div>

                <div class="col-2 f-margin">
                    <h5> 
                        <a href="https://www.facebook.com/dostcar.gov.ph/">CONTACT</a>
                    </h5>
                </div>

                <div class="col-2 f-margin">
                    <h5> 
                        <a href="https://www.facebook.com/dostcar.gov.ph/">FACEBOOK</a>
                    </h5>
                </div>

                <div class="col-3">
                    <img src="{{ asset('images/Science_for_the_people1.png') }}" class="footer_science">
                </div>

            </div>
        </div>
    </footer>

    <! -- THIS IS THE VIDEO BACKGROUND -->
    <video class="video-background" autoplay muted loop>
        <source src="{{ asset('videos/White BH.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</body>
</html>