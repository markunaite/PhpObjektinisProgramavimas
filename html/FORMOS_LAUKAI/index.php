<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="utf-8">
    <title>Forma</title>

    <style>
        .laukas {
            padding-bottom: 10px;
        }

        input,
        label {
            display: block;
        }
    </style>

</head>

<body style="width: 40%;">

    <?php 
    
    if(isset($_POST['submit'])): ?>
    <h2>Thank You <?php echo $_POST['name']; ?> </h2>

    <p>You have been registered as
        <?php echo $_POST['name'] . ' ' . $_POST['surname']; ?>
        <?php echo $_POST['email'] ?>
        <?php echo $_POST['food'] ?>
        <?php echo $_POST['gender'] ?>
        <?php echo $_POST['filename'] ?>
        <?php echo $_POST['text'] ?>
    </p>

    <p>Go <a href="index.php">back</a> to the form</p>

    <?php else: ?>

    <form action="index.php" method="POST">
        <fieldset>

            <legend>FORMS</legend>

            <div class="laukas">
                <label for="name"> Name: </label>
                <input type="text" name="name" placeholder="your name">
            </div>

            <div class="laukas">
                <label for="surname"> Surname: </label>
                <input type="text" name="surname" placeholder="Your surname">
            </div>

            <div class="laukas">
                <label for="email"> Email: </label>
                <input type="text" name="email" placeholder="Your email">

            </div>

            <div class="laukas">
                <label for="food"> Favorite food: </label>
                <select id="food" name="food">
                    <option value="Meat">Meat</option>
                    <option value="Vegetarian">Vegetarian</option>
                </select>

            </div>

            <div class="laukas">
                <span> Gender: </span>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>

            </div>

            <div class="laukas">
                <input type="file" id="myFile" name="filename">

            </div>

            <div class="laukas">
                <label for="text"> Enter yout message: </label>
                <textarea name="text" name="text"> Message... </textarea>

            </div>
            <div class="laukas">
                <button type="reset">reset</button>
                <button name="submit" type="submit">submit</button>
            </div>

        </fieldset>
    </form>
    <?php endif; ?> 
</body>

</html>