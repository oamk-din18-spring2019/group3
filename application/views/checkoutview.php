<html>
	
	<head>
  <?php 
if (isset($this->session->userdata['logged_in'])) {

$Email = ($this->session->userdata['logged_in']['Email']);
} else {
header("location: login");
}

if (isset($this->session->userdata['message'])){
    $message = ($this->session->userdata['message']);
}
$result = $this->user_database->get_user_info($Email);
setcookie("userid",$result[0]['UID'],time()+3600);
?>
		<title>Checkout </title>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
		<style type="text/css">
			.pic{ background-image: url("https://www.infodynamic.net/img/slides/slide02.jpg");  background-position: center; background-repeat: no-repeat;  height: 100%   }.paywall{height:100%;position:relative;min-width:100%}.paywall__auth{width:100%;height:100%;display:flex;align-items:flex-start;justify-content:center;padding:0 30px 30px}.paywall__auth__row.login{width:804px;min-height:480px;display:flex;flex-direction:row;justify-content:center}.paywall__auth__row{width:804px;min-height:600px;display:flex;flex-direction:row;justify-content:center}.paywall__auth__col_left{width:100%}.paywall__auth__col_right{flex:0 0 300px;max-width:300px}.paywall__auth__image-wrap.login{margin-left:0;margin-bottom:0;margin-right:15px;margin-top: 73px}.paywall__auth__image-wrap{margin-left:-90px;margin-bottom:45px;margin-right:20px;margin-top: 125px}.paywall__auth__image{display:block;max-width:100%}.paywall__auth__main-text{margin-left:15px;margin-bottom:15px;max-width:381px;font-size:42px;line-height:1;letter-spacing:-.5px;font-weight:700}.paywall__auth__main-title{display:inline}.paywall__auth__main-title_green{color:#1b8}.paywall__auth__body{max-width:440px;padding-right:40px;padding-bottom:40px;font-size:18px;line-height:22px;margin-left:15px}.paywall__auth__body a{color:#1b8}.paywall__auth__body a:hover{color:#222}.paywall__auth__body li,.paywall__auth__body ul{list-style:disc;margin-bottom:14px}.paywall__auth__info{font-size:14px;line-height:18px;color:#999}.paywall__auth__info a{color:#999}.paywall__auth__block{padding-top:60px}.paywall__auth__title{font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif;font-size:24px;line-height:26px;letter-spacing:-.29px;margin-bottom:25px;width: 700px}.paywall__auth__warning{font-family:GraphikCy,'Helvetica CY',Arial,sans-serif;font-size:14px;line-height:18px;width:330px;background-color:#ffecec;padding:17px 20px;border-radius:3px;margin-bottom:25px}.paywall__auth__warning__title{font-family:GraphikCy-Medium,'Helvetica CY',Arial,sans-serif}.paywall__auth__warning__text{margin-top:10px}.paywall__auth__tabs{border:1px solid #ddd;border-radius:10px;display:flex;flex-direction:row;justify-content:space-between;text-align:center;margin-bottom:30px}.paywall__auth__tabs__item{border-radius: 10px 0 0 10px ;background:#eee ;font-size:18px;padding:13px 0;flex-basis:50%;font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif;cursor:pointer}.paywall__auth__tabs__item:first-child{border-right:1px solid #ddd;}.paywall__auth__tabs__item.active{color:white;cursor:default;background:rgb(95,160,164);}.paywall__auth__tabs__item.login{ border-radius: 10px 0 0 10px}.paywall__auth__tabs__item{ border-radius: 0 10px 10px 0}.paywall__auth__tabs__item:hover:not(.active){opacity:.7}.paywall__auth__tab-content{display:none}.paywall__auth__tab-content.active{display:block}.paywall__auth__social{border-radius:3px;display:flex;flex-direction:row;justify-content:space-between;text-align:center;margin-bottom:20px}.paywall__auth__social__link{cursor:pointer;font-size:18px;flex-basis:33.3%;font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif;}.paywall__auth__social__link:last-child{border-right:none}.paywall__auth__social__link_vk{color:#527296;}.paywall__auth__social__link_fb{color:#314591}.paywall__auth__social__link_tw{color:#31adf4}.paywall__auth__social__link_g{color:#d7443b;}.paywall__auth__social__link:hover{opacity:.7}.paywall__auth__form::-webkit-input-placeholder{color:#bbb}.paywall__auth__form::-moz-placeholder{color:#bbb;opacity:1;-moz-opacity:1}.paywall__auth__form:-ms-input-placeholder{color:#bbb}.paywall__auth__form__row{ position:relative ; padding: 7px; border-radius: 25px;}.paywall__auth__form__row_margin{margin-top:15px}.paywall__auth__form__input-wrap{position:relative}.paywall__auth__form__input-wrap_radius{border: 1px solid;position: relative;border-radius:10px 10px 10px 10px}.paywall__auth__form__input{background-color:white;width:100%;line-height:1;border:none;border-radius:10px;outline:0;height:44px;padding:0 15px;font-size:14px}.paywall__auth__form__input::-webkit-input-placeholder{color:#bbb}.paywall__auth__form__input::-moz-placeholder{color:#bbb;opacity:1;-moz-opacity:1}.paywall__auth__form__input:-ms-input-placeholder{color:#bbb}.paywall__auth__form__input:disabled{background:#fff}.paywall__auth__form__submit-wrap.signup{margin-bottom:100px}.paywall__auth__form__submit-wrap{margin-bottom:7px; border-radius: 25px ;width:110%;}.paywall__auth__form__submit.signup {border: 0;outline:0;cursor:pointer;display:block;width:100%;border-radius:10px 10px 10px 10px;padding:13px 0;font-size:16px;line-height:1;background:rgb(95,160,164);color:#fff;font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif;}.paywall__auth__form__submit{margin-bottom:10%;border:none;outline:0;cursor:pointer;display:block;width:100%;border-radius:10px 10px 10px 10px;padding:13px 0;font-size:16px;line-height:1;background:rgb(95,160,164);color:#fff;font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif;}.paywall__auth__form__submit::-moz-focus-inner{border:0}.paywall__auth__form__submit:hover{background:rgb(95,160,164)}.paywall__auth__form__checkbox{position:relative;margin-top:13px}.paywall__auth__form__checkbox__label{min-height:22px;font-size:14px;line-height:16px;color:#bbb}.paywall__auth__form__checkbox__input[type=checkbox]{position:absolute;left:-9999px;opacity:0}.paywall__auth__form__checkbox__input[type=checkbox]~.paywall__auth__form__checkbox__label{display:inline-block;vertical-align:top;margin:0;padding:2px 0 0 29px;background:url(//s.rbk.ru/v1_paywall_static/common/common-p.1.1.14/styles/images/checkbox.svg) no-repeat 0 0;background-size:19px 19px;cursor:pointer}.paywall__auth__form__checkbox__input[type=checkbox]:checked~.paywall__auth__form__checkbox__label{background:url(//s.rbk.ru/v1_paywall_static/common/common-p.1.1.14/styles/images/checkbox-active.svg) no-repeat 0 0;background-size:19px 19px}.paywall__auth__form__checkbox__link{color:#bbb;border-bottom:1px solid #ddd}.paywall__auth__form__checkbox__link:hover{border-color:transparent}.paywall__auth__form__alert{display:none;color:#f44;font-size:14px;line-height:16px;margin-top:7px;margin-bottom:12px}.paywall__auth__form__recaptcha{margin-top:20px}.paywall__auth__adv{text-align:center;border:1px solid #ddd;border-bottom:none;border-radius:3px;overflow:hidden}.paywall__auth__adv__inner{padding:21px 30px 0}.paywall__auth__adv__title{margin-bottom:20px;font-size:34px;line-height:1;font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif}.paywall__auth__adv__text{font-size:18px;line-height:22px;letter-spacing:-.3px;margin-bottom:25px}.paywall__auth__adv__price{border-top:1px solid #ddd;font-size:80px;line-height:1;font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif;letter-spacing:-.95px;padding:38px 0}.paywall__auth__adv__button{display:block;cursor:pointer;background:#1b8;color:#fff;font-size:24px;line-height:1;padding:33px 0;font-family:GraphikCy-Semibold,'Helvetica CY',Arial,sans-serif}.paywall__auth__link{color:#1b8}.paywall__auth__link:hover{color:#222}.paywall__auth__main.disabled{cursor:default;pointer-events:none}.disabled .paywall__auth{cursor:default;pointer-events:none}.disabled .paywall__auth__tabs__item{color:#bbb}.disabled .paywall__auth__tabs__item:hover:not(.active){opacity:1}.disabled .paywall__auth__form__recaptcha,.disabled .paywall__auth__social__link{opacity:.65}.disabled .paywall__auth__social__link:hover{opacity:1}.disabled .paywall__auth__form__submit{background:#b7eadb;cursor:default}.disabled .paywall__auth__form__submit:hover{background:#b7eadb}.paywall__auth__form-wrap{width:110%;background-color:#F5F5F5; padding: 7px; border-radius: 25px}
                input[type=time]::-webkit-inner-spin-button, 
input[type=time]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; }
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; }
        </style>
<?php
if(empty($_GET['cardname']) || empty($_GET['cardnumber']) || empty($_GET['expmonth']) || empty($_GET['expyear']) || empty($_GET['cvv']))
    ;
else
{
    $this->load->helper('url');
    redirect('summary/'.$city_from.'/'.$city_to.'/'.$passengers.'/'.$time.'/'.$arriv.'/', 'refresh');
}
?>

	</head>
<body class="pic">
	
	<div class="paywall g-paywall-layout">
	    <div class="paywall__auth">
	        <div class="paywall__auth__row login">
	            <div class="paywall__auth__col paywall__auth__col_right">
	                <div class="paywall__auth__block">
	                    <div class="paywall__auth__main js-paywall-auth-main">
	                        <div class="paywall__auth__title"><h2>Payment Page</h2></div>
	                            <div class="paywall__auth__tab-content active js-paywall-tab-content">
	                            <div class="paywall__auth__form-wrap">
                              <form>
                                <div class="paywall__auth__form__row" for="cname"><h5>Name on Card</h5>
	                                        <div class="paywall__auth__form__input-wrap paywall__auth__form__input-wrap_radius">
                                          <input  class="paywall__auth__form__input js-paywall-auth-input" type="text" id="cname" name="cardname" placeholder="John Smith">
                                            </div>
                                    </div>
                                    <div class="paywall__auth__form__row" for="ccnum"><h5>Credit Card Number</h5>
	                                        <div class="paywall__auth__form__input-wrap paywall__auth__form__input-wrap_radius">
                                          <input class="paywall__auth__form__input js-paywall-auth-input" type="text" id="ccnum" name="cardnumber" placeholder="xxxx-xxxx-xxxx-xxxx">
                                            </div>
                                    </div>
                                    <div class="paywall__auth__form__row" for="expmonth"><h5>Expiration Month</h5>
	                                        <div class="paywall__auth__form__input-wrap paywall__auth__form__input-wrap_radius">
                                          <input class="paywall__auth__form__input js-paywall-auth-input" type="text" id="expmonth" name="expmonth" placeholder="January">
                                            </div>
                                    </div>
                                    <div class="paywall__auth__form__row" for="expyear"><h5>Expiration Year</h5>
	                                        <div class="paywall__auth__form__input-wrap paywall__auth__form__input-wrap_radius">
                                          <input class="paywall__auth__form__input js-paywall-auth-input" type="text" id="expyear" name="expyear" placeholder="2019">
                                            </div>
                                    </div>
                                    <div class="paywall__auth__form__row" for="cvv"><h6>CVV</h6>
	                                        <div class="paywall__auth__form__input-wrap paywall__auth__form__input-wrap_radius">
                                          <input class="paywall__auth__form__input js-paywall-auth-input" type="text" id="cvv" name="cvv" placeholder="xxx">
                                            </div>
                                    </div>
                                   
            </div>
                                    <div class="submit_form">
	                                    <div class="paywall__auth__form__submit-wrap"><br>
                                      <input type="submit" value="Proceed to Payment" class="paywall__auth__form__submit">
                                        </div>
                                    </div>
        
</form> 

	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	
</body>
</html>