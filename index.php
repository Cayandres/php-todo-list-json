<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.47/vue.global.js' integrity='sha512-2zwx0mkoR2cxZY0humPK79YhJYgoX5lT+WNqkgTcV7qhVm3+msjlmOgoXnN1cW2r9qqbZez3XhnLZsyW3k8Wtg==' crossorigin='anonymous'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.js' integrity='sha512-RjvSEaeDqPCfUVQ9kna2/2OqHz/7F04IOl1/66LmQjB/lOeAzwq7LrbTzDbz5cJzlPNJ5qteNtHR56XaJSTNWw==' crossorigin='anonymous'></script>

  <title>Spesa in PHP</title>
</head>
<body>

  <div id="app">

    <div class="logo">
      <h1>LISTA DELLA SPESA</h1>
    </div>
    
    <div class="input-area">
      <input type="text" placeholder="Aggiungi una cosa">
      <button>Aggiungi</button>
     </div>
     
     <div class="container">

      <ul class = "tasks-list">
        
        <li v-for="(task, index) in tasks" :key="index">
          <span>{{task.text}}</span>
          
          <i class="fa-solid fa-trash"></i>
        </li>
        
      </ul>  
      </div>
      
    </div>
    
    <div class="logo">
      <span>powered by</span>
      <img src="https://hiringplatform.boolean.careers/images/logo.png" alt="logo boolean">
    </div>

    <script src="script.js"></script>
</body>
</html>