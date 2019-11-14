<?php
define('TITLE', 'Status');
define('PAGE', 'CheckStatus');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['rEmail'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}
?>
<div class="col-sm-6 mt-5  mx-3">
  <form action="" class="mt-3 form-inline d-print-none">
    <div class="form-group mr-3">
      <label for="checkid">Enter Request ID: </label>
      <input type="text" class="form-control ml-3" id="checkid" name="checkid" onkeypress="isInputNumber(event)">
    </div>
    <button type="submit" class="btn btn-danger">Search</button>
  </form>
  <?php
  if(isset($_REQUEST['checkid'])){
    $sql = "SELECT * FROM submitrequest_tb WHERE request_id = {$_REQUEST['checkid']}";
    $result = $conn->query($sql);

    

    if($result->num_rows == 1){
      $row = $result->fetch_assoc();
      
      $bmi = $row['bmi'];
  if ($bmi <= 18.5)
  { 


    echo "
    <br><br>
    <center><p style='font-size: x-large;'>Indian diet plan for weight gain (3000 calories)</p></center><br>
    <style>
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tclass{text-align:left;vertical-align:top}
      
      #tid {
        margin-left: 100px;
        margin-right: 100px;
        font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
        border-collapse: collapse;
      }
      
      #tid td, #tid th {
        border: 1px solid #ddd;
        padding: 15px;
        width: max-content;
        text-align: center;
      }
      
      #tid tr:nth-child(even){background-color: #f2f2f2;}
      
      #tid tr:hover {background-color: #ddd;}
      
      #tid th {
        align-content: center;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color:  #DC3545;
        color: black;
      }
      
      
        </style>
    

        <table class='tg' id='tid'>
      <tr>
        <th class='tclass' colspan='4'>Indian diet plan for weight gain (3000 calories)</th>
      </tr>
      <tr>
        <td class='tclass'>FOOD ITEM</td>
        <td class='tclass'>AMOUNT</td>
        <td class='tclass'>CALORIES</td>
        <td class='tclass'>PROTEIN (GMS )</td>
      </tr>
      <tr>
        <th class='tclass' colspan='4'>Early Morning</th>
      </tr>
      <tr>
        <td class='tclass'>Milk&nbsp;&nbsp;(Add 2 tbsp skimmed milk powder )</td>
        <td class='tclass'>1 glass</td>
        <td class='tclass'>250</td>
        <td class='tclass'>8</td>
      </tr>
      <tr>
        <td class='tclass'>Egg whites or Banana</td>
        <td class='tclass'>2 or 2</td>
        <td class='tclass'>110 or 80</td>
        <td class='tclass'>8 or 1</td>
      </tr>
      <tr>
        <td class='tclass'>Soaked Almonds</td>
        <td class='tclass'>10 gm (6-7 pcs)</td>
        <td class='tclass'>50</td>
        <td class='tclass'>3</td>
      </tr>
      <tr>
        <th class='tclass' colspan='4'>Breakfast</th>
      </tr>
      <tr>
        <td class='tclass'>Vegetable stuffed paratha, Curd</td>
        <td class='tclass'>2, 1 cup</td>
        <td class='tclass'>350+100</td>
        <td class='tclass'>6 + 6</td>
      </tr>
      <tr>
        <td class='tclass'>Or&nbsp;&nbsp;Masala Dosa, Sambar, Chutney</td>
        <td class='tclass'>2, 2 cups,1 spoon</td>
        <td class='tclass'>200+100+50</td>
        <td class='tclass'>3 + 6</td>
      </tr>
      <tr>
        <td class='tclass'>Or&nbsp;&nbsp;mung dal chilla (pancake ) with paneer stuffing</td>
        <td class='tclass'>2</td>
        <td class='tclass'>250</td>
        <td class='tclass'>8</td>
      </tr>
      <tr>
        <td class='tclass'>Or Omlete, Toasted bread</td>
        <td class='tclass'>2 eggs 6 bread slices</td>
        <td class='tclass'>160+300</td>
        <td class='tclass'>8 + 4</td>
      </tr>
      <tr>
        <th class='tclass' colspan='4'>Mid-morning</th>
      </tr>
      <tr>
        <td class='tclass'>Groundnut chikki / Dry Fruit chikki</td>
        <td class='tclass'>3-4 pcs</td>
        <td class='tclass'>150</td>
        <td class='tclass'>8</td>
      </tr>
      <tr>
        <td class='tclass'>Roasted Soybean / Almonds</td>
        <td class='tclass'>handful</td>
        <td class='tclass'>150</td>
        <td class='tclass'>7</td>
      </tr>
      <tr>
        <td class='tclass'>Lassi</td>
        <td class='tclass'>1 glass</td>
        <td class='tclass'>150</td>
        <td class='tclass'>6</td>
      </tr>
      <tr>
        <th class='tclass' colspan='4'>Lunch</th>
      </tr>
      <tr>
        <td class='tclass'>Sprout salad</td>
        <td class='tclass'>1 cup</td>
        <td class='tclass'>100</td>
        <td class='tclass'>6</td>
      </tr>
      <tr>
        <td class='tclass'>Or chicken soup</td>
        <td class='tclass'>1 bowl</td>
        <td class='tclass'>100</td>
        <td class='tclass'>6</td>
      </tr>
      <tr>
        <td class='tclass'>Chapati</td>
        <td class='tclass'>2&nbsp;&nbsp;(medium with ghee)</td>
        <td class='tclass'>200</td>
        <td class='tclass'>3</td>
      </tr>
      <tr>
        <td class='tclass'>Veg (potato/ cauliflower/ cabbage/ ladyfinger / bottle gourd/ ridge gourd/ brinjal etc)</td>
        <td class='tclass'>2 cups</td>
        <td class='tclass'>150</td>
        <td class='tclass'>1</td>
      </tr>
      <tr>
        <td class='tclass'>Dal / legumes (soybean / moth/ mung etc)</td>
        <td class='tclass'>1 cup</td>
        <td class='tclass'>150</td>
        <td class='tclass'>5</td>
      </tr>
      <tr>
        <td class='tclass'>Rice / biryani / pulav (veg / non veg)</td>
        <td class='tclass'>1 cup</td>
        <td class='tclass'>150</td>
        <td class='tclass'>2</td>
      </tr>
      <tr>
        <th class='tclass' colspan='4'>Evening</th>
      </tr>
      <tr>
        <td class='tclass'>Tea / Coffee</td>
        <td class='tclass'>1 cup</td>
        <td class='tclass'>100</td>
        <td class='tclass'>1</td>
      </tr>
      <tr>
        <td class='tclass'>Cookies</td>
        <td class='tclass'>4</td>
        <td class='tclass'>100</td>
        <td class='tclass'>2</td>
      </tr>
      <tr>
        <th class='tclass' colspan='4'>Mid-evening</th>
      </tr>
      <tr>
        <td class='tclass'>Groundnut chikki / DryFruit chikki</td>
        <td class='tclass'>3-4 pcs</td>
        <td class='tclass'>150</td>
        <td class='tclass'>8</td>
      </tr>
      <tr>
        <td class='tclass'>Roasted Soybean / Almonds</td>
        <td class='tclass'>hand full</td>
        <td class='tclass'>150</td>
        <td class='tclass'>7</td>
      </tr>
      <tr>
        <td class='tclass'>Dinner same as lunch</td>
        <td class='tclass'></td>
        <td class='tclass'>750</td>
        <td class='tclass'>18</td>
      </tr>
      <tr>
        <th class='tclass' colspan='4'>Late night</th>
      </tr>
      <tr>
        <td class='tclass'>Milk&nbsp;&nbsp;(Add 2 tbsp skimmed milk powder )</td>
        <td class='tclass'>1 glass</td>
        <td class='tclass'>250</td>
        <td class='tclass'>8</td>
      </tr>
      <tr>
        <td class='tclass'>Banana</td>
        <td class='tclass'>2</td>
        <td class='tclass'>80</td>
        <td class='tclass'>1</td>
      </tr>
      <tr>
        <td class='tclass'>Soaked Almonds</td>
        <td class='tclass'>10 gm (6-7 pcs)</td>
        <td class='tclass'>50</td>
        <td class='tclass'>3</td>
      </tr>
      <tr>
        <td class='tclass'>TOTAL</td>
        <td class='tclass'></td>
        <td class='tclass'>3210</td>
        <td class='tclass'>95</td>
      </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    
    
    
    
    ";



   } 
  else if ($bmi > 18.5 AND $bmi<=24.9 )
   { 

    echo "
    <br><br>
    <center><p style='font-size: x-large;'>Veg Keto diet plans for different calories</p></center><br>
    <style>
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tclass{text-align:left;vertical-align:top}
      
      #tid {
        margin-left: 100px;
        margin-right: 100px;
        font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
        border-collapse: collapse;
      }
      
      #tid td, #tid th {
        border: 1px solid #ddd;
        padding: 15px;
        width: max-content;
        text-align: center;
      }
      
      #tid tr:nth-child(even){background-color: #f2f2f2;}
      
      #tid tr:hover {background-color: #ddd;}
      
      #tid th {
        align-content: center;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color:  #DC3545;
        color: black;
      }
      
      
        </style>


        <table class='tg' id='tid'>
      <tr>
        <th class='tclass' colspan='2'>Veg Keto diet plans for different calories</th>
      </tr>
      <tr>
        <td class='tclass' colspan='2'></td>
      </tr>
      <tr>
        <td class='tclass' colspan='2'>VEG KETO – 1500 KCAL DIET PLAN</td>
      </tr>
      <tr>
        <th class='tclass'>Early Morning:</th>
        <td class='tclass'>1 glass warm water with Lemon juice</td>
      </tr>
      <tr>
        <th class='tclass'>Breakfast:</th>
        <td class='tclass'>1 cup Bullet Coffee + 1.5 cups Paneer Bhurji + 1 fruit</td>
      </tr>
      <tr>
        <th class='tclass'>Lunch:</th>
        <td class='tclass'>1 cup Salad with ½ cup cheese sauce + 1 ½ Methi Quinoa Dal Khichdi + 1 cup curd</td>
      </tr>
      <tr>
        <th class='tclass'>Evening:</th>
        <td class='tclass'>1 cup Bullet Coffee + Grilled Paneer (80 gms) and walnut tikka</td>
      </tr>
      <tr>
        <th class='tclass'>Dinner:</th>
        <td class='tclass'>1 Cup Spinach Mushroom Soup + 1.5 cup Soy Chilli</td>
      </tr>
      <tr>
        <td class='tclass' colspan='2'></td>
      </tr>
      <tr>
        <td class='tclass' colspan='2'>VEG KETO – 1200 KCAL DIET PLAN</td>
      </tr>
      <tr>
        <th class='tclass'>Early Morning:</th>
        <td class='tclass'>1 glass warm water with ¼ teaspoon cinnamon powder</td>
      </tr>
      <tr>
        <th class='tclass'>Breakfast:</th>
        <td class='tclass'>1 cup Bullet Coffee + 1 cup Grilled Mushroom Salad</td>
      </tr>
      <tr>
        <th class='tclass'>Lunch:</th>
        <td class='tclass'>1 cup Cheese Broccoli Soup + 3 – 4 pcs Soya Paneer Patty + 1 cup yogurt</td>
      </tr>
      <tr>
        <th class='tclass'>Evening:</th>
        <td class='tclass'>1 glass warm water with lemon</td>
      </tr>
      <tr>
        <th class='tclass'>Dinner:</th>
        <td class='tclass'>1.5 cups Creamy Black Bean and Vegetable Hotpot</td>
      </tr>
      <tr>
        <td class='tclass' colspan='2'></td>
      </tr>
      <tr>
        <td class='tclass' colspan='2'>VEG KETO&nbsp;&nbsp;– 1000 KCAL DIET PLAN</td>
      </tr>
      <tr>
        <th class='tclass'>Early Morning:</th>
        <td class='tclass'>1 glass Green Juice</td>
      </tr>
      <tr>
        <th class='tclass'>Breakfast:</th>
        <td class='tclass'>1 cup Bullet Coffee</td>
      </tr>
      <tr>
        <th class='tclass'>Lunch:</th>
        <td class='tclass'>Free Liquids – Thin buttermilk, Infused Water, Lemon water, Barley water</td>
      </tr>
      <tr>
        <th class='tclass'>Evening:</th>
        <td class='tclass'>1 glass warm water with lemon</td>
      </tr>
      <tr>
        <th class='tclass'>Dinner:</th>
        <td class='tclass'>2 cups Mushroom Paneer Veggie Salad with French dressing</td>
      </tr>
      <tr>
        <td class='tclass' colspan='2'></td>
      </tr>
      <tr>
        <td class='tclass' colspan='2'>VEG KETO – 800 KCAL DIET PLAN</td>
      </tr>
      <tr>
        <th class='tclass'>Early Morning:</th>
        <td class='tclass'>1 glass warm water with a little lemon</td>
      </tr>
      <tr>
        <th class='tclass'>Breakfast:</th>
        <td class='tclass'>Free Liquids – Thin buttermilk, Infused Water, Lemon water, Barley water</td>
      </tr>
      <tr>
        <th class='tclass'>Lunch:</th>
        <td class='tclass'>Free Liquids – Thin buttermilk, Infused Water, Lemon water, Barley water</td>
      </tr>
      <tr>
        <th class='tclass'>Evening:</th>
        <td class='tclass'>1 glass warm water with lemon</td>
      </tr>
      <tr>
        <th class='tclass'>Dinner:</th>
        <td class='tclass'>4 – 5 medium size pieces Barbequed Adraki Paneer with bell peppers</td>
      </tr>
    </table>





    ";



    

} 
   else if ($bmi > 24.9 AND $bmi<=29.9) 
   { 


    echo "
    <br><br>
    <center><p style='font-size: x-large;'>5 Days Weight Loss</p></center><br>
    <style>
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tclass{text-align:left;vertical-align:top}
      
      #tid {
        margin-left: 100px;
        margin-right: 100px;
        font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
        border-collapse: collapse;
      }
      
      #tid td, #tid th {
        border: 1px solid #ddd;
        padding: 15px;
        width: max-content;
        text-align: center;
      }
      
      #tid tr:nth-child(even){background-color: #f2f2f2;}
      
      #tid tr:hover {background-color: #ddd;}
      
      #tid th {
        align-content: center;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color:  #DC3545;
        color: black;
      }
      
      
        </style>
        <table class='tg' id='tid'>
           
          <tr>
            <th colspan='2'>Day 1</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>steel-cut oats with apples peanut butter and cinnamon</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>a salad with greens hard-boiled eggs avocado tomatoes and balsamic vinaigrette</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>black-bean soup with a dollop of Greek yogurt whole-grain bread and a side salad</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>almonds and dark chocolate</td>
          </tr>
          <tr>
            <th colspan='2'>Day 2</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>scrambled eggs with broccoli and cheddar plus a side of berries</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>a burrito bowl with brown rice pinto beans tomato onion and avocado</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>zucchini noodles with marinara sunflower seeds and white beans</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>string cheese or an orange</td>
          </tr>
          <tr>
            <th colspan='2'>Day 3</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>plain Greek yogurt with pineapple shredded coconut and walnuts</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>lentil soup chopped bell peppers and guacamole</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>eggplant Parmesan served over whole-grain pasta and green beans</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>a whole-grain granola bar or berries</td>
          </tr>
          <tr>
            <th colspan = '2'>Day 4</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>a smoothie bowl made from unsweetened almond milk spinach hemp seeds frozen berries and a banana</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>an egg salad on whole-grain bread with strawberries carrots and hummus</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>stir-fry with tofu carrots broccoli brown rice soy sauce and honey</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>dried mango and pistachios</td>
          </tr>
          <tr>
            <th colspan = '2'>Day 5</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>two eggs and one slice of whole-grain toast with avocado plus a side of grapes</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>a salad with kale pecans dried cranberries goat cheeseand edamame</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>homemade chickpea patties alongside sauted mushrooms and a baked sweet potato</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>plain Greek yogurt with cherries</td>
          </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        
    
    
    
    
    
    " ;







    }
    else if ($bmi > 30.0) { 

    
    echo "
    <br><br>
    <center><p style='font-size: x-large;'>5 Days Weight Loss</p></center><br>
    <style>
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tclass{text-align:left;vertical-align:top}
      
      #tid {
        margin-left: 100px;
        margin-right: 100px;
        font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
        border-collapse: collapse;
      }
      
      #tid td, #tid th {
        border: 1px solid #ddd;
        padding: 15px;
        width: max-content;
        text-align: center;
      }
      
      #tid tr:nth-child(even){background-color: #f2f2f2;}
      
      #tid tr:hover {background-color: #ddd;}
      
      #tid th {
        align-content: center;
        padding-top: 20px;
        padding-bottom: 20px;
        background-color:  #DC3545;
        color: black;
      }
      
      
        </style>
        <table class='tg' id='tid'>
           
          <tr>
            <th colspan='2'>Day 1</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>steel-cut oats with apples peanut butter and cinnamon</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>a salad with greens hard-boiled eggs avocado tomatoes and balsamic vinaigrette</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>black-bean soup with a dollop of Greek yogurt whole-grain bread and a side salad</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>almonds and dark chocolate</td>
          </tr>
          <tr>
            <th colspan='2'>Day 2</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>scrambled eggs with broccoli and cheddar plus a side of berries</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>a burrito bowl with brown rice pinto beans tomato onion and avocado</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>zucchini noodles with marinara sunflower seeds and white beans</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>string cheese or an orange</td>
          </tr>
          <tr>
            <th colspan='2'>Day 3</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>plain Greek yogurt with pineapple shredded coconut and walnuts</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>lentil soup chopped bell peppers and guacamole</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>eggplant Parmesan served over whole-grain pasta and green beans</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>a whole-grain granola bar or berries</td>
          </tr>
          <tr>
            <th colspan = '2'>Day 4</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>a smoothie bowl made from unsweetened almond milk spinach hemp seeds frozen berries and a banana</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>an egg salad on whole-grain bread with strawberries carrots and hummus</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>stir-fry with tofu carrots broccoli brown rice soy sauce and honey</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>dried mango and pistachios</td>
          </tr>
          <tr>
            <th colspan = '2'>Day 5</th>
          </tr>
          <tr>
            <td>Breakfast:</td>
            <td>two eggs and one slice of whole-grain toast with avocado plus a side of grapes</td>
          </tr>
          <tr>
            <td>Lunch:</td>
            <td>a salad with kale pecans dried cranberries goat cheeseand edamame</td>
          </tr>
          <tr>
            <td>Dinner:</td>
            <td>homemade chickpea patties alongside sauted mushrooms and a baked sweet potato</td>
          </tr>
          <tr>
            <td>Snack:</td>
            <td>plain Greek yogurt with cherries</td>
          </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        
    
    
    
    
    
    " ;



    




    } else {
      echo "Failed";
    }
 }}
 ?>


<?php
include('includes/footer.php'); 
?>