<h1><a href="{BASE_URL}home">HOME</a></h1>
<div class="container">
    <form action="{BASE_URL}verify" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1>{$titulo}</h1>
        <div class="form-group">
            <label>Usuario (email)</label>
            <input type="email" name="username" class="form-control" placeholder="Ingrese email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <h3>{$error}</h3>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>
