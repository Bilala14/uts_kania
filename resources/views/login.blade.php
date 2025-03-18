
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <title>Document</title>
</head>
<body>
  <form>
    <div class="container">
      <div class="row mt-5">
          <div class="col-5 m-auto">
           
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Masukkan Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Masukkan Kata Sandi</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>


</body>
</html>