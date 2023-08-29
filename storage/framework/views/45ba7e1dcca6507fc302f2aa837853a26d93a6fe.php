<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="<?php echo e(url('assets/img/logo.png')); ?>">

<head>
  <meta charset="utf-8">
  <title>Buku Tamu - BPS Kota Malang</title>
  <link rel="stylesheet" href="<?php echo e(url('/form/css/style.css')); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src=<?php echo e(asset("/pengguna/assets/js/parsley.js")); ?>></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
</head>

<body>
  <form id="myForm" action="<?php echo e(url ('/simpan-bukutamu')); ?>" method="POST" autocomplete="off" name="formInput">
    <?php echo csrf_field(); ?>
    <h1 id="judul" style="text-align: center">BUKU TAMU BPS KOTA MALANG</h1>
    <h2 id="judul" style="text-align: center">Silakan Isi Form Berikut</h2>

<!-- Hubungkan Font Awesome CSS di dalam <head> tag -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div style="text-align:center;">
  <span class="step" id="step-1"><i class="fas fa-check-circle"></i></span>&nbsp;&nbsp;
  <span class="step" id="step-2"><i class="fas fa-check-circle"></i></span>&nbsp;&nbsp;
  <span class="step" id="step-3"><i class="fas fa-check-circle"></i></span>&nbsp;&nbsp;
</div>
<br>
    <div class="tab" id="tab-1">
    <h3 style="text-align: center; font-family: sans-serif;">Informasi Pribadi</h3>

      <div class="input-group">
        <label for="name" style="color:#000000">Nama Lengkap</label>
        <input type="text" name="name" id="name" placeholder="Silakan isi nama anda" maxlength="30"
            value="<?php echo e(old('name')); ?>" data-parsley-minwords="3" data-parsley-maxwords="30"
            data-parsley-pattern="/(^[a-zA-Z][a-zA-Z\s]{0,30}[a-zA-Z]$)/" data-parsley-trigger="keyup" required
            style="font-size: 14px;" />
        
      </div>

      <div class="input-group">
      <label for="name" style="color:#000000">No Handphone</label>
        <input type="text" name="hp" id="hp" class="form-control" placeholder="Silakan isi no handphone anda"
          minlength="8" maxlength="13" value="<?php echo e(old('hp')); ?>" data-parsley-type="integer" data-parsley-trigger="keyup"
          required style="font-size: 14px;" />
        
      </div>

      <div class="form-group mb-3">
        <label class="gender" for="gender" style="color:#000000">Jenis Kelamin</label>
        <select class="custom-select my-1 mr-sm-2" name="gender" id="gender" value=<?php echo e(collect(old('gender'))); ?> required style="font-size: 14px;">
        <option selected="false" disabled="disabled">Silakan Pilih Jenis Kelamin</option>
          <option value="Pria">Pria</option>
          <option value="Wanita">Wanita</option>
        </select>
      </div>

      

      <div class="input-group">
        <label for="email" style="color:#000000">Email</label>
        <input type="text" name="email" id="email" class="form-control" placeholder="Silakan isi email anda"
          maxlength="35" value="<?php echo e(old('email')); ?>" data-parsley-type="email" data-parsley-trigger="keyup"
          data-parsley-error-message="Email anda tidak mengandung '@gmail.com'" required style="font-size: 14px;" />
        
      </div>

      <div class="input-group">
        <label for="address" style="color:#000000">Alamat</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Silakan isi alamat anda"
          maxlength="50" value="<?php echo e(old('address')); ?>" data-parsley-trigger="keyup" required style="font-size: 14px;"/>
      </div>

      <div class="input-group">
        <label for="age" style="color:#000000">Usia</label>
        <input type="text" name="age" id="age" class="form-control" placeholder="Silakan isi umur anda (contoh: 27)"
          maxlength="3" value="<?php echo e(old('age')); ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57"
          data-parsley-type="integer" data-parsley-trigger="keyup" required style="font-size: 14px;" />
        
      </div>

      <div class="index-btn-wrapper">
        <div class="index-btn" onclick="run(1, 2);">Next</div>
      </div>
    </div>


      <div class="tab" id="tab-2">
        <h3 style="text-align: center; font-family: sans-serif;">Riwayat Pendidikan</h3>
  
        <div class="input-group">
          <label for="institute" style="color:#000000">Nama instansi</label>
          <input type="text" name="institute" id="institute" class="form-control"
            placeholder="Silakan isi nama instansi anda" maxlength="35" value="<?php echo e(old('institute')); ?>"
            data-parsley-pattern="/(^[a-zA-Z][a-zA-Z\s]{0,35}[a-zA-Z]$)/" data-parsley-trigger="keyup" style="font-size: 14px;"/>
          
        </div>
  
        <div class="input-group">
          <label for="nipnim" style="color:#000000">NIM/NPM</label>
          <input type="text" name="nipnim" id="nipnim" class="form-control" placeholder="Silakan isi nip/nim anda"
            maxlength="20" value="<?php echo e(old('nipnim')); ?>" onkeypress="return event.charCode >= 48 && event.charCode <=57"
            data-parsley-type="integer" data-parsley-trigger="keyup" required style="font-size: 14px;"/>
          
        </div>
  
        <div class="form-group mb-3">
          <label class="label" for="job" style="color:#000000">Pekerjaan</label>
          <select class="custom-select my-1 mr-sm-2" name="job" id="job" style="font-size: 14px;">
            <option selected="false" disabled="disabled">Silakan Pilih Pekerjaan</option>
            <?php $__currentLoopData = $job; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($p->id); ?>"><?php echo e($p->job_type); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div><br><br>
  
        <div class="form-group mb-3">
          <label class="label" for="education" style="color:#000000">Pendidikan</label>
          <select class="custom-select my-1 mr-sm-2" name="education" id="education" style="font-size: 14px;">
            <option selected="false" disabled="disabled">Silakan Pilih Pendidikan</option>
            <?php $__currentLoopData = $education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($p->id); ?>"><?php echo e($p->education_type); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div><br><br>
  
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(2, 1);" id="btn-previous">Previous</div>
          <div class="index-btn" onclick="run(2, 3);">Next</div>
        </div>
      </div>
  
      <div class="tab" id="tab-3">
        <h3 style="text-align: center; font-family: sans-serif;">Jenis Pelayanan</h3>  
        <div class="input-group">
          <div class="form-group mb-3">
            <label class="label" for="service" style="color:#000000">Keperluan Anda</label>
            <select class="custom-select my-1 mr-sm-2" name="service" id="inlineFormCustomSelectPrefKeperluan" style="font-size: 14px;">
              <option selected="false" disabled="disabled">Silakan Pilih Keperluan Anda</option>
              <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($j->id); ?>"><?php echo e($j->service_type); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>
  
        <div class="index-btn-wrapper">
          <!-- <div class="index-btn" onclick="run(3, 2);">Previous</div> -->
          <!-- <div class="index-btn" onclick="run(3, 4);">Next</div> -->
        </div>
      </div>

      <div class="tab" id="tab-4" hidden style="margin-top: -40px">
        <div class="input-group">
          <div class="form-group mb-3">
            <label class="label" for="tujuan_kunjungan" style="color:#000000">Keperluan Kunjungan</label>
            <select class="custom-select my-1 mr-sm-2" name="tujuan_kunjungan" id="inlineFormCustomSelectPrefTujuan" style="font-size: 14px;">
              <option selected="false" disabled="disabled">Silakan Pilih Keperluan Kunjungan</option>
              <?php $__currentLoopData = $tujuankunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($tk->id); ?>"><?php echo e($tk->tujuankunjungan_type); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>
  
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(3, 2);" id="btn-prev-kunjungan">Previous</div>
          <!-- <div class="index-btn" onclick="run(4, 5);">Next</div> -->
        </div>
      </div>

      <div class="tab" id="tab-6" hidden style="margin-top: -40px">
        <div class="input-group">
          <div class="form-group mb-3">
            <label class="label" for="nama_pegawai" style="color:#000000">Nama Pegawai</label>
            <select class="custom-select my-1 mr-sm-2" name="nama_pegawai" id="inlineFormCustomSelectPref" style="font-size: 14px;">
              <option selected="false" disabled="disabled">Silakan Pilih Nama Pegawai</option>
              <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $np): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($np->id); ?>"><?php echo e($np->namapegawai_type); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>
        <div class="index-btn-wrapper">
          <div class="index-btn" onclick="run(4, 3);" id="btn-prev-pegawai">Previous</div>
        </div>
      </div>
  
      <div class="tab" id="tab-5" hidden style="margin-top: -40px">
        <div class="input-group">
          <div class="form-group mb-3">
            <label class="label" for="purpose" style="color:#000000">Keperluan Permintaan Data</label>
            <select class="custom-select my-1 mr-sm-2" name="purpose" id="inlineFormCustomSelectPref" style="font-size: 14px;">
              <option selected="false" disabled="disabled">Silakan Pilih Keperluan Permintaan Data</option>
              <?php $__currentLoopData = $purpose; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($p->id); ?>"><?php echo e($p->purpose_type); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>

        <div class="form-group mb-3">
            <label class="label" for="sub_categories" style="color:#000000">Kebutuhan Data</label>
            <select class="custom-select my-1 mr-sm-2" name="sub_categories" id="inlineFormCustomSelectPref" style="font-size: 14px;">
              <option selected="false" disabled="disabled">Silakan Pilih Kebutuhan Data</option>
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <optgroup label="<?php echo e($group->categories_type); ?>">
                <?php $__currentLoopData = $sub_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($s->id_categories == $group->id): ?>
                <option value="<?php echo e($s->id); ?>"><?php echo e($s->sub_categories_type); ?></option>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </optgroup>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <br></br>

        <div class="form-group mb-3">
            <label class="label" for="media" style="color:#000000">Media Pelayanan</label>
            <select class="custom-select my-1 mr-sm-2" name="media" id="inlineFormCustomSelectPref" style="font-size: 14px;">
              <option selected="false" disabled="disabled">Silakan Pilih Media Pelayanan</option>
              <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($p->id); ?>"><?php echo e($p->media_type); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
  
        <div class="input-group">
          <label for="data" style="color:#000000">Catatan Data</label>
          <textarea type="text" name="data" id="data" placeholder="Silakan isi data spesifik yang anda perlukan"
            class="form-control" rows="10" cols="55" maxlength="50" value="<?php echo e(old('data')); ?>"
            onkeypress="return event.charCode < 48 || event.charCode>57" data-parsley-trigger="keyup" style="font-size: 14px;"></textarea>
        </div>
  
        <!-- <div class="index-btn-wrapper">
          <div class="index-btn" onclick=" run(5, 4);">Previous</div>
          <button class="index-btn" type="submit" name="submit" style="background: blue;" id="btn-submit-1">Submit</button>
        </div> -->
      </div>
      <div class="index-btn-wrapper" id="btn-akhir">
          <!-- <div class="index-btn" onclick=" run(5, 4);">Previous</div> -->
          <button class="index-btn" type="submit" name="submit" style="background: blue;" id="btn-submit-1" hidden>Submit</button>
        </div>
    </div>
      </div>
  </form>

 <script type="text/javascript">

  $(function(){
    $("#myForm").parsley();
  })

  // Default tab
  $(".tab").css("display", "none");
  $("#tab-1").css("display", "block");

  function run(hideTab, showTab){
    if(hideTab < showTab){ // If not press previous button
      // Validation if press next button
      var currentTab = 0;
      x = $('#tab-'+hideTab);
      y = $(x).find("input")
      z = $(x).find("select")
      for (i = 0; i < y.length; i++){
        if (y[i].value == ""){
          $(y[i]).css("background", "#ffdddd");
          return false;
        }
      }
      for (i = 0; i < z.length; i++){
        if (z[i].value == ""){
          $(z[i]).css("background", "#ffdddd");
          return false;
        }
      }
    }

    // Progress bar
    for (i = 1; i < showTab; i++){
      $("#step-"+i).css("opacity", "1");
    }

    // Switch tab
    $("#tab-"+hideTab).css("display", "none");
    $("#tab-"+showTab).css("display", "block");
    $("input").css("background", "#fff");
  }

  // Add change event listener to "Tujuan Kunjungan" dropdown
  $("#purposevtwo").change(function() {
    $("#btn-submit-1").addClass("d-none")
    $("#btn-submit-2").addClass("d-none")
    
    if (this.value === "1") { // "Kunjungan"
      run(1, 5); // Go to Media Pelayanan tab
      $("#btn-submit-1").remove()
      $("#tabrow-1").remove()
    } else if (this.value === "2") { // "Permintaan Data"
      run(1, 2); // Go to Riwayat Pendidikan tab
      $("#btn-submit-2").remove()
      $("#tabrow-2").remove()
    }
  });

      $('#hp').on('keyup', function (){

        $value = $(this).val();
        // alert ($value);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        // alert ($value);
        $.ajax({

          type      : 'post',
          url       : '<?php echo e(URL::to('cekcustomer')); ?>',
          dataType  : 'json',
          data      : {'search':$value},
          success   : function(data)
          {
            
              // dataconv = JSON.parse(data);
            $.each(data, function (i, id) { 
              // var $dataString = JSON.stringify(data)
              // console.log(data[0].name);
              // alert(data[0].address);

              $('#name').val(data[0].name).attr('readonly', true).css('background-color' , '#DEDEDE').attr('disabled', true);
              $("#gender option[value="+data[0].gender).attr('selected', 'true');
              $("#gender").attr('disabled', true);
              $('#email').val(data[0].email).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#address').val(data[0].address).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#age').val(data[0].age).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#institute').val(data[0].institute).attr('readonly', true).css('background-color' , '#DEDEDE');
              $('#nipnim').val(data[0].nipnim).attr('readonly', true).css('background-color' , '#DEDEDE');
              $("#job option[value='"+data[0].id_job).attr('selected', 'true');
              $("#job").attr('disabled', true);
              $("#education option[value='"+data[0].id_education).attr('selected', 'true');
              $("#education").attr('disabled', true);
              $("#tujuankunjungan option[value='"+data[0].id_job).attr('selected', 'true');
              $("#tujuankunjungan").attr('disabled', true);
            });
          
          }
        });
      })

    $("#inlineFormCustomSelectPrefKeperluan").on("change", function(){
      // alert($(this).val())
      $("#tab-5").attr('hidden', true)
      $("#tab-5").hide()
      $("#tab-4").attr('hidden', true)
      $("#tab-4").hide()
      if($(this).val() == 1){
        $("#tab-4").attr('hidden', false)
        $("#tab-4").show()
        $("#btn-akhir").show()
        $("#btn-submit-1").hide()
      } else {
        $("#tab-5").attr('hidden', false)
        $("#tab-5").show()
        $("#btn-akhir").show()
        $("#btn-submit-1").show()
      }
    })
    
    $("#inlineFormCustomSelectPrefTujuan").on('change', function(){
      $("#btn-submit-1").hide()
      $("#tab-6").hide()
      $("#btn-submit-1").attr("hidden",true)
      $("#tab-6").attr("hidden", true)
      $("#btn-prev-kunjungan").hide()
      $("#btn-prev-pegawai").hide()
      if($(this).val() == 1){
        $("#btn-akhir").show()
        $("#btn-submit-1").show()
        $("#btn-submit-1").attr("hidden",false)
        $("#btn-prev-kunjungan").show()
      } else {
        $("#btn-akhir").show()
        $("#btn-submit-1").show()
        $("#btn-submit-1").attr("hidden",false)
        $("#tab-6").show()
        $("#tab-6").attr("hidden", false)
        $("#btn-prev-pegawai").show()
      }
    })

    $("#btn-previous").on("click", function(){
      $("#tab-4").hide()
      $("#tab-5").hide()
      $("#tab-6").hide()
      $("#btn-akhir").hide()
    })
    $("#btn-prev-kunjungan").on("click", function(){
      $("#tab-4").hide()
      $("#tab-5").hide()
      $("#tab-6").hide()
      $("#btn-akhir").hide()
    })
    $("#btn-prev-pegawai").on("click", function(){
      $("#tab-4").hide()
      $("#tab-5").hide()
      $("#tab-6").hide()
      $("#btn-akhir").hide()
    })

    

      // $(document).ready (function() {
        // $('#myForm').formValidation({
        // framework: 'bootstrap',
        // excluded: 'disabled',
        // icon: {
        // valid: 'glyphicon glyphicon-ok',
        // invalid: 'glyphicon glyphicon-remove',
        // validating: 'glyphicon glyphicon-refresh'
        // },
        // fields: {
        //     emailUser: {
        //     validators: {
        //     notEmpty: {
        //     message: 'Email Tidak Boleh Kosong'
        //     },
        //     emailAddress: {
        //     message: 'Email Tidak Valid'
        //     }
        //     }
        //     },
        // }
        // })
        // });

        // function ValidateEmail(mail)
        // {
        // if (/mysite@ourearth.com/.test(emailUser))
        // {
        // return (true)
        // }
        // alert("Masukkan e-Mail Dengan Ben0ar")
        // return (false)
        // }

        
  </script>
</body>
</html><?php /**PATH C:\Users\BPS KOTA MALANG 5\Documents\AppProject\bukutamu\resources\views//index.blade.php ENDPATH**/ ?>