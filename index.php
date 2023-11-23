<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="form.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container ">
        <form action="result.php" method="post">
            <div class="row">
                <div class="col-4 text-right">
                    <label  for="Name" id="name">Name </label>
                </div>
                <div class="col-8">
                    <input type="text" style="width: 80%;" name="name">
                </div>
            </div><br>

            <div class="row" id="row2">
                <div class="col-4 text-right">
        
                <label for="Club you want to apply">Club you want to apply </label>
                </div>
                <div class="col-8 ">
                    <select name="Club" style="width: 80%;">
                        <option value="Music Club"> Music Club</option>
                        <option value="Football Club"> Football Club</option>
                        <option value="Swimming Club"> Swimming Club</option>
                    </select>
                </div>
                
            </div><br>

            <div class="row">
                <div class="col-4 text-right">
                    <label for=" Be time for you"> Be time for you </label>
                </div>
                <div class="col-8">
                    <input class="pl-3" type="radio" name="Saturday" value="Saturday mornings"> Saturday mornings
                    <input type="radio" name="Saturday" value="Saturday afternoons"> Saturday afternoons <br>
                    <input type="radio" name="Saturday" value="Sunday afternoons"> Sunday afternoons 
                </div>
            </div><br>

            <div class="row">
                <div class="col-4 text-right">
                    <label for="Yours skills">Yours skills</label>
                </div>
                
                <div class="col-8">
    <div class="row">
        <div class="col">
            <input type="checkbox" id="skill1" name="the_best_coder" value="the best coder">
            <label for="skill1">the best coder</label> <br>

            <input type="checkbox" id="skill2" name="good_in_arts" value="good in arts">
            <label for="skill2">good in arts</label> <br>

            <input type="checkbox" id="skill3" name="a_super_star" value="a super star">
            <label for="skill3">a super star</label> <br>

            <input type="checkbox" id="skill4" name="a_crazy_dancer" value="a crazy dancer">
            <label for="skill4">a crazy dancer</label> <br>
        </div>
        <div class="col">
            <input type="checkbox" id="skill5" name="singer" value="singer">
            <label for="skill5">singer</label> <br>

            <input type="checkbox" id="skill6" name="good_in_design" value="good in design">
            <label for="skill6">good in design</label> <br>

            <input type="checkbox" id="skill7" name="the_best_eater" value="the best eater">
            <label for="skill7">the best eater</label> <br>

            <input type="checkbox" id="skill8" name="good_in_speeches" value="good in speeches">
            <label for="skill8">good in speeches</label> <br>
        </div>
    </div>
</div>
                    
                    
                </div>
                
            </div><br> 
        <div class="col text-center ">
            <div class="Submit">
                <button id="btSubmit" type="submit" name="sumbit">SUBMIT</button>
            </div>
        </div>
            
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>