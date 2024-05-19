$(document).ready(function(){
  function loadData(type,category_id) {
  $.ajax({
    url : 'ajax.php',
    type : 'POST',
    data: {type : type,id : category_id},
    success : function(data){
      
      if(type == "subjectData"){
        $('#subject').html(data);
      }
      else if(type == "questionData"){
        $('#questions').html(data);
      }
      else{
        $('#semester').html(data);  
      }
      
    }
  });
  }
  loadData();

  $('#semester').on("change",function () {
    var semester = $('#semester').val();
    if(semester != ""){
      loadData("subjectData",semester);  
    }
    else{
      $('#subject').html("");
    }
  })

  // CHANGING OF SUBJECT

  $('#subject').on("change",function () {
    var subject = $('#subject').val();
    loadData("questionData",subject);
  })
});
