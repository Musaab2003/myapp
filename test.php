<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظام ادارة اعضاء هيئة التدريس</title>
    <!--bootstrap for css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Modals -->
<!-- insert modal -->
<div class="modal fade show" id="completeModal" tabindex="-1"  aria-modal="true" role="dialog" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="text-right my-3 mx-3 ">
        <h5 class="modal-title" id="exampleModalLabel">اضافة عضو هيئة تدريس</h5>
        
      </div>
        <div class="modal-body">
            
            <!-- Floating Labels Form -->
            <div class="row g-3">
        
                <div class="col-md-6">
                    <div class="form-floating">
                        <label for="completename"> الاسم الثلاثي</label>
                        <input type="text"  class="form-control" id="completename" placeholder="الاسم الثلاثي">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <label for="completeemail">البريد الجامعي</label>
                        <input type="email" class="form-control" id="completeemail" placeholder="Example@uot.edu.ly">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="completefaculty">الكلية</label><br>
                        <select class="form-control" id="completefaculty" >
                            <option value="كلية تقنية المعلومات">كلية تقنية المعلومات</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="completedepartment">القسم العلمي</label><br>
                        <select class="form-control" id="completedepartment" >
                            <option value="قسم هندسة البرمجيات">قسم هندسة البرمجيات</option>
                            <option value="قسم الشبكات">قسم الشبكات</option>
                            <option value="قسم الحوسبة المتنقلة">قسم الحوسبة المتنقلة</option>
                            <option value="قسم تقنيات الانترنت">قسم تقنيات الانترنت</option>
                            <option value="قسم نظم المعلومات">قسم نظم المعلومات</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="completeedu">المؤهل العلمي</label><br>
                        <select class="form-control" id="completeedu" >
                            <option value="ماجستير">ماجستير</option>
                            <option value="دكتوراه">دكتوراه</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="completedegree">الدرجة العلمية الحالية</label><br>
                        <select class="form-control" id="completedegree" >
                            <option value="استاذ مساعد">استاذ مساعد</option>
                            <option value="استاذ مشارك">استاذ مشارك</option>
                            <option value="استاذ">استاذ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary badge-pill" onclick="adduser()">حفظ</button>
                <button type="button" class="btn btn-outline-primary badge-pill" data-dismiss="modal" >الغاء</button>
        
            </div>
            <!-- End floating Labels Form -->
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 bg-light">
  <div class="row">
    <div class="col-md-12 d-flex justify-content-between">
      <div class="d-flex justify-content-start">
        <button type="button" class="btn btn-primary mr-3 badge-pill my-3" data-toggle="modal" data-target="#completeModal">
        إضافة رئيس قسم      </button>
      </div>
      <h4 class="text-center my-3">
        رؤساء اقسام الكلية
      </h4>
    </div>
    
  </div>
  <div id="displaydatatable"></div>
</div>
<!--update modal-->

<div class="modal fade show" id="updateModal" tabindex="-1"  aria-modal="true" role="dialog" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="text-right my-3 mx-3 ">
        <h5 class="modal-title" id="exampleModalLabel">تعديل عضو هيئة تدريس</h5>
        
      </div>
        <div class="modal-body">
            
            <!-- Floating Labels Form -->
            <div class="row g-3">
        
                <div class="col-md-6">
                    <div class="form-floating">
                        <label for="updatename"> الاسم الثلاثي</label>
                        <input type="text"  class="form-control" id="updatename" placeholder="الاسم الثلاثي">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <label for="updateemail">البريد الجامعي</label>
                        <input type="email" class="form-control" id="updateemail" placeholder="Example@uot.edu.ly">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="updatefaculty">الكلية</label><br>
                        <select class="form-control" id="updatefaculty" >
                            <option value="كلية تقنية المعلومات">كلية تقنية المعلومات</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="updatedepartment">القسم العلمي</label><br>
                        <select class="form-control" id="updatedepartment" >
                            <option value="قسم هندسة البرمجيات">قسم هندسة البرمجيات</option>
                            <option value="قسم الشبكات">قسم الشبكات</option>
                            <option value="قسم الحوسبة المتنقلة">قسم الحوسبة المتنقلة</option>
                            <option value="قسم تقنيات الانترنت">قسم تقنيات الانترنت</option>
                            <option value="قسم نظم المعلومات">قسم نظم المعلومات</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="updateedu">المؤهل العلمي</label><br>
                        <select class="form-control" id="updateedu" >
                            <option value="ماجستير">ماجستير</option>
                            <option value="دكتوراه">دكتوراه</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <label for="updatedegree">الدرجة العلمية الحالية</label><br>
                        <select class="form-control" id="updatedegree" >
                            <option value="استاذ مساعد">استاذ مساعد</option>
                            <option value="استاذ مشارك">استاذ مشارك</option>
                            <option value="استاذ">استاذ</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary badge-pill" onclick="update_user()">تعديل</button>
                <button type="button" class="btn btn-outline-primary badge-pill" data-dismiss="modal" >الغاء</button>
                <input type="hidden" id="hiddendata">
            </div>
            <!-- End floating Labels Form -->
                </div>
            </div>
        </div>
    </div>
   <!--<div class="container my-5 bg-light">
  <div class="row">
    <div class="col-md-12 d-flex justify-content-between">
      <div class="d-flex justify-content-start">
        <button type="button" class="btn btn-primary mr-3 badge-pill my-3" data-toggle="modal" data-target="#completeModal">
          إضافة عضو هيئة تدريس
        </button>
      </div>
      <h4 class="text-center my-3">
        أعضاء هيئة التدريس بالقسم العلمي
      </h4>
    </div>
    
  </div>
  <div id="displaydatatable"></div>
</div>-->

<!--bootstrap for JS-->
<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.3/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.3/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script>
   //display users from the database
    $(document).ready(function(){displaydata();});
    function displaydata(){
        var displaydata="true";
        $.ajax({
            url:"write.php",
            type:'post',
            data:{
                displaysend:displaydata
            },
            success:function(data,status){
                $('#displaydatatable').html(data);
            }
        });

    }
    //add users to the database
    function adduser(){
        var nameAdder=$('#completename').val();
        var emailAdder=$('#completeemail').val();
        var colAdder=$('#completefaculty').val();
        var depAdder=$('#completedepartment').val();
        var cerAdder=$('#completeedu').val();
        $.ajax({
            url:"insert.php",
            type:'post',
            data:{
                name:nameAdder,
                email:emailAdder,
                collage:colAdder,
                depatment:depAdder,
                certificate:cerAdder,
            },
            success:function(data,status){
                // للتأكد ان البيانات قد تم عرضها بشكل صحيح 
              console.log(status);
              $('#completeModal').modal('hide');
              displaydata();
            }

        });
    }

    //delete records from the database
    function deleteuser(deleteid){
        $.ajax({
            url:"delete.php",
            type:'post',
            data:{
                deletesend:deleteid
            },
            success:function(data,status){
                displaydata();
            }
        });

    }
    //update record from the database
    function updateuser(updateid){
        $('#hiddendata').val(updateid)
        
        $.post("update.php",{updateid:updateid},function(data,status){
            var userid=JSON.parse(data);
            $('#updatename').val(userid.name);
            $('#updateemail').val(userid.email);
            $('#updatefaculty').val(userid.uni);
            $('#updatedepartment').val(userid.col);
            $('#updateedu').val(userid.num);
        });

        $('#updateModal').modal("show");

    }

    //update profs
    function update_user(){
        var updatename=$('#updatename').val();
        var updateemail=$('#updateemail').val();
        var updatefaculty=$('#updatefaculty').val();
        var updatedepartment=$('#updatedepartment').val();
        var updateedu=$('#updateedu').val();
        var updatedegree=$('#updatedegree').val();
        var hiddendata=$('#hiddendata').val();

        $.post("update.php",{
            updatename:updatename,
            updateemail:updateemail,
            updatefaculty:updatefaculty,
            updatedepartment:updatedepartment,
            updateedu:updateedu,
            updatedegree:updatedegree,
            hiddendata:hiddendata
        }, function(data,status){
            $('#updateModal').modal('hide');
            displaydata();
        });
        
    }

</script>
</body>
</html>