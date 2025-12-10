<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze | PHP</title>
    <style>
        :root
        {
            --text-color: 68, 68, 68;
            --spacing: 10px;
        }

        *
        {
            font-family: Lato, sans-serif;
            color: rgb(var(--text-color));
            line-height: 1.4;
        }

        body
        {
            margin: 1rem;
            padding: 0;
        }

        h2
        {
            border-bottom: 1px solid rgba(var(--text-color), 0.3);

            &.no-margin
            {
                margin-top: initial;
            }
        }

        section
        {
            &+section
            {
                margin-top: calc(var(--spacing) * 5);
            }
        }

        form
        {
            .form-row
            {
                display: flex;

                &+.form-row
                {
                    margin-top: var(--spacing);
                }

                &.weekdays
                {
                    display: block;

                    label
                    {
                        display: flex;
                    }
                }

                span
                {
                    min-width: 80px;
                }
            }

            input
            {
                &[type="submit"]
                {
                    margin-top: var(--spacing);
                }
            }
        }

        .todo
        {
            border: 1px dashed rgba(var(--text-color), 0.5);
            padding: calc(var(--spacing) * 5);
            text-align: center;
            font-style: italic;
            color: rgba(var(--text-color), 0.75);
        }
    </style>
</head>
<body>

<h1>Formularze - odbieranie i walidacja danych</h1>

<section>
    <h2>Formularz</h2>
    <form method="GET">
        <label class="form-row">
            <span>Imię:</span>
            <input name="first-name" type="text">
        </label>
        <label class="form-row">
            <span>Nazwisko:</span>
            <input name="last-name" type="text">
        </label>
        <label class="form-row">
            <span>Klasa:</span>
            <select name="school-class">
                <option value="">Wybierz</option>
                <option value="I">Klasa I</option>
                <option value="II">Klasa II</option>
                <option value="III">Klasa III</option>
                <option value="IV">Klasa IV</option>
                <option value="V">Klasa V</option>
            </select>
        </label>
        <div class="form-row weekdays">
            Dzień tygodnia:
            <label>
                <input type="radio" name="weekday" value="monday">
                Poniedziałek
            </label>
            <label>
                <input type="radio" name="weekday" value="tuesday">
                Wtorek
            </label>
            <label>
                <input type="radio" name="weekday" value="wednesday">
                Środa
            </label>
            <label>
                <input type="radio" name="weekday" value="thursday">
                Czwartek
            </label>
            <label>
                <input type="radio" name="weekday" value="friday">
                Piątek
            </label>
        </div>
        <label class="form-row">
            <input type="checkbox" name="terms-of-service">
            <span>Akceptuję regulamin</span>
        </label>
        <input type="submit" value="Zgłaszam się">
    </form>
</section>

<section>
    <h2>Dane z formularza</h2>
    <?php
    if(!empty($_GET)){
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    } else{

    
    echo '<div class="todo">Do zrobienia</div>';
    }
    ?>
</section>

</body>
</html>