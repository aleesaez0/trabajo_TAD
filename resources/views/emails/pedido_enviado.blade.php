<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .card {
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            max-width: 600px;
            margin: auto;
        }

        h2 {
            color: #28a745;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>¡Tu pedido ha sido enviado!</h2>
        <p><strong>Número de Pedido:</strong> #{{ $pedido->id }}</p>
        <p><strong>Total:</strong> {{ number_format($pedido->total, 2) }} €</p>
        <p><strong>Estado actual:</strong> {{ ucfirst($pedido->estado) }}</p>
        <p><strong>Fecha del pedido:</strong> {{ \Carbon\Carbon::parse($pedido->fecha)->format('d/m/Y H:i') }}</p>
        <hr>
        <p>Gracias por tu confianza. Tu pedido está en camino.</p>
    </div>
</body>

</html>