<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Daftar Buku</h1>
          <table class="table table-striped">

              <thead>
                <tbody>
                <tr>
                  <?php foreach($dataModel->getKolomTabel() as $kolom): ?>
                    <th scope="col"><?php echo $kolom;?></th>
                  <?php endforeach?>
                </tr>
                <tbody>
              </thead>
              <tbody>
                <?php $no = 0;?>
                <?php foreach($dataModel->getData() as $buku):?>
                  <tr>
                      <td><?php echo ++$no; ?></td>
                      <td><?php echo $buku->getJudul(); ?></td>
                      <td><?php echo $buku->getPengarang(); ?></td>
                      <td><?php echo $buku->getPenerbit(); ?></td>
                      <td><?php echo $buku->getTahun(); ?></td>
                      
                  </tr>
                  <?php endforeach;?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
  </body>
</html>