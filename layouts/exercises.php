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
          <?php {
              $number = rand(100,200);
                if ($number>"150") {
                  echo "Juhuslik number ".$number." on suurem kui 150.";
                }
                 if ($number<"150") {
                  echo "Juhuslik number ".$number." on väiksem kui 150.";
                }
            }
          ?>

        <!--  Sisesta siia kood -->

        <h2>Juhuslik pilt</h2>
        <!--  Sisesta siia kood -->

            <img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/<?php echo rand(1, 12); ?>.jpg"/>

          <h2>Kõikide piltide väljastamine</h2>
        <!--  Sisesta siia kood -->
          <?php
              $img = 1;
                while($img <= 12):
                    echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.$img.'.jpg"/>';
                    $img++;
                endwhile;
          ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
