$().ready(function () {


  function successData(data) {
  toastr.success(data,
      {showMethod:"slideDown",hideMethod:"slideUp",timeOut:2e3})
  }

  function errorData(data) {
    toastr.error(data,
        {showMethod:"slideDown",hideMethod:"slideUp",timeOut:2e3})
    }

    $(".create-tags").tagging({"forbidden-words":["bastard","bitch","biatch","bloody","sex","fuck","fool","idiots"]})

  var r= $(".r-multiple").select2();
  r.select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Select Permissions"})
  $(".js-programmatic-multi-clear").on("click",(function(){r.val(null).trigger("change")}));
  $("#takepermissionData").submit(function(e){
    e.preventDefault();
    var block_ele = $(this).closest(".card");
    $(block_ele).block({
      message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
      timeout: 2000, //unblock after 2 seconds
      overlayCSS: {
        backgroundColor: "#fff",
        opacity: 0.8,
        cursor: "wait"
      },
      css: {
        border: 0,
        padding: 0,
        backgroundColor: "transparent"
      }
    });
//    $('#createPermission').val('Please wait...');
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: "/is_admin/new/permission",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
    }).done( function (success) {
            if (success.permission_submitted === "permission_successfully!") {
              successData("Permission successfully created!")
              $("#takepermissionData")[0].reset(); 
              $('#createPermission').val('Submit Permission');
             window.location.replace(success.url);
            }  
        }).fail(function (error){
          if (error.status == 500) {
            errorData("Internal Server Error") 
          }
          if (error.status == 404) {
            errorData("Data not found") 
          }
            $('#createPermission').val('Try again');
           const validate  = JSON.parse(error.responseText);
           if (validate.errors.name) {
            $(".name-p").text(validate.errors.name) 
            $("input[type='text']").css("border", "red solid 1px")  
           }
           if (validate.errors.description) {
            $(".desc-p").text(validate.errors.description) 
            $("#desc-p").css("border", "red solid 1px")  
           }
  
          if (error.responseText != null) {
          errorData("Request Incomplete")
          $("#desc-p").on('click',function(){
            $("#desc-p").css("borderColor", "inherit") 
            $(".desc-p").text('')
          })

          $("input[type='text']").on('click',function(){
            $(".name-p").text('')
            $("input[type='text']").css("borderColor", "inherit") 
          })
  
        }
    })
  });
  

  $("#takeEditpermissionData").submit(function(e){
    e.preventDefault();
    var block_ele = $(this).closest(".card");
    $(block_ele).block({
      message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
      timeout: 1200, //unblock after 2 seconds
      overlayCSS: {
        backgroundColor: "#fff",
        opacity: 0.8,
        cursor: "wait"
      },
      css: {
        border: 0,
        padding: 0,
        backgroundColor: "transparent"
      }
    });
var route = $("input[name='permission_id']").val()
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: route,
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
    }).done( function (success) {
            if (success.permission_updated === "permission_modify_successfully!") {
              successData("Permission Modified!") 
              $('#editPermission').val('Modify Permission');
             window.location.replace(success.url);
            }  
        }).fail(function (error){
            $('#editPermission').val('Try again');
            if (error.status == 500) {
              errorData("Internal Server Error") 
            }
            if (error.status == 404) {
              errorData("Data not found") 
            }
           const validate  = JSON.parse(error.responseText);
           if (validate.errors.name) {
            $(".name-p").text(validate.errors.name) 
            $("input[type='text']").css("border", "red solid 1px")  
           }
           if (validate.errors.description) {
            $(".desc-p").text(validate.errors.description) 
            $("#desc-p").css("border", "red solid 1px")  
           }
  
          if (error.responseText != null) {
            errorData("Request Incomplete")
          $("#desc-p").on('click',function(){
            $("#desc-p").css("borderColor", "inherit") 
            $(".desc-p").text('')
          })

          $("input[type='text']").on('click',function(){
            $(".name-p").text('')
            $("input[type='text']").css("borderColor", "inherit") 
          })
  
        }
    })
  });

  //roles create \\

  $("#takerolesData").submit(function(e){
    e.preventDefault();
    var block_ele = $(this).closest(".card");
    $(block_ele).block({
      message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
      timeout: 1200, //unblock after 2 seconds
      overlayCSS: {
        backgroundColor: "#fff",
        opacity: 0.8,
        cursor: "wait"
      },
      css: {
        border: 0,
        padding: 0,
        backgroundColor: "transparent"
      }
    });
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: "/is_admin/new/role",
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
    }).done( function (success) {
            if (success.roles_submitted === "roles_successfully!") {
              successData("Role successfully created!")
              $("#takerolesData")[0].reset(); 
              $('#createRole').val('Submit Role');
             window.location.replace(success.url);
            }  
        }).fail(function (error){
          console.log(error)
          if (error.status == 500) {
            errorData("Internal Server Error") 
          }
          if (error.status == 404) {
            errorData("Data not found") 
          }
            $('#createRole').val('Try again');
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
  

//roles update //
   
$("#takeEditrolesData").submit(function(e){
  e.preventDefault();
  var block_ele = $(this).closest(".card");
  $(block_ele).block({
    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
    timeout: 1200, //unblock after 2 seconds
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
      cursor: "wait"
    },
    css: {
      border: 0,
      padding: 0,
      backgroundColor: "transparent"
    }
  });
var route = $("input[name='roles_id']").val()
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



$("#takecategoryData").submit(function(e){
  e.preventDefault();
  var block_ele = $(this).closest(".card");
  $(block_ele).block({
    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
    timeout: 2000, //unblock after 2 seconds
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
      cursor: "wait"
    },
    css: {
      border: 0,
      padding: 0,
      backgroundColor: "transparent"
    }
  });
  var formData = new FormData($(this)[0]);
  $.ajax({
      url: "/is_admin/new/category",
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.category_submitted === "category_successfully!") {
            successData("category successfully created!")
            $("#takecategoryData")[0].reset(); 
            $('#createCategory').val('Publish');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
        console.log(error)
        if (error.status == 500) {
          errorData("Internal Server Error") 
        }
        if (error.status == 404) {
          errorData("Data not found") 
        }
          $('#createCategory').val('Try again');
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.name) {
          $(".name-c").text(validate.errors.name) 
          $("input[type='text']").css("border", "red solid 1px")  
         }
         if (validate.errors.description) {
          $(".desc-c").text(validate.errors.description) 
          $("#desc-c").css("border", "red solid 1px")  
         }

        if (error.responseText != null) {
        errorData("Request Incomplete")
        $("#desc-c").on('click',function(){
          $("#desc-c").css("borderColor", "inherit") 
          $(".desc-c").text('')
        })

        $("input[type='text']").on('click',function(){
          $(".name-c").text('')
          $("input[type='text']").css("borderColor", "inherit") 
        })

      }
  })
});


$("#takeEditcategoryData").submit(function(e){
  e.preventDefault();
  var block_ele = $(this).closest(".card");
  $(block_ele).block({
    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
    timeout: 1200, //unblock after 2 seconds
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
      cursor: "wait"
    },
    css: {
      border: 0,
      padding: 0,
      backgroundColor: "transparent"
    }
  });
var route = $("input[name='category_id']").val()
  var formData = new FormData($(this)[0]);
  $.ajax({
      url: route,
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.category_updated === "category_modify_successfully!") {
            successData("Category Modified!") 
            $('#editCategory').val('Update');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
          $('#editCategory').val('Try again');
          if (error.status == 500) {
            errorData("Internal Server Error") 
          }
          if (error.status == 404) {
            errorData("Data not found") 
          }
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.name) {
          $(".name-c").text(validate.errors.name) 
          $("input[type='text']").css("border", "red solid 1px")  
         }
         if (validate.errors.description) {
          $(".desc-c").text(validate.errors.description) 
          $("#desc-c").css("border", "red solid 1px")  
         }

        if (error.responseText != null) {
          errorData("Request Incomplete")
        $("#desc-c").on('click',function(){
          $("#desc-c").css("borderColor", "inherit") 
          $(".desc-c").text('')
        })

        $("input[type='text']").on('click',function(){
          $(".name-c").text('')
          $("input[type='text']").css("borderColor", "inherit") 
        })

      }
  })
});



$("#takesub_categoryData").submit(function(e){
  e.preventDefault();
  var block_ele = $(this).closest(".card");
  $(block_ele).block({
    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
    timeout: 2000, //unblock after 2 seconds
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
      cursor: "wait"
    },
    css: {
      border: 0,
      padding: 0,
      backgroundColor: "transparent"
    }
  });
  var formData = new FormData($(this)[0]);
  $.ajax({
      url: "/is_admin/new/sub/category",
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.sub_category_submitted === "sub_category_successfully!") {
            successData("subcategory successfully created!")
            $("#takesub_categoryData")[0].reset(); 
            $('#createsub_Category').val('Publish');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
        if (error.status == 500) {
          errorData("Internal Server Error") 
        }
        if (error.status == 404) {
          errorData("Data not found") 
        }
          $('#createsub_Category').val('Try again');
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.name) {
          $(".name-sc").text(validate.errors.name) 
          $("input[type='text']").css("border", "red solid 1px")  
         }
         if (validate.errors.parents_category) {
          $(".categ-sc").text(validate.errors.parents_category) 
         }
         if (validate.errors.description) {
          $(".desc-sc").text(validate.errors.description) 
          $("#desc-sc").css("border", "red solid 1px")  
         }

        if (error.responseText != null) {
        errorData("Request Incomplete")
        $("#desc-sc").on('click',function(){
          $("#desc-sc").css("borderColor", "inherit") 
          $(".desc-sc").text('')
        })

        $("#categ-sc").change(function(){
          $(".categ-sc").text('')
        })

        $("input[type='text']").on('click',function(){
          $(".name-sc").text('')
          $("input[type='text']").css("borderColor", "inherit") 
        })

      }
  })
});


$("#takesub_EditcategoryData").submit(function(e){
  e.preventDefault();
  var block_ele = $(this).closest(".card");
  $(block_ele).block({
    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
    timeout: 1200, //unblock after 2 seconds
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
      cursor: "wait"
    },
    css: {
      border: 0,
      padding: 0,
      backgroundColor: "transparent"
    }
  });
var route = $("input[name='sub_category_id']").val()
  var formData = new FormData($(this)[0]);
  $.ajax({
      url: route,
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.sub_category_updated === "sub_category_modify_successfully!") {
            successData("Category Modified!") 
            $('#editsub_Category').val('Update');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
          $('#editsub_Category').val('Try again');
          if (error.status == 500) {
            errorData("Internal Server Error") 
          }
          if (error.status == 404) {
            errorData("Data not found") 
          }
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.name) {
          $(".name-sc").text(validate.errors.name) 
          $("input[type='text']").css("border", "red solid 1px")  
         }
         if (validate.errors.description) {
          $(".desc-sc").text(validate.errors.description) 
          $("#desc-sc").css("border", "red solid 1px")  
         }

        if (error.responseText != null) {
          errorData("Request Incomplete")
        $("#desc-sc").on('click',function(){
          $("#desc-sc").css("borderColor", "inherit") 
          $(".desc-sc").text('')
        })

        $("#categ-sc").change(function(){
          $(".categ-sc").text('')
        })
        
         if (validate.errors.parents_category) {
          $(".categ-sc").text(validate.errors.parents_category) 
         }

        $("input[type='text']").on('click',function(){
          $(".name-sc").text('')
          $("input[type='text']").css("borderColor", "inherit") 
        })

      }
  })
});


$("#taketagsData").submit(function(e){
  e.preventDefault();
  var block_ele = $(this).closest(".card");
  $(block_ele).block({
    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
    timeout: 2000, //unblock after 2 seconds
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
      cursor: "wait"
    },
    css: {
      border: 0,
      padding: 0,
      backgroundColor: "transparent"
    }
  });
  var formData = new FormData($(this)[0]);
  $.ajax({
      url: "/is_admin/new/tags",
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.Tags_submitted === "Tags_successfully!") {
            successData("Tags successfully created!")
            $("#taketagsData")[0].reset(); 
            $('#createTags').val('Publish Tags');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
        console.log(error)
        if (error.status == 500) {
          errorData("Internal Server Error") 
        }
        if (error.status == 404) {
          errorData("Data not found") 
        }
          $('#createTags').val('Try again');
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.name) {
          $(".name-ts").text(validate.errors.name) 
         }

        if (error.responseText != null) {
        errorData("Request Incomplete")

        $(".create-tags").on('click',function(){
          $(".name-ts").text('')
        })

      }
  })
});


$("#takeEdittagData").submit(function(e){
  e.preventDefault();
  var block_ele = $(this).closest(".card");
  $(block_ele).block({
    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
    timeout: 1200, //unblock after 2 seconds
    overlayCSS: {
      backgroundColor: "#fff",
      opacity: 0.8,
      cursor: "wait"
    },
    css: {
      border: 0,
      padding: 0,
      backgroundColor: "transparent"
    }
  });
var route = $("input[name='tag_id']").val()
  var formData = new FormData($(this)[0]);
  $.ajax({
      url: route,
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.Tags_updated === "Tags_modify_successfully!") {
            successData("tag Modified!") 
            $('#editTags').val('Update');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
        console.log(error)
        if (error.status == 500) {
          errorData("Internal Server Error") 
        }
        if (error.status == 404) {
          errorData("Data not found") 
        }
          $('#editTags').val('Try again');
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.name) {
          $(".name-ts").text(validate.errors.name) 
         }

        if (error.responseText != null) {
        errorData("Request Incomplete")

        $("input[type='text']").on('click',function(){
          $(".name-ts").text('')
        })

      }
  })
});


});