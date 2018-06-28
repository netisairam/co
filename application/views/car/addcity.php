<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css"> 
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>
<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-xs-12 col-sm-6">
                <div class="well well-sm"><strong>Add City</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>                    
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                </div>
                <input type="submit" name="submit" id="submit" value="Add Citynot" class="btn btn-info pull-right">
            </div>
        </form>        
    </div>

<table id="example" style="background-color: white">
    <thead>
      <tr><th>Sites</th></tr>
    </thead>
    <tbody>
      <tr><td>SitePoint</td></tr>
      <tr><td>Learnable</td></tr>
      <tr><td>Flippa</td></tr>
    </tbody>
  </table>
</div>