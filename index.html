<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günlük Haberler</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Günlük Haberler</h1>
        <nav>
            <ul>
                <li><a href="#anasayfa">Anasayfa</a></li>
                <li><a href="#haberler">Haberler</a></li>
                <li><a href="#hakkimizda">Hakkımızda</a></li>
                <li><a href="#iletisim">İletişim</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="haberler">
            <h2>Son Haberler</h2>
            <div id="haber-listesi">
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Günlük Haberler</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const haberlerURL = 'https://feeds.bbci.co.uk/turkce/rss.xml'; // Genel haberlerin RSS URL'si
            const haberListesi = document.getElementById('haber-listesi');

            fetch(haberlerURL)
                .then(response => response.text())
                .then(data => {
                    const parser = new DOMParser();
                    const xmlDoc = parser.parseFromString(data, 'text/xml');
                    const haberler = xmlDoc.querySelectorAll('item');

                    haberler.forEach(haber => {
                        const baslik = haber.querySelector('title').textContent;
                        const link = haber.querySelector('link').textContent;
                        const aciklama = haber.querySelector('description').textContent;

                        const haberHTML = `
                            <article>
                                <h3>${baslik}</h3>
                                <p>${aciklama}</p>
                                <a href="${link}" target="_blank">Devamını Oku</a>
                            </article>
                        `;

                        haberListesi.innerHTML += haberHTML;
                    });
                })
                .catch(error => {
                    console.error('Haberler yüklenirken hata oluştu:', error);
                    haberListesi.innerHTML = '<p>Haberler yüklenemedi.</p>';
                });
        });
    </script>
</body>
</html>
