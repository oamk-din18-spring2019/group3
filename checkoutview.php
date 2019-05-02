<h2><?= $title ?></h2>
<html>

<?php
if(empty($_GET['cardname']) || empty($_GET['cardnumber']) || empty($_GET['expmonth']) || empty($_GET['expyear']) || empty($_GET['cvv']))
    echo 'Please fill in all the empty fields';
else
{
    $this->load->helper('url');
    redirect('summary/'.$city_from.'/'.$city_to.'/'.$passengers.'/'.$time.'/', 'refresh');
}
?>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form>


          <div class="col-50">
            <h3>Payment</h3>

            <label for="cname">Name on Card</label> <br>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe"> <br> <br>
            <label for="ccnum">Credit card number</label> <br>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"> <br> <br>
            <label for="expmonth">Exp Month</label> <br>
            <input type="text" id="expmonth" name="expmonth" placeholder="January"> <br> <br>

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label> <br>
                <input type="text" id="expyear" name="expyear" placeholder="2019"> <br> <br>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label> <br>
                <input type="text" id="cvv" name="cvv" placeholder="123"> <br> <br>
              </div>
            </div>
          </div>

        </div>

        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div>

</html>