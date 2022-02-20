<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Convert HTML to PDF using FPDF</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <h5 class="text-center mt-5 mb-5">Generator PDF</h5>
                <form action="makepdf.php" method="post">
                <div class="mb-3">
                <label for="nume" class="form-label">Nume</label>
                <input type="text" class="form-control" id="nume" name="nume" required>
                </div>
                <div class="mb-3">
                <label for="tel" class="form-label">Telefon</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                <label for="nume_minor" class="form-label">Nume minor</label>
                <input type="text" class="form-control" id="nume_minor" name="nume_minor" required>
                </div>
                <div class="mb-3">
                <label for="tel_minor" class="form-label">Telefon minor</label>
                <input type="text" class="form-control" id="tel_minor" name="tel_minor" required>
                </div>
                <div class="mb-3">
                <label for="email_minor" class="form-label">Email minor</label>
                <input type="text" class="form-control" id="email_minor" name="email_minor" required>
                </div>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Trimite</button>
                </div>
                </form>
            </div>
            
        </div>        
    </div>

  </body>
</html>