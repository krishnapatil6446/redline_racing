<?php 
if(isset($_POST['submit'])){
    $to = "redlineracing.rscoe@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//   echo "Mail Sent Successfully! Thank you! " . $first_name . ", we will contact you shortly.";
   echo '<script>alert("Mail Sent Successfully! Thank you! We will contact you soon!.")</script>'; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/split-type"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
    .nav-wrapper {
      position: relative;
      z-index: 2;
    }

    .bg-image {
      position: absolute;
      z-index: 0;
    }
  </style>
  <script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-firestore.js"></script>
</head>
<body>
  <nav class="nav-wrapper bg-red-500 p-5 text-white shadow md:flex md:items-center md:justify-between z-50">
    <div class="flex justify-between items-center">
        <span class="text-2xl font-[Poppins] cursor-pointer">
            <img class="h-10 inline" src="../ingredients/logo.png" alt="image description">
        </span>

        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
    </div>

    <ul class="md:flex md:items-center md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 md:bg-transparent bg-red-500">
        <li class="mx-4 my-6 md:my-0">
            <a href="./index.html" class="text-xl hover:text-black duration-500">HOME</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="./about.html" class="text-xl hover:text-black duration-500">ABOUT</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="./Sponsors.html" class="text-xl hover:text-black duration-500">SPONSORS</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="./members.html" class="text-xl hover:text-black duration-500">MEMBERS</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="./cars.html" class="text-xl hover:text-black duration-500">CARS</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="./Team_Gallery.html" class="text-xl hover:text-black duration-500">TEAM GALLERY</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
            <a href="./contact.php" class="text-xl hover:text-black duration-500">CONTACT US</a>
        </li>
    </ul>
</nav>

<form method="post" action="contact.php" enctype="multipart/form-data" class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.985410528728!2d73.74731897537893!3d18.619725966137434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbbc138acb7b%3A0x67043867a211a31d!2sJSPM%20Rajarshi%20Shahu%20College%20Of%20Engineering%20%2C%20Tathawade!5e0!3m2!1sen!2sin!4v1712082379719!5m2!1sen!2sin" style="filter:  contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact Us</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Team Redline Racing, JSPM Rajashri Shahu College of Engineering.</p>
        <div class="relative mb-4">
          <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
          <input type="email" id="email" name="email" class=" email w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-4">
          <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
          <textarea id="message" name="message" class="message w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
        </div>
        <button class=" submitbutton text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Submit</button>
      </div>
    </div>
  </form>


  <footer class="text-white body-font bg-black">
    <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <img src="../ingredients/logo.png" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-red-500 rounded-full" viewBox="0 0 24 24">
          <span class=" text-red-500 ml-3 text-xl">TEAM REDLINE RACING</span>
        </a>
        <p class="mt-2 text-sm text-gray-500">

          Email: redlineracing.rscoe@gmail.com<br>
          
          Phone: +91 9822285107<br>
          
          Address : JSPM Rajarshi shahu college
          of engineering , Tathawade, Pimpri-Chinchwad,
          Maharashtra 411033</p>
      </div>

      <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-red-500 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="./index.html" class="text-white hover:text-red-500">Home</a>
            </li>
            <li>
              <a href="./about.html" class="text-white hover:text-red-500">About</a>
            </li>
            <li>
              <a href="./Sponsors.html" class="text-white hover:text-red-500">Sponsers</a>
            </li>
            <li>
              <a href="./members.html" class="text-white hover:text-red-500">Members</a>
            </li>
            <li>
              <a href="./cars.html" class="text-white hover:text-red-500">Cars</a>
            </li>
            <li>
              <a href="./Team_Gallery.html" class="text-white hover:text-red-500">Team Gallery</a>
            </li>
            <li>
              <a href="./contact.php" class="text-white hover:text-red-500">Contact us</a>
            </li>
            <li>
                <a href="./privacypolicy.html" class="text-white hover:text-red-500">Privacy Policy</a>
              </li>
          </nav>
        </div>
        

        

      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-red-500 text-sm text-center sm:text-left">© 2024 Team Redline Racing.The content on this site, <br>including images, videos, text, and graphic designs,<br> is owned by www.teamredlineracing.in
          
          </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <!-- <a href = "" class="text-gray-500 hover:text-red-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a> -->
          <!-- <a class="ml-3 text-gray-500 hover:text-red-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a> -->
          <a href = "https://www.instagram.com/team_redlineracing/?hl=en"class="ml-3 text-gray-500 hover:text-red-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a href = "https://www.linkedin.com/company/team-redlineracing?trk=blended-typeahead" class="ml-3 text-gray-500 hover:text-red-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>

  <script type="module">

    const firebaseConfig = {
      apiKey: "AIzaSyC08bROZ6BkfMi3DM4cqE0C69ORqlkLsSs",
      authDomain: "redlineracing-e4777.firebaseapp.com",
      projectId: "redlineracing-e4777",
      storageBucket: "redlineracing-e4777.appspot.com",
      messagingSenderId: "1027363160273",
      appId: "1:1027363160273:web:e41a5ea5fc64a63dab05f0",
      measurementId: "G-EK0CY2XJ2L"
    };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  // Reference to the Firestore database
  const db = firebase.firestore();

  // Handle form submission
  document.getElementById("submitBtn").addEventListener("click", function(event) {
      event.preventDefault();
      const email = document.getElementById("email").value;
      const message = document.getElementById("message").value;

      // Add form data to Firestore
      db.collection("contactForms").add({
          email: email,
          message: message
      })
      .then(function(docRef) {
          console.log("Document written with ID: ", docRef.id);
          // Optionally, you can display a success message or redirect the user to a thank you page.
      })
      .catch(function(error) {
          console.error("Error adding document: ", error);
      });
  });  



    function Menu(e) {
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
    }

    let text = new SplitType('#text1')
  </script>
</body>
</html>

