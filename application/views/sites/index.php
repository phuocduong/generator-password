<form class="genarator">
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal"><?=$title?></h1>
    </div>
    <div class="row">
        <div class="col-4 mfa">
            <img class="img-fluid img-thumbnail  mx-auto d-block" src="<?=$qrMFA?>" alt="">
            <div class="form-label-group">
                <input type="number"  class="form-control" placeholder="MFA Code" required autofocus>
                <label >MFA Code</label>
            </div>
            <div class="form-label-group">
                <input type="text" class="form-control" placeholder="Domain" required>
                <label >Enter domain </label>
            </div>
            <div class="form-label-group">
                <input type="text" class="form-control" placeholder="SECRET" required>
                <label >Enter Secret </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">GET PASSWORD</button>
        </div>
        <div class="col-8">
            

        </div>
    </div>
   <hr>
   
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
</form>

<style>
    .genarator .mfa img{
        margin-bottom:10px;
    }
</style>