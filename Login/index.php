<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NYUPD</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../Styles/styles.css" />
  </head>
  <body
    style="
      background-image: url(https://meet.nyu.edu/wp-content/uploads/2021/09/Header_Image.jpg);
    "
  >
    <div class="textBoxContainer shadow">
      <img src="../Assets/NYUPD.png" />
      <h1>Login or Register</h1>
      <form action="authenticate.php" method="post">
        <input
          type="text"
          id="uname"
          name="uname"
          placeholder="Username"
          required
        />
        <br />
        <input
          type="password"
          id="pwd "
          name="pwd"
          placeholder="Password"
          required
        />
        <br />
        <input type="submit" value="Login" class="btn" />
      </form>
      <form action="../Registration/index.html" method="post">
        <input type="submit" value="Register" class="btn" />
      </form>
      <br />
    </div>

    <footer>(C) 2023 Golden EightPM Corp. All Right Reserved. v1.0.0</footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
