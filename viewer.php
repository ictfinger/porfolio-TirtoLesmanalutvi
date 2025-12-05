<?php
$url = isset($_GET['url']) ? $_GET['url'] : '';
$title = isset($_GET['title']) ? $_GET['title'] : 'Project Viewer';

if (empty($url)) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?> - Portfolio Viewer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            font-family: 'Outfit', sans-serif;
        }

        .viewer-header {
            height: 60px;
            background: #0f172a;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            color: white;
        }

        .viewer-iframe {
            width: 100%;
            height: calc(100% - 60px);
            border: none;
            background: white;
        }

        .btn-close-viewer {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }

        .btn-close-viewer:hover {
            color: #a855f7;
        }

        .device-toggles {
            display: flex;
            gap: 15px;
        }

        .device-btn {
            background: transparent;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            transition: all 0.3s;
        }

        .device-btn.active,
        .device-btn:hover {
            color: white;
        }

        .iframe-container {
            width: 100%;
            height: calc(100% - 60px);
            display: flex;
            justify-content: center;
            background: #1e293b;
            transition: all 0.3s;
        }

        .iframe-wrapper {
            width: 100%;
            height: 100%;
            transition: all 0.3s;
            background: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        /* Device Dimensions */
        .mobile-view {
            width: 375px;
            height: 100%;
            border-left: 1px solid #333;
            border-right: 1px solid #333;
        }

        .tablet-view {
            width: 768px;
            height: 100%;
            border-left: 1px solid #333;
            border-right: 1px solid #333;
        }

        .desktop-view {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="viewer-header">
        <div class="d-flex align-items-center">
            <a href="projects.php" class="btn-close-viewer me-4">
                <i class="fas fa-arrow-left"></i> Back to Portfolio
            </a>
            <h5 class="m-0 fw-bold"><?php echo htmlspecialchars($title); ?></h5>
        </div>

        <div class="device-toggles d-none d-md-flex">
            <button class="device-btn active" onclick="setDevice('desktop')" title="Desktop View">
                <i class="fas fa-desktop"></i>
            </button>
            <button class="device-btn" onclick="setDevice('tablet')" title="Tablet View">
                <i class="fas fa-tablet-alt"></i>
            </button>
            <button class="device-btn" onclick="setDevice('mobile')" title="Mobile View">
                <i class="fas fa-mobile-alt"></i>
            </button>
        </div>

        <a href="<?php echo htmlspecialchars($url); ?>" target="_blank" class="btn btn-sm btn-primary rounded-pill">
            Open Original <i class="fas fa-external-link-alt ms-1"></i>
        </a>
    </div>

    <div class="iframe-container">
        <div class="iframe-wrapper desktop-view" id="iframeWrapper">
            <iframe src="<?php echo htmlspecialchars($url); ?>" class="viewer-iframe" title="Project Preview"></iframe>
        </div>
    </div>

    <script>
        function setDevice(device) {
            const wrapper = document.getElementById('iframeWrapper');
            const buttons = document.querySelectorAll('.device-btn');

            // Reset classes
            wrapper.className = 'iframe-wrapper';
            buttons.forEach(btn => btn.classList.remove('active'));

            // Set new class
            wrapper.classList.add(device + '-view');

            // Set active button
            const iconMap = {
                'desktop': 'fa-desktop',
                'tablet': 'fa-tablet-alt',
                'mobile': 'fa-mobile-alt'
            };

            buttons.forEach(btn => {
                if (btn.querySelector('i').classList.contains(iconMap[device])) {
                    btn.classList.add('active');
                }
            });
        }
    </script>

</body>

</html>