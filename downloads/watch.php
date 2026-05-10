
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تماشای آنلاین - dl.php</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); /* گرادیانت مشابه getFile.php */
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
            padding: 30px;
            text-align: center;
            max-width: 900px; /* پهنای بیشتر برای ویدئو */
            width: 100%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.8s ease-out;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header-content {
            margin-bottom: 25px;
        }

        .logo {
            font-size: 48px;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.9);
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
            line-height: 1.4;
            color: rgba(255, 255, 255, 0.95);
        }
        
        .file-info {
            font-size: 16px;
            opacity: 0.8;
            margin-bottom: 20px;
            word-break: break-all;
        }

        video {
            display: block;
            width: 100%;
            max-height: 60vh; /* حداکثر ارتفاع برای پلیر */
            border-radius: 16px;
            margin-bottom: 30px;
            background-color: #000; /* پس‌زمینه مشکی برای پلیر */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap; /* برای واکنش‌گرایی در موبایل */
            justify-content: center;
            gap: 20px;
            width: 100%;
            margin-top: 20px;
        }

        .action-buttons a {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.15); /* رنگ شیشه‌ای */
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .action-buttons a:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .security-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            margin-top: 30px;
            opacity: 0.7;
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

        @media (max-width: 768px) {
            .glass-card {
                padding: 20px;
            }
            h1 {
                font-size: 24px;
            }
            .action-buttons {
                flex-direction: column;
                gap: 15px;
            }
            .action-buttons a {
                width: 80%; /* دکمه‌های پهن‌تر در موبایل */
                margin: 0 auto;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 40px;
            }
            h1 {
                font-size: 20px;
            }
            .file-info {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="glass-card">
        <div class="header-content">
            <div class="logo">
                <i class="fas fa-play-circle"></i>
            </div>
            <h1>
                پخش آنلاین            </h1>
            <p class="file-info">
                فایل:                <br>
                dl.php            </p>
        </div>
        
        <video controls autoplay>
            <source src="getStream.php?l=7425809147-fOp5hoYM" type="video/x-matroska">
            <source src="getStream.php?l=7425809147-fOp5hoYM" type="video/mp4">
            <source src="getStream.php?l=7425809147-fOp5hoYM" type="audio/mp3"> 
            <p>
                مرورگر شما از تماشای ویدئو پشتیبانی نمی‌کند.                <a href="getFile.php?l=7425809147-fOp5hoYM&download=true">
                    برای دانلود مستقیم اینجا کلیک کنید.                </a>
            </p>
        </video>

        <div class="action-buttons">
            <a href="getFile.php?l=7425809147-fOp5hoYM&download=true" download>
                <i class="fas fa-download"></i>
                دانلود فایل            </a>
            </div>
        
        <div class="security-badge">
            <i class="fas fa-shield-alt"></i>
            <span>اتصال امن</span>
        </div>
    </div>
</body>
</html>
