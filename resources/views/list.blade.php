<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <title>Records List</title>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <style type="text/css">

.paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}

.paging-nav,
#tableData {
  width: 800px;
  height:500px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
}
</style>
        </head>
        <body>
            <a class="btn btn-dark" href="{{url('/')}}" role="button">back</a>
<h1 style="text-align:center;">Record list</h1>
<table id="tableData" class="table table-bordered table-striped">
          <thead>
    <tr>
              <th>id</th>
              <th>Title</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Full Name</th>
              <th>Gender</th>
              <th>Specialty</th>
              <th>Practice</th>
              <th>Phone</th>
              <th>Fax</th>
              <th>Email</th>
              <th>Address</th>
              <th>City</th>
              <th>Country</th>
              <th>State</th>
              <th>Zip</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th>SIC Code</th>
              <th>Website</th>
             
            </tr>
  </thead>
          <tbody>
            @foreach($physician as $item)
    <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->Title}}</td>
              <td>{{$item->FirstName}}</td>
              <td>{{$item->LastName}}</td>
              <td>{{$item->FullName}}</td>
              <td>{{$item->Gender}}</td>
              <td>{{$item->Specialty}}</td>
              <td>{{$item->Practice}}</td>
              <td>{{$item->Phone}}</td>
              <td>{{$item->Fax}}</td>
              <td>{{$item->Email}}</td>
              <td>{{$item->Address}}</td>
              <td>{{$item->City}}</td>
              <td>{{$item->Country}}</td>
              <td>{{$item->State}}</td>
              <td>{{$item->Zip}}</td>
              <td>{{$item->Latitude}}</td>
              <td>{{$item->Longitude}}</td>
              <td>{{$item->SICCode}}</td>
              <td>{{$item->Website}}</td>
            </tr>
@endforeach
  </tbody>
        </table>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('table/jquery/paging.js')}}"></script> 
<script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:10});
            });
        </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>