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
            <?php
            $feed_url = 'https://feeds.bbci.co.uk/turkce/rss.xml'; // Genel haberlerin RSS URL'si
            $feed_xml = simplexml_load_file($feed_url);
            if ($feed_xml) {
                foreach ($feed_xml->channel->item as $item) {
                    $title = $item->title;
                    $link = $item->link;
                    $description = $item->description;
                    echo "<article>";
                    echo "<h3>$title</h3>";
                    echo "<p>$description</p>";
                    echo "<a href='$link'>Devamını Oku</a>";
                    echo "</article>";
                }
            } else {
                echo "<p>RSS beslemesi yüklenemedi.</p>";
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Günlük Haberler</p>
    </footer>
</body>
</html>
