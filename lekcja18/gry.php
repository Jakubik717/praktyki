<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z układem</title>
</head>
<body>
<header>
    <div class="head">
        <h1>Ranking gier komputerowych</h1>
    </div>
</header>
<main>
    <div class="sizes">

        <div class="left_menu">
            <p>Top 5 gier w tym miesiącu</p>

    <ul class="list">
        <li>Mag</li>
        <li>Księżniczka Persji</li>
        <li>Zamczysko</li>
        <li>Kalipso</li>
        <li>Wyprawa na księżyc</li>
    </ul>
    <div>
        <p>Nasz sklep</p>
        <a href="">tu kupisz gry</a>
        <p>Stronę wykonał</p>
        <p>00000000000000</p>
    </div>
        </div>

        <div class="middle_menu">
            <img class="photo1" src="zdjecie.jpg" alt="Gra 1">
            <img class="photo2" src="zdjecie2.jpeg" alt="Gra 2">
            <img class="photo3" src="zdjecie3.webp" alt="Gra 3">
        </div>

        <div class="right_menu">
            <p>Dodaj nową grę</p>

            <label for="nick">nazwa</label>
            <input type="text" id="nick" name="nazwa">
            <br></br>

            <label for="txt">opis</label>
            <input type="text" id="txt" name="opis">
            <br></br>

            <label for="rating">ocena</label>
            <input type="text" id="rating" name="ocena">
            <br></br>

            <label for="photo">zdjęcie</label>
            <input type="text" id="photo" name="zdjecie">
            <br></br>

            <button type="submit">Dodaj</button>
        </div>
    </div>
    </main>
<footer>
    <div class="foot">
        <input type="text">
        <button type="submit">Pokaż opis</button>
        <h1>Mag, 357 punktów, 150 zł</h1>
        <p>W pradawnym świecie magowie władają państwami. Ci poteżni czarodzieje nie znają litości dla swoich 1</p>
    </div>
    </footer>
</body>
</html>