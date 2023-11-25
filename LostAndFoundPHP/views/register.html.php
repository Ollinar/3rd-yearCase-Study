
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Here</title>
    <!-- Tailwind -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font -->
    <style>
      @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");

      .font-family-karla {
        font-family: karla;
      }
    </style> 



    <!-- htmx -->
  <script src="https://unpkg.com/htmx.org@1.9.8" integrity="sha384-rgjA7mptc2ETQqXoYC3/zJvkU7K/aP44Y+z7xQuJiVnB/422P/Ak+F/AqFR7E4Wr" crossorigin="anonymous"></script>
    <!-- recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js?" async defer></script>


  </head>

  <body class="bg-white font-family-karla h-screen">
    <div class="w-full flex flex-wrap">
      <!-- Register Section -->
      <div class="w-full md:w-1/2 flex flex-col">
        <div
          class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
          <p class="text-center text-3xl">Join Us.</p>
          <form class="flex flex-col pt-3 md:pt-8" method="post" action="/register" 
            hx-post="/register" hx-target="#regField">
            <div id="regField">
              <?php include_once('views/fragments/register_fields.php')?>
            </div>
              <div class="g-recaptcha" data-sitekey="<?=$config['recaptcha']['site-key']?>"></div>
              
              <button  name="login_user" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
              <img src="/assets/img/svg-loaders/bars.svg" id="indic" class="htmx-indicator absolute my-auto" width="20px">Register
            </button>
          </form>
          <div class="text-center pt-12 pb-12">
            <p>
              Already have an account?
              <a href="/login" class="underline font-semibold"
                >Log in here.</a
              >
            </p>
          </div>
        </div>
      </div>
      <!-- Particles animation -->
      <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <canvas data-particle-animation></canvas>
      </div>
      <!-- Image Section -->
      <div class="w-1/2 shadow-2xl">
        <img
          class="object-cover w-full h-screen hidden md:block"
          src="assets/img/registerbg.png"
          alt="Background"
        />
      </div>
    </div>
  </body>
  <!-- For Particle -->
  <script src="assets/js/particle-animation.js"></script>
  <!-- For Custom Alert Box-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php  if (isset($_SESSION['status'])) : ?>
    <script>
    Swal.fire({
    title: "<?php echo $_SESSION['status']; ?>",
    // text: "Registered Successfully!",
    icon: "<?php echo $_SESSION['status_code']; ?>",
});
  </script>
    <?php endif ?>
</html>
