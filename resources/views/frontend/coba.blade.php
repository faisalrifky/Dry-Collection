<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
<style type="text/css">
 /*-------------- Pink Left right -----------*/ 
.pB-readmore{ 
background:#fff; 
text-align:right; 
cursor:pointer; 
color:#FE80DF; 
margin:5px 0; 
  float:right; 
border-right:2px solid #FE80DF; 
border-left:2px solid #FE80DF; 
padding:5px; 
-moz-border-radius:6px; 
-webkit-border-radius:6px; 
font:bold 11px sans-serif; 
} 
.pB-readmore:hover{ 
background:#fff; 
font:bold 11px sans-serif; 
color:#CC0099; 
border-right:2px solid #CC0099; 
border-left:2px solid #CC0099; 
} 
.pB-readmore a { 
color:#fff; 
text-decoration:none; 
}
.pB-readmore a:hover { 
color:#fff; 
text-decoration:none; 
} 
</style></div>
</div>
</div>
</body>
</html>
