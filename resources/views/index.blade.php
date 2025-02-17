<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        nav {
            background: #ffab4a;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        .content {
            margin-top: 20px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <a onclick="showContent('home')">Home</a>
        <a onclick="showContent('about')">About</a>
        <a onclick="showContent('contact')">Contact</a>
    </nav>

   
    <div class="content" id="content">
        <h2>{{ $data['home']['title'] }}</h2>
        <p>{{ $data['home']['content'] }}</p>
    </div>

    <div id="data-container" data-json='@json($data)'></div>

    <script>
        let dataContainer = document.getElementById("data-container");
        let data = JSON.parse(dataContainer.getAttribute("data-json"));

        console.log(data); 
        function showContent(page) {
            let contentDiv = document.getElementById("content");

            if (page === "home") {
                contentDiv.innerHTML = `
                    <h2>${data.home.title}</h2>
                    <p>${data.home.content}</p>
                `;
            } else if (page === "about") {
                contentDiv.innerHTML = `
                    <div class="about-section d-flex align-items-center">
                        <img src="${data.about.foto}" alt="Foto Saya" width="200" class="me-3">
                        <div>
                            <h2>Tentang Saya</h2>
                            <p>Halo, saya ${data.about.nama}. Saya seorang ${data.about.pekerjaan}.</p>
                            <p>Saya tertarik dengan ${data.about.minat}.</p>
                        </div>
                    </div>
                `;
            } else if (page === "contact") {
                contentDiv.innerHTML = `
                    <h2>${data.contact.title}</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Tulis pesan..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                `;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>