<?php 
include 'includes/header.php'; 
include 'includes/data.php'; 
?>

<section class="projects-list">
    <h2>Selected Projects</h2>
    <div class="grid">
        <?php foreach ($projects as $project): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                <span class="category"><?php echo htmlspecialchars($project['category']); ?></span>
                <p><?php echo htmlspecialchars($project['description']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
