<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter</title>
    <?php include 'includes/bootstrapcdnlinks.php'; ?>
</head>
<body class="p-3">
    <?php include 'includes/navigation.php'; ?>

    <main class="container" style="max-width: 760px;">
        <h1>Newsletter</h1>

        <!-- Step 3: Display the current request method here. -->
        <p> Request method is: <strong><?= $_SERVER['REQUEST_METHOD'] ?></strong></p>
        <!-- Step 4: Inspect the POST array here. -->
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <h2>Raw POST data</h2>
            <pre><?php var_dump($_POST); ?></pre>
            <a class="btn btn-secondary" href="newsletter.php">Back to form</a>
        <?php else: ?>
        <!-- Step 5: Place this form in the GET branch. -->
        <form action="newsletter.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="user">Username</label>
                <input class="form-control" type="text" id="user" name="user">
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" id="email" name="email">
            </div>

            <button class="btn btn-primary" type="submit">Subscribe</button>
        </form>
        <?php endif; ?>
    </main>
</body>
</html>
