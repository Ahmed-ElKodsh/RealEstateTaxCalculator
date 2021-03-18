<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <style type="text/css">
        #second, #notify, #result {
            display: none;
        }

        #first .form-group {
            padding-top: 30px;
            padding-bottom: 30px;
            display: flex;
            justify-content: space-around;
            width: 100%;
        }

        #first .form-group a {
            font-size: 30px;
            font-weight: bold;
            width: 200px;
        }

        .required:after {
            content: " *";
            color: red;
        }

    </style>
    <title>حساب الضريبة العقارية</title>
</head>
<body class="bg-dark">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 bg-light p-4 rounded mt-5">
            <!-- Progress Bar -->
            <h5 class="text-center text-light bg-success mb-2 p-2 rounded lead" id="notify">Hello World!</h5>
            <div class="progress" style="height: 40px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;"
                     id="progressBar">
                    <b class="lead" id="progressText">الخطوة الأولى</b>
                </div>
            </div>

            <form action="index.php" method="POST" id="form-data">
                <!-- First Form -->
                <div id="first">
                    <div class="form-group">
                        <a href="#" class="btn btn-info" id="consent">
                            <i class="far fa-handshake"></i><br>
                            رضائى
                        </a>
                        <a href="#" class="btn btn-info" id="judge">
                            <i class="fas fa-balance-scale"></i><br>
                            قضائى
                        </a>
                    </div>
                    <div class="form-group">
                        <a href="#" class="btn btn-primary" id="next-1" style="width: 150px;">التالى</a>
                    </div>
                </div>
                <!-- Second Form -->
                <div id="second">
                    <h4 class="text-center bg-secondary p-1 rounded text-light"
                        style="margin-bottom: 30px; margin-top: 20px">من فضلك
                        املأ
                        البيانات التالية</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6 form-inline">
                            <input type="number" class="form-control" id="unitPrice" name="unitPrice"
                                   style="width: 150px; margin-right: 10px">
                            <label for="unitPrice" class="required">سعر الوحدة</label>
                        </div>
                        <div class="form-group col-md-6 form-inline" style="display: flex; justify-content: flex-end;">
                            <select id="sellerInput" class="form-control" name="UnitType" style="margin-right: 10px">
                                <option selected id="insideTown">عقار داخل المدينة</option>
                                <option id="insideVillage">عقار فى قرية</option>
                                <option id="greenLand">أرض زراعية</option>
                            </select>
                            <label for="UnitType" class="required">نوع الوحدة</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4 form-inline"
                             style="display: flex; justify-content: flex-end; padding-right: 15px;">
                            <select id="sellerType" class="form-control" name="sellerType"
                                    style="width: 80px; margin-right: 10px">
                                <option selected>فرد</option>
                                <option>شركة</option>
                            </select>
                            <label for="sellerType" class="required">نوع البائع</label>
                        </div>
                        <div class="form-group col-md-8 form-inline" style="display: flex; justify-content: flex-end;">
                            <select id="unitMeasure" class="form-control" name="unitMeasure"
                                    style="width: 80px; margin-right: 5px">
                                <option selected id="meter">متر</option>
                                <option id="acre">فدان</option>
                            </select>
                            <input type="number" class="form-control" id="unitSize" name="unitSize"
                                   style="width: 100px; margin-right: 10px">
                            <label for="unitSize" class="required">مساحة الوحدة</label>
                        </div>
                    </div>

                    <div class="form">
                        <div class="form-group form-inline" style="display: flex; justify-content: flex-end;">
                            <input type="number" class="form-control" id="monthPapers" name="monthPapers"
                                   style="width: 150px; margin-right: 10px">
                            <label for="monthPapers" class="required">عدد أوراق الشهر (ورق أخضر)</label>
                        </div>

                    </div>
                    <div class="form-group" style="margin-top: 30px;">
                        <a href="#" class="btn btn-primary" id="prev-2">السابق</a>
                        <a href="#" class="btn btn-primary" id="next-2">ادخال</a>
                    </div>
                </div>

            </form>

            <div id="result">
                <p></p>
                <h4 class="text-center bg-success p-1 rounded text-light"
                    style="margin-bottom: 30px; margin-top: 20px">النتيجة الاجمالية</h4>
                <div class="form-group">
                    <a href="#" class="btn btn-primary" id="prev-3">السابق</a>
                </div>
            </div>
        </div>

    </div>

    <?php
        $
    ?>
</div>


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
<!--jQuery code-->
<script type="text/javascript">
    $(document).ready(function () {
        $("#next-1").click(function () {
            $("#second").show();
            $("#first").hide();
            $("#progressBar").css("width", "60%");
            $("progressText").html("الخطوة الثانية");
        });

        $("#next-2").click(function () {
            $("#result").show();
            $("#second").hide();
            $("#progressBar").css("width", "100%");
            $("progressText").html("النتيجة");
        });

        $("#prev-2").click(function () {
            $("#second").hide();
            $("#first").show();
            $("#progressBar").css("width", "30%");
            $("progressText").html("الخطوة الأولى");
        });

        $("#prev-3").click(function () {
            $("#second").show();
            $("#result").hide();
            $("#progressBar").css("width", "60%");
            $("progressText").html("الخطوة الثانية");
        });
    });
</script>

</body>
</html>