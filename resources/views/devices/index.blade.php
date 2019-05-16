</<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
 
<h1>All Information About Devices</h1>
 
@foreach ($devices as $device)
<li> {{ $device}}  </li>
@endforeach
 
<h1>Only Names Of Devices</h1>
 
@foreach ($devices as $device)
 
<li> {{ $device->name}}  </li>
 
@endforeach
 
 
@foreach ($devices as $device)
 
<li> {{ $device->email}}  </li>
 
@endforeach
 
</body>
</html>
