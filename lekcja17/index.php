<?php
require "insert.php"; 
require "edit.php"; 
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Obsługa bazy danych | PHP</title>
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

                span
                {
                    min-width: 100px;
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

<h1>Obsługa bazy danych</h1>

<section>
    <h2>Dodaj ucznia</h2>
    <form method="GET">
         <?php if($edit_data) echo '<input type="hidden" name="edit-id" value="'.$edit_data['id'].'">'; ?>
        <label class="form-row">
            <span>Imię:</span>
            <input name="first-name" type="text" value="<?php echo $edit_data['first_name'] ?? ''; ?>">
        </label>
        <label class="form-row">
            <span>Nazwisko:</span>
            <input name="last-name" type="text" value="<?php echo $edit_data['last_name'] ?? ''; ?>">
        </label>
        <label class="form-row">
            <span>Klasa:</span>
            <select name="school-class">
                <option value="">Wybierz</option>
                <option value="I" <?php echo (isset($edit_data['school_class']) && $edit_data['school_class'] == 'I') ? 'selected' : ''; ?>>Klasa I</option>
                <option value="II" <?php echo (isset($edit_data['school_class']) && $edit_data['school_class'] == 'II') ? 'selected' : ''; ?>>Klasa II</option>
                <option value="III" <?php echo (isset($edit_data['school_class']) && $edit_data['school_class'] == 'III') ? 'selected' : ''; ?>>Klasa III</option>
                <option value="IV" <?php echo (isset($edit_data['school_class']) && $edit_data['school_class'] == 'IV') ? 'selected' : ''; ?>>Klasa IV</option>
                <option value="V" <?php echo (isset($edit_data['school_class']) && $edit_data['school_class'] == 'V') ? 'selected' : ''; ?>>Klasa V</option>
            </select>
        </label>
        <label class="form-row">
            <span>Średnia ocen:</span>
            <input name="grade-average" type="number" min="0" max="6" step="0.1" value="<?php echo $edit_data['grade_average'] ?? ''; ?>">
        </label>
        <input type="submit" value="Zgłaszam się">
    </form>
</section>

<section>
    <h2>Uczniowie</h2>
<?php
    $connection = mysqli_connect("localhost", "root", "", "laczenie");
    mysqli_select_db($connection, "laczenie");
    $result = mysqli_execute_query($connection, "SELECT * FROM students");
    $rows_count = mysqli_num_rows($result);
    //var_dump($rows_count); die;
?>
<table border="1" cellpadding="8">
    <tr>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Klasa</th>
        <th>Srednia ocen</th>
        <th>Dodano</th>
        <th>Akcje</th>
    </tr>
    <?php if($rows_count == 0): ?>
        <tr>
            <td colspan="6" style="text-align: center;" >Brak danych</td>
        </tr>
    <?php 
    else:
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['first_name']."</td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['school_class']."</td>";
    echo "<td>".$row['grade_average']."</td>";
    echo "<td>".date("d.m.Y H:i", strtotime($row['created_at']))."</td>";
    echo "<td><a href='?edit=".$row['id']."'>Edytuj</a></td>";
    echo "</tr>";
    }
    mysqli_close($connection);
endif;
    ?>
    </table>
</section>

</body>
</html>