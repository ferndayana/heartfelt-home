<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Background Image Carousel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <style>
    .carousel-item {
      height: 96vh;
      background-size: cover;
      background-position: center;
      transition: opacity 0.5s ease-in-out; 
      opacity: 0;
    }

    .carousel-item.active {
      opacity: 1;
    }

    .carousel-title {
      position: absolute;
      top: 20px;
      left: 30px;
      font-size: 2.5vw;
      font-family: 'Luckiest Guy', sans-serif;
      display: flex;
      align-items: center;
      gap: 10px;
      color: white;
      z-index: 10;
      text-shadow: 2px 2px 2px rgb(0, 0, 0);
      animation: scaleIn 0.4s ease-out forwards;
    }

    .carousel-title i {
      color: white;
      font-size: 2.5vw;
    }

    @keyframes scaleIn {
      0% {
        transform: scale(0.4);
      }
      100% {
        transform: scale(1);
      }
    }

    .carousel-caption {
      position: absolute;
      bottom: 40px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      padding: 10px 30px;
      text-align: center;
      border-radius: 10px;
      z-index: 10;
      opacity: 0;
      animation: fadeIn 1.5s ease-out forwards 0.5s; 
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    .interested-button {
      position: absolute;
      bottom: 30px;
      right: 30px;
      padding: 12px 25px;
      font-size: 1.2rem;
      background-color: rgba(208, 118, 28, 0.6);
      color: rgb(0, 0, 0);
      border-radius: 50px;
      text-decoration: none;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease, transform 0.3s ease;
      z-index: 10;
      animation: scaleIn 0.5s ease-out forwards;
    }

    .interested-button:hover {
      background-color: rgba(255, 168, 82, 0.7);
      transform: scale(1.1); 
    }

    .interested-button i {
      margin-left: 10px; 
      font-size: 1.2em; 
    }

    .para {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      width: 90%;
    }

    .para p {
      color: aliceblue;
      font-size: 3.5vw;
      text-shadow: 1px 1px 1px rgb(157, 94, 0);
      font-family: 'Luckiest Guy', sans-serif;
      animation: scaleIn 1.5s ease-out forwards;
    }

    @media (max-width: 768px) {
      .carousel-title {
        font-size: 5vw;
      }

      .para p {
        font-size: 5vw;
      }

    
    }
  </style>
</head>
<body>
  <div class="carousel-title"> 
    <i class="fas fa-paw"></i>
    HEARTFELT HOMES
  </div>

  <div id="backgroundCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('image1.png.jpg');"></div>
      <div class="carousel-item" style="background-image: url('https://cdn.shopify.com/s/files/1/0693/6756/2561/files/custom_resized_cdf05217-7b24-4c5b-933f-87942caa964d.jpg?v=1681320663');"></div>
      <div class="carousel-item" style="background-image: url('https://domf5oio6qrcr.cloudfront.net/medialibrary/8617/dog-park-petting-dog.jpg');"></div>
      <div class="carousel-item" style="background-image: url('https://www.guidedogs.com/uploads/images/Volunteering-Section/Puppy-Raising/_1080x720_crop_center-center_none/Raiser-Group-Photo.jpg');"></div>
      <div class="carousel-item" style="background-image: url('https://i.pinimg.com/736x/1d/8e/5f/1d8e5f4a25a092b8170fb1a6ad23cf5b.jpg');"></div>
      <div class="carousel-item" style="background-image: url('https://media.distractify.com/brand-img/qoiEJy0sh/0x0/dog-owner-cover-1-1554817938654.jpg');"></div>
    </div>
    <div class="para">
      <p>
        "We’re glad you're here! May you discover the furry friend you’ve been looking for."
      </p>
    </div>
  </div>

  <a href="landingpage.php" class="interested-button">
    I'm Interested!
    <i class="fas fa-arrow-right"></i> 
  </a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
