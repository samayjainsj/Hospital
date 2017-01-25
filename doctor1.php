<head>
<link rel="stylesheet" type="text/css" href="css/doctor1.css"/>
</head>
<body>
<div class="controls">
  <label>Filter:</label>
  
  <button class="filter" data-filter="all">All</button>
  <button class="filter" data-filter=".category-1">Category 1</button>
  <button class="filter" data-filter=".category-2">Category 2</button>
  
  <label>Sort:</label>
  
  <button class="sort" data-sort="myorder:asc">Asc</button>
  <button class="sort" data-sort="myorder:desc">Desc</button>
</div>
<div id="Container" class="container">
  <div class="mix category-1" data-myorder="1">Samay Kumar jIan</div>
  <div class="mix category-1" data-myorder="2">Vasihali Kushwaha</div>
  <div class="mix category-1" data-myorder="3">Neha Bagla</div>
  <div class="mix category-2" data-myorder="4">Samay</div>
  <div class="mix category-1" data-myorder="5">Komal maheswari</div>
  <div class="mix category-1" data-myorder="6">Random1</div>
  <div class="mix category-2" data-myorder="7">Random2</div>
  <div class="mix category-2" data-myorder="8">Random3</div>
  
  <div class="gap"></div>
  <div class="gap"></div>
</div>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
		
</body>