
$().ready(function () {


    function successData(data) {
    toastr.success(data,
        {showMethod:"slideDown",hideMethod:"slideUp",timeOut:2e3})
    }
  
    function errorData(data) {
      toastr.error(data,
          {showMethod:"slideDown",hideMethod:"slideUp",timeOut:2e3})
      }




      $("body").on("click", "#trashCategory", function (e) {
        e.preventDefault();
        editNo = $(this).attr('action')
      //var route = $("input[name='cat_del']").val()
      console.log(editNo)
        var formData = new FormData($(this)[0]);
        $.ajax({
            url: route,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
        }).done( function (success) {
                if (success.roles_updated === "roles_modify_successfully!") {
                  successData("Roles Modified!") 
                  $('#editRoles').val('Modify Role');
                 window.location.replace(success.url);
                }  
            }).fail(function (error){
                $('#editRoles').val('Try again');
                if (error.status == 500) {
                  errorData("Internal Server Error") 
                }
                if (error.status == 404) {
                  errorData("Data not found") 
                }
               const validate  = JSON.parse(error.responseText);
               if (validate.errors.name) {
                $(".name-r").text(validate.errors.name) 
                $("input[type='text']").css("border", "red solid 1px")  
               }
               if (validate.errors.permissions) {
                $(".attach-r").text(validate.errors.permissions) 
               }
               if (validate.errors.description) {
                $(".desc-r").text(validate.errors.description) 
                $("#desc-r").css("border", "red solid 1px")  
               }
      
              if (error.responseText != null) {
                errorData("Request Incomplete")
              $("#desc-r").on('click',function(){
                $("#desc-r").css("borderColor", "inherit") 
                $(".desc-r").text('')
              })
      
              $("input[type='text']").on('click',function(){
                $(".name-r").text('')
                $("input[type='text']").css("borderColor", "inherit") 
              })
              $("#r-multi").change(function(){
                $(".attach-r").text('')
              })
      
            }
        })
      });
      
      
    });