<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>info science</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <h2>Import & Export file</h2>
    </div>
    <form class="row g-3" action="{{route('import')}}" method="post">
        @csrf
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">choose file</label>
          <input type="file" class="form-control" name="file" id="inputEmail4">
        </div>
   
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Import</button>
          <a class="btn btn-dark" href="{{route('export')}}" role="button">export</a>
        </div>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>