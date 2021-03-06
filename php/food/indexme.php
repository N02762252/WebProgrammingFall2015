<!--Certain servers you don't need to type php, just ? -->
<?php 
    $name = 'Andrew Haaland';
    $message = "Welcome, $name";
    
    $person = array('Name' => $name, 'Age' => 20, 'CalorieGoal' => 2000);
    
    $food= array(
        array('Name' => 'Breakfast', 'Time' => strtotime("-1 hour"), 'Calories' => 400, rank =>5),
        array('Name' => 'Lunch', 'Time' => strtotime("now"), 'Calories' => 800, rank =>5),
        array('Name' => 'Snack', 'Time' => strtotime("now + 1 hour"), 'Calories' => 400, rank =>5),
        array('Name' => 'Dinner', 'Time' => strtotime("6pm"), 'Calories' => 600, rank =>5),
        );
    $total = 0;
    foreach($food as $meal){
        $total += $meal['Calories'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Food Intake</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
            <h1>Food Intake</h1>
            <h2><?=$message?></h2>
            <div class="panel panel-success">
                <div class="panel-heading">
                    Your Data
                </div>
                <div class="panel-body">
                    <dl>
                        <dt>
                            Name
                        </dt>
                        <dd>
                            <?=$person['Name']?>
                        </dd>
                        <dt>
                            Age
                        </dt>
                        <dd>
                            <?=$person['Age']?>
                        </dd>
                        <dt>
                            Calorie Goal
                        </dt>
                        <dd>
                            <?=$person['CalorieGoal']?>
                        </dd>
                        <dt>
                            Today's Intake
                        </dt>
                        <dd>
                            <?=$total?>
                        </dd>
                    </dl>
                </div>
            </div>
      <div class="row">
        <div class="col-md-8 col-xs-10">
            <a href="#" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                New Record
            </a>
            <a href="#" class="btn btn-danger">
                <i class="glyphicon glyphicon-trash"></i>
                Delete All
                <span class="badge">4</span>
            </a>
            <table class="table table-condensed table-striped table-bordered table-hover">
              <thead>
                <tr>
                <?php $names = $food[0]; ?>
                  <th>#</th>
                  <? foreach($names as $key => $value): ?>
                      <th><?=$key?></th>
                  <? endforeach; ?>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($food as $i => $meal): ?>
                <tr>
                  <th scope="row"><?=$i?></th>
                  <td><?=$meal['Name']?></td>
                  <td><?=date("M d Y h:i:sa",$meal['Time'])?></td>
                  <td><?=$meal['Calories']?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>  
          
        </div>
        <div class="col-md-4 col-xs-10">
            <div class="alert alert-success" role="alert">
                You did well
            </div>
            <div class="alert alert-danger" role="alert">
                Oh no! You messed up.
            </div>
          
        </div>
      </div>
      
            
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>