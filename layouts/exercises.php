<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->

          <?php {
          $random_number = mt_rand(100,200);
              if ($random_number>"150") {
                  echo "Juhuslik number ".$random_number." on suurem kui 150.";
              }
              if ($random_number<"150") {
                  echo "Juhuslik number ".$random_number." on väiksem kui 150.";
              }
          }
          ?>

        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->

        <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
