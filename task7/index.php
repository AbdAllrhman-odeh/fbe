<!DOCTYPE html>
<html>
<head>
  <title>Time Table</title>
  <style>
        body{
            margin:auto;
            max-width: 600px;
            line-height: 1.4;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        img{
            width:200px;
            height: 200px;
        }
    </style>
</head>
<body>
<table border="1">
<thead>
  <tr>
    <th>Pet image</th>
    <th>More facts about (as a Link)</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><img src="horse.jpeg" alt="horse"></td>
    <td><a href="">horse</a></td>
  </tr>
  <tr>
    <td><img src="dog.jpeg" alt="dog"></td>
    <td><a href="">dog</a></td>
  </tr>
  <tr>
    <td><img src="cat.jpeg" alt="cat"></td>
    <td><a href="">cat</a></td>
  </tr>
</tbody>
</table>
<hr>
<hr>
<table border="1">
<thead>
  <tr>
    <th colspan="6">Time TAble</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td rowspan="6"> Lunch</td>
    <td>mon</td>
    <td>Tue</td>
    <td>Wed</td>
    <td>Thu</td>
    <td>Fri</td>
  </tr>
  <tr>
    <td>Math</td>
    <td>science</td>
    <td>Math</td>
    <td>Science</td>
    <td>Arts</td>
  </tr>
  <tr>
    <td>Math</td>
    <td>science</td>
    <td>Math</td>
    <td>Science</td>
    <td>Arts</td>
  </tr>
  <tr>
    <td colspan="5">Hourse</td>
  </tr>
  <tr>
    <td>Math</td>
    <td>science</td>
    <td>Math</td>
    <td colspan="2" rowspan="2">project</td>
  </tr>
  <tr>
    <td>Math</td>
    <td>science</td>
    <td>Math</td>
  </tr>
</tbody>
</table>
<hr>
<hr>
<table border="1" style="border-style: dotted;">
<thead>
  <tr>
    <th colspan="2">Language and frameWorks</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>python</td>
    <td>Djono</td>
  </tr>
  <tr>
    <td rowspan="2">javaScript</td>
    <td>React.js</td>
  </tr>
  <tr>
    <td>vue.js</td>
  </tr>
  <tr>
    <td>Ruby</td>
    <td>Ruby on Ralis</td>
  </tr>
</tbody>
</table>
<hr>
<hr>

<table border="1">
<thead>
  <tr>
    <th rowspan="2">a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
  </tr>
  <tr>
    <th colspan="2" rowspan="2">e</th>
    <th>f</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th>j</th>
    <th>g</th>
  </tr>
  <tr>
    <td>i</td>
    <td>o</td>
    <td colspan="2">h</td>
  </tr>
</tbody>
</table>
</body>
</html>