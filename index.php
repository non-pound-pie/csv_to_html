<!DOCTYPE html>
<html lang="ru">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="csv.js"></script>
    </head>
    <title>CSV</title>
    <body>
        <div class="container">
            <div class="row justify-content-center">
              <div id="feedback-messages" style="text-align: center; margin: 50px;"><?php include "csv.php" ?></div>
              <div class="col-md-6">
                <form action="csv.php" method="post" enctype="multipart/form-data" id="feedback-form">
                  <div class="form-group">
                    <label for="file" style="font-weight: bold;">Загрузить свой CSV-файл (разделитель ",")</label>
                    <input type="file" class="form-control" id="csv_file" name="csv_file" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
              </div>
            </div>
          </div>
      </body>
</html>