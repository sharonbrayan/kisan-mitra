<?php
session_start();
$questions = array(
  "What type of crops are best suited for my climate and soil type?" => "The best crops for your farm depend on factors like temperature, rainfall, and soil pH. Research crops that are native to your region or have similar climate requirements to ensure optimal growth. Consider consulting with local agricultural experts or extension services for personalized recommendations.",
  " How do I prepare the soil for planting, and what are the essential nutrients for crop growth?" => " Soil preparation involves testing pH levels, adding organic matter, and removing debris. Essential nutrients for crop growth include nitrogen, phosphorus, and potassium, which can be provided through fertilizers or natural amendments like compost. Regular soil testing helps determine nutrient deficiencies and informs fertilizer applications.",
  "What are the most common pests and diseases that can affect my crops, and how can I control them?" => "Common pests and diseases vary depending on the crop and region, but integrated pest management (IPM) strategies can help control infestations. IPM involves using a combination of techniques like crop rotation, biological control, and targeted pesticide application to minimize damage. Regular monitoring and early detection are key to effective pest and disease management.",
  " How often should I water my crops, and what are the best irrigation methods for my farm?"=>"Watering frequency depends on factors like crop type, climate, and soil moisture levels. Drip irrigation and mulching can help conserve water and reduce evaporation, while also promoting healthy root growth. Monitor soil moisture levels and adjust irrigation schedules accordingly to avoid overwatering or underwatering",
  "What are the benefits and drawbacks of using organic versus conventional farming methods?
"=>"Organic farming methods prioritize natural processes and materials, promoting soil health and biodiversity. While organic farming can be more labor-intensive and potentially lower-yielding, it can also command premium prices and appeal to environmentally conscious consumers. Conventional farming methods, on the other hand, often rely on synthetic fertilizers and pesticides, which can have environmental drawbacks but may offer higher yields and efficiency.",
"How do I choose the right seeds for my farm, and what factors should I consider when selecting seed varieties?"=>"Choose seed varieties that are well-suited to your climate, soil type, and pest management strategies. Consider factors like disease resistance, yield potential, and maturity days when selecting seeds. Research reputable seed suppliers and consult with local experts to ensure you're getting high-quality seeds that meet your needs.",
"What are the basic tools and equipment I need to get started with farming, and how can I maintain them?"=>"Basic tools and equipment include tractors, plows, seeders, and irrigation systems. Regular maintenance is crucial to extend equipment lifespan and prevent breakdowns. Develop a maintenance schedule and keep a toolkit and spare parts on hand to ensure you're prepared for repairs and unexpected issues.",
"How can I market and sell my farm products, and what are the best channels for reaching customers?"=>"Develop a marketing strategy that highlights your farm's unique selling points, such as organic or sustainable practices. Utilize online platforms, social media, and local farmers' markets to reach customers directly. Consider partnering with local restaurants, grocery stores, or food cooperatives to expand your customer base and increase sales."
);

if (!isset($_SESSION['chat_history'])) {
  $_SESSION['chat_history'] = array();
}

if (isset($_POST['submit'])) {
  $selected_question = $_POST['question'];
  $answer = $questions[$selected_question];
  $_SESSION['chat_history'][] = array('question' => $selected_question, 'answer' => $answer);
}
if (isset($_POST['clear'])) {
  unset($_SESSION['chat_history']);
  $_SESSION['chat_history'] = array();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Chatbot</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container{
      display: flex;
      align-items:center;
      justify-content:center;
      flex-direction:column;
    }
    .chat-container {
      width: 450px;
      height: 490px;
      border: 1px solid #ccc;
      padding: 10px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
      margin-top: 5px;
    }
    .chat-message {
      margin-bottom: 10px;
    }
    .user{
        align-self: flex-end;
    }
    .chat-message.user {
      background-color: grey;
      width: 65%;
      border-radius: 10px;
      
    }
    .chat-message.bot {
      background-color: cyan;
      width: 80%;
      border-radius: 10px;
    }
    
    select{
      height:35px;
      width: 300px;
    }
    input{
      height:35px;
      width: 70px;
    }
    
  </style>
  <link rel="stylesheet" href="http://localhost/Kisan Mitra/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="shortcut icon" href="http://localhost/Kisan%20Mitra/photos/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/home.css">
    <link rel="stylesheet" href="http://localhost/Kisan%20Mitra/home/multipurpose.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
<header>
        <div class="container-fluid head-content">
            <div class="row h-100">
                <div class="col-6 h-100 d-flex flex-row">
                    <div class="col-6">
                        <div class="logo-col ms-6">
                            <img src="http://localhost/Kisan%20Mitra/photos/logo.jpg" alt="" srcset="" class="pb-3 limg">
                        </div>
                        <div>
                            <p>Smart Farming, Better Harvest</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <?php
                            if (session_status() === PHP_SESSION_NONE) {
                                session_start();
                            }
                            if (isset($_SESSION['username'])) {
                                echo "<p class='fs-4 mt-4'>Welcome, <span class='fw-bold'>" . $_SESSION['username'] . "</span></p>";

                            }
                        ?>
                    </div>
                </div>
                <div class="col-6 h-100 d-flex justify-content-end align-items-center alink-container gap-3">
                    <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink">
                    <a href="http://localhost/Kisan%20Mitra/home/home.php" class="a2 ahover">Home</a>
                    </div>
                    <!-- <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
                        <a href="http://localhost/Kisan%20Mitra/login/login.php" class="a3 ahover">Login</a>
                    </div> -->
                    <?php
                   if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }  
                    if (isset($_SESSION['username'])) {
                        echo '<div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
                        <a href="http://localhost/Kisan%20Mitra/login/logout.php" class="a3 ahover">Logout</a>
                        </div></a>';
                    } else {
                        echo '<div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
                        <a href="http://localhost/Kisan%20Mitra/login/login.php" class="a3 ahover">Login</a>
                        </div>';
                    }
                    ?>

                    <!-- <div class="col-3 fs-4 fw-medium d-flex justify-content-center head-alink ms-">
                        <a href="http://localhost/Kisan%20Mitra/dashboard/dashboard.php" class="a3 ahover">Dashboard</a>
                    </div> -->
                    <div class="col-3 fs-2 fw-bold d-flex justify-content-center head-alink"
                        style="height: 56px; padding-top: 5px;">
                        <a href="http://localhost/Kisan%20Mitra/cart/cart.php" class="a4 ahover"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container">
<div class="chat-container" id="chat-container">
  <?php foreach ($_SESSION['chat_history'] as $chat) { ?>
    <div class="chat-message user">
      <p>You: <?php echo $chat['question']; ?></p>
    </div>
    <div class="chat-message bot">
      <p>Bot: <?php echo $chat['answer']; ?></p>
    </div>
  <?php } ?>
  
</div>
<form action="" method="post" id="">
    <select name="question">
      <?php foreach ($questions as $question => $answer) { ?>
        <option value="<?php echo $question; ?>"><?php echo $question; ?></option>
      <?php } ?>
    </select>
    <input type="submit" name="submit" value="Send">
  </form>
</div>
<form action="" method="post">
  <button type="submit" name="clear" value="1" style="position:fixed; bottom:5%; right:3%;" id="clrbtn">Reset</button>
</form>


  
<script>
  window.onload = function() {
  const chatContainer = document.getElementById('chat-container');
  chatContainer.scrollTop = chatContainer.scrollHeight;

  const botMessages = document.querySelectorAll('.chat-message.bot');
  const latestBotMessage = botMessages[botMessages.length - 1];

  if (latestBotMessage) {
    const typingMessage = document.createElement('div');
    typingMessage.classList.add('chat-message', 'bot');
    typingMessage.innerHTML = '<p>Bot is typing...</p>';
    chatContainer.appendChild(typingMessage);
    chatContainer.scrollTop = chatContainer.scrollHeight;

    latestBotMessage.style.display = 'none';
    setTimeout(() => {
      typingMessage.remove();
      latestBotMessage.style.display = 'block';
      chatContainer.scrollTop = chatContainer.scrollHeight;
    }, 2000);
  }
};


</script>


</body>
</html>

