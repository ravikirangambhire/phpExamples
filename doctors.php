<!DOCTYPE html>
<html>
<head>
   <title></title>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>


<div class="container">
  
  <table id="doctors">
    <thead>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Specialization</th>
          <th>Address</th>
          <th>City</th>
          <th>Postal Code</th>
          <th>Country</th>
          <th>Edit</th>
          <th>Delete</th>
      </tr>
    </thead>
  </table>
</div>


</body>


<script type="text/javascript">
  $(document).ready(function() {
      $('#doctors').dataTable({
        "bProcessing": true,
        "sAjaxSource": "pro.php",
        "aoColumns": [
              { mData: 'id' } ,
              { mData: 'name' },
              { mData: 'specialization' },
              { mData: 'address' } ,
              { mData: 'city' },
              { mData: 'postal_code' },
              { mData: 'country'}
            ]
      });  
  });
</script>
</html>