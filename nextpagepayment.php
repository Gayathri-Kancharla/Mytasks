<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Page</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color:white;
            background-color:black;
        }

        .cards {
            display: flex;
            justify-content: space-around;
            width: 80%;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .card:hover {
            animation: scaleCard 0.3s ease-in-out;
        }

        @keyframes scaleCard {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.05);
            }
        }

        .payment {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .subscribe-button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .subscribe-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="cards">
        <div class="card" onclick="selectPlan(100)">
            <h2>Basic Plan</h2>
            <p>$199/month</p>
            <form action="account.php" method="POST">
           <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="rzp_test_2mV87BJEHMfFjI" 
                data-amount="19935" 
                data-currency="INR"
                 data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                data-image="https://example.com/your_logo.jpg"
                data-prefill.name="Gayathri"
                data-prefill.email="gayathri@example.com"
                data-theme.color="#F37254"
            ></script> 
            <input type="hidden" custom="Hidden Element" name="hidden"/>
            </form>
        </div>
        <div class="card" onclick="selectPlan(200)">
            <h2>Standard Plan</h2>
            <p>$299/month</p>
            <form action="account.php" method="POST">
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="rzp_test_2mV87BJEHMfFjI" 
                data-amount="29935" 
                data-currency="INR"
                 data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                data-image="https://example.com/your_logo.jpg"
                data-prefill.name="Gayathri"
                data-prefill.email="gayathri@example.com"
                data-theme.color="#F37254"
            ></script> 
            <input type="hidden" custom="Hidden Element" name="hidden"/>
            </form>
        </div>
        <div class="card" onclick="selectPlan(300)">
            <h2>Subscription Plan (No Ads)</h2>
            <p>$399/month</p>
            <form action="account.html" method="POST">
           <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="rzp_test_2mV87BJEHMfFjI" 
                data-amount="39935" 
                data-currency="INR"
                 data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
                data-image="https://example.com/your_logo.jpg"
                data-prefill.name="Gayathri"
                data-prefill.email="gayathri@example.com"
                data-theme.color="#F37254"
            ></script> 
            <input type="hidden" custom="Hidden Element" name="hidden"/>
            
            </form>
        </div>
       
    </div>
  
    <script>
        function selectPlan(price) {
            console.log("Selected plan with price: $" + price);
        }

        function proceedToPayment() {
            header:nextpaymentpage.php;
            console.log("Proceeding to payment");
            
        }
        
    </script>
</body>
</html>
