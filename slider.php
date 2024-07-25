<?php include "connect.php" ?>

    <div class="carousel">
       <?php  $res = mysqli_query($con, "SELECT * FROM tbl_slider");
        						while($row = mysqli_fetch_array($res))
        						{
        						    //echo $row['slider_image'];
        					?>
      <div class="carousel-item">
        <img src="admin/uploads/<?php echo $row['slider_image'];?>" alt="Slide">
      </div>

      <?php } ?>
      <!--<div class="carousel-item">
        <img src="./img/red_car_1.png" alt="Red Car 1">
      </div>
      <div class="carousel-item">
        <img src="./img/red_car_2.png" alt="Red Car 2">
      </div>-->
    </div>
    <div class="carousel-nav"></div>
   


   <script>
   document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.querySelector('.carousel');
  const items = carousel.querySelectorAll('.carousel-item');
  const totalItems = items.length;
  let currentIndex = 0;

  function showNext() {
    // Move to the next slide
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
  }

  function updateCarousel() {
    const translateX = -currentIndex * 100;
    items.forEach(item => {
      item.style.transform = `translateX(${translateX}%)`;
    });
  }

  // Set an interval to automatically switch images every 2 seconds (2000 milliseconds)
  setInterval(showNext, 2000);
});

</script>

<!-- 
 .carousel {
    display: flex;
    overflow: hidden;
    width: 100%;
    height: 100%; 
    position: relative;
  }

  .carousel-item {
    min-width: 100%;
    transition: transform 0.5s ease-in-out;
  }

  .carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover; 
  }

  .carousel-nav {
    display: flex;
    justify-content: center;
    margin-top: 10px;
  }

  .carousel-nav button {
    padding: 10px;
    margin: 0 5px;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
  }

  .carousel-nav button:hover {
    background-color: #0056b3;
  }  -->

  