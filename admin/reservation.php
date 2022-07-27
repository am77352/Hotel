<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>فندق إب السياحي</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            حجز <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            معلومات شخصية

                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>عنوان*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Dr.">الدكتور</option>
                                                <option value="Miss.">انسة.</option>
                                                <option value="Mr.">سيد.</option>
                                                <option value="Mrs.">سيدة.</option>
												<option value="Prof.">بروفيسور.</option>
												
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>الاسم الاول</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>الكنية</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>البريد الإلكتروني</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>الجنسية *</label>
                                            <label class="radio-inline">
                        <input type="radio" name="nation"  value="Sri Lankan" checked="">يمني
                                            </label>
                                            <label class="radio-inline">
                           <input type="radio" name="nation"  value="Non Sri Lankan ">غير يمني 
                                            </label>
                         
                                </div>
								<?php

								$countries = array( "السعودية" , "قطر"  );

								?>
								<div class="form-group">
                                            <label>بلد جواز السفر *</label>
                                            <select name="country" class="form-control" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>رقم الهاتف </label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           معلومات الحجز

                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>نوع الغرفة *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">الغرفة العلوية</option>
                                                <option value="Deluxe Room">غرفة ديلوكس</option>
												<option value="Guest House">غرفة الضيف</option>
												<option value="Single Room">غرفة مفردة</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>نوع الفراش</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">مفردة </option>
                                                <option value="Double">مزدوجة</option>
												<option value="Triple">ثلاثية</option>
                                                <option value="Quad">رباعية</option>
												<option value="None">لا شيء</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>عدد الغرف *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                              <!--  <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> -->
                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>خطة الوجبة</label>
                                            <select name="meal" class="form-control"required>
												<option value selected ></option>
                                                <option value="Room only"> غرفة فقط</option>
                                                <option value="Breakfast">وجبةافطار</option>
												<option value="Half Board">نصف إقامة</option>
												<option value="Full Board">كامل</option>
												
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>تحقق في</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>الدفع</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                     <h4>التأكد من أنك إنسان</h4>
                        <p>
                        اكتب أدناه هذا الرمز 

 <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>
                        أدخل الرمز العشوائي             
                       <br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="الرمز غير صحيح"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('المستخدم موجود بالفعل')</script>";
										
									}

									else
									{
				$new ="غير مطابقة";
	$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) 	VALUES('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
                    echo "<script type='text/javascript'> 
					alert('تم إرسال طلب الحجز الخاص بك')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> 
											alert('خطأ في إضافة المستخدم في قاعدة البيانات')</script>";
											
										}
									}

							$msg="الكود الخاص بك صحيح";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
         	<div class="copy">
		        <p >  2020  فندق إب السياحي  جميع الحقوق محفوظة © | تصميم <a href="index.php"> عامر الشوبه </a>  </p>
		    </div>
<!--/footer -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
  
</body>
</html>
