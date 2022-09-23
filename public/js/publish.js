$().ready(function () {
  function successData(data) {
    toastr.success(data,
        {showMethod:"slideDown",hideMethod:"slideUp",timeOut:2e3})
    }
  
    function errorData(data) {
      toastr.error(data,
          {showMethod:"slideDown",hideMethod:"slideUp",timeOut:2e3})
      }
      var r= $(".r-multiples").select2();
      r.select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Select Tags"})
     

  $("#reload").on("click",()=>{
  $("#takeData")[0].reset();
});
$('#takeData').submit(function(e){
    e.preventDefault();
    $('#create').val('Please wait...');
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: '/is_admin/article',
        method: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        enctype: 'multipart/form-data',
    }).done( function (success) {
      console.log(success.success);
            if (success.success === "article-published-successfully!") {
                $("#takeData")[0].reset();
                $(".alert").fadeIn(500).show();
                successData("Arctle created!")
                $("#success").text('Article Created Successfully!');
                $('#create').val('Publish');
             window.location.replace(success.url);
            }  
        }).fail(function (error){
          //console.log(error);
          if (error.status == 500) {
            errorData("Internal Server Error") 
          }
          if (error.status == 404) {
            errorData("Data not found") 
          }
            //console.log(error)
            $('#create').val('Try again');
           const validate  = JSON.parse(error.responseText);
           if (validate.errors.post_image) {
            $(".fileimg").text(validate.errors.post_image)              
           }
           if (validate.errors.title) {
            $(".title").text(validate.errors.title) 
            $("input[type='text']").css("border", "red solid 1px")  
           }
           if (validate.errors.description) {
            $(".desc").text(validate.errors.description)
            $("#field").css("border", "red solid 1px")  
           }
           if (validate.errors.description) {
            $(".categ").text(validate.errors.categories) 
           }
          if (error.responseText != null) {
            errorData("Request Incomplete")
          $("input[type='text']").on('click',function(){
            $(".title").text('')
            $("input[type='text']").css("borderColor", "inherit") 
          })
          $("input[type='file']").on('click',function(){
            
            $(".fileimg").text('')
          })
          $("#categorys").change(function(){
            $(".categ").text('')
          })

          $("#field").on("click",function(){
            $("#field").css("borderColor", "inherit") 
            $(".desc").text('')
          })

        }
    })
});




$("#takeDataUpdate").submit(function(e){
  e.preventDefault();
  $('#update').val('Please wait...');
  var formData = new FormData($(this)[0]);
  const id = $("input[name='update_id']").val();
  $.ajax({
      url: '/is_admin/article/'+ id,
      method: 'POST',
      processData: false,
      contentType: false,
      data: formData,
      enctype: 'multipart/form-data',
  }).done( function (success) {
          if (success.updated === "article-modify-successfully!") {
              $(".alert").fadeIn(500).show();
              successData("Article Modified!")
              $("#success").text('Article Updated Successfully!');
              $('#update').val('Update');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
        if (error.status == 500) {
          errorData("Internal Server Error") 
        }
        if (error.status == 404) {
          errorData("Data not found") 
        }
          //console.log(error)
          $('#update').val('Try again');
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.post_image) {
          $(".fileimg").text(validate.errors.post_image)              
         }
         if (validate.errors.title) {
          $(".title").text(validate.errors.title) 
          $("input[type='text']").css("border", "red solid 1px")  
         }
         if (validate.errors.description) {
          $(".desc").text(validate.errors.description)
          $("#field").css("border", "red solid 1px")  
         }
         if (validate.errors.description) {
          $(".categ").text(validate.errors.categories) 
         }
        if (error.responseText != null) {
          errorData("Request Incomplete")
        $("input[type='text']").on('click',function(){
          $(".title").text('')
          $("input[type='text']").css("borderColor", "inherit") 
        })
        $("input[type='file']").on('click',function(){
          
          $(".fileimg").text('')
        })
        $("#categorys").change(function(){
          $(".categ").text('')
        })

        $("#field").on('click',function(){
          $("#field").css("borderColor", "inherit") 
          $(".desc").text('')
        })

      }
  })
});

function addreply(data){
  $(".users-nm").text(data)
 }

 $("body").on("click", ".reply", function (e) {
     e.preventDefault();
    editNo = $(this).attr('id')
    editNo2 = $(this).attr('names')
    $("input[name='reply_id']").val(editNo2)
    $("#comment-form").hide();
     addreply(editNo)
      $("#reply-form").show()
 })

$("#takeDataComment").submit(function(e){
  e.preventDefault();
  $('#comments').text('Please wait...');
  var formData = new FormData($(this)[0]);
  const route = $("input[name='comment_id']").val();
  $.ajax({
      url: route,
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.comment_added === "comment-success-successfully!") {
              $('#comments').text('Post comment');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
          $('#comments').text('Try again');
         const validate  = JSON.parse(error.responseText);
         if (validate.errors.username) {
          $(".users").text(validate.errors.username) 
          $("input[type='text']").css("border", "red solid 1px")  
         }
         if (validate.errors.body) {
          $(".body-c").text(validate.errors.body) 
          $("#body").css("border", "red solid 1px")  
         }

        if (error.responseText != null) {
        $("input[type='text']").on('click',function(){
          $(".users").text('')
          $("input[type='text']").css("borderColor", "inherit") 
        })
        $("#body").on('click',function(){
          $("#body").css("borderColor", "inherit") 
          $(".body-c").text('')
        })

      }
  })
});



$("#takeDataReply").submit(function(e){
  e.preventDefault();
  $('#replies').text('Please wait...');
  var formData = new FormData($(this)[0]);
  const route = $("input[name='reply_id']").val();
  $.ajax({
      url: '/articles/new/' + route +'/reply',
      method: 'POST',
      data: formData,
      processData: false,
      contentType: false,
  }).done( function (success) {
          if (success.reply_added === "reply-saved-successfully!") {
              $('#replies').text('Reply');
           window.location.replace(success.url);
          }  
      }).fail(function (error){
          $('#replies').text('Try again');
         const validate  = JSON.parse(error.responseText);

         if (validate.errors.body) {
          $(".body-r").text(validate.errors.body) 
          $("#body-r").css("border", "red solid 1px")  
         }
         if (validate.errors.username) {
          $(".users").text(validate.errors.username) 
          $("input[type='text']").css("border", "red solid 1px")  
         }

        if (error.responseText != null) {
        $("#body-r").on('click',function(){
          $("#body-r").css("borderColor", "inherit") 
          $(".body-r").text('')
        })
         $("input[type='text']").on('click',function(){
          $(".users").text('')
          $("input[type='text']").css("borderColor", "inherit") 
        })
      }
  })
});


});