<p align="center"><img src="https://raw.githubusercontent.com/doctor500/TPM-2019/master/public/assets/img/kopidalar_text_logo.png" width="400"></p>


## Kopi Dalar - TPM Project Case Study

This repo is made for BNPM TPM learning materials, the goal in this case is to create a CRUD system using Laravel 6.x for various products sold by Kopi Dalar. This project will give a reference about:

- Creating Model & Migration
- Creating blade templates and structuring
- Creating CRUD function (except displaying information on every single product)
- Input validation with Error return

## Special Thanks

In this document, I would like to thank [Agustinus Theodorus](https://github.com/agustinustheo) for helping to contribute to the Frontend of this project.


## Frontend Snippet

This piece of code is pure HTML that can be used as a reference to this frontend

- Main Structure
```HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="your_url/style.css">
    <title>Kopi Dalar</title>
</head>
<body>
    <header>
        ...
    </header>

    <main>
        ...
    </main>

    <footer class="footer-custom text-center bg-light">
        ...
    </footer>
</body>
</html>
```

- Header
```HTML
<nav class="navbar-custom bg-light d-flex justify-content-between">
	<img src="your_url/kopidalar_text_logo.png">
	<div class="d-flex navbar-item-container">
		<a class="navbar-item text-brown" href="your_url_to_home">Home</a>
		<a class="navbar-item text-brown" href="your_url_to_product_list">Coffee</a>
	</div>
</nav>
```

- Footer
```HTML
<span class="text-brown">©️&nbsp;2019&nbsp;Copyright&nbsp;Kopi Dalar</span>
```

- Product List
```HTML
<div class="container">
    <div class="d-flex align-items-center justify-content-between mt-4 pl-3 pr-3">
        <h5 class="d-block font-weight-bold text-brown mt-2">Coffee</h5>
        <a class="btn btn-warning text-white d-block" href="your_url_to_add_form">Add Coffee</a>
    </div>
    <hr>
    <div>
    
            <div class="d-flex align-items-center justify-content-between text-brown pl-3 pr-3 mt-2 mb-2">
                <div class="d-flex align-items-center">
                    <h4 class="font-weight-bold pl-3">Cafe Latte</h4>
                </div>
                <div class="d-flex align-items-center">
                    <div class="font-weight-bold mr-3">
                        Rp. 30000
                    </div>
                    <div>
                        <a class="btn btn-success text-white d-block m-1" href="your_url_to_edit_form">Edit Coffee</a>
                    	<a class="btn btn-danger text-white d-block m-1">Delete Coffee</a>
                    </div>
                </div>
            </div>
           
    </div>
</div>
```

- Add Product Form
```HTML
<div class="container col-md-6">
    <div class="d-flex align-items-center justify-content-between mt-4 pl-3 pr-3">
        <h4 class="d-block font-weight-bold text-brown mt-2">Add Coffee</h4>
    </div>
    <hr>
    <form action="your_url" method="POST" class="form-group"> 
        <div class="input-group p-2">
        <input type="text" class="form-control" placeholder="Product Name" name="product_name">
        </div>
        <div class="input-group p-2">
            <input type="text" class="form-control" placeholder="Price" name="price">
        </div>
        <div class="p-2">
            <button class="btn btn-warning text-white d-block" type="submit">Add Coffee</button>
        </div>
    </form>
</div>
```

## License

Read `LICENSE` file for detailed information