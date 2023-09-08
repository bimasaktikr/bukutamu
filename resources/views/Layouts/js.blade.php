<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('/admin/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('/admin/js/dataTable.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">

          $("#generate-dashboard").click(function(){
                    alert("hello world");
          })

          $("#startDateFilter").on('change', function(){
                    // alert($(this).val())
                    $("#startDateGenerate").val($(this).val());
          })
          $("#endDateFilter").on('change', function(){
                    // alert($(this).val())
                    $("#endDateGenerate").val($(this).val());
          })


</script>