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

<nav class="navbar navbar-light fixed-top bg-success" >
  <div class="container-fluid mt-2 mb-2">
    <div class="col-lg-12">
      <div class="col-md-1 float-left" style="display: flex;">

      </div>
      <div class=" float-left text-white">
        <h6><i class="fa fa-bolt"></i><b> iPark | Charge your Electric Car</b></h6>
      </div>
      <div class=" float-right text-white" >
        <a href="ajax.php?action=logout" class="text-white" ><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>


      </div>
      <div class="  float-right text-white" style="font-size: 15px;margin-top:10px">
        
      &nbsp
      &nbsp

      </div>
      
      <div class="fl  float-right text-white" style="font-size: 15px;">
        <h2 class="city" style="font-size: 15px;">Sylhet</h2>
        <!-- <h1 class="temp " style="font-size: 15px;">31°C</h1> -->


      </div>
      <div class="  float-right text-white" style="font-size: 15px;">
        
      &nbsp
      &nbsp

      </div>

      <div class="fl  float-right text-white style=" font-size: 15px;  margin-left: 100px; ">
        <!-- <h2 class="city" style="font-size: 15px;">Sylhet</h2> -->
        <h1 class="temp " style="font-size: 15px;">31°C</h1>     


      </div>
      
    </div>

</nav>