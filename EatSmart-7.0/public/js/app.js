const API = '/api.php/orders';

document.getElementById('orderForm').addEventListener('submit', e => {
    e.preventDefault();
    const items = Array.from(document.querySelectorAll('input[name="plats[]"]:checked'))
        .map(cb => cb.value);
    fetch(API, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ items })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur lors de l\'enregistrement de la commande');
        }
        return response.json();
    })
    .then(() => fetchOrders())
    .catch(error => {
        console.error('Erreur :', error);
        alert('Une erreur s\'est produite lors de l\'enregistrement de votre commande. Veuillez réessayer.');
    });
});

function fetchOrders() {
    fetch(API)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur lors de la récupération des commandes');
            }
            return response.json();
        })
        .then(orders => {
            const ul = document.getElementById('ordersList');
            ul.innerHTML = '';
            orders.forEach(o => {
                const li = document.createElement('li');
                li.innerHTML = `<strong>#${o.id}</strong> - <span>Plats: ${JSON.parse(o.items).join(', ')}</span> - <span>Statut: ${o.status}</span>`;
                if (o.status === 'pending') {
                    ['ready', 'rejected'].forEach(status => {
                        const btn = document.createElement('button');
                        btn.textContent = status;
                        btn.className = status;
                        btn.onclick = () => updateOrder(o.id, status);
                        li.appendChild(btn);
                    });
                }
                ul.appendChild(li);
            });
        })
        .catch(error => {
            console.error('Erreur :', error);
            alert('Une erreur s\'est produite lors de la récupération des commandes. Veuillez réessayer.');
        });
}

function updateOrder(id, status) {
    fetch(API, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id, status })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur lors de la mise à jour de la commande');
        }
        return response.json();
    })
    .then(() => fetchOrders())
    .catch(error => {
        console.error('Erreur:', error);
        alert('Une erreur s\'est produite lors de la mise à jour de la commande.');
    });
}

fetchOrders();
setInterval(fetchOrders, 5000);
