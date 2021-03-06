 $(document).ready(function(){
  /*Fetching the data from db*/
  fetch_data()

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    }
   });
  }
  /*update function*/
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  /*Add function*/
  $('#add').click(function(){
   /* this is where text is put into the table*/
   var html = '<tr>';
   html += '<td contenteditable style="color: #888" id="data1"><i>Add title here</i></td>';
   html += '<td contenteditable style="color: #888" id="data2"><i>Add Task here</i></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
   $('#data1').click(function(){$("#data1").html("");});
   $('#data2').click(function(){$("#data2").html("");});
});


  
 /*insert fucntion*/
 $(document).on('click', '#insert', function(){
    var title = $('#data1').text();
    var description = $('#data2').text();
    if(title != '' && description != '')
    {
     $.ajax({
      url:"insert.php",
      method:"POST",
      data:{title:title, description:description},
      success:function(data)
      {
       $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
       $('#user_data').DataTable().destroy();
       fetch_data();
      }
     });
     setInterval(function(){
      $('#alert_message').html('');
     }, 5000);
    }
    else
    {
     alert("Both Fields is required");
    }
   });
   
   /*Delete function*/
   $(document).on('click', '.delete', function(){
    var id = $(this).attr("id");
    if(confirm("Are you sure you want to remove this?"))
    {
     $.ajax({
      url:"delete.php",
      method:"POST",
      data:{id:id},
      success:function(data){
       $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
       $('#user_data').DataTable().destroy();
       fetch_data();
      }
     });
     setInterval(function(){
      $('#alert_message').html('');
     }, 5000);
    }
   });
  });

   