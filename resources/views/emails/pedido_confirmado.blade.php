<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff5f5;
            color: #333;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border: 1px solid #eee;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }

        h2 {
            color: #e50914;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>¡Gracias por tu pedido!</h2>
        <p><strong>Número de Pedido:</strong> #{{ $pedido->id }}</p>
        <p><strong>Total:</strong> {{ number_format($pedido->total, 2) }} €</p>
        <p><strong>Estado:</strong> {{ ucfirst($pedido->estado) }}</p>
        <p><strong>Fecha:</strong> {{ \Carbon\Carbon::parse($pedido->fecha)->format('d/m/Y H:i') }}</p>
        <hr>
        <p>Recibirás una notificación cuando tu pedido sea enviado.</p>
    </div>
</body>

</html>