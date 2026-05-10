
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>در حال انتقال به پخش آنلاین</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            padding: 20px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 40px 30px;
            text-align: center;
            max-width: 480px;
            width: 100%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.8s ease-out;
        }

        .logo {
            font-size: 48px;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.9);
        }

        h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 25px;
            line-height: 1.4;
        }

        .loader-container {
            margin: 30px 0;
        }

        .loader {
            width: 60px;
            height: 60px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            margin: 0 auto;
            animation: spin 1s linear infinite;
        }

        .progress-bar {
            height: 6px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 3px;
            margin: 25px 0;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background: #fff;
            width: 0%;
            border-radius: 3px;
            animation: progress 3s linear forwards;
        }

        .countdown {
            font-size: 14px;
            opacity: 0.8;
            margin-top: 15px;
        }

        .security-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            margin-top: 20px;
        }

        .manual-link {
            margin-top: 25px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            font-size: 14px;
        }

        .manual-link a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            word-break: break-all;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes progress {
            0% { width: 0%; }
            100% { width: 100%; }
        }

        @media (max-width: 480px) {
            .glass-card {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 20px;
            }
            
            .logo {
                font-size: 40px;
            }
        }
    </style>
    <meta http-equiv="refresh" content="3;url=watch.php?l=7425809147-fOp5hoYM">
</head>
<body>
    <div class="glass-card">
        <div class="logo">
            <i class="fas fa-paper-plane"></i>
        </div>
        
        <h1 id="message">
            در حال انتقال به صفحه پخش آنلاین...        </h1>
        
        <div class="loader-container">
            <div class="loader"></div>
        </div>
        
        <div class="progress-bar">
            <div class="progress"></div>
        </div>
        
        <div class="countdown" id="countdown">
            انتقال در ۳ ثانیه        </div>
        
        <div class="security-badge">
            <i class="fas fa-shield-alt"></i>
            <span>اتصال امن</span>
        </div>
        
        <div class="manual-link" style="display: none;" id="manualLink">
            <p>اگر انتقال انجام نشد، روی لینک زیر کلیک کنید:</p>
            <a href="watch.php?l=7425809147-fOp5hoYM" id="downloadLink"></a>
        </div>
    </div>

    <script>
        let countdown = 3;
        const countdownElement = document.getElementById('countdown');
        const messageElement = document.getElementById('message');
        const manualLink = document.getElementById('manualLink');
        const downloadLink = document.getElementById('downloadLink');
        
        // Update countdown
        const countdownInterval = setInterval(() => {
            countdown--;
            if (countdown <= 0) {
                clearInterval(countdownInterval);
                countdownElement.textContent = 'در حال انتقال...';
                messageElement.innerHTML = '✅ درخواست شما با موفقیت تایید شد';
            } else {
                countdownElement.textContent = 'انتقال در ' + countdown + ' ثانیه';
            }
        }, 1000);
        
        // Show manual link after 3 seconds
        setTimeout(() => {
            manualLink.style.display = 'block';
            downloadLink.href = 'watch.php?l=7425809147-fOp5hoYM';
            downloadLink.textContent = 'watch.php?l=7425809147-fOp5hoYM';
        }, 3000);
    </script>
</body>
</html>

            