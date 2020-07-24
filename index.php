<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="main.css">

    <!--  <script type="text/javascript" src="JS/mainScript"></script> -->

    <title>Pesonal Information</title>
  </head>
  <body>
    <div class="container mw-100">
      <div class="row">
        <div class="col-md-8">
          <div class="heading">
            <h1>Personal Infomation</h1>
          </div>
        </div>
        <div class="col-md-4">
          <div class="heading2">
            <h2 id="respons"></h2>
          </div>
        </div>
      </div>
    </div>
    <hr>

    <div class="container mw-100">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="form">
            <form id="formId">
              <!-- Name -->
              <div>
                <label>Name:</label>
              </div>
              <div>
                <input class="fullname" type="text" name="full_name" id="fullName">
              </div>
              <!-- Address -->
              <div>
                <label>Full Address:</label>
              </div>
              <div id="adds">
                <textarea name="full_address" id="fullAddress"></textarea>
              </div>
              <!-- Country -->
              <div>
                <label>Country:</label>
              </div>
              <div>
                <select name="select_county" id="selectCountry" onchange="loadState()">
                  <option>Select Country</option>
                  <!-- Country DataBase Connction -->
                  <?php
                        include("connect.php");
                        $q = mysqli_query($con,"SELECT * FROM countries");
                        while ($rs=mysqli_fetch_row($q)) {
                          echo "<option value='$rs[0]'>$rs[2]</option>";
                        }
                  ?>
                </select>
              </div>
              <!-- State -->
              <div>
                <label>State:</label>
              </div>
              <div>
                <select name="select_State" id="selectState" onchange="loadCity()">
                  <option>Select State</option>
                </select>
              </div>
              <!-- City -->
              <div>
                <label>City:</label>
              </div>
              <div>
                <select name="select_city" id="selectCity">
                  <option>Select City</option>
                </select>
              </div>
              <!-- Pin -->
              <div>
                <label>PIN</label>
              </div>
              <div>
                <input class="pin_number" type="number" name="pin_number" id="pinNumber">
              </div>
              <!-- <div></div>
              <div>
                <input type="button" name="button" value="Submit" id="submitButton" onclick="btnclick()">
              </div> -->  
              <!-- Never use onclick attribute inside the Form tag -->
            </form>
          </div>
         <div>
          <button class="btnclass" id="submitButton" onclick="btnclick()">Submit</button>
         </div> 
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>  

















    <!-- Link MainScript -->
    <script type="text/javascript" src="JS/mainScript"></script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>