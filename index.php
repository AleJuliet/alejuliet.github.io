<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="style.css?v=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="d3/d3.js"></script> 

</head>

<body>
   <div id="container" style="text-align:center;margin-top:30px">
    <div id="container2" style="width:50%;margin-left: 25%;margin-right: 2%;">
        <h5>Please select the outfits you like</h5>
        <div id="top" style="margin-top:20px">
            <img id="topim" src=""  height="200">
        </div>
        <div id="pants">
            <img id="pantim" src=""  height="200">
        </div>
        
        <div class="row" style="margin-top:30px">
            <div class="col-sm" style="text-align:right">
            <button type="button" onclick="selectn(0)" class="btn btn-danger">I don't like it</button>
            </div>
            <div class="col-sm" style="text-align:left">
            <button type="button" onclick="selectn(1)" class="btn btn-success">I like it</button>
            </div>
        </div>
     </div>
    </div>

  <script>
    /*Load data*/
    var tops = [];
    var pants = [];
    
    var recordselection = []
    
    d3.csv("4-Huayu-CSV.csv", function(data) {
        data.forEach(function(d) {
            if (d.type=="1")
                tops.push([d.index,d.color,d.pattern,d.occasion])
            else 
                pants.push([d.index,d.color,d.pattern,d.occasion])
        });
        console.log(tops);
        dorandom(tops,pants);
    });
    
    /**
    * Shuffles array in place.
    * @param {Array} a items An array containing the items.
    */
    function shuffle(a) {
        var j, x, i;
        for (i = a.length - 1; i > 0; i--) {
            j = Math.floor(Math.random() * (i + 1));
            x = a[i];
            a[i] = a[j];
            a[j] = x;
        }
        return a;
    }
    
    function dorandom() {
        tops = shuffle(tops);
        pants = shuffle(pants);
        var topID = tops[0][0];
        var pantID = pants[0][0];
        $("#topim").attr("src","clothes2/"+topID+".jpg");
        $("#pantim").attr("src","clothes2/"+pantID+".jpg");
        console.log(topID+" and "+pantID);
    }
    
    function selectn(like) {
        recordselection.push(like);
        dorandom();
    }
  
  </script>
</body>
</html>