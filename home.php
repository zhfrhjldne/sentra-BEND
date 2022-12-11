<div class="page">
<center><p style="font-family: garlic butter; font-size: 50px;"><u> JAVA FEST</center></u>


<div class="slideshow-container">
        <div class="mySlides fade">
          <img src="https://i.postimg.cc/sXSkrRFV/Lirik-Lagu-THE-OVERTUNES-Cinta-Adalah.jpg" style="width:100%">
          <div class="text"></div>
        </div>
      
        <div class="mySlides fade">
          <img src="https://i.postimg.cc/Y2zfjqwJ/1-okaay.png" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="https://i.postimg.cc/NGyh6VdG/tulus-00-profil-dan-biodata-tulus-muhammad-tulus-800x450-ccpdm-min.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="https://i.postimg.cc/YCX04ZXN/6-gaya-hijab-feby-putri-musisi-bersuara-emas-169.jpg" style="width:100%">
        </div>
        
        <div class="mySlides fade">
          <img src="https://i.postimg.cc/bYtjkWv0/vierra.png" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="https://i.postimg.cc/rpMpPcDL/18088dfe-4713-4b58-ad27-695016778326-169.jpg" style="width:100%">
        </div>

        <center><p style="font-family: garlic butter;">GUEST STAR AT DAY 1 : THE OVERTUNES & OKAAY <br><br> GUEST STAR AT DAY 2 : TULUS & FEBY PUTRI 
        <br> <br> GUEST STAR DAY 3 : VIERRATALE & KUNTO AJI  </p></center>'
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
  
      <br>
      
      <script>
        let slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  </script>

<br>
<br>
<br>

</div>
  