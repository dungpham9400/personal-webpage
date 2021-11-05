<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bio.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Internet and Web Services</title>
</head>

<body>
    <header>

        <div class="main">
            
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#about">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#hanu">HANU</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
        <div class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/moon.jpg" class="d-block w-100" alt="slider1">
                </div>
                <div class="carousel-item">
                <img src="images/2.png" class="d-block w-100" alt="slider2">
                </div>
                <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="slider3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>

        <div class="title">
            <h1>INTERNET AND WEB SERVICES</h1>
            <h2>Author: Pham Thu Dung</h2>
        </div>

        <div class="button">
            <a href="#about" class="btn">ABOUT ME</a>
        </div>

        <div class="slogan">
            <h3>Lyrics that I love from a song of NCT: <br>
                Baby you should know, I won't let you go<br>
                I'll show you the world if you say so<br>
                We'll take the highway to heaven<br>
                And I can't wait to love you all alone<br>
                We'll take the highway to heaven<br>
                Oh the 101, let's see just where it goes</h3>
        </div>

        <div class = "weather">
            <?php
	define('API_KEY','W2zfWF6iKmIgGT96pciuEtvPPoyS4lPk');

	$apikey = API_KEY;
  //$user_ip = $_SERVER["REMOTE_ADDR"];
	 $user_ip = '183.91.3.13';

	$location = json_decode(file_get_contents("http://dataservice.accuweather.com/locations/v1/cities/ipaddress?apikey={$apikey}&q={$user_ip}"), true);

	$loc_key = $location['Key'];
	
	$weather = json_decode(file_get_contents("http://dataservice.accuweather.com/currentconditions/v1/{$loc_key}?apikey={$apikey}"), true);


	$city = $location['EnglishName'];
	$country = $location['Country']['EnglishName'];
	$dt = $weather[0]['LocalObservationDateTime'];
	$temp = $weather[0]['Temperature']['Metric']['Value'];
	$img = $weather[0]['WeatherIcon'];
		if($img<10) {
			$img = "0{$img}";
		}

	echo '<p><br />Welcome, lady and gentleman!</p><p>';
	echo $city . ', ' . $country . "<br />";
	echo substr($dt,0,10) . " " . substr($dt,11,8);
	echo "</p><p>Temperature: {$temp} C<br />";


?>
</div>
    </header>

    <section id=hanu>
    <div class="bios">
        <div class="container">
            <h1 class="lg-title">Hanoi University</h1>
            <p class="text-light">Internet and Web Services</p>

            <div class="bio-items">
                <div class="bio">
                    <div class="bio-content">
                        <div class="bio-img">
                            <img src="images/logo.png" alt="bio image">
                        </div>
                        <div class="bio-btn">
                        </div>
                    </div>

                    <div class="bio-info">
                        <div class="bio-info-top">
                            <h2 class="sm-title"><a href="https://www.hanu.vn/">hanoi university<a></h2>
                        </div>
                    </div>

                    <div class="off-info">
                        <h2 class="sm-title">hanu</h2>
                    </div>
                </div>



                <div class="bio">
                    <div class="bio-content">
                        <div class="bio-img">
                            <img src="images/fit.jpg" alt="bio image">
                        </div>
                        <div class="bio-btn">
                        </div>
                    </div>

                    <div class="bio-info">
                        <div class="bio-info-top">
                            <h2 class="sm-title"><a href="https://fit.hanu.vn">information technology<a></h2>
                        </div>
                    </div>

                    <div class="off-info">
                        <h2 class="sm-title">fit</h2>
                    </div>
                </div>

                <div class="bio">
                    <div class="bio-content">
                        <div class="bio-img">
                            <img src="images/han.png" alt="bio image">
                        </div>
                        <div class="bio-btn">
                        </div>
                    </div>

                    <div class="bio-info">
                        <div class="bio-info-top">
                            <h2 class="sm-title"><a href="https://www.facebook.com/HanuTimes/">hanu club<a></h2>
                        </div>
                    </div>

                    <div class="off-info">
                        <h2 class="sm-title">hanu times</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </section>


    <section id="about">
        <div class="about container">
            <div class="col-right">
                <h1 class="section-title">About <span>Pham Thu Dung</span></h1>
                <h2><i>"Internet and Web Services"</i></h2>
                <p> My name is Pham Thu Dung. I'm from Thai Binh. I'm a third-year student at Hanoi University. I'm
                    studing Software Engineering of Information Technology Department. I'm not good at anything. My
                    hobby is watching videos on Youtube, following some Kpop groups, sleeping,... I'm an SM Stan, my
                    favourite Kpop groups are EXO, NCT and SHINee.
                <p>
                <p>They's just some nonsense texts because I do not know what I write in here.
                    <br>Friends, it’s true: the end of the decade approaches. It’s been a difficult, anxiety-provoking,
                    morally compromised decade, but at least it’s been populated by some damn fine literature. We’ll
                    take our silver linings where we can.

                    <br><br>So, as is our hallowed duty as a literary and culture website—though with full awareness of
                    the potentially fruitless and endlessly contestable nature of the task—in the coming weeks, we’ll be
                    taking a look at the best and most important (these being not always the same) books of the decade
                    that was. We will do this, of course, by means of a variety of lists. We began with the best debut
                    novels, the best short story collections, the best poetry collections, and the best memoirs of the
                    decade, and we have now reached the fifth list in our series: the best essay collections published
                    in English between 2010 and 2019.

                    <br><br>The following books were chosen after much debate (and several rounds of voting) by the
                    Literary Hub staff. Tears were spilled, feelings were hurt, books were re-read. And as you’ll
                    shortly see, we had a hard time choosing just ten—so we’ve also included a list of dissenting
                    opinions, and an even longer list of also-rans. As ever, free to add any of your own favorites that
                    we’ve missed in the comments below.
                    <br><br><strong>1.</strong>"If you look at what you have in life, you'll always have more. If you
                    look at what you don't have in life, you'll never have enough." -Oprah Winfrey
                    <br><strong>2.</strong>"If you set your goals ridiculously high and it's a failure, you will fail
                    above everyone else's success." -James Cameron
                    <br><strong>3.</strong>"Life is what happens when you're busy making other plans." -John Lennon
                    <br><strong>4.</strong>The insight and experience of others is a valuable source of inspiration and
                    motivation. And learning from successful leaders and entrepreneurs is a fantastic way to grow.

                    Life throws curveballs. And while there might be blockers to success, it's imperative to keep
                    pushing with the knowledge mistakes will be made and failure is inevitable.
                </p>
                <a href="https://www.facebook.com/oohsehunbest" class="cta">Contact me</a>
            </div>

        </div>
    </section>

    <div id="footer">
     

    <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">EMAIL</h5>

        <p>
          18010400342s.hanu.edu.vn
          dungpham9400@gmail.com
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">ADDRESS</h5>

        <p>
          Hanoi University
          Nam Tu Liem, Hanoi
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white">phamthudung</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>