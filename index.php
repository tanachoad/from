<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบกรอกข้อมูล</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    
    <form align="body" action="#" method="post" name="add" class="form-horizontal container" id="add">
        <h1 align="center">แบบฟอร์มกรอกข้อมูลส่วนตัว</h1>
        </p>
    <div class="input-group mb-3">
        <div class="input-group-prepend mb3">
            <label class="input-group-text" for="inputGroupSelect01"> คำนำหน้า </label>
        </div>
        <select class="form-select form-control" id="inputGroupSelect01" required>
                <option selected>-เลือกข้อมูล-</option>
                <option value="1">นาย</option>
                <option value="2">นาง</option>
                <option value="3">นางสาว</option>
        </select>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend mb-3">
            <label class="input-group-text" for="inputGroupSelect02">เพศ</label>
        </div>
        <select class="form-select form-control" id="inputGroupSelect02" required>
            <option selected>-เลือกข้อมูล-</option>
            <option value="1">ชาย</option>
            <option value="2">หญิง</option>
            <option value="3">ไม่ระบุ</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="fname" class="form-label col-sm-2"> ชื่อ : </label>
        <input type="text" name="" required class="form-control" placeholder="ภาษาไทยหรืออังกฤษ">
    </div>
    <div class="form-group mb-3">
        <label for="fname" class="form-label col-sm-2"> นามสกุล : </label>
        <input type="text" name="" required class="form-control" placeholder="ภาษาไทยหรืออังกฤษ">
    </div>
    <div class="form-group mb-3">
        <label for="data" class="form-label col-sm-2"> วันเดือนปีเกิด : </label>
        <input type="date" name="" required class="form-date form-control">  
    </div>  
    <div class="form-group mb-3">                    
        <label for="numderf" class="form-label col-sm-2"> เบอร์โทร : </label>                    
        <input type="tel" name="" required class="form-control" placeholder="เช่น 091 999 9999">                    
    </div>                              
    <div class="form-group">                       
    <label for="email" class="form-label col-sm-2"> อีเมล : </label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend mb3">
            <label class="input-group-text" for="inputGroupSelect01"> ศาสนา </label>
        </div>
        <select class="form-select form-control" id="inputGroupSelect03" required>
            <option selected>-เลือกข้อมูล-</option>
            <option value="1">พุทธ</option>
            <option value="2">คริสต์ </option>
            <option value="3">อิสลาม </option>
            <option value="4">พราหมณ์ฮินดู</option>
        </select>
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> บ้านเลขที่ : </label>
        <input type="text" name="" required class="form-control" placeholder="123/45">
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> หมู่บ้าน : </label>
        <input type="text" name="" required class="form-control" placeholder="เช่น หมู่ที่ 3">
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> ถนน : </label>
        <input type="text" name="" required class="form-control" placeholder="เช่น ถ.ราชดำเนิน">
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> ตำบล/แขวง : </label>
        <input type="text" name="" required class="form-control" placeholder="เช่น ต.ในเมือง">
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> อำเภอ/เขต : </label>
        <input type="text" name="" required class="form-control" placeholder="เช่น อ.เมือง">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend mb3">
            <label class="input-group-text" for="inputGroupSelect01"> จังหวัด </label>
        </div>
        <select class="custom-select" id="inputGroupSelect04" required>
            <option selected>-เลือกข้อมูล-</option>
            <option value="1">นครศรีธรรมราช</option>
            <option value="2"> ตรัง </option>
            <option value="3">พัทลุง</option>
            <option value="4"> พังงา</option>
            <option value="5"> ภูเก็ต</option>
        </select>
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> รหัสไปรษณีย์ : </label>
        <input type="text" name="" required class="form-control" placeholder="18203">
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> โทรศัพท์บ้าน : </label>
        <input type="text" name="" required class="form-control" placeholder="0256498731">
    </div>
    <div class="form-group">
        <label form="homenumber" class="form-label col-sm-2"> โทรศัพท์มือถือ: </label>
        <input type="text" name="" required class="form-control" placeholder="0623254987">
    </div>
    <div class="form-group">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">ตกลง</button>
        </div>
    </div>
    </form>
</body>
</html>
