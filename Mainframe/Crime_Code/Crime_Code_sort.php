<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sort Crime Code</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="keywords"
      content="New York Urban Department, NYUPD, Police, Urban Safty"
    />
    <meta name="description" content="New York Urban Police Department" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <link
      href="../../Styles/global.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="../../Styles/header-agencies.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="../../Styles/homepage-hero.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="../../Styles/index.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="../../Styles/agency-styles.css"
      media="screen"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body id="agencies-index">
    <div class="agency-header">
      <div class="upper-header-black">
        <div class="container">
          <span class="upper-header-left"
            ><img src="../../Assets/NYU.png" alt="NYU" class="small-nyc-logo" />
            <img
              src="https://www.nyc.gov/assets/home/images/global/upper-header-divider.gif"
              alt=""
            /><span class="upper-header-black-title"
              >New York Urban Police Department</span
            ></span
          ><span class="upper-header-padding"></span
          ><span class="upper-header-right"
            ><span class="upper-header-three-one-one">911</span
            ><img
              src="https://www.nyc.gov/assets/home/images/global/upper-header-divider.gif"
              alt=""
            /><span class="upper-header-search"
              >Visit NYUPD.gov websites</span
            ></span
          >
        </div>
      </div>
    </div>
    <div role="banner" class="main-header">
      <div class="header-top">
        <div class="container">
          <a
            href=""
            class="toggle-mobile-side-nav visible-phone"
            id="nav-open-btn"
            >Menu</a
          ><span class="welcome-text hidden-phone agency-header"
            >New York Urban's Finest</span
          >

          <div class="agency-logo-wrapper">
            <a href="#"
              ><img
                class="agency-logo"
                src="../../Assets/NYUPD-Logo.png"
                alt="NYUPD New York Urban Police Department"
            /></a>
          </div>
          <div class="hidden-phone" id="header-links">
            <a class="text-size" href="../../Security/logout.php">Log Out</a>
          </div>
        </div>
      </div>
      <div class="container">
        <nav id="nav">
          <ul>
            <li class="nav-home">
              <a href="../index.php"> Home</a>
            </li>
            <li><a href="../../Security/redirect.php?page=Crime">Crime</a></li>
            <li>
              <a href="../../Security/redirect.php?page=CrimeCode">Crime Code</a>
            </li>
            <li>
              <a href="../../Security/redirect.php?page=CrimeCharges"
                >Crime Charges</a
              >
            </li>
            <li>
              <a href="../../Security/redirect.php?page=Criminal">Criminal</a>
            </li>
            <li>
              <a href="../../Security/redirect.php?page=Officers">Officers</a>
            </li>
            <li>
              <a href="../../Security/redirect.php?page=Sentencing">Sentencing</a>
            </li>
            <li><a href="../../Security/redirect.php?page=Appeal">Appeal</a></li>
            <li>
              <a href="https://github.com/0Christ1/NYUPD">Repo</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="content-img">
      <div class="content shadow">
        <div class="container my-5">
        <h2>Sort the List of Crime Code</h2>
        <div class="position">
          <a class="btn btn-primary" href="./Crime_Code_add.php" role="button">New Crime Code</a>
          <a class="btn btn-primary" href="./Crime_Code_sort.php" role="button">Sort by Crime Code by Ascending</a>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Crime Code </th>
                    <th>Code Desciption</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "Project3";

                //Database connection
                $conn = mysqli_connect($servname, $username, $password, $dbname);
                if(!$conn){
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT * FROM Crime_Codes ORDER BY Crime_Code";
                $result = $conn->query($sql);
                
                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                while ($row = $result -> fetch_assoc()){
                    echo "<tr>
                            <td>{$row['Crime_Code']}</td>
                            <td>{$row['Code_description']}</td>
                           
                            <td>
                                <a class='btn btn-primary btn-sm' href='./Crime_Code_update.php?id=" . $row['Crime_Code'] . "'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='./Crime_Code_delete.php?id=" . $row['Crime_Code'] . "'>Delete</a>
                            </td>
                          </tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>    
    </div>
      </div>
    </div>
    <div class="n_footer">(C) 2023 Golden EightPM Corp. v1.0.0</div>
  </body>
</html>
    
    