<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/esm/axios.min.js' integrity='sha512-GDviEqpkwOmJCn995sf39yb0OnAa6uFvXPAV3M01ZZXUKL99sJqXZptxC+bZBVkeQieUzJdsCghZdJT2vx8jOg==' crossorigin='anonymous'></script>

  <title>Spesa in PHP</title>
</head>
<body>

  <div id="app">

    <div class="logo">
      <h1>LISTA DELLA SPESA</h1>
    </div>
    
    <div class="input-area">
      <input v-model.trim="newTaskString" @keyup.enter="addTask" type="text" placeholder="Aggiungi una cosa">
      <button @click="addTask">Aggiungi</button>
      <div>
        <span class="error">{{errorMsg}}</span>
      </div>
     </div>
     
     <div class="container">

      <ul class = "tasks-list">
        
        <li v-for="(task, index) in tasks" :class="{'done': task.done}" @click="task.done = !task.done">
          <span>{{task.text}}</span>
          
          <i @click.stop="removeTask(index)" class="fa-solid fa-trash"></i>
        </li>
        
      </ul>  
      </div>
      
    </div>
    
    <div class="logo">
      <span>powered by</span>
      <img src="https://hiringplatform.boolean.careers/images/logo.png" alt="logo boolean">
    </div>

    <script src="assets/script.js"></script>
</body>
</html>