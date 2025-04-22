<?php
include('includes/db.php');
$query = "SELECT * FROM videos ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóng Biến - Tin Tức Video</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Popup quảng cáo Shopee -->
    <div id="popup-ad" class="popup">
        <div class="popup-content">
            <span id="close-popup" class="close">&times;</span>
            <p>Khám phá ưu đãi Shopee ngay!</p>
            <a href="https://shopee.vn" target="_blank">Đi đến Shopee</a>
        </div>
    </div>

    <!-- Danh sách video -->
    <div class="video-list">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="video-item">
                <h2><?php echo $row['title']; ?></h2>
                <div class="video-embed">
                    <?php echo $row['embed_code']; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>
