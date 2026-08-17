
@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

  <div class="height-100 bg-light mainslider">
    <h4>Hi Admin !</h4>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="https://res.cloudinary.com/dpjpz26qm/image/upload/v1674890471/codepen/bg/08_lcybly.jpg" alt="img">
        <div class="cover">
          <div class="container">
            <div class="header-content">
              <div class="line"></div>
              <h2>Websit Designer In Meerut</h2>
              <h1>Full Stack Engineer</h1>
              <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, vitae!</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="https://res.cloudinary.com/dpjpz26qm/image/upload/v1674890470/codepen/bg/vibrant-summer-ombre-background-vector_53876-105765_heuzrs.webp" alt="img">
        <div class="cover">
          <div class="container">
            <div class="header-content">
              <div class="line animated bounceInLeft"></div>
              <h2>MERN Developer in Meerur</h2>
              <h1>Full Stack Engineer</h1>
              <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, vitae!</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="https://res.cloudinary.com/dpjpz26qm/image/upload/v1674890469/codepen/bg/istockphoto-1010238190-170667a_uqjj2p.jpg" alt="img">
        <div class="cover">
          <div class="container">
            <div class="header-content">
              <div class="line animated bounceInLeft"></div>
              <h2>NodeJs Developer</h2>
              <h1>Full Stack Engineer</h1>
              <h4>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, vitae!</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <p>Copyright &copy;
        <script>
          var CurrentYear = new Date().getFullYear()
          document.write(CurrentYear)
        </script> All Rights Reserved.
      </p>
    </footer>
  </div>


  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      dots: false,
      nav: true,
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
  </script>

  

@endsection
