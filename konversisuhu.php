<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>tugas</title>
  </head>
  <body>
    <h3>Konversi Suhu</h3>
    <form method="POST" action="calcu.php">
    Konversi :<br />
      <div class="col">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" value="C2F"/>
              <label class="form-check-label" for="inlineRadio1">Celcius ke Farenhaite</label>
            </div>
          </div>  
        </div>
        <div class="col">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" value="C2F" />
            <label class="form-check-label" for="inlineRadio2">Farenhit ke Celcius</label>
          </div>
        </div>
      </div><br>

      <label>Suhu</label>
      <input type="text" name="nilai" value=""/><br>
      <button type="submit" name="kirim" value="konversi">Konversi</button>
    </form>
  </body>
</html>
