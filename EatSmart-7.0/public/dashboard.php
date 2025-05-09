<?php
require __DIR__ . '/includes/header.php';
?>

<div class="dashboard-text">
  <h2>Dashboard Cuisinier</h2>
<p>Vous voyez ici toutes les commandes en temps réel ; cliquer sur “Prête” ou “Rejeter” pour mettre à jour leur statut.</p>
</div>

<table id="ordersTable" cellpadding="8" style="width:100%; border-collapse: collapse; margin-bottom:100px;">
  <thead>
    <tr>
      <th>ID</th>
      <th>Plats</th>
      <th>Statut</th>
      <th>Créée le</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- Les lignes seront injectées par JavaScript -->
  </tbody>
</table>

<script>
// URL de ton API
const API = '/api/orders';

// Fonction pour rafraîchir la liste
async function fetchOrders() {
  try {
    const res = await fetch(API);
    const orders = await res.json();
    const tbody = document.querySelector('#ordersTable tbody');
    tbody.innerHTML = ''; // vide avant réinjection

    orders.forEach(o => {
      const items = JSON.parse(o.items).join(', ');
      const tr = document.createElement('tr');

      tr.innerHTML = `
        <td>${o.id}</td>
        <td>${items}</td>
        <td>${o.status}</td>
        <td>${new Date(o.created_at).toLocaleString()}</td>
        <td></td>
      `;

      // Si en attente, on ajoute les boutons
      if (o.status === 'pending') {
        const cell = tr.querySelector('td:last-child');
        ['ready', 'rejected'].forEach(status => {
          const btn = document.createElement('button');
          btn.textContent = status === 'ready' ? 'Prête' : 'Rejeter';
          btn.style.marginRight = '5px';
          btn.onclick = () => updateOrder(o.id, status);
          cell.appendChild(btn);
        });
      }

      tbody.appendChild(tr);
    });
  } catch (e) {
    console.error('Erreur fetchOrders:', e);
  }
}

// Fonction pour mettre à jour le statut
async function updateOrder(id, status) {
  try {
    await fetch(API, {
      method: 'PUT',
      headers: {'Content-Type':'application/json'},
      body: JSON.stringify({id, status})
    });
    fetchOrders();
  } catch (e) {
    console.error('Erreur updateOrder:', e);
  }
}

// Initialisation
fetchOrders();
// Refresh toutes les 5 s
setInterval(fetchOrders, 5000);
</script>

<?php
require __DIR__ . '/includes/footer.php';
