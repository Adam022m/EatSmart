<?php
require __DIR__ . '/includes/variable.php';
require __DIR__ . '/includes/header.php';
?>

<body>
  <h2 class="title-commandes">A vous le choix !</h2>
  <form id="orderForm">
    <section class="menu commandes-menu">
      <!-- Snack gourmand -->
      <ul class="plats">
        <h2>Snack gourmand</h2>
        <img src=<?= $sandwich[0]['image']; ?> height="250">
        <li>
          <label>
            <input type="checkbox" name="plats[]" value="<?= htmlspecialchars($sandwich[0]['nom']); ?>">
            <?= htmlspecialchars($sandwich[0]['nom']); ?> — <?= htmlspecialchars($sandwich[0]['Prix']); ?> €
          </label>
        </li>
        <li><?= htmlspecialchars($sandwich[0]['description']); ?></li>
      </ul>
      <!-- Tex Mex -->
      <ul class="plats">
        <h2>Tex Mex</h2>
        <img src=<?= $texmex[0]['image']; ?> height="250">
        <li>
          <label>
            <input type="checkbox" name="plats[]" value="<?= htmlspecialchars($texmex[0]['nom']); ?>">
            <?= htmlspecialchars($texmex[0]['nom']); ?> — <?= htmlspecialchars($texmex[0]['Prix']); ?> €
          </label>
        </li>
        <li><?= htmlspecialchars($texmex[0]['description']); ?></li>
      </ul>
      <!-- Dessert -->
      <ul class="plats">
        <h2>Dessert</h2>
        <img src=<?= $dessert[0]['image']; ?> height="250">
        <li>
          <label>
            <input type="checkbox" name="plats[]" value="<?= htmlspecialchars($dessert[0]['nom']); ?>">
            <?= htmlspecialchars($dessert[0]['nom']); ?> — <?= htmlspecialchars($dessert[0]['Prix']); ?> €
          </label>
        </li>
        <li><?= htmlspecialchars($dessert[0]['description']); ?></li>
      </ul>
    </section>
    <button type="submit">Commander</button>
  </form>

  <script src="js/app.js"></script>
  </body>