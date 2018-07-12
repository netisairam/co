<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>
<div class="container">
    <div class="row" >
        <form role="form" id="addfrom" method="post" action="addcitydb/">
            <div class="col-xs-12 col-sm-6">
                <div class="well well-sm" id="header_addcity"><strong>Add City</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>                    
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter Name" required>
                </div>
                <input type="submit"  id="submit" value="Add City" class="btn btn-info pull-right">
            </div>
        </form>        
    </div>
  <table id="example" style="background-color: white">
    <thead>
      <tr><th width="87%">Cities</th><th></th></tr>
    </thead>
    <tbody>
        <?php
          foreach($list as $norow => $field){

              echo "<tr><td>".ucwords($field['city'])."</td><td><a href='javascript:void(0)' onclick='change_from(\"".$field['city']."\", ".$field['id'].");'>Edit</a> | <a href='addcity_deletedb?id=".$field['id']."'>Delete</a></td></tr>";
          }
          ?>
    </tbody>
  </table>
</div>
<script>
  function change_from(city, id){
      alert('hi ');
      document.getElementById('addfrom').setAttribute("action", "addcity_editdb/");
      document.getElementById('city').value = city;
      document.getElementById('header_addcity').innerHTML = "<strong>Edit City</strong>";
      element =  document.createElement('input');
      element.type="hidden";
      element.name="id";
      element.value= id;
      document.getElementById('addfrom').appendChild(element);
      document.getElementById('submit').value = "Edit City";
  }

</script>