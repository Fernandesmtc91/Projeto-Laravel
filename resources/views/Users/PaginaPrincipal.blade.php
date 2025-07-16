<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>UrbanStyle - Moda Urbana</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: #111;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
            letter-spacing: 2px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .banner {
            background-image: url('https://images.unsplash.com/photo-1541099649105-f69ad21f3246?fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .banner h2 {
            font-size: 50px;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }

        .content {
            padding: 40px;
            text-align: center;
        }

        .content h3 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .produtos {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            width: 250px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .card img {
            width: 100%;
        }

        .card h4 {
            margin: 10px 0;
        }

        .card p {
            margin-bottom: 10px;
            color: #333;
        }

        .btn {
            background-color: #111;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-bottom: 15px;
            cursor: pointer;
        }

        footer {
            background-color: #111;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>UrbanStyle</h1>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Colecao</a>
            <a href="#">Sobre</a>
            <a href="#">Contato</a>
        </nav>
    </header>

    <section class="banner">
        <h2>Vista a sua identidade</h2>
    </section>

    <section class="content">
        <h3>Lancamentos</h3>
        <p>Explore nossa nova colecao outono-inverno.</p>

        <div class="produtos">
            <div class="card">
                <img src="https://via.placeholder.com/250x300?text=Jaqueta+Jeans" alt="Produto 1">
                <h4>Jaqueta Jeans</h4>
                <p>R$ 229,90</p>
                <button class="btn">Comprar</button>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/250x300?text=Camisa+Oversized" alt="Produto 2">
                <h4>Camisa Oversized</h4>
                <p>R$ 159,90</p>
                <button class="btn">Comprar</button>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/250x300?text=Moletom+Canguru" alt="Produto 3">
                <h4>Moletom Canguru</h4>
                <p>R$ 189,90</p>
                <button class="btn">Comprar</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 UrbanStyle. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
