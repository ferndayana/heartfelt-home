<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heartfelt Homes Blog</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffffff6a;
    }
    .container{
        width: 85%;
        height: 20%;
    }
    .header {
      background-image: url('{{ asset('images/landingpage/image10.webp') }}');
      background-size: cover;
      height:50vw;
      color: white;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .header h1 {
      font-family: sans-serif;
      font-size: 4rem;
      font-weight: bold;
      text-shadow: 2px 2px 8px black;
      padding: 10px 20px;
      border-radius: 10px;
      animation: scaleIn 1s ease-out forwards;
      font-family: 'Luckiest Guy', cursive;
    }
    @keyframes scaleIn {
      0% {
        transform: scale(0.5);
      }
      100% {
        transform: scale(1);
      }
    }
    .navbar {
        background-color: white ;
    }
    .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        font-family: Luckiest Guy;
        color: black;
        margin-left: -100px;
    }
    .navbar-nav .nav-item .nav-link {
        color: black !important;
    }
    .blog-content {
      padding: 20px;
    }

    footer {
      background-color: rgba(228, 233, 237) 1!important;
      color: black !important;
      padding: 20px;
      text-align: center;
      border-top: black solid;
    }

    footer h5 {
      font-size: 1rem !important;
      margin-bottom: 10px;
      color: black; 
    }

    footer a {
      display: block;
      color: black; 
      text-decoration: none;
      margin-bottom: 10px;
    }

    footer a:hover {
      text-decoration: underline; 
    }

    .post {
      margin-right: 20px;
      margin-bottom: 20px;
      max-width: 300px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      padding: 15px;
    }

    .post-image {
      max-width: 100%;
      max-height: 250px;
      object-fit: cover;
      border-radius: 10px;
      margin-top: 10px;
    }

    .post-text {
      font-size: 1rem;
      color: #333;
      margin-top: 10px;
    }

    .post-header {
      font-size: 1.2rem;
      font-weight: bold;
      color: #444;
      margin-bottom: 5px;
    }

    .deleteButton {
      display: block;
      margin-top: 10px;
      background-color:rgb(221, 152, 56);
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 8px;
      font-size: 0.9rem;
      cursor: pointer;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .deleteButton:hover {
      background-color: #ff4136;
    }

    #postsContainer {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">H E A R T F E L T H O M E S</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('allbreeds') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('allbreeds') }}">Adoption</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="header">
  <h1>Heartfelt Homes Blog</h1>
</div>

<div class="container blog-content">
  <h3>Share your experience here:</h3>
  <div class="mb-3">
    <input type="email" id="emailInput" class="form-control" placeholder="Your Email" required>
  </div>

  <div class="mb-3">
    <textarea id="experienceInput" class="form-control" rows="4" placeholder="Write here..."></textarea>
  </div>

  <div class="mb-3">
    <label for="imageUpload" class="form-label">Upload Image</label>
    <input type="file" id="imageUpload" class="form-control" accept="image/*">
  </div>

  <button id="postButton" class="btn btn-primary">Post</button>

  <hr>

  <div id="postsContainer" class="mt-4"></div>
  <form action="USER_DASHBOARD.php">
    <button class="btn btn-primary">View Dashboard</button>
  </form>
</div>

<footer class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-4">
            <h5>Explore</h5>
            <a href="#">Design</a>
            <a href="#">Prototyping</a>
            <a href="#">Design Systems</a>
        </div>
        <div class="col-12 col-md-4">
            <h5>Resources</h5>
            <a href="#">Blog</a>
            <a href="#">Colors</a>
        </div>
        <div class="col-12 col-md-4">
            <h5>Use Cases</h5>
            <a href="#">UI Design</a>
            <a href="#">Wireframing</a>
            <a href="#">Team Collaboration</a>
        </div>
    </div>
</footer>

<script>
  const postButton = document.getElementById('postButton');
  const experienceInput = document.getElementById('experienceInput');
  const postsContainer = document.getElementById('postsContainer');
  const imageUpload = document.getElementById('imageUpload');
  const emailInput = document.getElementById('emailInput');

  function formatDate(date) {
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const ampm = hours >= 12 ? 'PM' : 'AM';
    const formattedHours = hours % 12 === 0 ? 12 : hours % 12;
    const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
    const formattedDate = date.toLocaleDateString();
    return `${formattedDate} ${formattedHours}:${formattedMinutes} ${ampm}`;
  }

  function convertToBase64(file, callback) {
    const reader = new FileReader();
    reader.onloadend = function () {
      callback(reader.result);
    };
    reader.readAsDataURL(file);
  }

  postButton.addEventListener('click', () => {
    const email = emailInput.value.trim();
    const userText = experienceInput.value.trim();
    const imageFile = imageUpload.files[0];
    const currentDate = formatDate(new Date());

    if (!email || !validateEmail(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    if (userText || imageFile) {
      if (imageFile) {
        convertToBase64(imageFile, (base64Image) => {
          const post = {
            email: email,
            text: userText,
            imageUrl: base64Image,
            date: currentDate,
            id: Date.now()
          };
          createPost(post);
          savePostToLocalStorage(post);
        });
      } else {
        const post = {
          email: email,
          text: userText,
          imageUrl: null,
          date: currentDate,
          id: Date.now()
        };
        createPost(post);
        savePostToLocalStorage(post);
      }
      experienceInput.value = ''; 
      emailInput.value = ''; 
      imageUpload.value = ''; 
    }
  });

  function validateEmail(email) {
    const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return regex.test(email);
  }

  function createPost(post) {
    const postDiv = document.createElement('div');
    postDiv.className = 'post';
    postDiv.setAttribute('data-id', post.id);
    postDiv.innerHTML = `
      <div class="post-header">
        <p><strong>${post.date}</strong> - ${post.email}</p>
      </div>
      <div class="post-text">
        <p>${post.text}</p>
      </div>
      ${post.imageUrl ? `<img src="${post.imageUrl}" class="post-image" />` : ''}
      <button class="deleteButton">Delete</button>
    `;

    postDiv.querySelector('.deleteButton').addEventListener('click', () => {
      deletePost(post.id);
      postDiv.remove();
    });

    postsContainer.appendChild(postDiv); // Add to bottom
  }

  function savePostToLocalStorage(post) {
    const savedPosts = JSON.parse(localStorage.getItem('posts')) || [];
    savedPosts.push(post);
    localStorage.setItem('posts', JSON.stringify(savedPosts));
  }

  function deletePost(postId) {
    const savedPosts = JSON.parse(localStorage.getItem('posts')) || [];
    const updatedPosts = savedPosts.filter(post => post.id !== postId);
    localStorage.setItem('posts', JSON.stringify(updatedPosts));
  }

  window.onload = () => {
    const savedPosts = JSON.parse(localStorage.getItem('posts')) || [];
    savedPosts.forEach(post => {
      createPost(post);
    });
  };
</script>

</body>
</html>
