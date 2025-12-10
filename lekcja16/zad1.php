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
            <input name="first-name" type="text" value="<?php if (isset($_GET['first-name'])) echo $_GET['first-name']; ?>">
        </label>
        <label class="form-row">
            <span>Nazwisko:</span>
            <input name="last-name" type="text" value="<?php if (isset($_GET['last-name'])) echo $_GET['last-name']; ?>">
        </label>
        <label class="form-row">
            <span>Klasa:</span>
            <select name="school-class">
                <option value="" <?php if (isset($_GET["school-class"]) && $_GET["school-class"]==""): ?>selected<?php endif ?>>Wybierz</option>
                <option value="I" <?php if (isset($_GET["school-class"]) && $_GET["school-class"]=="I"): ?>selected<?php endif ?>>Klasa I</option>
                <option value="II" <?php if (isset($_GET["school-class"]) && $_GET["school-class"]=="II"): ?>selected<?php endif ?>>Klasa II</option>
                <option value="III" <?php if (isset($_GET["school-class"]) && $_GET["school-class"]=="III"): ?>selected<?php endif ?>>Klasa III</option>
                <option value="IV" <?php if (isset($_GET["school-class"]) && $_GET["school-class"]=="IV"): ?>selected<?php endif ?>>Klasa IV</option>
                <option value="V" <?php if (isset($_GET["school-class"]) && $_GET["school-class"]=="V"): ?>selected<?php endif ?>>Klasa V</option>
            </select>
        </label>
        <div class="form-row weekdays">
            Dzień tygodnia:
            <label>
                <input type="radio" name="weekday" value="monday" <?php if (isset($_GET["weekday"]) && $_GET["weekday"]=="monday"): ?> checked <?php endif ?>>
                Poniedziałek
            </label>
            <label>
                <input type="radio" name="weekday" value="tuesday" <?php if (isset($_GET["weekday"]) && $_GET["weekday"]=="tuesday"): ?> checked <?php endif ?>>
                Wtorek
            </label>
            <label>
                <input type="radio" name="weekday" value="wednesday" <?php if (isset($_GET["weekday"]) && $_GET["weekday"]=="wednesday"): ?> checked <?php endif ?>>
                Środa
            </label>
            <label>
                <input type="radio" name="weekday" value="thursday" <?php if (isset($_GET["weekday"]) && $_GET["weekday"]=="thursday"): ?> checked <?php endif ?>>
                Czwartek
            </label>
            <label>
                <input type="radio" name="weekday" value="friday" <?php if (isset($_GET["weekday"]) && $_GET["weekday"]=="friday"): ?> checked <?php endif ?>>
                Piątek
            </label>
        </div>
        <label class="form-row">
            <input type="checkbox" name="terms-of-service" <?php if (isset($_GET["terms-of-service"])): ?> checked <?php endif ?>>
            <span>Akceptuję regulamin</span>
        </label>
        <input type="submit" value="Zgłaszam się">
    </form>
</section>

<section>
    <h2>Dane z formularza</h2>
    
    <?php  if(empty($_GET)): ?>
        <div class="todo">Do zrobienia</div>
    <?php else: ?>
        <ul>
            <li>Imię: <?php echo $_GET["first-name"] ?></li>
            <li>Nazwisko: <?php echo $_GET["last-name"] ?></li>
            <li>Klasa: <?php echo $_GET["school-class"] ?></li>
            <li>Dzień tygodnia:
                <?php
                if (isset($_GET["weekday"])){
                    echo $_GET["weekday"];
                } else {
                    echo "nie wybrano";
                }
                ?>
            </li>
            <li>Akceptuję regulamin:
                   <?php
                if (isset($_GET["terms-of-service"])){
                    echo "tak";
                } else {
                    echo "nie";
                }
                ?>
            </li>
        </ul>
    <?php endif ?>

    <?php
    if(empty($_GET)){
        echo '<div class="todo">poprzednie</div>';    
    } else{  
            echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    }
    ?>
</section>

</body>
</html>