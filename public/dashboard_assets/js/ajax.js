$(document).ready(function(){
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var roll;
    $("#roll").on('change',function(){
      var roll_no = $(this).val();
      roll = roll_no;
    });

    $("#loder").hide();

    $('#semester').on('change',function(){
      var semester = $(this).val();
      $("#loder").show();
      // console.log(roll);
      // console.log(semester);
      var url = "/find/subject/"+roll+"/"+semester;
      $.ajax({
        url:url,
        method: 'get',
        success: function(result){
          if (result.data) {
            var len = result.data.length;
            // console.log(len);
            // console.log(result.data);
            var html = "";
            for (var i = 0; i < len; i++) {
              // console.log(result.data[i].subject_name);
              // console.log(result.data[i].id);
              html = html + "<div class='form-group'>";
  				    html = html + "<label>"+result.data[i].subject_name+"</label>";
  				    html = html + "<input class='form-control' type='text' name='subject["+result.data[i].id+"]'>"
  				    html = html + "</div>"
            }
            $("#subject").html(html);
              $("#loder").hide();
            $("#submit").html("<input type='submit'  value='Add Result Information' class='btn btn-outline-success form-control'>");
          }
          else {
              $("#loder").hide();
            $("#student_reg").text(result.error);
          }
        }
      });

    });


});
