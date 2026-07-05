<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" />
</head>
<body>
    <form action="{{route('product.store')}}" method="POST">

@csrf
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Name:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
        
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Price</label>
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="price">
     
    </div>

    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Address:</label>
        <textarea name="address" id="email" class="form-control"></textarea>
        
    </div>
    <button>Add Product</button>
    @include('notification1')

</form>
</body>
</html>
