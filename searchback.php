<?php
include 'dbh.php';
if (isset($_POST['submit'])) {

  $text =  strtolower($_POST['search-input']);

  $found = "SELECT * FROM movies WHERE name LIKE '$text%'";
  $display = mysqli_query($conn, $found);

  start:
  $i = 0;

  echo "<div class='row'>";
  while ($result = mysqli_fetch_assoc($display)) {
    echo "<form class='col-md-3 card-item-film' action='movie.php' method='POST' style='margin-bottom: 20px;'>";
    echo "
    <img
      src='assets/storage/uploads/img/" . $result['poster'] . "'
      style='
        height: 400px;  
        width: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 8px;
      '
    />
    <div class='card-item-film-body'>
      <div>
        <p class='rdate m-0'>2013</p>
      </div>
      <div>
        <h5 class='m-0'> " . $result['name'] . "</h5>
      </div>
      <div>
        <p class='description m-0'>
         " . $result['description'] . "
        </p>
      </div>
      <div
        class='stats d-flex align-items-center'
        style='font-size: 14px'
      >
        <span style='margin-right: 12px'>
          <img
            src='./assets/storage/uploads/img/imdb.png'
            alt=''
            style='width: 27px'
          />
          " . $result['imdb'] . "
        </span>
        <span>
          <img
            src='./assets/storage/uploads/img/tomato.png'
            alt=''
            style='width: 22px'
          />
          " . $result['tomato'] . "%
        </span>
      </div>
      <div
        class='stats d-flex align-items-center'
        style='font-size: 14px'
      >
        <span style='margin-right: 12px'>
          <i class='now-ui-icons tech_watch-time'></i>
          " . $result['runtime'] . "mins
        </span>
        <span>
          <i class='now-ui-icons users_single-02'></i>
          " . $result['viewers'] . "
        </span>
      </div>
      <button class='button m-0' type='submit' name='submit' value='" . ucwords($result['name']) . "'>
        <span>xem phim</span>
        <div class='icon'>
          <i class='fa fa-play'></i>
        </div>
      </button>
  </div>";
    echo "</form>";

    if ($i == 3) {

      echo "</div>";

      goto start;
    }
    $i++;
  }
  echo "</div>";
}
