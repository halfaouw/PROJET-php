<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="design/StylesheetValatria.css">
  <title>Valatria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="design/StylesheetValatria.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="design/favicon.png" />

  </head>





  <body>






    <header>
        <img src="design/banner.png" alt="Banniere">


        <div class="navbar">
            <ul>
              <li><a href="Waffle.view.php">Home</a></li>
              <li><a href="#" aria-haspopup="true">Shop</a>
                <ul class="dropdown" aria-label="submenu">
                  <li><a href="Shop.view.php">Tractors</a></li>
                  <li><a href="Kitform.view.php">Kitform</a></li>
                </ul>
              </li>
              <li><a href="https://valatria.createaforum.com/">Forum</a></li>
            </ul>
        </div>
    </header>

    <button onclick="window.location.href = 'Login.view.php';" class="LOGIN" type="button" name="button">LOGIN </button>


        <div class="dropdown">
          <h2>Feedback</h2>
          <div class="dropdown-content">
            <div class="comment">
              <div class="rating">
                <h6>thecrazyfarmer</h6>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <p>I love my new Tractor! I designed it myself, it only took them a week to complete it and deliver it to my farm.</p>

              </div>
              </div>
            <div class="comment">
              <div class="rating">
                <h6>bestAgricultor</h6>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
              </div>

              <p>Very good idea, I could design my own tractor, now it makes me happy to go out in the morning and work ysing this tractor,No one in the neighbourhood has the same. The only problem is that it took them too long to deliver it </p>
            </div>
            <div class="comment">
              <div class="rating">
                <h6>iLoveMyFarm</h6>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star "></span>
                <span class="fa fa-star"></span>
              </div>
              <p>AWFUL ! I hated their sevices. But the website is good </p>
            </div>
          </div>
        </div>
    <div>
      <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>
    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
    Hey... leave a comment!
    </textarea>
    </div>
    <input type="submit" class= "Submit"value="Submit">
    </form>



  </body>

  <footer>

    <div class="footer">

      <ul>
        <li><a href="AboutUs.view.php">About us </a></li>
        <li><a href="feedback.view.php">Feedback</a></li>
      </ul>

    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
    <a href="https://twitter.com/" class="fa fa-twitter"></a>
    <a href="https://fr.linkedin.com/" class="fa fa-linkedin"></a>
    <a href="#" class="fa fa-instagram"></a>
      <p>Copyright@TheWaffleProject-2020</p>

    </div>

  </footer>



</html>
