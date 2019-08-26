
    <?php

      $qr = new Endroid\QrCode\QrCode();

      $pin=$confirm->pin;
      // $qr->setText('http://localhost:8000/absensi/'.$pin);
        $qr->setText('http://hmti.dinus.ac.id/admin/hadir/'.$pin);
      $qr->setSize(200);
      $qr->setPadding(10);
      $qr->render();
     ?>
