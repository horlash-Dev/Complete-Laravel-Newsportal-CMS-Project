<!-- BEGIN: Vendor JS-->
<script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>

<script src="{{ asset('/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/tables/datatable/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('/app-assets/js/scripts/tables/datatables-extensions/datatable-rowreorder.min.js') }}"></script>

<!-- BEGIN: Page Vendor JS-->


<script src="{{ asset('/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/forms/toggle/switchery.min.js') }}"></script>

<!-- BEGIN: Theme JS-->
<script src="{{ asset('app-assets/js/core/app-menu.min.js') }}"></script>

<script src="{{ asset('app-assets/js/core/app.min.js') }}"></script>

<script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>

<script src="{{ asset('app-assets/js/scripts/footer.min.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/forms/select/form-select2.min.js') }}"></script>
<script src="{{ asset('js/publish.js') }}"></script>
<script src="{{ asset('js/dashboard/validate.js') }}"></script>
<script src="{{ asset('js/dashboard/confirm.js') }}"></script>


<script src="{{ asset('/tinymce/tinymce.min.js') }}"></script>
<script>
  var editor_config = {
    path_absolute : "/",
    selector: 'textarea#field',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'is_admin/gallery?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Gallery & Media',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    },
    setup: function (data){
        data.on('change',function(){
            tinymce.triggerSave();
        });
        data.on('click',function(){
            $(".desc").text('')
        })
    },
    height: 600
  };

  tinymce.init(editor_config);
</script>
<script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/forms/select/selectize.min.js') }}"></script>
<script src="{{ asset('/app-assets/js/scripts/forms/select/form-selectize.min.js') }}"></script>
<script src="{{ asset('/app-assets/js/scripts/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/charts/chart.min.js') }}"></script>
<script>
  uem = $("#auts_em").text();
  vem = $("#userall").text();
  pem = $("#upost").text();
  pos = $("#vpost").text();
  $(window).on("load",(function(){var a=$("#simple-doughnut-chart");new Chart(a,{type:"doughnut",options:{responsive:!0,maintainAspectRatio:!1,responsiveAnimationDuration:500},data:{labels:["Total Users","Unverified Emails","Published Article","Pending Article"],datasets:[{label:"My First dataset",data:[vem,uem,pos,pem],backgroundColor:["#28D094","#FF4558","#00A5A8","#FF7D4D"]}]}})}));
</script>
<script src="{{ asset('/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/forms/tags/tagging.min.js') }}"></script>
<script src="{{ asset('/app-assets/js/scripts/pages/page-users.min.js') }}"></script>
<script src="{{ asset('/app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/app-assets/vendors/js/forms/select/jquery.selectBoxIt.js') }}"></script>
<script src="{{ asset('/app-assets/js/scripts/forms/select/form-selectBoxIt.min.js') }}"></script> 
   
