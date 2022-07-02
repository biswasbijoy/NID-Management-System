<script src="./script.js" defer></script>

<style>
  .logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
  }
</style>

<nav class="navbar navbar-light fixed-top bg-success" style="padding:0;min-height: 3.5rem">
  <div class="container-fluid mt-2 mb-2">
    <div class="col-lg-12">
      <div class="col-md-1 float-left" style="display: flex;">

      </div>
      <div class="col-md-4 float-left text-white">
        <h3><i class="fa fa-bolt"></i><b> iPark | Charge your Electric Car</b></h3>
      </div>
      <div class="col-md-2 float-right text-white">
        <a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>

        <div class="fl" style="font-size: 15px;">
          <h2 class="city"style="font-size: 15px;">Sylhet</h2>
          <h1 class="temp " style="font-size: 15px;">31°C</h1>


        </div>
      </div>
    </div>

</nav>